@extends('frontend.master')
@section('content')
<h1>Research Information</h1>
<form action="{{route('researcher.postStore')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Research Title</label>
    <input required name="title" type="text" class="form-control" placeholder="Enter Research Title">
  </div>
  <div class="form-group">
    <label for="researchDescription">Enter Research Description</label>
    <input required name="description" type="text" class="form-control" placeholder="Enter Description">

  </div>


  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Enter Author Name</label>
    <input name="author_name" type="text" class="form-control" placeholder="Enter Author Name">
  </div> -->

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Author Name </label>
    <select name="user_id" class="form-control" id="">
  
      <option value="{{auth()->user()->name}}">{{ auth()->user()->name }}</option>
    
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Author Affiliation</label>
    <input name="author_affiliation" type="text" class="form-control" placeholder="Enter Author Affiliation">
  </div>

 
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Co-Author Name </label>
    <select name="coauthor" class="form-control" id="">
      @forelse($users as $user)
      <option value="{{$user->name}}">{{ $user->name }}</option>
      @empty
      <option class="text-center bg-danger" value="">Not found</option>
      @endforelse

    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Co-Author Affiliation</label>
    <input name="coauthor_affiliation" type="text" class="form-control" placeholder="Enter Co-Author Affiliation">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter DOI</label>
    <input name="doi" type="string" class="form-control" placeholder="Enter DOI">
  </div>


  <div class="form-group">
    <label for="reference_doi">Reference DOI</label>
    <input name="reference_doi" type="string" class="form-control" placeholder="Enter Reference DOI">
  </div>

  <!-- Your other form fields -->




  <div class="form-group">
    <label for="exampleInputEmail1">Enter Research Category </label>
    <select name="category_id" class="form-control" id="">
      @forelse($categories as $category)
      <option value="{{$category->id}}">{{ $category->categoryName }}</option>
      @empty
      <option class="text-center bg-danger" value="">Not found</option>
      @endforelse

    </select>
    <!-- <input  name="category_id" type="textarea" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Research Category"> -->
  </div>

  <div class="mb-3">
    <label for="formFile" class="form-label">Upload Your FILE</label>
    <input required name="file" class="form-control" type="file" id="formFile">
  </div>


<hr>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection