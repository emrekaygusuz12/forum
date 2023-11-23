@extends('layouts.posts')

@section('title', 'Posts')

@section('content')
    <p>Please find the posts below who are currently in the forum database: </p>
    <ul>
        @foreach ($posts as $post)
            <li><a href="/posts/{{$post->id}}">{{$post->content}}</a></li>

        @endforeach
    </ul>
@endsection