@extends('layouts.app')

@section('title', 'Create Thread')

@section('content')
    <form method="Post" action="{{route('threads.store')}}">
        @csrf
        <p>Title: <input type="text" name="title"></p>
        <p>Content: <input type="text" name="content"></p>
        <p>User id: <input type="text" name="user_id"></p>
        <p>Category id: <input type="text" name="category_id"></p>
        <p>Post id: <input type="text" name="post_id"></p>
        <input type="submit" value="Submit">
        <a href="{{route('threads.index') }}">Cancel</a>
</form>
@endsection