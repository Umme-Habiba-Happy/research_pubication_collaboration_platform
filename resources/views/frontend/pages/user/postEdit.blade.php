@extends('frontend.master')
@section('content')
    <h1>Edit Research Information</h1>
    <form action="{{route('researcher.post.update', $project->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Assuming you are using the PUT method for updates -->

        <div class="form-group">
            <label for="exampleInputEmail1">Enter Research Title</label>
        
            <input required name="title" type="text" class="form-control" placeholder="Enter Research Title" value="{{ $project->title}}">
        </div>

        <div class="form-group">
            <label for="researchDescription">Enter Research Description</label>
            <textarea class="form-control" name="description" rows="4" maxlength="5000">{{ $project->description }}</textarea>
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

        <!-- Other form fields... -->

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

        <!-- Other form fields... -->

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

        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Your FILE</label>
            <input required name="file" class="form-control" type="file" id="formFile">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
