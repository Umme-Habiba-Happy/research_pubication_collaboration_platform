@extends('Admin.master')
@section('content')
<h1>Category form</h1>
<form action="{{route('category.store')}} " method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Category Name</label>
    <input name="category_name" type="text" class="form-control" placeholder="Enter name">

    @error('category_name')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Category Description</label>
    <input name="category_description" type="textarea" class="form-control" placeholder="Enter description">

    @error('category_description')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection