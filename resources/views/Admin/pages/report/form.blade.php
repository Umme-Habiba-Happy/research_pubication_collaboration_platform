@extends('Admin.master')
@section('content')
<h1>hello report</h1>
<form action ="{{route('report.store')}} "  method = "post" >
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">No. of Publications</label>
    <input required name="no_publications" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">No. of Downloads</label>
    <input required name="no_downloads" type="number" class="form-control" id="exampleInputPassword1" placeholder="write the description">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">No. of Citation</label>
    <input required name="no_citations" type="number" class="form-control" id="exampleInputPassword1" placeholder="write the description">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">No. of Views</label>
    <input required name="no_views" type="number" class="form-control" id="exampleInputPassword1" placeholder="write the description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection