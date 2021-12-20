<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Carpenter;
use App\Http\Controllers\Controller;
class CarpenterController extends Controller
{
    public function  carpentercreate()
    {
        return view('admin.carpenter.carpentercreate');
    }
 
    public function carpenterlist()
    {   
        $carpenters=Carpenter::all();
        return view('admin.carpenter.carpenterlist',compact('carpenters'));
    }

    public function store(Request $request){
       // dd($request->all());
  
      $image_name='';
      //              step 1: check image exist in this request.
      if($request->hasFile('image'))
      {
        
          // step 2: generate file name
          $image_name=date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
  
          //step 3 : store into project directory
          $request->file('image')->storeAs('/uploads',$image_name);
  
      }





    Carpenter::create([
        //field name from DB||  field name from form
        
        'image'=>$image_name,
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'phone_number'=>$request->phone_number,
         'hire_date'=>$request->hire_date,
         'job_name'=>$request->job_name,
         'salary'=>$request->salary,



    ]);

    return redirect()->back();
}
public function carpenterdetails($list_id)
{

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
  $list=Carpenter::find($list_id);
//      $product=Product::where('id',$product_id)->first();
    return view('admin.carpenter.carpenterdetails',compact('list'));
}

public function carpenterdelete($list_id)
{
   Carpenter::find($list_id)->delete();
   return redirect()->back()->with('success','carpenter information deleted');
}











}




