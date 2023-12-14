@extends('layouts.app')

@section('title')

@section('content')
    <div class="user-profile">
        <h2>User Profile</h2>
        <div class="user-info">
            <p><strong>Name:</strong> {{ $users->name }}</p>
            <p><strong>Email:</strong> {{ $users->email }}</p>
            <p><strong>Member since:</strong> {{ $users->created_at->format('F j, Y') }}</p>
            <p><strong>Threads:</strong><br>
                @foreach($threads as $thread)
                    <a href="{{ route('threads.show', ['id' => $thread->id]) }}">{{ $thread->title }}</a><br>
                @endforeach
            </p>
            <p><strong>Posts:</strong><br>
                @foreach($posts as $post)
                    <a href="{{ route('posts.show', ['id' => $post->id]) }}">{{$post->content}}</a><br>
                @endforeach
            </p>
        </div>
        <div class="navigation">
            <a href="{{ route('users.index') }}">Back</a>

            @auth
                @if(auth()->user()->id == $users->id)
                    <form method="POST" action="{{ route('users.destroy', ['id' => $users->id]) }}">
                        @csrf
                        @method("DELETE")
                        <button type="submit" onclick="return confirm('Are you sure you want to delete your profile?')">Delete Profile</button>
                    </form>
                @endif
            @endauth
        </div>
    </div>
@endsection
