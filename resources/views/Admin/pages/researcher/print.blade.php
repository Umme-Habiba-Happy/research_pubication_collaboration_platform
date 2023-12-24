@extends('Admin.master')
@section('content')

<h1>Researcher</h1>
<div class="container">

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
                <th scope="col">#ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Degree</th>
                <th scope="col">Image</th>
                <th scope="col">Research Interest</th>
            </tr>
        </thead>
        <tbody>
            @foreach($researchers as $key=> $researcher)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td class="col">{{$researcher->name}}</td>
                <td class="col">{{$researcher->email}}</td>
                <td class="col">{{$researcher->degree}}</td>
                <td class="col">
                    <img class="rounded-circle" width="20%" src="{{url('/uploads/'. $researcher->image)}} " alt="image">
                </td>
                <td class="col">{{$researcher->research_interest}}</td>

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
</div>

@endsection