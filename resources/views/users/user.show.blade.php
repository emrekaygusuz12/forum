@extends('layouts.users')

@section('title', 'User Details')

@section('content')

<ul>
    <li> Name: {{$user->name}}</li>
    <li> E-mail: {{$user->email}}</li>
</ul>