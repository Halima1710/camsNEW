@extends('admin.master')


@section('main')

<h1>Repairing list</h1>
<a href="{{route('admin.repairs.create')}}" class="btn btn-success">Create new Repairing Work</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>

    @foreach($repairs as $key=>$list)
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$list->name}}</td>    
        <td>{{$list->price}}</td> 
        <td>
            <a class="btn btn-primary" href="{{route('admin.repairs.details',$list->id)}}">View</a>
            <a class="btn btn-info" href="{{route('admin.repairs.edit',$list->id)}}">Edit</a>
            <a class="btn btn-danger" href="{{route('admin.repairs.delete',$list->id)}}">Delete</a>
</td>


    </tr>   





@endforeach
    </tbody>
</table>
@endsection
