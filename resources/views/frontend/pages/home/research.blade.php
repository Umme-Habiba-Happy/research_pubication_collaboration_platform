@extends('frontend.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="research clearfix">
			<h1 class="text-center">All Researches</h1>
		</div>

		<div class="research_1 clearfix">
			@foreach($projects as $project)
			<div class="col-sm-9 mb-4">
				<div class="research_1_inner">

					<h3><a href="{{ route('singleResearchView', $project->id) }}">{{$project->title}}</a></h3>
					<hr>
					<div class="mb-3">
						<span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">File:</span>
						<span class="btn-gray">
							<a href="{{ url('/uploads/' . $project->file) }}" target="_blank">{{ $project->file }}</a>
						</span>
						<!-- Display Published Date if available -->
						<p>Published on: {{ $project->updated_at->format('F j, Y') }} </p>

						<h4><a href="{{route('author.view', $project->researcher_id)}}">{{$project->author_name}}</a></h4>
						<hr>
						<!-- Download button -->
						<form method="get" action="{{ url('/download/' . $project->file) }}">
							@csrf
							<a class="btn btn-success" href="{{route('single.research.download', $project->id)}}">Download</a>
							<a href="mailto:?subject=Subject%20of%20the%20email&body=Here%20is%20the%20link%20to%20the%20file:%20{{ url('/uploads/' . $project->file) }}" class="btn btn-info text-dark">Share</a>
						</form>


					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection