<?php

namespace App\Http\Controllers\Admin;

use App\{
    Classes\GeniusMailer,
    Models\EmailTemplate,
    Models\Generalsetting,
    Models\User
};
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->language = DB::table('admin_languages')->where('is_default','=',1)->first();
        App::setlocale($this->language->name);
    }

    //*** JSON Request
    public function datatables()
    {
         $datas = EmailTemplate::latest('id')->get();
         //--- Integrating This Collection Into Datatables
         return Datatables::of($datas)
                            ->addColumn('action', function(EmailTemplate $data) {
                                return '<div class="action-list"><a data-href="' . route('admin-mail-edit',$data->id) . '" class="edit btn btn-primary btn-sm text-white" data-toggle="modal" data-target="#modal1"> <i class="fas fa-edit"></i>'.__('Edit').'</a></div>';
                            }) 
                            ->toJson();//--- Returning Json Data To Client Side
    }

    public function index(){
        return view('admin.email.index');
    }

    public function config(){
        return view('admin.email.config');
    }


    public function edit($id)
    {
        $data = EmailTemplate::findOrFail($id);
        return view('admin.email.edit',compact('data'));
    }

    public function groupemail()
    {
        $config = Generalsetting::findOrFail(1);
        return view('admin.email.group',compact('config'));
    }

    public function groupemailpost(Request $request)
    {
        $config = Generalsetting::findOrFail(1);
        if($request->type == 'user')
        {
        $users = User::all();
        if(count($users) == 0){
        $msg = __('User not found');
        return response()->json($msg);   
        }
        //Sending Email To Users
        foreach($users as $user)
        {
            if($config->is_smtp == 1)
            {
                $data = [
                    'to' => $user->email,
                    'subject' => $request->subject,
                    'body' => $request->body,
                ];

                $mailer = new GeniusMailer();
                $mailer->sendCustomMail($data);            
            }
            else
            {
               $to = $user->email;
               $subject = $request->subject;
               $msg = $request->body;
                $headers = "From: ".$config->from_name."<".$config->from_email.">";
               mail($to,$subject,$msg,$headers);
            }  
        } 
        //--- Redirect Section          
        $msg = __('Email Sent Successfully.');
        return response()->json($msg);    
        //--- Redirect Section Ends  
        }

        else if($request->type == 'subscriber')
        {
        $users = Subscriber::get();

        if(count($users) == 0){
            $msg = __('Subscriber not found');
            return response()->json($msg);   
        }
        //Sending Email To Vendors        
        foreach($users as $user)
        {
            if($config->is_smtp == 1)
            {
                $data = [
                    'to' => $user->email,
                    'subject' => $request->subject,
                    'body' => $request->body,
                ];

                $mailer = new GeniusMailer();
                $mailer->sendCustomMail($data);            
            }
            else
            {
               $to = $user->email;
               $subject = $request->subject;
               $msg = $request->body;
                $headers = "From: ".$config->from_name."<".$config->from_email.">";
               mail($to,$subject,$msg,$headers);
            }  
        } 
        //--- Redirect Section          
        $msg = __('Email Sent Successfully.');
        return response()->json($msg);    
        //--- Redirect Section Ends  
        }else{

            $users = Admin::where('id','!=','1')->get();

            if(count($users) == 0){
                $msg = __('Staff not found');
                return response()->json($msg);   
            }
            //Sending Email To Vendors        
            foreach($users as $user)
            {
                if($config->is_smtp == 1)
                {
                    $data = [
                        'to' => $user->email,
                        'subject' => $request->subject,
                        'body' => $request->body,
                    ];
    
                    $mailer = new GeniusMailer();
                    $mailer->sendCustomMail($data);            
                }
                else
                {
                   $to = $user->email;
                   $subject = $request->subject;
                   $msg = $request->body;
                    $headers = "From: ".$config->from_name."<".$config->from_email.">";
                   mail($to,$subject,$msg,$headers);
                }  
            } 
            //--- Redirect Section          
            $msg = __('Email Sent Successfully.');
            return response()->json($msg);    
            //--- Redirect Section Ends  
        }


    }

    public function update(Request $request, $id)
    {
        $data = EmailTemplate::findOrFail($id);
        $input = $request->all();
        $data->update($input);
        //--- Redirect Section          
        $msg = __('Data Updated Successfully.');
        return response()->json($msg);    
        //--- Redirect Section Ends  
    }

}
