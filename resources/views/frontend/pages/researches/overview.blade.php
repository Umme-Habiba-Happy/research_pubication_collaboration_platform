@extends('frontend.master')
@extends('frontend.partial.singleViewResearchInfo')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 

 <div>
   <ul class="nav navbar-nav">			

	   <li><a  href="{{route('singleview.overView', $project->id)}}">OverView</a></li>
	   <li><a href="{{route('singleview.stats',$project->id)}}">Stats</a></li>
	   <li><a href="{{route('singleview.comment',$project->id)}}">Comment</a></li>
	   <li><a href="{{route('singleview.cite',$project->id)}}">Citation</a></li>


   </ul>
</nav>
This is overView
@foreach($projects as $key=>$project)

<tr>
 
    <td>{{$project->description}}</</td>

    </td>    
 </tr>

@endforeach



@endsection