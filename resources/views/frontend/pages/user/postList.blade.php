@extends('frontend.master')
@section('content')

<div class="container">

<div class=" row m-5">

<h1>{{auth()->user()->name}}</h1>
<a class="btn btn-info col-2" type="button" href="{{route('researcher.post.form', auth()->user()->id)}}">Create New Post</a>
<table class="table table-dark">
<thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Research Title</th>
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
      <td >{{$project->title}}</td>
      <td>{{$project->category->categoryName}}</</td>
      <td>{{$project->file}}</</td>
      <td>{{$project->status}}</td>


      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-warning" href="{{route('researcher.post.view',$project->id  )}}">View</a>

      </td>    
   </tr>
 
@endforeach

  </tbody>
</table>

</div>
</div>


@endsection

