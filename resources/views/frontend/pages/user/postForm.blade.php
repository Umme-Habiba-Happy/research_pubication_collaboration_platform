@extends('frontend.master')
@section('content')
<h1>Research Information</h1>
<form action ="{{route('researcher.postStore')}}" method = "post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Research Title</label>
    <input required  name="title" type="text" class="form-control"  placeholder="Enter Research Title">
  </div>
  <div class="form-group">
    <label for="researchDescription">Enter Research Description</label>
    <textarea class="form-control"  name="description" rows="4" maxlength="5000"></textarea>
</div>


  <div class="form-group">
    <label for="exampleInputEmail1">Enter Author Name</label>
    <input  name="author_name" type="text" class="form-control" placeholder="Enter Author Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Author Affiliation</label>
    <input  name="author_affiliation" type="text" class="form-control"  placeholder="Enter Author Affiliation">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Co-Author Name</label>
    <input  name="coauthor_name" type="text" class="form-control" placeholder="Enter Co-Author Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Co-Author Affiliation</label>
    <input  name="coauthor_affiliation" type="text" class="form-control" placeholder="Enter Co-Author Affiliation">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter DOI</label>
    <input  name="doi" type="text" class="form-control"  placeholder="Enter DOI">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Reference DOI</label>
    <input  name="reference" type="text" class="form-control"  placeholder="Enter reference">
  </div>

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



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection