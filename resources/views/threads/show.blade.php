@extends('layouts.app')

@section('title', 'Thread Details')

@section('content')
    <p> Title: {{$thread->title}}</p>
    <p> Content: {{$thread->content}}</p> <br>
    <a href="/threads">return</a>

    <form method="POST"
                action="{{route('threads.destroy', ['id'=>$thread->id]) }}">
                @csrf
                @method("DELETE") <br>
                <button type ="submit">Delete</button>
        </form>
@endsection