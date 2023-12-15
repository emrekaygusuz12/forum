@extends('layouts.app')

@section('title')
@endsection

@section('content')

<div class="user-profile">
    <h2>Post Details</h2>
    <div class="user-info">
        <p><strong>Thread: </strong>{{$thread->title}}</p>
        <p><strong>Created by: </strong><a href="{{ route('users.show', ['id' => $post->user->id]) }}">{{$post->user->name}}</a></p>
        <p><strong>Content: </strong>{{$post->content}}</p> 
        <a href="/posts">return</a>
    </div>
</div> <br>

<section>
        @auth
        <form method="POST" action="{{route('comments.store')}}">
           @csrf
           
           <header>
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="30" height="30"> <br>
                
                 {{auth()->user()->name}} 
                 
                <h3>Want to participate?</h3> <br>
                <textarea name="content" id="" cols="30" rows="10" placeholder="Say anything..."></textarea>
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <button type="submit">Post</button>
           </header>
           
           
                
           
        </form>
        @endauth

    @foreach ($post->comments()->get() as $comment) <br>
        <x-post-comment :comment="$comment"/>
    @endforeach
</section>

@endsection
