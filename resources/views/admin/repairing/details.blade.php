@extends('admin.master')


@section('main')
    <h1>Repairing Details</h1>

    
<p>Repairing Name: {{$list->name}}</p>
<p>Repairing Price: <h4><span style="color: black">BDT {{$list->price}}</span></h4></p>
<!-- <p>Product Status: {{$list->status}}</p>

    <lable>Repairing Name:</lable>
    <input type="text" class="form-control" value="{{$list->name}}">
    -->

@endsection
