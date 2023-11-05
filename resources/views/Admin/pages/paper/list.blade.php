@extends('Admin.master')
@section('content')
<h1>Paper</h1>
<a class="btn btn-info" href="/paper/form">Add Paper</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Paper Name</th>
      <th scope="col">Author Name</th>
      <th scope="col">Paper Category</th>
      <th scope="col">Publication Date</th>

    </tr>
  </thead>
  <tbody>
    @foreach($publications as $key => $publication)
    <tr>

      <th scope="row">{{$key+1}}</th>
      <td>{{$publication ->paperName }}</td>
      <td>{{$publication ->AuthorName }}</td>
      <td>{{$publication ->paperCategory }}</td>
      <td>{{$publication ->publicationDate }}</td>
    </tr>
  @endforeach
  </tbody>
</table>

  </tbody>
</table>
{{$publications -> links()}}
@endsection