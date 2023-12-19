@extends('Admin.master')
@section('content')
<h1>Researcher</h1>
<a href="{{route('researcher.form')}}" class="btn btn-info">Enter New Researcher</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Field</th>
      <th scope="col">Email</th>
      <th scope="col">Degree</th>
      <th scope="col">Affiliation</th>
      <th scope="col">Research Interest</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($researchers as $key=> $researcher)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$researcher->name}}</td>
      <td>{{$researcher->researcher_field}}</td>
      <td>{{$researcher->email}}</td>
      <td>{{$researcher->degree}}</td>
      <td>{{$researcher->affiliation}}</td>
      <td>{{$researcher->research_interest}}</td>
      <td>
        <a class="btn btn-success" href="{{route('researcher.edit', $researcher->id)}}">Edit</a>
        <a class="btn btn-danger">Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection