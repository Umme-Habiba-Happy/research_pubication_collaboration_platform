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
                  <input type="file" value="{{ auth()->user()->image }}" class="from-control"
                    alt="upload Image" class="rounded-circle" width="150" name="image">
                    <div class="mt-3">
                    <div class="form-group">
    <input value="{{auth()->user()->name}}" name="user_name"  type="text" class="form-control">

  </div>
                    
                      
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
                      <h5 class="mb-0">Degree</h5>
                    </div>
                    <div class="col-sm-6 text-secondary">
                    <input name="degree" value="{{auth()->user()->degree}}" type="text"> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Position</h5>
                    </div>
                    <div class="col-sm-6 text-secondary">
                    <input name="position" value="{{auth()->user()->position}}" type="text"> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Institution</h5>
                    </div>
                    <div class="col-sm-6 text-secondary">
                    <input name="institution" value="{{auth()->user()->institution}}" type="text"> 
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Department</h5>
                    </div>
                    <div class="col-sm-6 text-secondary">
                    <input name="department" value="{{auth()->user()->department}}" type="text"> 
                    </div>
                  </div>
                
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Skills</h5>
                    </div>
                    <div class="col-sm-6 text-secondary">
                    <input name="skills" value="{{auth()->user()->skills}}" type="text"> 
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Address</h5>
                    </div>
                    <div class="col-sm-6 text-secondary">
                    <input name="address" value="{{auth()->user()->address}}" type="text"> 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Country</h5>
                    </div>
                    <div class="col-sm-6 text-secondary">
                    <input name="country" value="{{auth()->user()->country}}" type="text"> 
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-info">Update Profile</button>
                    </div>
                  </div>
                </div>
</form>

@endsection