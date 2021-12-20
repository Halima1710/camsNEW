@extends('admin.master')


@section('main')

    <h1>Create a Furniture</h1>

    <form action="{{route('admin.furnitures.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

       
       <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>

        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Height</label>
            <input name="height" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Length</label>
            <input name="lenght" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Width</label>
            <input name="weigth" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Price</label>
            <input name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

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
