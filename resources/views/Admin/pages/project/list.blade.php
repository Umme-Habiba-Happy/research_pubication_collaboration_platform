@extends('Admin.master')
@section('content')
<h1>Project</h1>
<a class="btn btn-info" href="/project/form">Create Project</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">start date</th>
      <th scope="col">end date</th>
      <th scope="col">budget</th>

    </tr>
  </thead>
  <tbody>
    @foreach($projects as $key=>$project)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$project->name}}</td>
      <td>{{$project->description}}</td>
      <td>{{$project->start_date}}</td>
      <td>{{$project->end_date}}</td>
      <td>{{$project->budget}}</td>
    </tr>
    @endforeach
    
  </tbody>

</table>
{{$projects -> links()}}
@endsection