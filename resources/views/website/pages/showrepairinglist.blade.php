@extends('website.master')
@section('content')

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
      @foreach($repair as $key=>$repairs)
    <tr>
      <th scope="row">{{$repairs->id}}</th>
      <td>{{$repairs->name}}</td>
      <td>BDT {{$repairs->price}}</td>
    
      
    </tr>
    @endforeach
   
    
  </tbody>
 
 
</table>

<div class="pagination">
    {!! $repair->links() !!}
</div>



@endsection