@extends('Admin.master')
@section('content')
<div class="container">
  <h1>Researcher</h1>
  <a href="{{route('researcher.form')}}" class="btn btn-info">Enter New Researcher</a>
  <a href="{{route('researcher.print')}}" class="btn btn-danger">Print</a>

  <table class="table table-light">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Degree</th>
        <th scope="col">Image</th>
        <th scope="col">Research Interest</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($researchers as $key=> $researcher)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$researcher->name}}</td>
        <td class="col-2">{{$researcher->email}}</td>
        <td class="col-2">{{$researcher->degree}}</td>
        <td class="col-2">
          <img class="rounded-circle" width="20%" src="{{url('/uploads/'. $researcher->image)}} " alt="image">
        </td>
        <td class="col-2">{{$researcher->research_interest}}</td>
        <td class="col-3">
          <a class="btn btn-info" href="">View</a>

          <a class="btn btn-success" href="{{route('researcher.edit', $researcher->id)}}">Edit</a>

          <a class="btn btn-danger">Delete</a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection