@extends('Admin.master')
@section('content')

<div class="container">

<div class=" row m-5">

<h1>hello users</h1>
<a class="btn btn-info col-2" type="button" href="{{route('users.form')}}">Enter New Users</a>
<table class="table table-dark">
<thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">image</th> 

      <th scope="col">Action</th>
     

    </tr>
  </thead>
  <tbody>
@foreach($users as $key=> $item)
<tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->role}}</td>


      <td>
        <img width="20%"  src="{{url('/uploads/'. $item->image)}} " alt="image">
      </td>
      <td>

        <a class="btn btn-success" href="{{route('users.edit', $item->id)}}">Edit</a>
        <a class="btn btn-warning" href="">View</a>
        <a class="btn btn-danger" href="{{route('users.delete', $item->id)}}">Delete</a>

      </td>
</tr>

@endforeach

  </tbody>
</table>

</div>
</div>

@endsection