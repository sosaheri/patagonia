<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Helpers\Helper;
use Validator;
use App\Models\SpaceAttr;
use App\Models\SpaceTerm;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class SpaceTermController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->language = DB::table('admin_languages')->where('is_default','=',1)->first();
        App::setlocale($this->language->name);
    }


    public function index($id)
    {
        $attribute = SpaceAttr::findOrFail($id);
        return view('admin.space.attr.term.index',compact('attribute'));
    }

    //*** JSON Request
    public function datatables($id)
    {
        $datas = SpaceTerm::where('space_attr_id',$id)->orderBy('id','desc')->get();
         return DataTables::of($datas)
        ->addColumn('action', function(SpaceTerm $data) {
            return '<div class="action-list"><a href="javascript:;" data-href="' . route('admin-spaceterm-edit',$data->id) . '" class="btn btn-primary btn-sm mr-2 edit" data-toggle="modal" data-target="#modal1"> <i class="fas fa-edit mr-1"></i>'. __('Edit') .'</a><a href="javascript:;" data-href="' . route('admin-spaceterm-delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></div>';
        })

        ->addColumn('image', function(SpaceTerm $data) { 
            $image = $data->image->image != null? url('assets/images/attr-term-image/'.$data->image->image):url('assets/images/noimage.png');
            return '<img src="' . $image . '" alt="Image" width="100"> ';
        })

        ->editColumn('serial', function(SpaceTerm $data) {
            $check = '<input type="checkbox" class="bulk-check" value="'.$data->id.'">';
            return $check;
         })


        ->rawColumns(['action','image','serial'])
        ->toJson();
     }

     public function store(Request $request)
     {
       
        //--- Validation Section
        $rules = [
            'name' => 'unique:space_terms|required',
            'image' => 'mimes:jpeg,jpg,png',
        ];
        $customs = [
            'name.required' => __('This Name field is required'),
            'name.unique' => __('This Term has already been taken.'),
            'image.mimes' => __('The image format must be a file of type: jpeg,jpg,png'),
            
            ];

        $validator = Validator::make($request->all(), $rules, $customs);
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $data =  new SpaceTerm;
        $input = $request->all();

        $id = $data->create($input)->id;

        //--- Validation Section Ends
        $model= SpaceTerm::findOrFail($id);
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/attr-term-image/');
            Helper::makeImage($image,$location,$model);
        }else{
            Helper::NullImage($model);
        }

        $mgs = __('Data Added Successfully.');
        return response()->json($mgs);
     }

     public function edit($id)
     {
         $data = SpaceTerm::findOrFail($id);
         return view('admin.space.attr.term.edit',compact('data'));
     }


     public function update(Request $request , $id)
     {
         //--- Validation Section
        $rules = [
            'name' => 'unique:space_terms,name,'.$id,
            'image' => 'mimes:jpeg,jpg,png',
        ];
        $customs = [
            'name.required' => __('This Name field is required'),
            'name.unique' => __('This Term has already been taken.'),
            'slug.regex' => __('Name Must Not Have Any Special Characters.'),
            'image.mimes' => __('The image format must be a file of type: jpeg,jpg,png'),
            ];
        $validator = Validator::make($request->all(), $rules, $customs);
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

         //--- Logic Section
         $data = SpaceTerm::findOrFail($id);
         $input = $request->all();
         $data->update($input);
         //--- Logic Section Ends
 
 
         $model = SpaceTerm::findOrFail($id);

         if($request->hasFile('image')){
             $image = $request->image;
             $location = base_path('../assets/images/attr-term-image/');
             Helper::ImageUpdate($image,$location,$model); 
         }
 
         //--- Redirect Section
         $msg = __('Data Updated Successfully.');
         return response()->json($msg);
         //--- Redirect Section Ends
     }


     public function destroy($id)
     {
        $data = SpaceTerm::findOrFail($id);
        $delete = $data->AttrTremCount();
        if($delete == true){
                if($data->image->image){
                    if (file_exists(base_path('../assets/images/attr-term-image/'.$data->image->image))) {
                        unlink(base_path('../assets/images/attr-term-image/'.$data->image->image));
                        $data->image->delete();
                    }
                }else{
                    $data->image->delete();
                }

            $data->delete();
            $msg = __('Data Deleted Successfully.');
            return response()->json($msg);
        
        }
       
    }
}
