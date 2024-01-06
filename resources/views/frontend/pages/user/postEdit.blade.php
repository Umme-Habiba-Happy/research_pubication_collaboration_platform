@extends('frontend.master')
@section('content')
<h1>Edit Research Information</h1>
<form action="{{route('researcher.post.update', $project->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Assuming you are using the PUT method for updates -->

    <div class="form-group">
        <label for="exampleInputEmail1">Enter Research Title</label>

        <input required name="title" type="text" class="form-control"  value="{{ $project->title}}">
    </div>

    <div class="form-group">
        <label for="researchDescription">Enter Research Description</label>
        <input class="form-control" name="description" rows="4" maxlength="5000"value="{{ $project->description }}">
    </div>

    <!-- Other form fields... -->

    <div class="form-group">
        <label for="exampleInputEmail1">Enter Author Name</label>
        <select name="coauthor_id" class="form-control" id="">
            @forelse($users as $user)
            <option value="{{ $user->id }}" {{ $project->author_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @empty
            <option class="text-center bg-danger" value="">Not found</option>
            @endforelse
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Enter Author Affiliation</label>
        <input class="form-control" name="author_affiliation" rows="4" maxlength="5000" value="{{ $project->author_affiliation }}">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Enter Co-Author Name</label>
        <select name="coauthor_id" class="form-control" id="">
            @forelse($users as $user)
            <option value="{{ $user->id }}" {{ $project->coauthor_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @empty
            <option class="text-center bg-danger" value="">Not found</option>
            @endforelse
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Enter Co-Author Affiliation</label>
        <input class="form-control" name="coauthor_affiliation" rows="4" maxlength="5000" value="{{ $project->coauthor_affiliation }}">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Enter Research Category</label>
        <select name="category_id" class="form-control" id="">
            @forelse($categories as $category)
            <option value="{{ $category->id }}" {{ $project->category_id == $category->id ? 'selected' : '' }}>{{ $category->categoryName }}</option>
            @empty
            <option class="text-center bg-danger" value="">Not found</option>
            @endforelse
        </select>
    </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Enter DOI</label>
    <input name="doi" type="text" class="form-control" value="{{ $project->doi}}">
  </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Your FILE</label>
        <input required name="file" class="form-control" type="file" id="formFile">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection