@extends('frontend.master')
@section('content')
<form action ="{{route('profile.update', auth()->user()->id)}}"  method = "post" enctype="multipart/form-data">
  @csrf
  @method('put')
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <div class="form-group">
    <input value="{{auth()->user()->name}}" name="user_name"  type="text" class="form-control">

  </div>
                      <h3>
                      
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
    <input value="{{auth()->user()->name}}" name="full_name"  type="text" class="form-control">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Email</h5>
                    </div>
                    <div class="col-sm-6 text-secondary">
                    <input name="email" value="{{auth()->user()->email}}" type="text">
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Password</h5>
                    </div>
                    <div class="col-sm-6 text-secondary">
                    <input name="password" value=" {{auth()->user()->password}}" type="password"> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Role</h5>
                    </div>
                    <div class="col-sm-6 text-secondary">
                    <input value=" {{auth()->user()->role}}" type="text"> 
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
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                  </div>
                </div>
</form>

@endsection