@extends('Admin.master')
@section('content')
<h1>Sponsor</h1>
<a class="btn btn-info" href="{{route('sponsor.form')}}">Add Sponsor</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">URL</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($sponsors as $key=> $sponsor)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$sponsor->sponsorName}}</td>
      <td>{{$sponsor->sponsorType}}</</td>
      <td>{{$sponsor->sponsorURL}}</</td>
      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-warning" href="">View</a>
        <a class="btn btn-danger" href="">Update</a>

      </td>
    </tr>
   @endforeach
  </tbody>
</table>
{{$sponsors -> links()}}

@endsection