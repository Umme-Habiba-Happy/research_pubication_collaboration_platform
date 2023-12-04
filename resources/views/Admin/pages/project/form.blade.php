@extends('Admin.master')
@section('content')
<h1>hello project</h1>
<form action ="{{route('project.store')}}"  method = "post" >
  @csrf
  <div class="form-group">
    <label>Enter Research Title</label>
    <input required name="title" type="text" class="form-control"  placeholder="Enter name">
  <!-- @error('name')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror -->
  
  </div>

  <div class="form-group">
    <label >Project Description</label>
    <input required name="description" type="textarea" class="form-control"  placeholder="write the description">
    <!-- @error('description')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror -->
  </div>
  <div class="form-group">
    <label>Author Name</label>
    <input required name="author_name" type="text" class="form-control">
    <!-- @error('start_date')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror -->
  </div>
  <div class="form-group">
    <label >Category</label>
    <select name="category_id" class="form-control" id="">
      @forelse($categories as $category)
        <option value="{{$category->id}}">{{ $category->categoryName }}</option>
      @empty
          <option class="text-center bg-danger" value="">Not found</option>
      @endforelse
      
    </select>
    <!-- @error('end_date')
  <div class ="alert alert-danger">{{$message}}</div>
  @enderror -->
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Upload FILE</label>
  <input name="file" class="form-control" type="file" id="formFile">
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
