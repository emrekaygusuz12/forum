@extends('layouts.app')

@section('title')

@section('content')

    <div class="center-container">

        <h1>Users</h1>

        <div class="user-profile">
            @foreach ($users as $user)
                <p><a href="{{ route('users.show', ['id' => $user->id])}}">{{$user->name}}</a></p>
            @endforeach
        </div> <br>


    </div>

@endsection
