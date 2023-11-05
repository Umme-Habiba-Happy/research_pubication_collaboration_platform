@extends('Admin.master')
@section('content')
<form action ="{{route('researcher.store')}} "  method = "post" >
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Name</label>
    <input  name="researcher_name"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
 
      @error('researcher_name')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Field</label>
    <input required name="researcher_field" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
  
    @error('researcher_field')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input required name="email" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
    @error('email')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact</label>
    <input required name="contact" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
    
    @error('contact')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Affiliation</label>
    <input required name="affiliation" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
    @error('affiliation')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Research Interest</label>
    <input required name="research_interest" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
    @error('research_interest')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection