<footer>
    <div class="container">

        <div class="left">
            <h3>Boolando S.r.l</h3>

            <div class="legal-info">
                <span>
                    <li><a href="#">Informazioni legali</a></li>
                </span>
                <span>
                    <li><a href="#">Informativa sulla privacy</a></li>
                </span>
                <span>
                    <li><a href="#">Diritto di recesso</a></li>
                </span>
            </div>

        </div>

        <div class="right">
            <h3>Trovaci anche su</h3>
            <div class="social">
                <ul>
                    <li v-for="(item, index) in social_menu.footer" :key="`socialFooter${index}`"><a
                            :href="item.href"><i class="fa-brands" :class="item.icon_class"></i></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</footer>
