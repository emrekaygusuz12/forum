@extends('layouts.app')

@section('title', 'User Details')

@section('content')
        <p> Name: {{$user->name}}</p>
        <p> E-mail: {{$user->email}}</p>
        <p> Date of Birth: {{$user->date_of_birth}}</p> <br>
        <a href="/users">return</a>
@endsection