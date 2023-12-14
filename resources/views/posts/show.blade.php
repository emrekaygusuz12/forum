@extends('layouts.app')

@section('title')
@endsection

@section('content')

<div class="user-profile">
    <h2>Post Details</h2>
    <div class="user-info">
        <p><strong>Thread: </strong>{{$thread->title}}</p>
        <p><strong>Created by: </strong><a href="{{ route('users.show', ['id' => $post->user->id]) }}">{{$post->user->name}}</a></p>
        <p><strong>Content: </strong>{{$post->content}}</p> 
        <a href="/posts">return</a>
    </div>
</div> <br>

<section>
    @foreach ($post->comments as $comment) <br>
        <x-post-comment :comment="$comment"/>
    @endforeach
</section>

@endsection
