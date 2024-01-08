@extends('frontend.master')
@extends('frontend.partial.singleViewResearchInfo')
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

            <li><a  href="{{route('singleview.overView', $project->id)}}">OverView</a></li>
            <li><a  href="{{route('singleview.stats',$project->id)}}">Stats</a></li>
            <li><a  href="{{route('singleview.comment',$project->id)}}">Comment</a></li>
            <li><a   href="{{route('singleview.cite',$project->id)}}">Citation({{$project->citation_count}})</a></li>


        </ul>
</nav>


<div class="row">
    <div class="col-md-3">
        <div class="research-box">
            <h3>Downloads({{$count}})</h3>
        </div>

    </div>
    <div class="col-md-3">
        <div class="research-box">
            <h3>Total Reads:{{$total_reads}} </h3>
        </div>

    </div>

    <div class="col-md-3">
        <div class="research-box">
            <h3>Citation: <span id="citation_count">{{$project->citation_count}} </h3>
        </div>
        <!-- <button onclick="updateCitationCount()">Update Citation Count</button> -->
    </div>
</div>

@endsection