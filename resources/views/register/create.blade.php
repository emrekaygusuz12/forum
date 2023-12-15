@extends('layouts.app')

@section('title')

@section('content')
<head>
    <style>
        main {
            
            max-width: 32rem; 
            margin-left: auto; 
            margin-right: auto; 
            margin-top: 2.5rem; 
            background-color: #f3f4f6; 
            border: 1px solid #e5e7eb; 
            padding: 1.5rem; 
            border-radius: 1rem; 
        }

        h1{
            text-align: center;
            font: bold;
            font-size: 1.25rem;
        }

        input{
            border-width: 1px;
            border-style: solid;
            border-color: gray;
            padding: 0.5rem;
            width: 100%;
        }

        p {
            color: red;
            font-size: 0.8rem;

        }
    </style>
</head>

<main>
    <h1>Register</h1>

    <form method="POST" action="/register">
        @csrf
    
        <div class="mb-6">
            <label for="name">
                Name
            </label> 
            <input type="text" name="name" id="name" value="{{old('name')}}" required>
            @error('name')
            <p>{{$message}}</p>
            @enderror
        </div> <br>
    
        <div class="mb-6">
            <label for="email">
                Email
            </label>
            <input type="text" name="email" id="email" value="{{old('email')}}" required>
            @error('email')
            <p>{{$message}}</p>
            @enderror
        </div> <br>
    
        <div class="mb-6">
            <label for="password">
                Password
            </label>
            <input type="password" name="password" id="password" required>
            @error('password')
            <p>{{$message}}</p>
            @enderror
        </div> <br>
    
        <div class="mb-6">
            <button type="submit">Submit</button>
        </div>
    </form>
    
</main>

@endsection
