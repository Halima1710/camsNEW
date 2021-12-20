@extends('admin.master')


@section('main')
    <h1>Repairing Details</h1>

    <p>
        <img style="border-radius: 2px;" width="100px;" src=" {{url('/uploads/'.$list->images)}}" alt="list">
    </p>
<p>Repairing Name: {{$list->name}}</p>
<p>Repairing Price: <h4><span style="color: black">BDT {{$list->price}}</span></h4></p>
<p>Product Status: {{$list->status}}</p>

    <lable>Repairing Name:</lable>
    <input type="text" class="form-control" value="{{$list->name}}">
    <input type="file" class="form-control">

@endsection
