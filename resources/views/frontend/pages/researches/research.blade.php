@extends('frontend.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="research clearfix">
			<h4 class="text-center">All projects</h4>
			<h1 class="text-center">Biggest Medical Formation</h1>
		</div>

		<div class="research_1 clearfix">
			@foreach($projects as $project)
			<div class="col-sm-9 mb-4">
				<div class="research_1_inner">

					<hr>

					<h4><a href="{{ route('singleResearchView', $project->id) }}">{{$project->title}}</a></h4>
					<h4>DOI: {{$project->doi}}</h4>
					<hr>
					<div class="mb-3">
						<span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">File:</span>
						<span class="btn-gray">
							<a href="{{ url('/uploads/' . $project->file) }}" target="_blank">{{ $project->file }}</a>
						</span>
						<!-- Display Published Date if available -->

						<p>Published on: {{ $project->updated_at->format('F j, Y') }} | Total Reads: {{ $project->total_reads }}</p>

						<p>
							<a href="{{route('author.viewProfile', $project->id)}}">{{ $project->author_name }}</a> ||
							<a href="{{route('author.viewProfile', $project->id)}}">{{ $project->coauthor_name }}</a>
							<i class="fa fa-flask"></i>
						</p>


						<!-- Download button -->
						<form method="get" action="{{ url('/download/' . $project->file) }}">
							@csrf
							<a class="btn btn-success" href="{{route('single.research.download', $project->id)}}">Download</a>
							<!-- recommend -->
							<a href="mailto:?subject=Subject%20of%20the%20email&body=Here%20is%20the%20link%20to%20the%20file:%20{{ url('/uploads/' . $project->file) }}" class="btn btn-info text-dark">Share</a>
						</form>
						<button class="btn btn-info text-dark recommend-button" id="countButton">Recommend <span id="counter">(0)</span></button>

					</div>
				</div>
			</div>

			@endforeach
		</div>
	</div>
</div>
<script>
	let count = 0;
	const counter = document.getElementById('counter');
	const countButton = document.getElementById('countButton');

	countButton.addEventListener('click', function() {
		count++;
		counter.textContent = count;
	});
</script>
@endsection

