@extends('frontend.master')
@section('content')

<h2></h2>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {
      height: 1500px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }



    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }

      .row.content {
        height: auto;
      }
    }
  </style>
</head>

<body>

  <!-- <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-6 sidenav">
     <h2>this is my post</h2>
     <div class="container"> -->
  <div class="row">
    <div class="col-sm-6">
      <div class="card card-white mb-5">

        <div class="card-heading clearfix border-bottom mb-4">
          <h4 class="card-title">Your post</h4>
        </div>
        <div class="card-body">
          <ul>
            <li>
              <div class="media">
                <div class="media-body">
                  <div class="mb-3">
                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Research Title:</span>
                    <span class="btn-gray">{{$project->title}}</span>
                  </div>
                  <hr>
                  <div class="mb-3">
                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Author Name:</span>
                    <span class="btn-gray">{{$project->user->name}}</span>
                    
                  </div>
                  <hr>
                  <div class="mb-3">
                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Co-Author Name:</span>
                    <span class="btn-gray">{{$project->user->name}}</span>
                  </div>
                  <hr>
                  <div class="mb-3">
                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Category:</span>
                    <span class="btn-gray">{{$project->category->categoryName}}</span>
                  </div>
                  <hr>
                  <div class="mb-3">
                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Description</span>
                    <span class="btn-gray">{{$project->description}}</span>
                  </div>
                  <hr>
                  <div class="mb-3">
                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">DOI</span>
                    <span class="btn-gray">{{$project->doi}}</span>
                  </div>
                  <hr>
                  <div class="mb-3">
                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">File:</span>
                    <span class="btn-gray">
                      <td><a href="{{url('/uploads/'. $project->file)}} " target="_blank">{{$project->file}}</a></td>
                    </span>
                  </div>
                  <hr>



                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      @if($project->status == 'inactive')
      <a href="{{route('researcher.post.form', $project->id)}}" type="submit" class="btn btn-success">Resubmit</a>
      @endif





    </div>

    <div class="col-sm-6">


      <h4>Feedback:</h4>
      <form action="{{route('project.comment', $project->id)}}" role="form">
        <div class="form-group">
          <textarea name='comment' class="form-control" rows="5" required>{{$project->comment}}</textarea>
        </div>
      </form>
      <br><br>

      <h4>All Comments:</h4>
<ul>
    @foreach($comments as $comment)
    @if($comment->post_id == $project->id)

        <li>
            <div>
                <div>
                    <a href="{{ route('Profile') }}" class="profile-link">
                        <img src="{{ url('/uploads/', $comment->user->image) }}" alt="Profile Image" width="50">
                    </a>
                    <hr>
                    <h3>{{ $comment->user->name }}</h3>
                </div>
                <p>{{ $comment->comment }}</p>
                <p>citation</p>
            </div>
        </li>
        @endif
    @endforeach
</ul>






    </div>
  </div>



</body>

</html>



@endsection