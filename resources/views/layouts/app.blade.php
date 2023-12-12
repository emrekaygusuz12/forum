<!DOCTYPE html>
<html lang="end">
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <h1> @yield('title')</h1>
    </body>
    @if ($errors->any())
    <div>
        Errors:
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>
                
            @endforeach

        </ul>
    </div> 
    @endif

    <div>
        @yield('content')
    </div>
</html>
