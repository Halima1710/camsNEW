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

    public function categorylist()
    {
        $categories=Category::all();

        return view('admin.furniture.categorylist',compact('categories'));
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
          $request->file('images')->storeAs('/uploads/categories',$image_name);
  
      }
    $request->validate([
        'name'=>'required',
        'details'=>'required',
        'images'=>'required'
    ]);






    Category::create([
        //field name from DB||  field name from form
        'name'=>$request->name,
        'details'=>$request->details,
        'images'=>$request->images
    ]);

    return redirect()->back()->with('status','Category Created Successfully');
}

public function delete($id)
{
   Category::find($id)->delete();
   return redirect()->back()->with('status','category Deleted Sucessfully');

}
public function edit($id)
{
    $category=Category::find($id);
    return view('admin.furniture.categoryedit',compact('category'));
}

public function update(Request $request,$id)
{


    $category=Category::find($id);
    $category->update([
        // field name from db || field name from form
        'name'=>$request->name,
        'details'=>$request->details,
        // 'images'=>$request->images
        
    ]);
    return redirect()->route('admin.furniture.categorylist')->with('status','Category Updated Successfully.');

}




}
