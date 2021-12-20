@extends('admin.master')


@section('main')

    <h1 style="margin-left:350px;  margin-top:100px;">Create a Carpenter Details</h1>
     <form action="{{route('admin.carpenter.store')}}" method="POST" enctype="multipart/form-data" style="margin-left:350px;">
    @csrf


  <label for="image">Photo:</label><br>
  <input type="file" id="image" name="image"><br>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="first_name"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="last_name"><br>
  <label for="pnumber">Phone Number:</label><br>
  <input type="text" id="pnumber" name="phone_number"><br>
  <label for="hdate">Hire Date:</label><br>
  <input type="date" id="date" name="hire_date"><br>
  <label for="jname">Job name:</label><br>
  <input type="text" id="jname" name="job_name"><br>
  <label for="salary">Salary:</label><br>
  <input type="text" id="salary" name="salary"><br>

  <input type="submit" value="Submit">
</form>