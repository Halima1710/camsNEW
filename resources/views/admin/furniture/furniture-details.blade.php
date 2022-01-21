@extends('admin.master')


@section('main')
    <h1>Furniture Details</h1>

    <p>
        <img style="border-radius: 4px;" width="200px;" src=" {{url('/uploads/'.$list->images)}}" alt="list">
    </p>
<p>Furniture Name: {{$list->name}}</p>
<p>Furniture Dimension:{{$list->length}} X {{$list->width}} X {{$list->height}}</p>
<p>Furniture Price: <h4><span style="color: orange">BDT {{$list->price}}</span></h4></p>
<p>Furniture Details: {{$list->description}}</p>
<!-- <p>Furniture Status: {{$list->status}}</p>

    <lable>Furniture Name:</lable>
    <input type="text" class="form-control" value="{{$list->name}}">
    <input type="file" class="form-control"> -->

@endsection
