<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content='Адреса на карте и телефоны отделений "Нашей Почты"'>
        <meta property="og:image" content="http://donbass-post.ru/images/logo.png">

        <title>Наша Почта | Отделения, адреса, телефоны</title>

        <link rel="icon" href="images/favicon.png">
	<link rel="stylesheet" href="style.css?new=9">
        <link rel="stylesheet" href="js/modal/remodal-default-theme.css">
        <link rel="stylesheet" href="js/modal/remodal.css">
        <meta name="viewport" content="width=1366, initial-scale=1.0">

    </head>

    <body id="top">

        <div class="wrapper">

            <!--Кнопка "Наверх"-->
            <p id="back-top"><a href="#top"><span></span></a></p>
            <!--Конец / Кнопка "Наверх"-->

            <h1 style="position: absolute; top:-200px; display: block;">Адреса телефоны отделений Наша Почта на карте</h1>

            <?include("header.php")?>

            <!--Шапка Страницы-->
            <div class="head-bra">

                <div class="sub-menu-main">
                    <div class="sub-menu">
                        <ul>
                            <li><span>ОТДЕЛЕНИЯ </span></li>
                        </ul>
                    </div>
                </div>

                <div class="title-page"><span>ОТДЕЛЕНИЯ</span></div>

            </div>
            <!--Конец / Шапка Страницы-->


            <!--Адреса Отделений-->
            <div class="content-bra">

                <div class="zag">ВЫБЕРИТЕ ГОРОД</div>

                <div class="blok-four-main">
                    <div class="blok-four bra">
                        <img src="images/bra/dnr.png" />
                        <span>ДНР</span>
                        <ul>
                            <li><a data-remodal-target="branche-gorlovka" href="#">Горловка</a></li>
                            <li><a data-remodal-target="branche-debaltsevo" href="#">Дебальцево</a></li>
                            <li><a data-remodal-target="branche-donetsk" href="#">Донецк</a></li>
                            <li><a data-remodal-target="branche-enakievo" href="#">Енакиево</a></li>
                            <li><a data-remodal-target="branche-makeevka" href="#">Макеевка</a></li>
                            <li><a data-remodal-target="branche-snezhnoe" href="#">Снежное</a></li>
                            <li><a data-remodal-target="branche-shahtersk" href="#">Шахтерск</a></li>
                            <li><a data-remodal-target="branche-yasinovataya" href="#">Ясиноватая</a></li>
                        </ul>
                    </div>
                </div>

                <div class="blok-four-main">
                    <div class="blok-four bra">
                        <img src="images/bra/lnr.png" />
                        <span>ЛНР</span>
                        <ul>
                            <li><a data-remodal-target="branche-alchevsk" href="#">Алчевск</a></li>
                            <li><a data-remodal-target="branche-lugansk" href="#">Луганск</a></li>
                            <li><a data-remodal-target="branche-stahanov" href="#">Стаханов</a></li>
                        </ul>
                    </div>
                </div>

                <div class="blok-four-main">
                    <div class="blok-four bra">
                        <img src="images/bra/crimea.png" />
                        <span>Крым</span>
                        <ul>
                            <li><a data-remodal-target="branche-evpatoriya" href="#">Евпатория</a></li>
                            <li><a data-remodal-target="branche-sevastopol" href="#">Севастополь</a></li>
                            <li><a data-remodal-target="branche-simferopol" href="#">Симферополь</a></li>
                            <li><a data-remodal-target="branche-feodosiya" href="#">Феодосия</a></li>
							<li><a data-remodal-target="branche-yalta" href="#">Ялта</a></li>
                        </ul>
                    </div>
                </div>

                <div class="blok-four-main">
                    <div class="blok-four bra">
                        <img src="images/bra/rf.png" />
                        <span>Россия</span>
                        <ul>
                            <li><a data-remodal-target="branche-rostov-na-donu" href="#">Ростов-на-Дону</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!--Конец Адреса Отделений-->

            <?include("share.php")?>

            <?include("footer.php")?>

            <!--ДНР-->
            <div  class="remodal" data-remodal-id="branche-gorlovka">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Горловка</span>
                    <p class="font-light">
                        пр-т Победы, 2Б (ост. Украина, напротив маг. Планета)<br><br>

                        <b>Пн-Пт</b> 9:00-16:00;<br>
                        <b>Сб</b> 9:00-13:00;<br>
                        <b>Вс</b> - выходной.<br><br>

                        <b>МТС</b> +38-099-652-53-55
                    </p><br><br>

                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=rSSifLWFt5CeDVThNq2fqN8UqHngnOs4&width=100%&height=350&lang=ru_RU&sourceType=constructor&scroll=true"></script>

                    <img src="./images/branches/gorlovka.jpg" width="100%" alt="">

                </div>
            </div>

            <div  class="remodal" data-remodal-id="branche-debaltsevo">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Дебальцево</span>
                    <p class="font-light">
                        ул. Советская, 77 (Центр. площадь, рынок)<br><br>

                        <b>Пн-Пт</b> 9:00-14:00;<br>
                        <b>Сб</b> 9:00-13:00;<br>
                        <b>Вс</b> - выходной.<br><br>

                        <b>МТС</b> +38-095-458-79-52
                    </p><br><br>

                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=sNVe_5xhSTMjc7I91Q6K5MKCcIn0if2I&amp;width=100%&amp;height=350&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>

                    <img src="./images/branches/debaltsevo.jpg" width="100%" alt="">

                </div>
            </div>

            <div  style="max-width: 1150px!important;" class="remodal" data-remodal-id="branche-donetsk">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">

                    <div class="wrap-bra">
                        <table style="font-size:18px" class="font-light more_bra">
                            <tr>
                                <th style="width:120px">№</th>
                                <th style="width:230px">Адрес</th>
                                <th style="width:230px">Режим работы</th>
                                <th style="width:230px">Контакты</th>
                            </tr>
                            <tr>
                                <td style="position: relative">Донецк-1 <span style="position: absolute; font-size: 11px;bottom: 9px;color: #c20303;left: 10px" class="font-light">Принимается груз, расчетным весом до 30 кг.</span></td>
                                <td> пл. Коммунаров 1 (ТЦ «Юзовский Пассаж»)</td>
                                <td> <b>Пн-Пт</b> 9:00-16:00;<br>
                                    <b>Сб-Вс</b> 9:00-13:00.<br>
                                    Без перерывов и выходных.</td>
                                <td>  <b>МТС</b> +38-095-931-888-2 <br>
                                    <b>Феникс</b> +38-071-317-888-2
                                </td>
                            </tr>
                            <tr>
                                <td>Донецк-2</td>
                                <td>ул. 50-летия СССР,<br>158А, офис 9 (Крытый рынок АС)</td>
                                <td><b>Пн-Пт</b> 9:00-16:00;<br>
                                    <b>Сб-Вс</b> 9:00-13:00.<br>
                                    Без перерывов и выходных.</td>
                                <td> <b>МТС</b> +38-050-565-74-62</td>
                            </tr>
                            <tr>
                                <td>Донецк-3</td>
                                <td>пр. Красногвардейский, 16Б, павильон №3 (Покровский рынок)</td>
                                <td> <b>Пн-Пт</b> 9:00-16:00;
                                    <br>
                                    <b>Сб</b> 9:00-13:00.
                                    <br>
                                    <b>Вс</b> - выходной.</td>
                                <td><b>МТС</b> +38-066-321-94-78</td>
                            </tr>
                            <tr>
                                <td>Донецк-4</td>
                                <td>ул. Полоцкая, 6 (р-н Майского рынка, ТЦ "Виктория")</td>
                                <td><b>Пн-Пт</b> 9:00-16:00;<br>
                                    <b>Сб</b> 9:00-13:00.<br>
                                    <b>Вс</b> - выходной.</td>
                                <td> <b>МТС</b> +38 (095) 473-96-85<br>
                                    <b>Феникс</b> +38 (073) 451-19-84</td>
                            </tr>
                            <tr>
                                <td>Донецк-5
                                </td>
                                <td>ул. Петровского, 101А (р-н Текстильщик, ост. 22-е училище)</td>
                                <td><b>Пн-Пт</b> 9:00-16:00;<br>
                                    <b>Сб</b> 9:00-13:00.<br>
                                    <b>Вс</b> - выходной.</td>
                                <td> <b>МТС</b> +38 (050) 181-29-12<br>
                                    <b>Феникс</b> +38 (073) 457-39-48</td>
                            </tr>
                        </table>
                    </div>

                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=1Hqv84nQ0tPZ-zK6g4clnSBlFYcHXkaC&width=100%&height=350&lang=ru_RU&sourceType=constructor&scroll=true"></script>

                    <img src="./images/branches/donetsk-1.jpg" width="19.6%" alt="Донецк-1">
                    <img src="./images/branches/donetsk-2.jpg" width="19.6%" alt="Донецк-2">
                    <img src="./images/branches/donetsk-3.jpg" width="19.6%" alt="Донецк-3">
                    <img src="./images/branches/donetsk-4.jpg" width="19.6%" alt="Донецк-4">
                    <img src="./images/branches/donetsk-5.jpg" width="19.6%" alt="Донецк-5">

                </div>
            </div>

            <div  class="remodal" data-remodal-id="branche-enakievo">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Енакиево</span>
                    <p class="font-light">
                        пр-т Ленина, 91 (в здании отеля "Мир")<br><br>

                        <b>Пн-Пт</b> 9:00-16:00;<br>
                        <b>Сб</b> 9:00-13:00;<br>
                        <b>Вс</b> - выходной.<br><br>

                        <b>МТС</b> +38-066-307-90-45<br><br>
                    </p>
                    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Sl5-r0iDH95gsguacMBr9EVSl9RxnA8q&width=100%&height=350&lang=ru_RU&sourceType=constructor"></script>

                    <img src="./images/branches/enakievo.jpg" width="100%" alt="">


                </div>
            </div>


            <div  style="max-width: 1000px!important;" class="remodal" data-remodal-id="branche-makeevka">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <div class="wrap-bra">
                        <div style="vertical-align: top;" class="first">
                            <span>Макеевка-1</span>
                            <p class="font-light">
                                ул. Московская 29/48 (ост. бывшая Вареничная)<br><br>

                                <b>Пн-Пт</b> 9:00-16:00;<br>
                                <b>Сб-Вс</b> 9:00-13:00.<br>
                                Без перерывов и выходных.<br><br>
                            </p>
                        </div>

                        <div class="first">
                            <span>Макеевка-2</span>
                            <p class="font-light">
                                пр-т Генерала Данилова, 73 (мкр-н Зеленый, напротив СТО "Блеск")<br><br>

                                <b>Пн-Пт</b> 9:00-16:00;<br>
                                <b>Сб-Вс</b> 9:00-13:00.<br>
                            </p>
                        </div>

                        <div class="bolv"></div>

                    </div>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=jk6kAR2MPkLG-p71ijqoYpAE-TbHiWqY&width=100%&height=350&lang=ru_RU&sourceType=constructor&scroll=true"></script>

                    <img src="./images/branches/makeevka-1.jpg" width="49.7%" alt="">
                    <img src="./images/branches/makeevka-2.jpg" width="49.7%" alt="">



                </div>
            </div>

            <div  class="remodal" data-remodal-id="branche-snezhnoe">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Снежное</span>
                    <p class="font-light">
                        ул. Советская, 99 (здание Автовокзала)<br><br>

                        <b>Пн-Пт</b> 9:00-16:00;<br>
                        <b>Сб</b> 9:00-13:00;<br>
                        <b>Вс</b> - выходной.<br><br>

                        <b>МТС</b> +38-050-565-74-28<br><br>
                    </p>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=LBCKjjKJVm3OQeMBL1pxP6Hn2p5I4w0K&width=100%&height=350&lang=ru_RU&sourceType=constructor&scroll=true"></script>



                </div>
            </div>

            <div  class="remodal" data-remodal-id="branche-shahtersk">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Шахтерск</span>
                    <p class="font-light">
                        ул. Крупской, 1 (здание Автовокзала)<br><br>

                        <b>Пн-Пт</b> 9:00-16:00;<br>
                        <b>Сб</b> 9:00-13:00;<br>
                        <b>Вс</b> - выходной.<br><br>

                        <b>МТС</b> +38-099-348-52-47<br><br>
                    </p>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=LmcXCqPYLTYYP5vWJWBMwKMLVte6DrEM&width=100%&height=350&lang=ru_RU&sourceType=constructor&scroll=true"></script>

                    <img src="./images/branches/shahtersk.jpg" width="100%" alt="">

                </div>
            </div>

            <div  class="remodal" data-remodal-id="branche-yasinovataya">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Ясиноватая</span>
                    <p class="font-light">
                        ул. Некрасова, 6 (возле ТЦ "Валери")<br><br>

                        <b>Пн-Пт</b> 9:00-16:00;<br>
                        <b>Сб</b> 9:00-13:00.<br>
                        <b>Вс</b> - выходной.<br><br>
                    </p>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=4JqqC0Xx4WGc57JWYBjZqTfqlCxlZyKW&width=100%&height=350&lang=ru_RU&sourceType=constructor&scroll=true"></script>

                    <img src="./images/branches/yasinovataya.jpg" width="100%" alt="">

                </div>
            </div>
            <!--ДНР конец-->

            <!--ЛНР-->
            <div  class="remodal" data-remodal-id="branche-alchevsk">
            <button data-remodal-action="close" class="remodal-close"></button>

            <div id="window_branches">
                <span>Алчевск</span>
                <p class="font-light">
                    ул. Гмыри, 55 (ТРЦ "Столица", 0-й этаж)<br><br>

                    <b>Пн-Сб</b> 9:00-17:00;<br>
                    <b>Вс</b> - выходной.<br><br>

                    <b>МТС</b> +38-095-136-78-76<br><br>
                </p>
                <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=6cCmRDQAfV_K78X_ezDgnuq9KUejIMnQ&width=100%&height=350&lang=ru_RU&sourceType=constructor"></script>

                <img src="./images/branches/alchevsk.jpg" width="100%" alt="">

            </div>
            </div>


            <div style="max-width: 1000px!important;" class="remodal" data-remodal-id="branche-lugansk">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">


					<div class="wrap-bra">
                        <table style="font-size:18px" class="font-light more_bra">
                            <tr>
                                <th style="width:120px">№</th>
                                <th style="width:230px">Адрес</th>
                                <th style="width:230px">Режим работы</th>
                                <th style="width:230px">Контакты</th>
                            </tr>
                            <tr>
                                <td style="position: relative">Луганск-2</td>
                                <td> ул. Оборонная, 28 (здание Автовокзала)</td>
                                <td>
									<b>Пн-Пт</b> 9:00-16:00;<br>
									<b>Сб</b> 9:00-13:00.<br>
									<b>Вс</b> - выходной.
								</td>
                                <td>  <b>МТС</b> +38-050-102-28-36
                                </td>
                            </tr>
                            <tr>
                                <td>Луганск-3</td>
                                <td>кв-л Молодежный, 2А</td>
                                <td>
									<b>Пн-Пт</b> 9:00-16:00;<br>
									<b>Сб</b> 9:00-13:00.<br>
									<b>Вс</b> - выходной.
								</td>
                                <td>  <b>МТС</b> +38-095-478-59-73</td>
                            </tr>
                            <tr>
                                <td>Луганск-4</td>
                                <td>кв-л Ольховский, 4Б (в районе авторынка)</td>
                                <td> <b>Пн-Пт</b> 9:00-16:00;<br>
                                    <b>Сб</b> 9:00-13:00.<br>
                                    <b>Вс</b> - выходной.</td>
                                <td><b>МТС</b> +38-095-068-65-14</td>
                            </tr>
                        </table>
                    </div>

