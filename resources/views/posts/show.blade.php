@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <p> {{$post->content}}</p> <br>
        <a href="/posts">return</a>

        <form method="POST"
                action="{{route('posts.destroy', ['id'=>$post->id]) }}">
                @csrf
                @method("DELETE") <br>
                <button type ="submit">Delete</button>
        </form>
@endsection