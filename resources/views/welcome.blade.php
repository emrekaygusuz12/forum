@extends('layouts.app')

@section('title')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            text-align: center;
            line-height: 1.6;
        }

        h1 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', 'Verdana', 'sans-serif';
            color: #0066cc;
            margin-top: 60px;
        }

        h2 {
            color: #009900;
        }

        h3 {
            color: #666;
        }

        p {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 30px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #009900;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-login {
            background-color: #0066cc;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Welcome to ThreadTalk</h1>
        <p>Welcome to ThreadTalk, the vibrant online community where diverse voices converge to engage in meaningful discussions,
             share knowledge, and foster connections. At ThreadTalk, we believe in the power of conversation to inspire, educate, 
             and unite people from all walks of life. Founded with the vision of creating a digital space that transcends boundaries,
              we serve as a dynamic platform for individuals with varied interests, passions, and expertise. Whether you're an enthusiast,
               expert, or curious learner, our forum is designed to be your go-to destination for insightful dialogue and valuable interactions.</p>
    </div>

</body>

@endsection
