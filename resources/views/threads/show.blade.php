@extends('layouts.app')

@section('title')
@endsection

@section('content')
    <div class="user-profile">
        <h2>Thread</h2>
        <div class="user-info">
            <p><strong>Thread Title: </strong>{{$thread->title}}</p>
            <p><strong>Category: </strong>{{ implode(', ', $categories->pluck('name')->toArray()) }}</p>
            
            <!-- Make the username clickable with a link to the user profile -->
            <p><strong>Created by: </strong><a href="{{ route('users.show', ['id' => $thread->user->id]) }}">{{$thread->user->name}}</a></p>
            
            <p><strong>Content: </strong>{{$thread->content }}</p>
            <p><strong>Posts: </strong>@foreach ($posts as $post)<br>{{$post->content}}@endforeach</p>
            
            <div class="navigation">
                <a href="{{url()->previous()}}">Back</a>
                @auth
                <button onclick="window.location.href='{{ route('posts.create', ['id'=>$thread->id]) }}'">Create a post</button>
                @endauth
            </div>
        </div>
    </div>
   
@endsection

