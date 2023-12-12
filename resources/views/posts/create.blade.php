@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <form method="Post" action="{{route('posts.store')}}">
        @csrf
        <p>Content: <input type="text" name="content"></p>
        <p>User id: <input type="text" name="user_id"></p>
        <input type="submit" value="Submit">
        <a href="{{route('posts.index') }}">Cancel</a>
</form>
@endsection