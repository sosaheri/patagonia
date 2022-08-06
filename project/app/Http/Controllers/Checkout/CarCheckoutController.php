<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Order;
use App\Models\PaymentGateway;
use Carbon\Carbon;
use Session;
use Auth;

class CarCheckoutController extends Controller
{
    public function booking(Request $request)
    {
        
        $data = array();

        if(Session::has('carBook')){
            Session::forget('carBook');
        }

        // extra price calculation //
        $fac_price= [];
        $fac_name = [];
        $fac_type = [];
        $extra_price_sum = 0;
        if($request->facilities){
            $facilities = explode(',',$request->facilities);
            $carData  = Car::findOrFail($request->car_id);
            $h_e_p      = explode(',,,',$carData->extra_price);
            $h_e_n      = explode(',,,',$carData->extra_price_name);
            $h_e_t      = explode(',,,',$carData->extra_price_type);

            foreach($h_e_n as $key => $extra_name){

               foreach($facilities as $val){
                    if($key == $val){
                        $fac_name [] = $extra_name;
                        $fac_price[] = $h_e_p[$key];
                        $extra_price_sum += $h_e_p[$key];
                        $fac_type [] = $h_e_t[$key];
                    }
                } 
            }
        }

       
            $car = Car::findOrFail($request->car_id);
            $total = ($car->main_price * $request->night) * $request->qty;
        
            $total = $total + $extra_price_sum;
            // car information

            
       
            // data session store //
            $data['car'] = $car;
            
            $data['qty'] = $request->qty;
            $data['fac_price'] = $fac_price;
            $data['fac_name'] = $fac_name;
            $data['fac_type'] = $fac_type;
            $data['start_date'] = $request->start_date;
            $data['end_date'] = $request->end_date;
            $data['night'] = $request->night;
            $data['total'] = $total;

            Session::put('carBook',$data);

        // redirect route //

        if(!Auth::user()){
            Session::put('url',route('car.checkout'));
            return response()->json(['login' => route('user.login')]);
        }

        return response()->json(['success' => route('car.checkout')]);
    }


    public function checkout()
    {
        if(Session::has('carBook')){
            $data['user'] = Auth::user();
            $data['car'] = Session::get('carBook');
            $data['gateweys'] = PaymentGateway::where('status',1)->get();
            return view('front.checkout.car_checkout',$data);
        }else{
            Session::flash('error','Please Book Someone');
            return redirect(route('front.index'));
        }
    }



    public function checkAvailability(Request $request)
    {
        
        $car_id = $request->car_id;
        $start_date =$request->start_date;
        $end_date =$request->end_date;

        $orders  = Order::where('item_id',$car_id)->where('order_type','Car')->get();
        
        if($orders->count() > 0){
            $order_id  = array();
        
            foreach($orders as  $order){
                if (is_string($order->start_date)) {
                    $order_enddate = Carbon::parse($order->end_date);
                    $order_startdate = Carbon::parse($order->start_date);
                }
                if (is_string($start_date)) {
                    $start_date = Carbon::parse($start_date);
                    $end_date = Carbon::parse($end_date);
                }
        
             
                if($order_startdate->gt($end_date) || $start_date->gt($order_enddate)){
                    $order_id[] = $order->id;
                }
            }
        
            
            if(count($order_id) > 0){
                return response()->json(['message' => 'the car available this time', 'status' => 1 ]);
            }else{
                return response()->json(['message' => 'the car this time allready booked.','status' => 0]);
            }


            }else{
                return response()->json(['message' => 'the car available this time', 'status' => 1 ]);
            }
    }
}
