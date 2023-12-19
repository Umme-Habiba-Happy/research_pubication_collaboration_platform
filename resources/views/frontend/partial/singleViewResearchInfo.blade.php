
<div class="container">
	<div class="row">
		<div class="research clearfix">
			<h4 class="text-center">All projects</h4>
			<h1 class="text-center">Biggest Medical Formation</h1>
		</div>

		<div class="research_1 clearfix">
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
						<p>Published on: {{ $project->published_date->format('F j, Y') }} | Total Reads: {{$total_reads}}</p>
						@else
						<p>Publication date not available | Total Reads: {{$total_reads}}</</p>
						@endif
						<p>{{$project->author_name}}||{{ $project->coauthor_name }} <i class="fa fa-flask"></i></p>

						<!-- Download button -->
						<form method="get" action="{{ url('/download/' . $project->file) }}">
							@csrf
							<a class="btn btn-success" href="{{route('single.research.download', $project->id)}}">Download ({{$count}})</a>
							<button class="btn btn-success text-dark mr-2">Save</button>
							<a href="#" class="btn btn-info text-dark">Share</a>
						</form>
                        
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
