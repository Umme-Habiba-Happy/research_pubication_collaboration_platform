@extends('Admin.master')
@section('content')
<form action ="{{route('researcher.store')}} "  method = "post" >
  @csrf
  <div class="form-group">
    <label>Enter Name</label>
    <input  name="researcher_name"  type="text" class="form-control"  placeholder="Enter name">
 
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
    <label for="exampleInputPassword1">Affiliation</label>
    <input required name="affiliation" type="textarea" class="form-control"  placeholder="Enter your affiliation">
    @error('affiliation')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Research Interest</label>
    <input required name="research_interest" type="textarea" class="form-control" placeholder="write your Research Interest">
    @error('research_interest')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection