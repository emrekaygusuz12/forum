<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: sans-serif;
        }

        .center-container {
            text-align: center;
        }

        article{
            flex;
            max-width: 600px;
            margin: 0 auto;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .user-profile {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h6{
            font-size: 0.3cm;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        h5{
            font-size: 0.5cm;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

        }

        h4{
            color: red;
            font-size: 0.3cm;
        }

        h3{
            text-align: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: green;
            flex;
            max-width: 600px;
            margin: 0 auto;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }
        
        header{
            flex;
            max-width: 600px;
            margin: 0 auto;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        img{
            vertical-align: middle;
            width: 90px;
            height: 90px;
            border-radius: 50%;
        }
        .user-profile {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .create-a-user{
            align-items: center
        }

        .user-info {
            margin-bottom: 20px;
        }

        .user-info p {
            margin: 8px 0;
        }

        .user-section,
        .navigation {
            margin-bottom: 20px;
        }

        .user-section h3 {
            font-size: 1.2em;
            margin-bottom: 8px;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navigation a {
            text-decoration: none;
            color: #3490dc;
        }

        .navigation button {
            padding: 8px 16px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        p {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 14px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            border-right: 1px solid white; /* Add this line to create a border */
            border-left: 1px solid white;
        }

        li b {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        li a:hover {
            background-color: green;
        }

        li .active {
            background-color: #04AA6D;
        }

        h1 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: green;
        }

        h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: green;
        }

        span{
            font: bold;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 0.8cm;            
        }

        textarea{
            width: 15.8cm;
            height: 1cm;
        }
        
        button{
            background-color: blue;
            color: white;
            
        }

    </style>
</head>

<body>

    <ul>
        <li><b>ThreadTalk</b></li>
        <li><a href="/">Home Page</a></li>
        <li><a href="/users">Users</a></li>
        <li><a href="/posts">Posts</a></li>
        <li><a href="/threads">Threads</a></li>
        <li style="float:right">
            @auth
                <span>Welcome, {{ auth()->user()->name }}!</span>
                <form method="POST" action="/logout" style="display: inline;">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            @else
                <a href="/login" class="active" style="float: right;">Log In</a>
                <a href="/register" class="active" style="float: right;">Register</a>
            @endauth
        </li>
    </ul>

    <h1>@yield('title')</h1>

    @if (session('message'))
    <p><b>{{session('message')}}</b></p>
    @endif

    @if ($errors->any())
            <h4>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </h4>
    @endif

    <div>
        @yield('content')
    </div>

</body>

@if (session()->has('success'))
<div>
    <p>{{session()->get('success')}}</p>
</div>
@endif

</html>
