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

<a class="btn btn-success" href="{{route('researcher.post.form',auth()->user()->id)}}">Add New Research</a>


<div class="container">

<div class=" row m-5">


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