@extends('website.master')


@section('content')
<div class="py-5">
<div class="container">
<div class="row">
@foreach($designs as $furniture)
<div class="col-md-3 mt-3">
<div class="card">
<a href="">
<img style="width: 150px; height: 150px"src="{{asset('uploads/designs/'.$furniture->furniture_design)}}"alt="Item 1">
<div class="card-body">
     <h5>{{$furniture->furniture_name}}</h5> 
</div>
</a>
</div>
</div>
@endforeach
</div>
</div>
</div> 
@endsection

			
			