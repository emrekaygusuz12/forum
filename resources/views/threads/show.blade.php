@extends('layouts.threads')

@section('title', 'Thread Details')

@section('content')
    <p> Title: {{$thread->title}}</p>
    <p> Content: {{$thread->content}}</p>
@endsection