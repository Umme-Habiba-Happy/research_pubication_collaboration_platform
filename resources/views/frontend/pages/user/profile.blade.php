@extends('frontend.master')
@extends('frontend.partial.profile')
@section('content')


<h1>mxnmcnxm</h1>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
 

  <div>
	<ul class="nav navbar-nav">			

		<li><a  href="{{route('profile.profile')}}">Profile</a></li>
		<li><a href="{{route('profile.research')}}">Research</a></li>
		<li><a href="{{route('profile.stats')}}">Stats</a></li>


	</ul>
</nav>
  <div class="col-md-12">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <h5 class="mb-0">Full Name</h5>
          </div>
          <div class="col-sm-6 text-secondary">
            <h4>{{auth()->user()->name}}</h4>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h5 class="mb-0">Email</h5>
          </div>
          <div class="col-sm-6 text-secondary">
            <h4>{{auth()->user()->email}}</h4>
          </div>
        </div>
        <hr>


        <div class="row">
          <div class="col-sm-3">
            <h5 class="mb-0">Role</h5>
          </div>
          <div class="col-sm-6 text-secondary">
            <h4>{{auth()->user()->role}}</h4>
          </div>
        </div>

        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h5 class="mb-0">Degree</h6>
          </div>
          <div class="col-sm-6 text-secondary">
          <h4>{{auth()->user()->degree}}</h4>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h5 class="mb-0">Position</h6>
          </div>
          <div class="col-sm-6 text-secondary">
          <h4>{{auth()->user()->position}}</h4>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h5 class="mb-0">Institution</h6>
          </div>
          <div class="col-sm-6 text-secondary">
          <h4>{{auth()->user()->institution}}</h4>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h5 class="mb-0">Department</h6>
          </div>
          <div class="col-sm-6 text-secondary">
            <h4>{{auth()->user()->department}}</h4>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h5 class="mb-0">Skills</h6>
          </div>
          <div class="col-sm-6 text-secondary">
          <h4>{{auth()->user()->skills}}</h4>

          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h5 class="mb-0">Address</h6>
          </div>
          <div class="col-sm-6 text-secondary">
          <h4>{{auth()->user()->address}}</h4>

          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h5 class="mb-0">Country</h6>
          </div>
          <div class="col-sm-6 text-secondary">
          <h4>{{auth()->user()->country}}</h4>

          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-12">
            <a class="btn btn-info " href="{{route('edit', auth()->user()->id)}}">Edit</a>

            <a class="btn btn-info " href="{{route('researcher.post', auth()->user()->id)}}">My Post</a>
          </div>
        </div>

      </div> 




      @endsection