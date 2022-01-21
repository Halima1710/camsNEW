@extends('admin.master')


@section('main')

<h1>Furniture Design List</h1>


<a href="{{route('admin.design')}}" class="btn btn-success">Create Furniture Design</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Furniture Design</th>
        <th scope="col">Furniture Name</th>
        <th scope="col">Action</th>
        
    </tr>
    </thead>
    <tbody>

@foreach($designs as $key=>$design)
<tr>
    <th>{{$key+1}}</th>
    <td><img src="{{asset('/uploads/designs/'.$design->furniture_design)}}" alt="" style="style="border-radius: 2px; width="100px;"></td>
    <td>{{$design->furniture_name}}</td>
    <td>
    <a class="btn btn-primary" href="">View</a>
    <a class="btn btn-info" href="">Edit</a>
    <a class="btn btn-danger" href="">Delete</a>
    </td>
    
</tr>   
@endforeach
</tbody>
</table>
@endsection
