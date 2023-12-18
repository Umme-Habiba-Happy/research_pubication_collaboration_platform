@extends('frontend.master')
@section('content')

<div class="container">
	<div class="row">
<h4>Search resulr for: {{request()->search}} found {{$projects->count()}} research. </h4>

		<div class="research clearfix" >
		</div>
		<div class="research_1 clearfix">
			@if($projects->count()>0)
			@foreach($projects as $project)
			<div class="col-sm-4">
				<div class="research_1_inner text-center">
					<h3>{{$project->title}}<i class="fa fa-flask"></i></h3>
					<h4><a href="{{route('singleResearchView')}}"></a></h4>
					<p>{{$project->title}}</p>

				</div>
			</div>
			@endforeach
			@else
			<h1>no result found</h1>
			@endif
		</div>
	</div>
</div>
@endsection