@extends('Admin.master')
@section('content')
<h1>Add sponsor</h1>
<form action ="{{route('sponsor.store')}} "  method = "post" >
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Sponsor Name</label>
    <input required name="sponsor_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Sponsor Type</label>
    <input required name="sponsor_type" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="write the type">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sponsor URL</label>
    <input required name="sponsor_url" type="textarea" class="form-control" id="exampleInputPassword1" placeholder="type the url">
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection