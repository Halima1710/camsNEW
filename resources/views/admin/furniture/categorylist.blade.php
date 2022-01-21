@extends('admin.master')


@section('main')

<h1>Category List</h1>
<a href="{{route('admin.furniture.category')}}" class="btn btn-success">Create new category list</a>


<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Category Name</th>
        <th scope="col">Category Details</th>
        <th scope="col">Category Image</th>
        <th scope="col">Action</th>
        
        
    </tr>
    </thead>
    <tbody>

    @foreach($categories as $key=>$category)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$category->name}}</td>
        <td>{{$category->details}}</td>
        <td><img src="{{asset('/uploads/categories/'.$category->images)}}" alt="" style="style="border-radius: 2px; width="100px;"></td> 
        
        <td>
                    
         <a class="btn btn-info" href="{{route('admin.category.edit',$category->id)}}">Edit</a>
       <a class="btn btn-danger" href="{{route('admin.category.delete',$category->id)}}">Delete</a>
                    
      </td>
         
        
</tr>   
@endforeach
    </tbody>
</table>
@endsection
