@extends('frontend.master')
@section('content')
<div class="container ">
	<div class="row">

		<div class="research clearfix" >
			<h4 class="text-center">All projects</h4>
			<h1 class="text-center">Biggest Medical Formation</h1>
		</div>
		<div class="research_1 clearfix">
			@foreach($projects as $project)
			<div class="col-sm-4">
				<div class="research_1_inner text-center">
					<h3>{{$project->title}}<i class="fa fa-flask"></i></h3>
					<h4><a href="{{route('singleResearchView', $project->id)}}"></a></h4>
					<p>{{$project->title}}</p>

				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection