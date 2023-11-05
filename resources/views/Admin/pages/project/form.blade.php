@extends('Admin.master')
@section('content')
<h1>hello project</h1>
<form action ="{{route('project.store')}} "  method = "post" >
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter project Name</label>
    <input required name="project_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  @error('name')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror
  
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Project Description</label>
    <input required name="project_description" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
    @error('description')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">project start date</label>
    <input  name="start_date" type="date" class="form-control" id="exampleInputPassword1" placeholder="write the description">
    @error('start_date')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Project end date</label>
    <input required name="end_date" type="date" class="form-control" id="exampleInputPassword1" placeholder="write the description">
    @error('end_date')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Project Budget</label>
    <input required name="budget" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
    @error('budget')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
