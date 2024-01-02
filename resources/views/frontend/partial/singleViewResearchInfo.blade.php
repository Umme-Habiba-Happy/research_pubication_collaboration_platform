<div class="container">
	<div class="row">
		<div class="research clearfix">
			<h4 class="text-center">All projects</h4>
			<h1 class="text-center">Biggest Medical Formation</h1>
		</div>

		<div class="research_1 clearfix">
			<div class="col-sm-9 mb-4">
				<div class="research_1_inner">

					<hr>

					<h3>{{$project->title}} </h3>
					<hr>
					<h4> DOI: {{$project->doi}}</h4>
					<hr>
					<p>Published on: {{ $project->updated_at->format('F j, Y') }} </p>
					<p>Total Reads: {{$total_reads}} || Total Citation: </p>

					
					<div class="mb-3">
						<span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">File:</span>
						<span class="btn-gray">
							<a href="{{ url('/uploads/' . $project->file) }}" target="_blank">{{ $project->file }}</a>
						</span>
						<!-- Display Published Date if available -->
					
					
						
						<p>{{$project->author_name}}||{{ $project->coauthor_name }} <i class="fa fa-flask"></i></p>

						<!-- Download button -->
						<form method="get" action="{{ url('/download/' . $project->file) }}">
							@csrf
							<a class="btn btn-success" href="{{route('single.research.download', $project->id)}}">Download ({{$count}})</a>
							<form method="post" action="{{ route('recommend', $project->id) }}">
								@csrf
								<button type="submit" class="btn btn-success text-dark mr-2">Recommend</button>
							</form>

							 <a href="mailto:?subject=Subject%20of%20the%20email&body=Here%20is%20the%20link%20to%20the%20file:%20{{ url('/uploads/' . $project->file) }}" class="btn btn-info text-dark">Share</a>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>