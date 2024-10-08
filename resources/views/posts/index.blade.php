@extends('layouts.app')

@section('title')

@section('content')
    <div class="center-container">
        <h1>Posts</h1>

        <div class="user-profile">
            @foreach ($posts as $post)
            
                <p>
                    <a href="/posts/{{ $post->id }}">{{ $post->content }}</a>
                    @auth
                        @if (auth()->id() == $post->user_id)
                            {{-- Edit button form --}}
                            <form style="display: inline;" method="GET" action="{{ route('posts.edit', ['id' => $post->id]) }}">
                                @csrf
                                <button type="submit">Edit Post</button>
                            </form>
                            {{-- Delete button form --}}
                            <form style="display: inline;" method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete Post</button>
                            </form>
                        @endif
                    @endauth
                </p>
            @endforeach
            
        </div> <br>
    </div>
{{$posts->links()}}
@endsection
