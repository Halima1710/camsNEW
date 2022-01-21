@extends('admin.master')


@section('main')

    <h1>Create new furniture</h1>

    
<form action="{{route('admin.furniture.update',$list->id)}}" method="POST" enctype="multipart/form-data">
 @method('PUT')
        @csrf

       
       <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Name</label>
            <input name="name" value="{{$list->name}}"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>

        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Length</label>
            <input name="length" value="{{$list->length}}"  type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Width</label>
            <input name="width"  value="{{$list->width}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Height</label>
            <input name="height"  value="{{$list->height}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Price</label>
            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        
    <div class="form-group">
    <label for="exampleFormControlSelect1">Furniture Category</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">
        @foreach ($all_categories as $category)
           <option 
           @if($category->id==$list->category_id)
               selected
               @endif
           value="{{$category->id}}">{{$category->name}}
        </option>
        @endforeach

    </select>
  </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Description</label>
            <input name="description"  value="{{$list->description}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Furniture Image</label>
            <input name="images"  type="file"  class="form-control">
        </div> 

        <button type="update" class="btn btn-primary">Update</button>
    </form>

@endsection
