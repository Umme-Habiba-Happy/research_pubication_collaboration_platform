@extends('Admin.master')
@section('content')
<h1>Paper</h1>
<form action ="{{route('paper.store')}} "  method = "post" >
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter paper Name</label>
    <input required name="paper_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  @error('paperName')
  <div class="alert alert-danger">{{message}}</div>
  @enderror
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Author Name</label>
    <input required name="author_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    @error('AuthorName')
  <div class="alert alert-danger">{{message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter paper Category</label>
    <input required name="paper_category" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    @error('paperCategory')
  <div class="alert alert-danger">{{message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter publication date</label>
    <input required name="publication_date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    @error('publicationDate')
  <div class="alert alert-danger">{{message}}</div>
  @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection