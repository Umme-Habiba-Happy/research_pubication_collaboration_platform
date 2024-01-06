@extends('Admin.master')
@section('content')
<h1>Project</h1>
<a class="btn btn-info" href="{{route('project.form')}}">Create Project</a>
<a class="btn btn-danger" href="{{route('project.print')}}">Print</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Research Title</th>

      <th scope="col">Author Name</th>

      <th scope="col">Category</th>

      <th scope="col">File</th>
      <th scope="col">Status</th> 

      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($projects as $key=>$project)
    
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$project->title}}</td>

      <td>{{$project->author_name}}</td>
      <td>{{$project->category->categoryName}}</td>
      

      <td><a href="{{url('/uploads/'. $project->file)}} " target="_blank">{{$project->file}}</a></td>
      <!-- <td>{{$project->file}}</td> -->
      <td>{{$project->status}}</td>
      <td>
        <!-- <a class="btn btn-success" href="">Approve</a>
        <a class="btn btn-danger" href="">Reject</a> -->
        <a class="btn btn-warning" href="{{route('project.viewPost', $project->id)}}">View</a>
        <a class="btn btn-danger" href="">Delete</a>


      </td>


    </tr>
    @endforeach
    
  </tbody>

</table>
{{$projects->links()}}
@endsection