@extends('admin.master')


@section('main')

<h1>Carpenter Information List</h1>
<a href="{{route('admin.carpenter.carpentercreate')}}" class="btn btn-success">Create new information list</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Photo</th>
      <th scope="col">First Name</th> 
        <th scope="col">Last Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Hire Date</th>
        <th scope="col">Job Name</th>
        <th scope="col">Salary</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>

    @foreach($carpenters as $key=>$list)
    <tr>
        <th>{{$key+1}}</th>
        <td><img src="{{asset('/uploads/'.$list->image)}}" alt="" style="border-radius: 2px; width:100px";></td>
        <td>{{$list->first_name}}</td> 
        <td>{{$list->last_name}}</td> 
        <td>{{$list->phone_number}}</td> 
        <td>{{$list->hire_date}}</td> 
        <td>{{$list->job_name}}</td> 
        <td>{{$list->salary}}</td> 
        <td>
        <a class="btn btn-primary" href="{{route('admin.carpenter.details',$list->id)}}">View</a>
        <a class="btn btn-danger" href="{{route('admin.carpenter.delete',$list->id)}}">Delete</a>



    </tr>   


@endforeach
    </tbody>
</table>
@endsection -->
