@extends('frontend.master')

@section('content')

<div class="container">

<div class=" row m-5">

<table class="table table-dark">
<thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Research Title</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>
  @foreach($posts as $key=>$project)
  <tr>
      <th scope="row">{{$key+1}}</th>
      <td >{{$project->title}}</td>
      <td>{{$project->category->categoryName}}</</td>


      <td>
        <div class="btn-group" role="group" aria-label="Category Actions">
        <a class="btn btn-warning" href="{{route('author.post.view',$project->id  )}}">View</a>

    </div>

      </td>    
   </tr>
 
@endforeach

  </tbody>
</table>

</div>
</div>


@endsection

