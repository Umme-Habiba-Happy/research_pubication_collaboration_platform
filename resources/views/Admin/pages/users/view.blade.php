@extends('Admin.master')
@section('content')


<div class="mb-3">
    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Admin Name:</span>
    <span class="btn-gray">{{$users->name}}</span>
</div>
<hr>
<div class="mb-3">
    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Admin Email:</span>
    <span class="btn-gray">{{$users->email}}</span>
</div>
<hr>
<div class="mb-3">
    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Admin Image:</span>
    <span class="btn-gray"> <img width="10%%" src="{{url('/uploads/'. $users->image)}} " alt="image">
</span>
</div>

@endsection