<?php

 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Category;

class CategoryController extends Controller
{
    public function category()
    {

        return view('admin.furniture.category');
    }

    public function view()
    {
        $furnitures=Category::all();

        return view('admin.furniture.categorylist',compact('furnitures'));
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





    Category::create([
        //field name from DB||  field name from form
        'name'=>$request->name,
        'images'=>$image_name,
    ]);

    return redirect()->back();
}
}
