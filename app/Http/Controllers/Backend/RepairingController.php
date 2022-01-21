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

    

     
     Repair::create([
         //field name from DB||  field name from form
         'name'=>$request->name,
         'price'=>$request->price,
         
     ]);

     return redirect()->back()->with('status', 'repairing work created successfully');

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
   return redirect()->back()->with('status','repairing work deleted');

}


public function repairingedit($id)
{

    $list=Repair::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($product);


    return view('admin.repairing.edit',compact('list'));

}

public function repairingupdate(Request $request,$id)
{


    $list=Repair::find($id);
    $list->update([
        // field name from db || field name from form
        'name'=>$request->name,
        'price'=>$request->price,
        
    ]);
    return redirect()->route('admin.repairs.rlist')->with('status','Repairing Work Updated Successfully.');

}








}


