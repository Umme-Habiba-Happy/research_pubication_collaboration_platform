@extends('Admin.master')
@section('content')


<h1>HELLO USERS FORM</h1>

<form action ="{{route('users.store')}}"  method = "post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter User Name</label>
    <input required name="user_name"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Email</label>
    <input name="email"  type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Password</label>
    <input required name="password"  type="password" class="form-control" id="exampleInputEmail1"  placeholder="Enter pass">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Role</label>
    <input required name="role"  type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter your role">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Choose Image</label>
    <input  name="image"  type="file" class="form-control" id="exampleInputEmail1">

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection