@extends('admin.master')


@section('main')

    <h1>Create a Repairing Work</h1>
   
   
    

    <form action="{{route('admin.repairs.update',$list->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Repairing Name</label>
            <input name="name"  value="{{$list->name}}"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Repairing Price</label>
            <input name="price" value="{{$list->price}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       </div>

       

        <button type="update" class="btn btn-primary">Update</button>
    </form>

@endsection