<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3AHi1EltEFMOwFdkdFsW9VwS8YeC-0I2CU&amp;width=100%25&amp;height=350&amp;lang=ru_UA&amp;scroll=true"></script>
                </div>


            </div>

            <div style="max-width: 1000px!important;" class="remodal" data-remodal-id="branche-stahanov">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <div class="wrap-bra">
                        <div style="vertical-align: top;" class="first">
                            <span>Стаханов-1</span>
                            <p class="font-light">
                            ул. Дзержинского, 30А (помещение "Террабанк")<br><br>

                            <b>Пн-Сб</b> 8:30-13:30.<br>
                            <b>Вс</b> - выходной.<br><br>

                            <b>МТС</b> +38-095-415-72-31<br>
                            <b>Лугаком</b> +38-072-110-89-48<br><br>
                            </p>
                        </div>

                        <div class="first">
                            <span>Стаханов-2</span>
                            <p class="font-light">
                                ул. Дзержинского, 7<br><br>

                                <b>Пн-Пт</b> 9:00-16:00;<br>
                                <b>Сб</b> 9:00-13:00.<br>
                                <b>Вс</b> - выходной.<br><br>

                                <b>МТС</b> +38-099-414-08-25<br><br>
                            </p>
                        </div>

                        <div class="bolv"></div>

                    </div>
                    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=7ChSWbS08JfLbXVy_uxUypAr-ooWeC8B&width=100%&height=350&lang=ru_RU&sourceType=constructor"></script>

                    <img src="./images/branches/stahanov.jpg" width="100%" alt="">

                </div>


            </div>
            <!--ЛНР конец-->

            <!--Крым-->
            <div  class="remodal" data-remodal-id="branche-evpatoriya">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Евпатория</span>
                    <p class="font-light">
                        ул. Короленко, 4 <br><br>

                        <b>Вт-Пт</b> 9:00-16:00;<br>
                        <b>Сб</b> 9:00-13:00.<br>
                        <b>Пн</b> - выходной.<br><br>

                        <b>Тел.</b> +7-978-229-77-80<br><br>
                    </p>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=G2YgZLqEHOCQxIEgOA3atRXsNDNTfYqI&amp;width=100%&amp;height=350&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>

                </div>
            </div>

            <div style="max-width: 1000px!important;" class="remodal" data-remodal-id="branche-sevastopol">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <div class="wrap-bra">
                        <div style="vertical-align: top;" class="first">
                            <span>Севастополь-1</span>
                            <p class="font-light">
                                5-й километр (автостоянка напротив вещевого рынка, 10 павильон)<br><br>

                                <b>Пн-Пт</b> 9:00-16:00;<br>
                                <b>Сб-Вс</b> 9:00-13:00.<br>
                                Без перерывов и выходных.<br><br>

                                <b>Тел.</b> +7 (978) 783-04-22<br><br>
                            </p>
                        </div>

                        <div class="first">
                            <span>Севастополь-2</span>
                            <p class="font-light">
                                ул. Ревякина, 2 (территория рынка Ревякина)<br><br>

                                <b>Пн-Пт</b> 9:00-16:00;<br>
                                <b>Сб-Вс</b> 9:00-13:00.<br>
                                Без перерывов и выходных.<br><br>

                                <b>Тел.</b> +7 (978) 990-13-50

                            </p>
                        </div>

                        <div class="bolv"></div>

                    </div>
                    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=bB_fQ-oH2Mu-NbL47ZWzhtTdZfJ0Rqc5&width=100%&height=350&lang=ru_RU&sourceType=constructor"></script>


                </div>






            </div>

            <div  class="remodal" data-remodal-id="branche-simferopol">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Симферополь</span>
                    <p class="font-light">
                        бул. Ленина 14 (ж/д вокзал)<br><br>

                        <b>Пн-Пт</b> 9:00-16:00;<br>
                        <b>Сб-Вс</b> 9:00-13:00.<br>
                        Без перерывов и выходных.<br><br>

                        <b>Тел.</b> +7-978-995-87-00<br><br>
                    </p>
                    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=6g7HwFUaPsrZv7Gcz4GsbZolknJe56DB&width=100%&height=350&lang=ru_RU&sourceType=constructor"></script>

                    <img src="./images/branches/simferopol.jpg" width="100%" alt="">


                </div>
            </div>

            <div  class="remodal" data-remodal-id="branche-feodosiya">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Феодосия</span>
                    <p class="font-light">
                        Керченское шоссе (ост. Переезд, возле кафе "Калиба")<br><br>

                        <b>Вт-Вс</b> с 10:00-17:00;<br>
                        <b>Пн</b> - выходной.<br>


                        <b>Тел.</b> +7-978-110-65-03<br><br>
                    </p>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=kX08WeQKl8T_tC7zKaxDDKmactmBy4hc&amp;width=100%25&amp;height=350&amp;lang=ru_UA&amp;sourceType=constructor&amp;scroll=true"></script>

                    <img src="./images/branches/feodosiya.jpg" width="100%" alt="">

                </div>
            </div>

			<div  class="remodal" data-remodal-id="branche-yalta">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Ялта</span>
                    <p class="font-light">
                        ул. Дзержинского, 5 (бывший Пивзавод)<br><br>

                        <b>Пн-Пт</b> 9:00-16:00;<br>
                        <b>Сб-Вс</b> 9:00-13:00.<br><br>

                        <b>Тел.</b> +7 (978) 139-23-51<br><br>
                    </p>
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af7acca43a5abe78c2ba3c3db9f6798b408b2f0d02ad5de87b10aea2bdfad8bb2&amp;width=100%25&amp;height=350&amp;lang=ru_UA&amp;scroll=true"></script>

                </div>
            </div>
            <!--Крым конец-->

            <!--Россия-->
            <div  class="remodal" data-remodal-id="branche-rostov-na-donu">
                <button data-remodal-action="close" class="remodal-close"></button>

                <div id="window_branches">
                    <span>Ростов-на-Дону</span>
                    <p class="font-light">
                        ул. Малиновского, 3Б, цокольный этаж, офис №3<br><br>

                        <b>Пн-Пт</b> 9:00-16:00;<br>
                        <b>Сб-Вс</b> 9:00-13:00.<br>
                        Без перерывов и выходных.<br><br>

                        <b>Тел.</b> +7-988-544-888-2<br><br>
                    </p>
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=lwqlyff7MPQwj4Ec_e0WJDVDdVwUxY_k&amp;width=100%&amp;height=350&amp;lang=ru_UA&amp;sourceType=constructor&amp;scroll=true"></script>

                    <img src="./images/branches/rostov.jpg" width="100%" alt="">

                </div>
            </div>

            </body>
        </html>
