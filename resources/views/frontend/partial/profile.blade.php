
<div class="col-12 row gutters-sm">
  <div class="col-md-12 mb-3">
    <div class="card">
      <div class="card-body">

        <div class=" align-items-center text-center">
          <div class="mt-5 ">
            <div>
              <hr>
              <h3>{{auth()->user()->name}}</h3>
              <h3>{{auth()->user()->degree}}</h3>
              <h3>{{auth()->user()->institution}}</h3>
              <h4>{{auth()->user()->country}}</h4>
            </div>
          </div>
          

          <div class="mt-5">
            <img src="{{url('/uploads/' , auth()->user()->image)}}" alt="upload image" value="{{ auth()->user()->image }}" type="file" class="rounded-circle" width="150">
    
          </div>
        </div>
        
      </div>
    </div>
  </div>