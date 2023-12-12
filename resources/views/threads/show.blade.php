@extends('layouts.app')

@section('title', 'Thread Details')

@section('content')
    <p> Title: {{$thread->title}}</p>
    <p> Content: {{$thread->content}}</p> <br>
    <a href="/threads">return</a>
@endsection