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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $key=>$category)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$category->categoryName}}</td>
      <td>{{$category->categoryDescription}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Category Actions">
          <a class="btn btn-success" href="{{route('category.edit', $category->id)}}">Edit</a>
          <a class="btn btn-warning" href="{{route('category.view', $category->id)}}">View</a>
          <!-- <form action="{{ route('category.delete', $category->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form> -->
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$categories ->links() }}
@endsection