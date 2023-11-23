@extends('layouts.posts')

@section('title', 'Posts')

@section('content')
    <p>Please find the posts below who are currently in the forum database: </p>
    <ul>
        @foreach ($posts as $post)
            <p><a href="/posts/{{$post->id}}">{{$post->content}}</a></p>

        @endforeach
    </ul>
    <a href="{{route('posts.create')}}"> Create Post </a> <br> <br>
    <a href="/">return</a>
@endsection