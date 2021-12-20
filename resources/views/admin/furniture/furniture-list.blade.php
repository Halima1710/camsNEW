@extends('admin.master')


@section('main')

<h1>Furniture List</h1>
<a href="{{route('admin.furnitures.create')}}" class="btn btn-success">Create new Furniture</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">height</th>
        <th scope="col">length</th>
        <th scope="col">width</th>
        <th scope="col">Dimension</th>

        <th scope="col">price</th>
        <th scope="col">description</th>
        <th scope="col">images</th>
    </tr>
    </thead>
    <tbody>

    @foreach($furnitures as $key=>$list)
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$list->name}}</td> 
        <td>{{$list->height}}</td>
        <td>{{$list->length}}</td>
        <td>{{$list->width}}</td>
        <td>{{$list->height}} X {{$list->length}} X {{$list->width}}</td>
        <td>BDT {{$list->price}}</td>
        <td>{{$list->description}}</td>
        <td><img src="{{asset('/uploads/'.$list->images)}}" alt="" style="style="border-radius: 2px; width="100px;"></td>
</tr>   
@endforeach
    </tbody>
</table>
@endsection
