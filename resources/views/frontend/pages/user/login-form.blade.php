@extends('frontend.master')
@section('content')

<form action ="{{route('user.do-login')}}"  method="post">
  @csrf


  <div class="form-group">
    <label for="exampleInputEmail1">Enter Email</label>
    <input name="email"  type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Password</label>
    <input required name="password"  type="password" class="form-control" id="exampleInputEmail1"  placeholder="Enter pass">

  </div>
  <button type="submit" class="btn btn-primary text-dark">Login</button>

</form>
@endsection