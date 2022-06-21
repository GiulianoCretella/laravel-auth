<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BoolPress</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links text-center">
                    @auth
                        <a href="{{ url('/admin') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md text-center display-4">
                    BoolPress
                </div>

                <div class="links text-center">
                    <a href="https://laravel.com/docs" class="px-2">Docs</a>
                    <a href="https://laracasts.com" class="px-2">Laracasts</a>
                    <a href="https://laravel-news.com" class="px-2">News</a>
                    <a href="https://blog.laravel.com" class="px-2">Blog</a>
                    <a href="https://nova.laravel.com" class="px-2">Nova</a>
                    <a href="https://forge.laravel.com" class="px-2">Forge</a>
                    <a href="https://vapor.laravel.com" class="px-2">Vapor</a>
                    <a href="https://github.com/laravel/laravel" class="px-2">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
