<footer>
    <div class="container">
    <nav>
        <a href="./">Главная</a>
        <a href="./company.php">О компании</a>
        <a href="./price.php">Ценовая информация</a>
        <a href="./photo.php">Фотогалерея</a>
        <a href="./contacts.php">Контакты</a>
    </nav>
    <div id="contacts">
        <p>Телефон/Факс
            <br><span><a href="tel:+74987157515">+7 (498) 715-75-15</a></span>
            <br>e-mail
            <br><span><a href="mailto:skd.77@mail.ru">skd.77@mail.ru</a></span>
        </p>
    </div>
    <div id="address">
        <p>Московская область, п. Нахабино, <br>ул. Панфилова д. 37</p>
        <p><a href="./contacts.php">Схема проезда</a></p>
    </div>
    <div id="copyright">
        &copy; 2007 - <?php echo date('Y') ?> ООО &laquo;СКД&raquo;
    </div>
    <div class="metrika">
        <!-- Yandex.Metrika informer -->
        <a href="https://metrika.yandex.ru/stat/?id=15963946&amp;from=informer"
            target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/15963946/3_0_FFFFFFFF_FFFFFFFF_0_pageviews"
            style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" /></a>
        <!-- /Yandex.Metrika informer -->

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter15963946 = new Ya.Metrika({
                            id:15963946,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true
                            });
                        } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/15963946" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
            <!--LiveInternet counter-->
            <script type="text/javascript">
                document.write("<a href='http://www.liveinternet.ru/click' "+
                    "target=_blank><img src='//counter.yadro.ru/hit?t14.6;r"+
                    escape(document.referrer)+((typeof(screen)=="undefined")?"":
                    ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                    screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                    ";"+Math.random()+
                    "' alt='' title='LiveInternet: показано число просмотров за 24"+
                    " часа, посетителей за 24 часа и за сегодня' "+
                    "border='0' width='88' height='31'><\/a>")
            </script>
            <!--/LiveInternet-->
    </div>
</div>
</footer>
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
    $(function () {
        var location = window.location.href;
        var cur_url = '/' + location.split('/').pop();
        $('#menu li').each(function () {
            var link = $(this).find('a').attr('href');
            if(cur_url == link) 
                $(this).addClass('current');
        });
    });
    $('.nav-toggle').on('click', function() {
        $('#menu').toggleClass('active');
    });
</script>