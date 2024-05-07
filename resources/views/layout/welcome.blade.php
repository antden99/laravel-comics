<!DOCTYPE html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="bg-dark text-center text-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="collapse navbar-collapse justify-content-center text-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{route('characters')}}">CHARACTERS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('comics')}}">COMICS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{route('movies')}}">MOVIES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('tv')}}">TV</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{route('games')}}">GAMES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('collectibles')}}">COLLECTIBLES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{route('videos')}}">VIDEOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('fans')}}">FANS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{route('news')}}">NEWS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('shop')}}">SHOP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container ">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="bg-dark">
            ciao
        </div>
    </footer>
</body>

</html>