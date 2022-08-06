<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\Admin;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Validator;
use DB;
use Hash;
use App;


class StaffController extends Controller
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
         $datas = Admin::where('id','!=',1)->where('id','!=',Auth::guard('admin')->user()->id)->orderBy('id')->get();
         //--- Integrating This Collection Into Datatables
         return DataTables::of($datas)
            ->addColumn('role', function(Admin $data) {
                $role = $data->role == 0 ? 'No Role' : $data->Isrole->name;
                return $role;
            }) 
            ->addColumn('action', function(Admin $data) {
                $delete ='<a href="javascript:;" class="btn btn-danger btn-sm mr-1 text-white" data-href="' . route('admin-staff-delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="delete"><i class="fas fa-trash-alt"></i></a>';
                return '<div class="action-list"><a class="btn btn-info btn-sm mr-1 text-white details" data-href="' . route('admin-staff-show',$data->id) . '" class="view details-width" data-toggle="modal" data-target="#modal1"> <i class="fas fa-eye"></i> '.__('Details').'</a><a class="btn btn-primary mr-1 text-white btn-sm edit" data-href="' . route('admin-staff-edit',$data->id) . '" data-toggle="modal" data-target="#modal1"> <i class="fas fa-edit"></i> '.__('Edit').'</a>'.$delete.'</div>';
            }) 

            ->editColumn('serial', function(Admin $data) {
                $check = '<input type="checkbox" class="bulk-check" value="'.$data->id.'">';
                return $check;
             })
     

            ->rawColumns(['action','serial'])
            ->toJson(); //--- Returning Json Data To Client Side
    }

    //*** GET Request
  	public function index()
    {
        return view('admin.staff.index');
    }

    //*** GET Request
    public function create()
    {
        $roles = Role::all();
        return view('admin.staff.create',compact('roles'));
    }

    //*** POST Request
    public function store(Request $request)
    {
        //--- Validation Section
        $rules = [
               'photo' => 'required|mimes:jpeg,jpg,png,svg',
               'email' => 'unique:admins,email'
                ];

        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

        //--- Logic Section
        $data = new Admin();
        $input = $request->all();
        if ($file = $request->file('photo')) 
         {      
            $name = time().$file->getClientOriginalName();
            $file->move('assets/images/admins',$name);           
            $input['photo'] = $name;
        } 
        $input['role'] = $request->role;
        $input['password'] = bcrypt($request['password']);
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        $msg = 'New Data Added Successfully.';
        return response()->json($msg);      
        //--- Redirect Section Ends    
    }


    public function edit($id)
    {  $roles = Role::all();
        $data = Admin::findOrFail($id);  
        return view('admin.staff.edit',compact('data','roles'));
    }

    public function update(Request $request,$id)
    {
        //--- Validation Section
        if($id != Auth::guard('admin')->user()->id)
        {
            $rules =
            [
                'photo' => 'mimes:jpeg,jpg,png,svg',
                'email' => 'unique:admins,email,'.$id
            ];

            $validator = Validator::make($request->all(), $rules);
            
            if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
            }
            //--- Validation Section Ends
            $input = $request->all();  
            $data = Admin::findOrFail($id);        
                if ($file = $request->file('photo')) 
                {              
                    $name = time().$file->getClientOriginalName();
                    $file->move('assets/images/admins/',$name);
                    if($data->photo != null)
                    {
                        if (file_exists(base_path('../assets/images/admins/'.$data->photo))) {
                            unlink(base_path('../assets/images/admins/'.$data->photo));
                        }
                    }            
                $input['photo'] = $name;
                } 
            if($request->password){
                $input['password'] = Hash::make($request->password);
            }
            else{
                $input['password'] = $data->password;
            }
            $data->update($input);
            $msg = 'Data Updated Successfully.';
            return response()->json($msg);
        }
        else{
            $msg = 'You can not change your role.';
            return response()->json($msg);            
        }
 
    }

    //*** GET Request
    public function show($id)
    {
        $data = Admin::findOrFail($id);
        return view('admin.staff.show',compact('data'));
    }

    //*** GET Request Delete
    public function destroy($id)
    {
    	if($id == 1)
    	{
            return __("You don't have access to remove this admin");
    	}
        $data = Admin::findOrFail($id);
        //If Photo Doesn't Exist
        if($data->photo == null){
            $data->delete();
            //--- Redirect Section     
            $msg = __('Data Deleted Successfully.');
            return response()->json($msg);      
            //--- Redirect Section Ends     
        }
        //If Photo Exist
        if (file_exists(base_path('../assets/images/admins/'.$data->photo))) {
            unlink(base_path('../assets/images/admins/'.$data->photo));
        }
        
        $data->delete();
        //--- Redirect Section     
        $msg = __('Data Deleted Successfully.');
        return response()->json($msg);      
        //--- Redirect Section Ends    
    }
}
