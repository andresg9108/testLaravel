<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @yield('head')

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
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
        <div class="container px-4 mx-auto">
            <header class="flex justify-between items-center py-4">
                <div class="flex items-center flex-grow gap-4">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/logo.png') }}" class="h-12-" width="100" />
                    </a>
                    <form action="{{ route('home') }}" method="GET">
                        <input type="text" name="buscar" placeholder="Buscar" value="{{ request('buscar') }}" />
                        <input type="submit" value="Buscar">
                    </form>
                </div>

                @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                @endauth
            </header>

            @yield('contenido')
        </div>
    </body>
</html>