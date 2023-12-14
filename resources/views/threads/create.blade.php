@extends('layouts.app')

@section('title')

@section('content')
    <div class="center-container">
        <h1>Create Thread</h1>
        <div class="user-profile">
            <form method="post" action="{{ route('threads.store') }}">
                @csrf
                <p>Title: <input type="text" name="title"></p>
                <p>Content: <input type="text" name="content"></p>
                <p>User: 
                    <select name="user_id">
                        @foreach ($users as $user)
                            @if(auth()->user()->id == $user->id)
                                <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </p>
                <p>Category: 
                    <select name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </p>

                <input type="submit" value="Submit">
                <a href="{{ route('posts.index') }}">Cancel</a>
            </form>
        </div>
    </div>
@endsection
