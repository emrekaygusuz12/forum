@extends('layouts.posts')

@section('title', 'Post Details')

@section('content')
<ul>
    <li> Name: {{$post->content}}</li>

</ul>

@endsection