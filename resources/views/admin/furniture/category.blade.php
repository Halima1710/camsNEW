@extends('admin.master')


@section('main')


<h1>Create new category</h1>

 <form action="{{route('admin.furniture.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category Details</label>
            <input name="details" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Furniture Category</label>
            <input name="images" type="file"  class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
