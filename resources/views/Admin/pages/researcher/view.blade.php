@extends('Admin.master')
@section('content')


<div class="mb-3">
    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Researcher Name:</span>
    <span class="btn-gray">{{$researcher->name}}</span>
</div>
<hr>
<div class="mb-3">
    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Researcher Email:</span>
    <span class="btn-gray">{{$researcher->email}}</span>
</div>
<hr>
<div class="mb-3">
    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Researcher Degree:</span>
    <span class="btn-gray">{{$researcher->degree}}</span>
</div>
<hr>
<div class="mb-3">
    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Researcher Image:</span>
    <span class="btn-gray"><img width="10%%" src="{{url('/uploads/'. $researcher->image)}} " alt="image"></span>
</div>
<hr>

@endsection