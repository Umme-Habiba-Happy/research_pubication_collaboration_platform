@extends('Admin.master')
@section('content')
<h1>category</h1>
<a class="btn btn-info" href="{{route('category.form')}}">Create Category</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $key=>$category)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$category->categoryName}}</td>
      <td>{{$category->categoryDescription}}</td>             
      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-warning" href="">View</a>
        <a class="btn btn-danger" href="">Update</a>

      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$categories ->links() }}
@endsection