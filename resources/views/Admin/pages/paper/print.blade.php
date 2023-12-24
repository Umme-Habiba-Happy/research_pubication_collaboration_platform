@extends('Admin.master')
@section('content')
<h1>Paper</h1>
<style>
        @media print {
            /* Define print styles here */
            body {
                font-family: Arial, sans-serif;
            }
        }
    </style>

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


    </tr>
  </thead>
  <tbody>
    @foreach($projects as $key => $publication)
    <tr>

      <th scope="row">{{$key+1}}</th>
      <td>{{$publication ->title }}</td>
      <td>{{$publication ->author_name }}</td>
      <td>{{$publication ->category->categoryName }}</td>
      <td>date</td>
      <td><a href="{{url('/uploads/'. $publication->file)}} " target="_blank">{{$publication->file}}</a></td>
      <td>{{$publication->status}}</td>
        </tr>
  @endforeach
  <button onclick="printList()">Print List</button>

<script>
    function printList() {
        window.print();
    }
</script>
  </tbody>
</table>

  </tbody>
</table>
@endsection