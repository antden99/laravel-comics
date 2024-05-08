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
                        <div class="collapse navbar-collapse justify-content-center text-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'active_nav' : '' }}"
                                        href="{{ route('characters') }}">CHARACTERS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active_nav' : '' }}"
                                        href="{{ route('comics') }}">COMICS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active_nav' : '' }}"
                                        href="{{ route('movies') }}">MOVIES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() === 'tv' ? 'active_nav' : '' }}"
                                        href="{{ route('tv') }}">TV</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() === 'games' ? 'active_nav' : '' }}"
                                        href="{{ route('games') }}">GAMES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() === 'collectibles' ? 'active_nav' : '' }}"
                                        href="{{ route('collectibles') }}">COLLECTIBLES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() === 'videos' ? 'active_nav' : '' }}"
                                        href="{{ route('videos') }}">VIDEOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() === 'fans' ? 'active_nav' : '' }}"
                                        href="{{ route('fans') }}">FANS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'active_nav' : '' }}"
                                        href="{{ route('news') }}">NEWS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() === 'shop' ? 'active_nav' : '' }}"
                                        href="{{ route('shop') }}">SHOP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="text-white">
        <div class="footer_top ">
            <div class="container d-flex">
                <div class="footer_left">
                    <ul class="d-flex list-unstyled p-4">
                        <li class="d-flex flex-column ">
                            <div class="title ">DC COMICS</div>
                            <a href="#">Charachters</a>
                            <a href="#">Movies</a>
                            <a href="#">Tv</a>
                            <a href="#">Games</a>
                            <a href="#">Videos</a>
                            <a href="#">News</a>
                            <div class="title mt-3">SHOP</div>
                            <a href="#">Shop DC</a>
                            <a href="#">Shop DC Collections</a>
                        </li>
                        <li class="d-flex flex-column">
                            <div class="title">DC</div>
                            <a href="#">Terms of Use</a>
                            <a href="#">Privacy</a>
                            <a href="#">Add choice</a>
                            <a href="#">Adversting</a>
                            <a href="#">Jobs</a>
                            <a href="#">Subscriptions</a>
                            <a href="#">Talent Workshops</a>
                            <a href="#">CPSC Certificates</a>
                            <a href="#">Rating</a>
                            <a href="#">Shops Help</a>
                            <a href="#">Contact Us</a>
                        </li>
                        <li class="d-flex flex-column">
                            <div class="title">SITES</div>
                            <a href="#">DC</a>
                            <a href="#">MAD Magazine</a>
                            <a href="#">DC Universe</a>
                            <a href="#">DC Power Visa</a>
                            <a href="#">Jobs</a>
                        </li>
                    </ul>
                    <div class="color_link">
                        All Site Content TM and &copy 2020 DC Entertainment, unless othervise <span><a
                                href="">nothed here.</a></span>All rigths reserved.
                        <a href="">Cookings settings</a>
                    </div>

                </div>
                <div class="footer_right">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="footer_bottom ">
            <div class="container d-flex align-items-center h-100 justify-content-between">
                <div class="foot_bottom_left ">
                    <button class="btn btn-outline-primary text-white" type="submit">SIGN-UP-NOW</button>
                </div>
                <div class="foot_bottom_right">
                    
                    <ul class="list-unstyled d-flex align-items-center">
                        <li class="m-1 colort_text_footer"><strong>FOLLOW US</strong></li>
                        <li class="m-1"><a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt=""></a></li>
                        <li class="m-1"><a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt=""></a></li>
                        <li class="m-1"><a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt=""></a></li>
                        <li class="m-1"><a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt=""></a></li>
                        <li class="m-1"><a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt=""></a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
