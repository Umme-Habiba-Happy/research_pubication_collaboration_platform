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
      <th scope="col">image</th>      

    </tr>
  </thead>
  <tbody>
@foreach($users as $key=> $ad)
<tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$ad->name}}</td>
      <td>{{$ad->email}}</td>
      <td>
        <img width="20%"  src="{{url('/uploads/'. $ad->image)}} " alt="image">
      </td>
</tr>

@endforeach

  </tbody>
</table>

</div>
</div>

@endsection