<header class="bg-dark text-center text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarSupportedContent">
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
