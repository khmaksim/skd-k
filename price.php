<!DOCTYPE html>
<html>
<head>
    <title>Цены на ошиповку шин. Стоимость ошиповки шин</title>
    <meta name="keywords" content="ООО СКД, СКД, ошиповка, ошиповка шин цена, ошиповка автошин, ошиповка автошины, ошиповка авторезины, ошиповка авто резина, ошиповка авто резины, ошипованная шина, грузовой шиномонтаж, шиномонтаж, Москва, шиповать шины">
    <meta name="description" content="ООО &quot;СКД&quot;&nbsp;&mdash; Ошиповка шин цена.">
    <meta name="author" content="Maksim Khorlo">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Language" content="ru">
    <meta content="10 days" name="revisit-after">
    <meta content="index, follow" name="robots">
    <link rel='stylesheet' type='text/css' href='css/main.css' />
    <link rel='stylesheet' type='text/css' href='css/fontello.css' />
    <link rel="icon" href="http://<?= $_SERVER['SERVER_NAME']; ?>/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://<?= $_SERVER['SERVER_NAME']; ?>/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    include_once './header.php';
    ?>
    <div class="container">
        <div class="breadcrumbs"><a href="./" class="breadcrumbs">Главная</a>&nbsp;/&nbsp;Ценовая информация</div>
        <div class="block">
            <h2 class="caption">Цена формируется комплексно и стоимость ошиповки шин зависит от:</h2>
            <div class="itemprice">
                <p>Рамера шипа:<br/>
                    8-10-1; 8-11-1<br/>
                    8-11-2; 8-12-2<br/>
                    9-15-1; 8-15-2<br/><br/>
                </p>
                <p>
                    Объем заказа<br/> и автошин<br/> 1000 и более
                </p>
            </div>
            <div class="itemprice">
                <p>Тело шипа:
                    <ul>
                        <li>аллюминий;</li>
                        <li>сталь;</li>
                    </ul>
                </p>
            </div>
            <div class="itemprice">
                <p>Параметры автошин:<br/>
                    175/70 R13<br/>
                    256/65 R17<br/>
                    и т.д.
                </p>
            </div>
        </div>
        <div class="block">
            <h2 class="caption">Помимо ошиповки, в стоимость заказа включено</h2>
            <div class="itemorder">
                <img src="images/delivery-32.png">
                <br>разгрузка-погрузка
                <br><span>1 автомобиль 120 м3
                <br>1,5-2 часа разгрузка,
                <br>2 часа погрузка</span>
            </div>
            <div class="itemorder">
                <img src="images/document-32.png">
                <br>оформление документации
                <br><span>при отправке заказчику или непосредственно
                <br>потребителю</span>
            </div>
            <div class="itemorder">
                <img src="images/box2-32.png">
                <br>хранение шин
                <br><span>на период ошиповки и
                <br>до 3-х дней после выполнения
                <br>заказа</span>
            </div>
        </div>
        <div class="block" style="height: 250px">
            <h2 class="headerblock">Цены на сезонное хранение шин ( комплект / <i class="demo-icon icon-rouble">&#xe800;</i> )</h2>
            <table id="pricestorage">
                <tr>
                    <th>Радиус</th>
                    <th>Без диска</th>
                    <th>На диске</th>
                </tr>
                <tr>
                    <td>R = 12-14</td>
                    <td>1800</td>
                    <td>2000</td>
                </tr>
                <tr>
                    <td>R = 15-17</td>
                    <td>2000</td>
                    <td>2200</td>
                </tr>
                <tr>
                    <td>R = 18-21</td>
                    <td>2400</td>
                    <td>3000</td>
                </tr>
            </table>
        </div>
        <figure>
            <img src="images/45.jpg" />
        </figure>
        <h2 style="text-align: center">Стоимость хранения шин<br/>согласовывается непосредственно<br/>с Поклажедателем.</h2>
    </div>
    <?php
    include_once './footer.php';
    ?>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script>
        $(document).ready(function() {
         $("head").append("<link rel='stylesheet' type='text/css' href='css/animation.css' />");
         $("head").append("<link rel='stylesheet' type='text/css' href='css/table-price.css' />");
         <!--[if IE 7]>$("head").append("<link rel='stylesheet' type='text/css' href='css/fontello-ie7.css' />");<![endif]-->
        });
    </script>
</body>
</html>
