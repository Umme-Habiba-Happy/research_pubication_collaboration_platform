@extends('Admin.master')
@section('content')
<h1>Report</h1>
<a class="btn btn-info" href="/report/form">Add report</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Publications</th>
      <th scope="col">Downloads</th>
      <th scope="col">Citations</th>
      <th scope="col">Views</th>
    </tr>
  </thead>
  <tbody>
  @foreach($reports as $key=>$report)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$report->Publications}}</td>
      <td>{{$report->Downloads}}</td>
      <td>{{$report->Citations}}</td>
      <td>{{$report-> Views}}</td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection