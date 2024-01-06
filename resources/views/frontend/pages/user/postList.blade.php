@extends('frontend.master')
@extends('frontend.partial.profile')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 

 <div>
   <ul class="nav navbar-nav">			

       <li><a  href="{{route('profile.profile')}}">Profile</a></li>
       <li><a href="{{route('profile.research')}}">Research</a></li>
       <li><a href="{{route('profile.stats')}}">Stats</a></li>

   </ul>
</nav>
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
        <div class="btn-group" role="group" aria-label="Category Actions">
        <a class="btn btn-success" href="{{route('researcher.post.edit',$project->id)}}">Edit</a>
        <a class="btn btn-warning" href="{{route('researcher.post.view',$project->id  )}}">View</a>
        <form action="{{ route('delete.post', ['id' => $project->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

    </div>

      </td>    
   </tr>
 
@endforeach

  </tbody>
</table>

</div>
</div>


@endsection

