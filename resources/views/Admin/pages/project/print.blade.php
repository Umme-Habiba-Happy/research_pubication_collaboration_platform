@extends('Admin.master')
@section('content')
<h1>Project</h1>
<style>
        @media print {
            /* Define print styles here */
            body {
                font-family: Arial, sans-serif;
            }
        }
    </style>

<table class="table table-light">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Research Title</th>
            <th scope="col">Author Name</th>
            <th scope="col">Category</th>
            <th scope="col">Publication Date</th>
            <th scope="col">File</th>
            <th scope="col">Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach($projects as $key=>$project)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$project->title}}</td>

            <td>{{$project->author_name}}</td>
            <td>{{$project->category->categoryName}}</td>
            <td>date</td>

            <td><a href="{{url('/uploads/'. $project->file)}} " target="_blank">{{$project->file}}</a></td>
            <!-- <td>{{$project->file}}</td> -->
            <td>{{$project->status}}</td>




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
<!-- {{$projects->links()}} -->
@endsection