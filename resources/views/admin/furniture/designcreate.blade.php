@extends('admin.master')


@section('main')

<h1>Create Furniture Design</h1>




<form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Furniture Design</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="inputEmail3"  name="furniture_design">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Furniture Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3"  name="furniture_name">
    </div>
  </div>
  <!-- <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
          <label class="form-check-label" for="gridRadios3">
            Third disabled radio
          </label>
        </div>
      </div>
    </div>
  </fieldset> -->
  <div class="form-group row">
    <div class="col-sm-2">Price</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Depend on design and details
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@endsection
