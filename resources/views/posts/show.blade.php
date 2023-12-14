@extends('layouts.app')

@section('title')

@section('content')

<div class="user-profile">
        <h2>Post Details</h2>
        <div class="user-info">
                <p><strong>Thread: </strong>{{$thread->title}}</p>
                <p><strong>Created by: </strong><a href="{{ route('users.show', ['id' => $thread->user->id]) }}">{{$thread->user->name}}</a></p>
                <p><strong>Content: </strong>{{$post->content}}</p> 
                <a href="/posts">return</a>
        </div>
</div>

@endsection