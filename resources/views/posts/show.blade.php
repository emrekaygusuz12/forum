@extends('layouts.posts')

@section('title', 'Post Details')

@section('content')
    <p> Name: {{$post->content}}</p>
@endsection