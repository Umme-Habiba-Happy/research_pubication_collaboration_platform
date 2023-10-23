@extends('Admin.master')
@section('content')
<h1>hello project</h1>
<form action ="{{route('project.store')}} "  method = "post" >
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter project Name</label>
    <input name="researcher_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Project Description</label>
    <input name="researcher_field" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <input name="email" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact</label>
    <input name="contact" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Affiliation</label>
    <input name="affiliation" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
  </div>
 

  <div class="form-group">
    <label for="exampleInputPassword1">Research Interest</label>
    <input name="research_interest" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
