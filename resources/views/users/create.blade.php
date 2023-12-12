@extends('layouts.app')

@section('title', 'Create User')

@section('content')
    <form method="Post" action="{{route('users.store')}}">
        @csrf
        <p>Name: <input type="text" name="name"></p>
        <p>Email: <input type="text" name="email"></p>
        <input type="submit" value="Submit">
        <a href="{{route('users.index') }}">Cancel</a>
</form>
@endsection