@extends('layouts.threads')

@section('title', 'Thread Details')

@section('content')
<ul>
    <li> Name: {{$thread->title}}</li>
    <li> Content: {{$thread->content}}</li>

</ul>

@endsection