@extends('frontend.master')
@section('content')
<form action ="{{route('user.do-registration')}}"  method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter User Name</label>
    <input required name="name"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Email</label>
    <input name="email"  type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Password</label>
    <input required name="password"  type="password" class="form-control" id="exampleInputEmail1"  placeholder="Enter pass">

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection