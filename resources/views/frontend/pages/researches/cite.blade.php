@extends('frontend.master')
@extends('frontend.partial.singleViewResearchInfo')
@section('content')
<style>
    /* Custom button styles */
    .custom-button {
        display: inline-block;
        padding: 10px 40px;
        text-align: center;
        text-decoration: none;
        color: #fff;
        background-color: #3498db; /* Button color */
        border-radius: 10px;
        transition: background-color 0.3s;
        margin-right: 10px;
    }

    .custom-button:hover {
        background-color: #2980b9; /* Button color on hover */
    }
</style>


<nav class="navbar navbar-light bg-light">
 

 <div>
   <ul class="nav navbar-nav">			

	   <li><a class="custom-button"  href="{{route('singleview.overView', $project->id)}}"><b>OverView</b></a></li>
	   <li><a class="custom-button" href="{{route('singleview.stats',$project->id)}}">Stats</a></li>
	   <li><a class="custom-button" href="{{route('singleview.comment',$project->id)}}">Comment</a></li>
	   <li><a class="custom-button" href="{{route('singleview.cite',$project->id)}}">Citation({{$project->citation_count}} )</a></li>


   </ul>
</nav>
<h2>All citation</h2>
<hr>

<h3 >{{$project->citation_count}} Citation</h3>
<hr>
@endsection