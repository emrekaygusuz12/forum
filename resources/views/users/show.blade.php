@extends('layouts.app')

@section('title', 'User Details')

@section('content')
        <p> Name: {{$user->name}}</p>
        <p> E-mail: {{$user->email}}</p>
        <a href="/users">return</a> 
        
        <form method="POST"
                action="{{route('users.destroy', ['id'=>$user->id]) }}">
                @csrf
                @method("DELETE") <br>
                <button type ="submit">Delete</button>
        </form>
@endsection