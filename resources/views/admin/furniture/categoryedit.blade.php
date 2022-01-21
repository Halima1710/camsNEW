@extends('admin.master')


@section('main')


<h1>Edit/Update Category</h1>


    <form action="{{route('admin.category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name</label>
            <input name="name" value="{{$category->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Details</label>
            <input name="details" value="{{$category->details}}"type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Furniture Category</label>
            <input name="images" type="file"  class="form-control">
        </div> -->
        

        <button type="update" class="btn btn-primary">Update</button>
    </form>

@endsection
