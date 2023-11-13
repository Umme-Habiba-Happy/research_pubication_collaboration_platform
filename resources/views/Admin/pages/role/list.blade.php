@extends('Admin.master')
 @section('content')
<h1>hello roleees</h1>
<a class="btn btn-info" href="{{route('role.form')}}"> Create New Role</a>
<table class="table table-dark">>
    
<thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
  

    </tr>
  </thead>
  <tbody>

  
  </tbody>
</table>
@endsection 