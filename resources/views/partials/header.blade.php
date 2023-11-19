<header>
    <div class="container">

        <div class="header-box">

            <!-- colonna sinistra header  -->
            <div class="menu-header centered">
                {{-- @dump(Route::currentRouteName()) --}}

                {{-- Se il nome della route è uomo, stampa active altrimenti niente --}}
                <ul>
                    <li><a class="{{ Route::currentRouteName() == 'uomo' ? 'active' : '' }}"
                            href="{{ route('uomo') }}">Uomo</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'donna' ? 'active' : '' }}"
                            href="{{ route('donna') }}">Donna</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'bambino' ? 'active' : '' }}"
                            href="{{ route('bambino') }}">Bambino</a></li>
                </ul>
            </div>

            <!-- colonna centro header  -->
            <div class="logo-header centered">
                <img src="/img/boolean-logo.png" alt="logo">
            </div>

            <!-- colonna destra header  -->
            <div class="list-header centered">

                <ul>
                    <li><a href="#"><i class="fa-regular fa-user" style="color: #ffffff;"></i></a></li>
                    <li><a href="#"><i class="fa-regular fa-heart" style="color: #ffffff;"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-bag-shopping" style="color: #ffffff;"></i></a></li>
                </ul>

            </div>
        </div>
    </div>

</header>
