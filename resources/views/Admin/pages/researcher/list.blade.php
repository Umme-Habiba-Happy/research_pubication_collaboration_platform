@extends('Admin.master')
@section('content')
<h1>Researcher</h1>
<a href="/researcher/form" class="btn btn-info">Enter New Researcher</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Field</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Affiliation</th>
      <th scope="col">Research Interest</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($researchers as $key=> $researcher)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$researcher->researcher_name}}</td>
      <td>{{$researcher->researcher_field}}</td>
      <td>{{$researcher->email}}</td>
      <td>{{$researcher->contact}}</td>
      <td>{{$researcher->affiliation}}</td>
      <td>{{$researcher->research_interest}}</td>
      <td>
        <a class="btn btn-success">Edit</a>
        <a class="btn btn-danger">Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$researchers -> links()}}

@endsection