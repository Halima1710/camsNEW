@extends('admin.master')


@section('main')
    <h1>Carpenter Information Details</h1>

    <p>
        <img style="border-radius: 2px;" width="100px;" src=" {{url('/uploads/'.$list->image)}}" alt="list">
    </p>
<p>First Name: {{$list->first_name}}</p>
<p>Last Name:{{$list->last_name}}</p>
<p>Phone Number:{{$list->phone_number}}</p>
<p>Hire Date:{{$list->hire_date}}</p>
<p>Job name:{{$list->job_name}}</p>
<p>Salary: <h4><span style="color: black">BDT {{$list->salary}}</span></h4></p>
<!-- <p>Product Status: {{$list->status}}</p>

    <lable>Repairing Name:</lable>
    <input type="text" class="form-control" value="{{$list->name}}">
    <input type="file" class="form-control"> -->

@endsection
