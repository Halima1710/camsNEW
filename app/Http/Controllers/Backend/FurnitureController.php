<?php

namespace App\Http\Controllers\Backend;
use App\Models\Furniture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
  
    public function list()
    {

        return view('admin.furniture.furniture-list');
    }
   
   
    public function furniturecreate()
    {   

        
        return view('admin.furniture.furniture-create');

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
          Furniture::create([
            // field name from DB ||  field name from form
            'name'=>$request->name,
            'height'=>$request->height,
            'length'=>$request->lenght,
            'width'=>$request->weigth,
            'price'=>$request->price,
            'description'=>$request->description,
            'images'=>$image_name,
          
        ]);
        return redirect()->back();

    }
    public function view()
    {
        $furnitures=Furniture::all();
        return view('admin.furniture.furniture-list',compact('furnitures'));

    }


}
