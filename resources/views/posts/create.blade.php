@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <form method="Post" action="{{route('posts.store')}}">
        @csrf
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
        <input type="submit" value="Submit">
        <a href="{{route('posts.index') }}">Cancel</a>
</form>
@endsection