@extends('admin.master')


@section('main')

<h1>Furniture List</h1>


<a href="{{route('admin.furnitures.create')}}" class="btn btn-success">Create new furniture</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">name</th>
        <th scope="col">dimension</th>

        <th scope="col">price</th>
        <th scope="col">description</th>
        <th scope="col">category</th>
        <th scope="col">images</th>
        <th scope="col">Action</th>
        
    </tr>
    </thead>
    <tbody>

    @foreach($furnitures as $key=>$list)
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$list->name}}</td> 
        <td>{{$list->length}} X {{$list->width}} X {{$list->height}}</td>
        <td> {{$list->price}}</td>
        <td>{{$list->description}}</td>
        <td>{{$list->category->name}}</td>
        <td><img src="{{asset('/uploads/furnitures/'.$list->images)}}" alt="" style="style="border-radius: 2px; width="100px;"></td>
        <td>
        <a class="btn btn-primary" href="{{route('admin.furniture.details',$list->id)}}">View</a>
        <a class="btn btn-info" href="{{route('admin.furniture.edit',$list->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('admin.furniture.delete',$list->id)}}">Delete</a>
        </td>
        
</tr>   
@endforeach
    </tbody>
</table>
@endsection
