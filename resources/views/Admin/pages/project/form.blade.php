@extends('Admin.master')
@section('content')
<h1>hello project</h1>
<form action ="{{route('project.store')}} "  method = "post" >
  @csrf
  <div class="form-group">
    <label>Enter project Name</label>
    <input required name="name" type="text" class="form-control"  placeholder="Enter name">
  @error('name')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror
  
  </div>

  <div class="form-group">
    <label >Project Description</label>
    <input required name="description" type="textarea" class="form-control"  placeholder="write the description">
    @error('description')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label>project start date</label>
    <input required name="start_date" type="date" class="form-control">
    @error('start_date')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label >Project end date</label>
    <input required name="end_date" type="date" class="form-control" id="exampleInputPassword1" placeholder="write the description">
    @error('end_date')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label >Project Budget</label>
    <input required name="budget" type="number" class="form-control">
    @error('budget')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
