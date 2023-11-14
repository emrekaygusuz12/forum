@extends('layouts.users')

@section('title', 'Users')

@section('content')
    <p>Please find the users below who are currently in the forum database: </p>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>

        @endforeach
    </ul>
@endsection