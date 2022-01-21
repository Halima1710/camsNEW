@extends('admin.master')


@section('main')

    <h1>Create new furniture</h1>


<form action="{{route('admin.furnitures.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

       
       <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>

        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Length</label>
            <input name="length" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Width</label>
            <input name="width" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Height</label>
            <input name="height" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Price</label>
            <input name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        
    <div class="form">
    <label for="exampleFormControlSelect1">Furniture Category</label>
    <select name="category" class="custom-select my-1 mr-sm-2" id="exampleInputEmail1">
        @foreach ($categories as $category)
           <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

    </select>
  </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Description</label>
            <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Furniture Image</label>
            <input name="images" type="file"  class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
