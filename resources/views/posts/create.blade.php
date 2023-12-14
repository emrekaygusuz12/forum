@extends('layouts.app')

@section('title')

@section('content')

    <div class="center-container">
        <div class="user-profile">

            <h1>Create a Post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <p>Type Something: <input type="text" name="content"></p>
        <input type="hidden" name="thread_id" value="{{ $thread->id }}">
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        <input type="submit" value="Submit">
        <a href="{{ route('threads.index') }}">Cancel</a>
    </form>
        </div>
    </div>
    
@endsection

 {{-- <form method="POST" action="{{ route('threads.destroy', ['id' => $thread->id]) }}">
            @csrf
            @method('DELETE') <br>
            <button type="submit">Delete Thread</button>
        </form> --}}

