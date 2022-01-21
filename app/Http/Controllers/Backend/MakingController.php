<?php

namespace App\Http\Controllers\Backend;
use App\Models\Design;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MakingController extends Controller
{
    public function makinglist()

    {
        return view('admin.furniture.makinglist');
    }

    public function furnituredesign()
    {
        return view('admin.furniture.designcreate');
    }

    public function furnituredesignlist()
    {
        $designs = Design::all();
        return view('admin.furniture.designlist',compact('designs'));
    }

    public function store(Request $request){
        // dd($request->all());
   
       $image_name='';
       //              step 1: check image exist in this request.
       if($request->hasFile('furniture_design'))
       {
         
           // step 2: generate file name
           $image_name=date('Ymdhms').'.'.$request->file('furniture_design')->getClientOriginalExtension();
   
           //step 3 : store into project directory
           $request->file('furniture_design')->storeAs('/uploads/designs',$image_name);
   
       }
 
 
 
 
 
     Design::create([
         //field name from DB||  field name from form
         
         'furniture_design'=>$image_name,
         'furniture_name'=>$request->furniture_name,
         
 
 
     ]);
 
     return redirect()->back();
 }
 
 
}
