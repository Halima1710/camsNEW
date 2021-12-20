<?php

namespace App\Http\Controllers\Backend;
use App\Models\Repair;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepairingController extends Controller
{
    public function create()
    {
       
        return view('admin.repairing.create');
    }

    public function rlist()

    {
        $repairs = Repair::all();
        // dd($repairs);
        return view('admin.repairing.rlist',compact('repairs'));

    }

  public function store(Request $request){
      //dd($request->all());

    $image_name="";
    //              step 1: check image exist in this request.
    if($request->hasFile('images'))
    {
      
        // step 2: generate file name
        $image_name=date('Ymdhms').'.'.$request->file('images')->getClientOriginalExtension();

        //step 3 : store into project directory
        $request->file('images')->storeAs('/uploads',$image_name);

    }

     
     Repair::create([
         //field name from DB||  field name from form
         'name'=>$request->name,
         'price'=>$request->price,
         'images'=>$image_name,
     ]);

     return redirect()->back()->with('success', 'repairing work created successfully');

  }
  
//   public function view()
//   {
//       $repairs=Repair::all();
//     //   dd($repairs);
//       return view('admin.repairing.rlist',compact('repairs'));
//   }

// public function rlistdetails($list_id)
// {
//     dd($list_id);
// }

public function repairingDetails($list_id)
{

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
  $list=Repair::find($list_id);
//      $product=Product::where('id',$product_id)->first();
    return view('admin.repairing.details',compact('list'));
}

public function repairingDelete($list_id)
{
   Repair::find($list_id)->delete();
   return redirect()->back()->with('success','repairing work deleted');
}








}


