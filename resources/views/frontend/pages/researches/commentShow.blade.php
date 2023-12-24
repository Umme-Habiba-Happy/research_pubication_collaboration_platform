<!-- resources/views/research/show.blade.php -->

@extends('frontend.master') // Assuming you have a default layout

@section('content')
    <h1>{{ $research->title }}</h1>

    <!-- Display existing comments -->
    @if($comments->count() > 0)
        <h2>Comments</h2>
        <ul>
            @foreach($comments as $comment)
                <li>{{ $comment->user->name }}: {{ $comment->comment }}</li>
            @endforeach
        </ul>
    @else
        <p>No comments yet.</p>
    @endif

    <!-- Form for adding comments (assuming the user is authenticated) -->
    @auth
        <form action="{{ route('comment.store', $research->id) }}" method="post">
            @csrf
            <textarea name="comment" placeholder="Write your comment here..." rows="4"></textarea>
            <button type="submit">Submit Comment</button>
        </form>
    @else
        <p>Please <a href="{{ route('login') }}">login</a> to leave a comment.</p>
    @endauth
@endsection
