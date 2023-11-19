<header>
    <div class="container">

        <div class="header-box">

            <!-- colonna sinistra header  -->
            <div class="menu-header centered">
                <ul>
                    <li><a href="{{ route('uomo') }}"></a>Uomo</li>
                    <li><a href="{{ route('donna') }}">Donna</a></li>
                    <li><a href="{{ route('bambino') }}">Bambino</a></li>
                </ul>
            </div>

            <!-- colonna centro header  -->
            <div class="logo-header centered">
                <img src="/img/boolean-logo.png" alt="logo">
            </div>

            <!-- colonna destra header  -->
            <div class="list-header centered">

                <ul>
                    <li v-for="(item, index) in social_menu.header" :key="index">
                        <a :href="item.href"><i :class="item.icon_class"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</header>
