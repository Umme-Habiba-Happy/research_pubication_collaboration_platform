@extends('Admin.master')
@section('content')
<h1>Project</h1>
<a class="btn btn-info" href="{{route('project.form')}}">Create Project</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">start date</th>
      <th scope="col">end date</th>
      <th scope="col">budget</th>
      <th scope="col">Action</th>


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
      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-warning" href="">View</a>
        <a class="btn btn-danger" href="">Update</a>

      </td>


    </tr>
    @endforeach
    
  </tbody>

</table>
{{$projects -> links()}}
@endsection