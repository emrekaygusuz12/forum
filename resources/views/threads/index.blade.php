@extends('layouts.threads')

@section('title', 'Threads')

@section('content')
    <p>Please find the threads below who are currently in the forum database: </p>
    <ul>
        @foreach ($threads as $thread)
            <li><a href="/threads/{{$thread->id}}">{{$thread->title}}</a></li>
            <li>{{ $thread->content }}</li>

        @endforeach
    </ul>
@endsection