@extends('frontend.master')
@extends('frontend.partial.singleViewResearchInfo')
@section('content')
<style>
        .comment-box {
        width: 100%;
        max-width: 500px; /* Adjust the maximum width as needed */
        margin: 20px 0;
    }

    .comment-box textarea {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }
        .comment-box button {
        padding: 10px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .comment-box button:hover {
        background-color: #2980b9;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 

 <div>
   <ul class="nav navbar-nav">			

	   <li><a  href="{{route('singleview.overView', $project->id)}}">OverView</a></li>
	   <li><a href="{{route('singleview.stats',$project->id)}}">Stats</a></li>
	   <li><a href="{{route('singleview.comment',$project->id)}}">Comment</a></li>
	   <li><a href="{{route('singleview.cite',$project->id)}}">Citation</a></li>


   </ul>
</nav>
{{auth()->user()->role}}
<h3>{{auth()->user()->name}}</h3>

<div class="comment-box">
    <textarea placeholder="Write your comment here..." rows="4"></textarea>
    <button>Submit Comment</button>
</div>


@endsection