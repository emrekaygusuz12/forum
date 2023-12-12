@extends('layouts.app')

@section('title', 'Threads')

@section('content')
    <p>Please find the threads below who are currently in the forum database: </p>
    <ul>
        @foreach ($threads as $thread)
            <p><a href="/threads/{{$thread->id}}">{{$thread->title}}</a></p>
            <p>{{ $thread->content }}</p>

        @endforeach
    </ul>
    <a href="{{route('threads.create')}}"> Create Thread </a> <br> <br>
    <a href="/">return</a>
@endsection