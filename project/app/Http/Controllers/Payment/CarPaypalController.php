<?php

namespace App\Http\Controllers\Payment;
use App\Http\Controllers\Controller;
use App\{
    Models\Order,
    Models\PaymentGateway
};
use App\Classes\BookingMail;
use App\Helpers\OrderHelper;
use App\Models\Currency;
use PayPal\{
    Api\Item,
    Api\Payer,
    Api\Amount,
    Api\Payment,
    Api\ItemList,
    Rest\ApiContext,
    Api\Transaction,
    Api\RedirectUrls,
    Api\PaymentExecution,
    Auth\OAuthTokenCredential
};
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\Redirect;

class CarPaypalController extends Controller
{
    private $_api_context;
    public function __construct()
    {
        $data = PaymentGateway::whereKeyword('paypal')->first();
        $paydata = $data->convertAutoData();
        $paypal_conf = \Config::get('paypal');
        $paypal_conf['client_id'] = $paydata['client_id'];
        $paypal_conf['secret'] = $paydata['client_secret'];
        $paypal_conf['settings']['mode'] = $paydata['sandbox_check'] == 1 ? 'sandbox' : 'live';
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    

    public function store(Request $request)
    {

        $user = Auth::user();
        if(Session::has('carBook')){
            $book = Session::get('carBook');
            
            if($book['car']['author_id'] == $user->id && $book['car']['author_type'] == 'user'){
                return back()->with('error','This is your Car');
            }
        }else{
            return view('errors.404');
        }

            $request->validate([
                'country'  => 'required',
                'state' => 'required',
                'city'  => 'required',
                'address'  => 'required',
                'number'  => 'required',
                'email'  => 'required',
                'name'  => 'required',
            ]);

            $title = 'Car Order';


        $supported = [
            'AUD','BRL','CAD','CNY','CZK','DKK','EUR','HKD','HUF',
            'ILS','JPY','MYR','MXN','TWD','NZD','NOK',
            'PHP','PLN','GBP','RUB','SGD','SEK','CHF','THB','USD',
        ];


        if(!in_array($request->currency_code,$supported)){
            return redirect()->route('car.checkout')->with('error','This currency not supported paypal checkout');
        }


        if(!$user){
            Session::put('url',route('car.checkout'));
            return redirect(route('user.login'));
        }

        $notify_url = route('car.paypal.notify');
        $cancel_url = route('car.checkout');

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $item_1 = new Item();
        $item_1->setName($title) /** item name **/
            ->setCurrency($request->currency_code)
            ->setQuantity(1)
            ->setPrice($book['total']); /** unit price **/
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));
        $amount = new Amount();
        $amount->setCurrency($request->currency_code)
            ->setTotal($book['total']);
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription($title.' Via Paypal');
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl($notify_url) /** Specify return URL **/
            ->setCancelUrl($cancel_url);
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
       
            try {
                $payment->create($this->_api_context);
            } catch (\PayPal\Exception\PPConnectionException $ex) {
                return redirect()->back()->with('unsuccess',$ex->getMessage());
            }
            foreach ($payment->getLinks() as $link) {
                if ($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }
        /** add payment ID to session **/
              Session::put('paypal_data',$request->all());
              Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }
        return redirect()->back()->with('unsuccess','Unknown error occurred');
    
              if (isset($redirect_url)) {
                  /** redirect to paypal **/
                  return Redirect::away($redirect_url);
              }
              return redirect()->back()->with('unsuccess','Unknown error occurred');
    
     }


     public function notify(Request $request)
     {

         /** Get the payment ID before session clear **/
         $payment_id = Session::get('paypal_payment_id');
         /** clear the session payment ID **/
         if (empty( $request['PayerID']) || empty( $request['token'])) {
             Session::flash('error','Payment Failed');
             return redirect(route('car.checkout'));
         } 
         $payment = Payment::get($payment_id, $this->_api_context);
         $execution = new PaymentExecution();
         $execution->setPayerId($request['PayerID']);

         if($request['payment_status'] == 'Failed'){
            Session::flash('error','Payment Failed');
            return redirect()->route('car.checkout');
        }
        if(Session::has('carBook')){
            $book = Session::get('carBook'); 
        }
    
        $input = Session::get('paypal_data');
    


         /**Execute the payment **/
         $result = $payment->execute($execution, $this->_api_context);

         if ($result->getState() == 'approved') {
             $resp = json_decode($payment, true);
             $order = new Order;

        
             $order['order_type'] = 'Car';
             $order['email'] = $input['email'];
             $order['name'] = $input['name'];
             $order['number'] = $input['number'];
             $order['address'] = $input['address'];
             $order['city'] = $input['city'];
             $order['state'] = $input['state'];
             $order['country'] = $input['country'];
             $order['zip_code'] = $input['zip_code'];
             $order['summery'] = $input['summery'];
             $order['start_date'] = $book['start_date'];
             $order['end_date'] = $book['end_date'];
             $order['night'] = $book['night'];
             $order['qty'] = $book['qty'];
             
 
             if(!empty($book['fac_price'])){
              
                 $order['extra_price'] = implode(',', $book['fac_price']) ;
                 $order['extra_name'] = implode(',', $book['fac_name']) ;
                 $order['extra_type'] = implode(',', $book['fac_type']) ;
             }
 
          
             if(!empty($book['person_type'])){
 
                 $order['person_type'] = implode(',', $book['person_type']) ;
                 $order['person_price'] = implode(',', $book['person_price']);
             }
 
             $order['author_id'] = $book['car']['author_id'];
             $order['author_type'] = $book['car']['author_type'];
             $curr = Currency::where('name',$input['currency_code'])->first();
             $order['currency_code'] = $curr->name;
             $order['currency_value'] = $curr->value;
             $order['currency_sign'] = $curr->sign;
         
             $order['total'] = $book['total'];
             $order['item_id'] = $book['car']['id'];
             $order['method'] = 'Paypal';
             $order['order_number'] = Str::random(4).time();
             $order['payment_status'] = "Complete";
             $order['order_status'] = "Pending";
      
             $order['txnid'] = $resp['transactions'][0]['related_resources'][0]['sale']['id'];;
             $order['charge_id'] = '';
             $order['user_id'] = Auth::user()->id;
             $order->save();

            // email and notification 
            BookingMail::Booking($order->id,'Car',$book['total'],$order->order_number,$input['name'],$input['email']);
            OrderHelper::vendorOrder($book,'car');



             Session::forget('carBook');
             return redirect(route('front.success'));

         }
         Session::flash('error','Payment Faield');
         return redirect(route('car.checkout'));
     }
    
    

    }

