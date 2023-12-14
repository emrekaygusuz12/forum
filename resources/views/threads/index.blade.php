@extends('layouts.app')

@section('title')

@section('content')

    <div class="center-container">

        <h1>Threads</h1>

        <div class="user-profile">
            @foreach ($threads as $thread)
                <p><a href="{{ route('threads.show', ['id' => $thread->id])}}">{{$thread->title}}</a></p>
                
                @auth
                    @if(auth()->id() == $thread->user_id)
                        <form method="POST" action="{{ route('threads.destroy', ['id' => $thread->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete Thread</button>
                        </form>
                    @endif
                @endauth
            @endforeach
        </div> <br>

        @auth
            <button onclick="window.location.href='{{route('threads.create')}}'">Create a thread</button>
        @endauth
    </div>

@endsection
