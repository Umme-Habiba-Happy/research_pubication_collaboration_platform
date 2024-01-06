@extends('Admin.master')
@section('content')
<form action ="{{route('researcher.store')}} "  method = "post" >
  @csrf
  <div class="form-group">
    <label>Enter Name</label>
    <input  required name="researcher_name"  type="text" class="form-control"  placeholder="Enter name">
 
      @error('researcher_name')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
  </div>

  <div class="form-group">
    <label>Field</label>
    <input required name="researcher_field" type="textarea" class="form-control" placeholder="Enter your field">
  
    @error('researcher_field')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="form-group">
    <label>Email</label>
    <input required name="email" type="textarea" class="form-control" placeholder="Enter Email">
    @error('email')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input required name="contact" type="number" class="form-control"placeholder="Enter Contact">
    
    @error('contact')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Degree</label>
    <input required name="degree" type="textarea" class="form-control"  placeholder="Enter your degree">
    @error('degree')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Institute</label>
    <input required name="institute" type="textarea" class="form-control" placeholder="Institute name">
    @error('institute')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Department</label>
    <input required name="department" type="textarea" class="form-control" placeholder="Enter your department">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Skills</label>
    <input required name="skills" type="textarea" class="form-control" placeholder="Skills">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection