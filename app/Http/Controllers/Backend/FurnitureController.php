<?php

namespace App\Http\Controllers\Backend;
use App\Models\Furniture;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
  
    public function furniturelist()
    {
         $furnitures= Furniture::with('category')->get();

        return view('admin.furniture.furniture-list',compact('furnitures'));
    }
   
   
    public function furniturecreate()
    {   

        $categories = Category::all();

        return view('admin.furniture.furniture-create',compact('categories'));

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
            $request->file('images')->storeAs('/uploads/furnitures',$image_name);
    
        }
          Furniture::create([
            // field name from DB ||  field name from form
            'name'=>$request->name,
            'length'=>$request->length,
            'width'=>$request->width,
            'height'=>$request->height,
            'price'=>$request->price,
            'description'=>$request->description,
            'category_id'=>$request->category,
            'images'=>$image_name,
          
        ]);
        return redirect()->back()->with('status','furniture details created successfully');

    }
    // public function view()
    // {
    //     $furnitures=Furniture::all();
    //     return view('admin.furniture.furniture-list',compact('furnitures'));

    // }
    public function furnituredetails($list_id)
    {
    
    //        collection= get(), all()====== read with loop (foreach)
    //       object= first(), find(), findOrFail(),======direct
      $list=Furniture::find($list_id);
    //      $product=Product::where('id',$product_id)->first();
        return view('admin.furniture.furniture-details',compact('list'));
    }
    
    public function furnituredelete($list_id)
    {
       Furniture::find($list_id)->delete();
       return redirect()->back()->with('status','furniture details deleted successfully');
    }


    public function furnitureedit($id)
    {

        $list=Furniture::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($product);
        $all_categories=Category::all();
//        dd($all_categories);
        return view('admin.furniture.furniture-edit',compact('all_categories','list'));

    }

    public function furnitureupdate(Request $request,$id)
    {


        $list=Furniture::find($id);

//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

        $image_name=$list->image;
//              step 1: check image exist in this request.
        if($request->hasFile('images'))
        {
            // step 2: generate file name
            $image_name=date('Ymdhis') .'.'. $request->file('images')->getClientOriginalExtension();

            //step 3 : store into project directory

            $request->file('images')->storeAs('/uploads',$image_name);

        }


        $list->update([
            // field name from db || field name from form
            'name'=>$request->name,
            'length'=>$request->length,
            'width'=>$request->width,
            'height'=>$request->height,
            'price'=>$request->price,
            'description'=>$request->description,
            'category_id'=>$request->category,
            // 'images'=>$image_name,
          
        ]);
        return redirect()->route('admin.furnitures.list')->with('status','furniture details updated Successfully.');

    }






}
