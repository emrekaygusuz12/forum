@extends('layouts.app')

@section('title', 'User Details')

@section('content')
        <p> Name: {{$user->name}}</p>
        <p> E-mail: {{$user->email}}</p>
        <p> Password: {{$user->password}}</p>
        <p> Date of Birth: {{$user->date_of_birth}}</p> <br>
        <a href="/users">return</a> 
        
        <form method="POST"
                action="{{route('users.destroy', ['id'=>$user->id]) }}">
                @csrf
                @method("DELETE") <br>
                <button type ="submit">Delete</button>
        </form>
@endsection