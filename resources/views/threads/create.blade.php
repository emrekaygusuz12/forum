@extends('layouts.app')

@section('title', 'Create Thread')

@section('content')
    <form method="Post" action="{{route('threads.store')}}">
        @csrf
        <p>Title: <input type="text" name="title"></p>
        <p>Content: <input type="text" name="content"></p>
        <p>User: <select name="user_id">
            @foreach ($users as $user)
            <option value="{{$user->id}}"
                @if ($user->id == old('user_id'))
                    selected='selected'
                    @endif>
                {{$user->name}}
            </option>
            @endforeach
            </select>
           </p>
           <p>Category: <select name="category_id">
            @foreach ($categories as $category)
            <option value="{{$category->id}}"
                @if ($category->id == old('category_id'))
                    selected='selected'
                    @endif>
                {{$category->name}}
            </option>
            @endforeach
            </select>
           </p>
           {{-- <p>Post: <select name="post_id">
            @foreach ($posts as $post)
            <option value="{{$post->id}}"
                @if ($post->id == old('post_id'))
                    selected='selected'
                    @endif>
                {{$post->name}}
            </option>
            @endforeach
            </select>
           </p> --}}
        <input type="submit" value="Submit">
        <a href="{{route('threads.index') }}">Cancel</a>
</form>
@endsection




   

   