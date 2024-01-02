@extends('Admin.master')
@section('content')
<h1>Paper</h1>
<a class="btn btn-info" href="{{route('paper.form')}}">Add Paper</a>
<a class="btn btn-info" href="{{route('paper.print')}}">Print</a>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Paper Name</th>
      <th scope="col">Author Name</th>
      <th scope="col">Paper Category</th>
      <th scope="col">Publication Date</th>
      <th scope="col">File</th>
      <th scope="col">Status</th> 

      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($projects as $key => $publication)
    <tr>

      <th scope="row">{{$key+1}}</th>
      <td>{{$publication ->title }}</td>
      <td>{{$publication ->author_name }}</td>
      <td>{{$publication ->category->categoryName }}</td>
      <td>{{$publication->updated_at->format('F j, Y')}}</td>
      <td><a href="{{url('/uploads/'. $publication->file)}} " target="_blank">{{$publication->file}}</a></td>
      <td>{{$publication->status}}</td>

      <td>
        <!-- <a class="btn btn-success" href="">Approve</a>
        <a class="btn btn-danger" href="">Reject</a> -->
        <a class="btn btn-warning" href="{{route('project.viewPost', $publication->id)}}">View</a>


      </td>
        </tr>
  @endforeach
  </tbody>
</table>

  </tbody>
</table>
@endsection