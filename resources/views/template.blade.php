<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @yield('head')

        <style>
            body{
                font-family: Arial;
                color: #fff;
                background-color: #000;
            }

            a{
                color: orange;
            }

            a:hover{
                color: red;
            }
        </style>
    </head>
    <body>
        <p>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('blog') }}">Blog</a>

            @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @endauth
        </p>

        <hr>

        @yield('contenido')
    </body>
</html>