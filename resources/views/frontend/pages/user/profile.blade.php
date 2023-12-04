@extends('frontend.master')
@section('content')

    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h3>{{auth()->user()->name}}</h3>
                      <div>
                        <hr>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <div class="col-md-8">
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
                      <h5 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="{{route('edit', auth()->user()->id)}}">Edit</a>
                    
                <a class="btn btn-info " href="{{route('researcher.post')}}">My   Post</a>
                    </div>
                  </div>

                </div>
        

              

@endsection