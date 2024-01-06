@extends('Admin.master')
@section('content')

<div class="container">

  <div class=" row m-5">

    <h1>ADMIN</h1>
    <a class="btn btn-info col-2" type="button" href="{{route('users.form')}}">Enter New Admin</a>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">image</th>
          <th scope="col">Action</th>


        </tr>
      </thead>
      <tbody>
        @foreach($users as $key=> $item)
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->role}}</td>


          <td>
            <img width="20%" src="{{url('/uploads/'. $item->image)}} " alt="image">
          </td>
          <td>
          <div class="btn-group" role="group" aria-label="Category Actions">

            <a class="btn btn-success" href="{{route('users.edit', $item->id)}}">Edit</a>
            <a class="btn btn-warning" href="">View</a>


              <form action="{{ route('users.delete', $item->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>

            </div>
          </td>

          @endforeach

      </tbody>
    </table>

  </div>
</div>

@endsection