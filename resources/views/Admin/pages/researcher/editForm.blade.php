@extends('Admin.master')
@section('content')


<h1>HELLO researcher FORM</h1>

<form action ="{{route('researcher.update', $researcher->id)}}"  method = "post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Enter User Name</label>
    <input value="{{$users->name}}" required name="user_name"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Email</label>
    <input value="{{$users->email}}" name="email"  type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Role</label>
    <input value="{{$users->role}}" required name="role"  type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter your role">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Choose Image</label>
    <input value="{{$users->image}}"  name="image"  type="file" class="form-control" id="exampleInputEmail1">

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection