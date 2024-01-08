@extends('Admin.master')
@section('content')


<div class="mb-3">
    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Category Name:</span>
    <span class="btn-gray">{{$category->categoryName}}</span>
</div>
<hr>
<div class="mb-3">
    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Category Description:</span>
    <span class="btn-gray">{{$category->categoryDescription}}</span>
</div>
<hr>

@endsection