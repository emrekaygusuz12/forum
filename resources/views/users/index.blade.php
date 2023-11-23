@extends('layouts.users')

@section('title', 'Users')

@section('content')
    <p>Please find the users below who are currently in the forum database: </p>
    <ul>
        @foreach ($users as $user)
            <li><a href="/users/{{$user->id}}">{{$user->name}}</a></li>
        @endforeach
    </ul>
    <a href="{{route('users.create')}}"> Create User </a>
@endsection