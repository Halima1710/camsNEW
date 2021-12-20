@extends('admin.master')


@section('main')

<h1>Category List</h1>
<a href="{{route('admin.furniture.category')}}" class="btn btn-success">Create new category list</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">images</th>
    </tr>
    </thead>
    <tbody>

    @foreach($furnitures as $key=>$list)
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$list->name}}</td>  
         <td><img src="{{asset('/uploads/'.$list->images)}}" alt="" style="style="border-radius: 2px; width="100px;"></td>
</tr>   
@endforeach
    </tbody>
</table>
@endsection
