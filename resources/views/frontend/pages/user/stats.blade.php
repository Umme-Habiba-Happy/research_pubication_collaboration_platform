@extends('frontend.master')
@extends('frontend.partial.profile')
@section('content')

<style>
              .research-box {
            border: 2px solid #3498db;
            background-color: #ecf0f1;
            color: #2c3e50;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .research-box:hover {
            transform: scale(1.05);
        }

    </style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">


    <div>
        <ul class="nav navbar-nav">

            <li><a href="{{route('profile.profile')}}">Profile</a></li>
            <li><a href="{{route('profile.research')}}">Research</a></li>
            <li><a href="{{route('profile.stats')}}">Stats</a></li>

        </ul>
</nav>
<hr>

    <div class="row">
            <div class="col-md-4">
                <div class="research-box">
                    <h3>Downloads</h3>
                </div>

            </div>
            <div class="col-md-4">
                <div class="research-box">
                    <h3>Total Reads</h3>
                </div>

            </div>
            <div class="col-md-4">
                <div class="research-box">
                    <h3>Reference</h3>
                </div>

            </div>
    </div>



@endsection