@extends('admin.master')


@section('main')

    <h1>Create a Furniture Category</h1>

    <form action="{{route('admin.furniture.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Furniture Category</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Category Image</label>
            <input name="images" type="file"  class="form-control">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
