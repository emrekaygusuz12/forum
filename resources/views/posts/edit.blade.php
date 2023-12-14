@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <div class="center-container">
        <div class="user-profile">
            <h1>Edit Post</h1>

            <form method="POST" action="{{ route('posts.update', $post->id) }}">
                @csrf
                @method('PUT')

                <p>Edit Post: <input type="text" name="content" value="{{ $post->content }}"></p>

                <input type="submit" value="Update">
                <a href="{{ route('threads.index') }}">Cancel</a>
            </form>
        </div>
    </div>
@endsection
