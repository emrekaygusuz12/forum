@extends('layouts.posts')

@section('title', 'Post Details')

@section('content')
    <p> {{$post->content}}</p> <br>
        <a href="/posts">return</a>
@endsection