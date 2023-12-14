@extends('layouts.app')

@section('title')

@section('content')


<div class="center-container">
<div class="user-profile">

    <h1>Create a User</h1>
    <form method="Post" action="{{route('users.store')}}">
        @csrf
        <p>Name: <input type="text" name="name"></p>
        <p>Email: <input type="text" name="email"></p>
        <input type="submit" value="Submit">
        <a href="{{route('users.index') }}">Cancel</a>
    </div>
</form>
</div>
@endsection