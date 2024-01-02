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
			<div class="col-sm-9 mb-4">
				<div class="research_1_inner">
					<h3>{{$project->author_name}} <i class="fa fa-flask"></i></h3>

					<hr>

					<h4><a href="{{ route('singleResearchView', $project->id) }}">{{$project->title}}</a></h4>
					<hr>
					<div class="mb-3">
						<span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">File:</span>
						<span class="btn-gray">
							<a href="{{ url('/uploads/' . $project->file) }}" target="_blank">{{ $project->file }}</a>
						</span>
						<!-- Display Published Date if available -->
						@if($project->published_date)
						<p>Published on: {{ $project->published_date->format('F j, Y') }} | Total Reads: {{ $project->total_reads }}</p>
						@else
						<p>Publication date not available | Total Reads: {{ $project->total_reads }}</p>
						@endif
						<p>{{$project->author_name}}||{{ $project->coauthor_name }} <i class="fa fa-flask"></i></p>

						<!-- Download button -->
						<form method="get" action="{{ url('/download/' . $project->file) }}">
							@csrf
							<a class="btn btn-success" href="{{route('single.research.download', $project->id)}}">Download </a>
							<button class="btn btn-success text-dark mr-2">Recommend</button>
							<a href="#" class="btn btn-info text-dark">Share</a>
						</form>


					</div>
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