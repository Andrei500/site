<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Доставка посылок, коммерческих грузов, документов и интернет-заказов по ЛНР, ДНР, России, Украине, Крыму и всему миру.">
        <meta property="og:image" content="http://donbass-post.ru/images/logo.png">

        <title>Наша Почта | Доставка посылок и документов, денежных средств, интернет-заказов, коммерческого груза</title>

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

            <h1 style="position: absolute; top:-200px; display: block;">Отправка забор посылок Новой Почты, Доставка посылок, коммерческих грузов, документов и интернет-заказов по ЛНР, ДНР, России, Украине, Крыму и всему миру.</h1>

            <?include("header.php")?>

            <!--Шапка Страницы-->
            <div class="head-del">

                <div class="sub-menu-main" >
                    <div class="sub-menu">
                        <ul>
                            <li><span>ДОСТАВКА </span></li>
                            <li><a href="#app">Классификация грузов </a></li>
                            <li><a href="#tariff">Наши тарификаторы</a></li>
                        </ul>
                    </div>
                </div>

                <div class="title-page"><span>ДОСТАВКА</span></div>

            </div>
            <!--Конец / Шапка Страницы-->


            <!--Выбор типа груза-->
            <div class="main-bg-two">

                <div class="zag">ВЫБЕРИТЕ ТИП ГРУЗА</div>
                <a href="parcels.php" class="blok-four-main">
                    <div class="blok-four load">
                        <img src="images/del/parcel.png" />
                        <span>Посылки и<br>документы</span>
                    </div></a>
                <a href="money.php" class="blok-four-main">
                    <div class="blok-four load">
                        <img src="images/del/money.png" />
                        <span>Денежные<br>средства</span>
                    </div></a>
                <a href="online-shops.php" class="blok-four-main">
                    <div class="blok-four load">
                        <img src="images/del/shops.png" />
                        <span>Интернет-<br>заказы</span>
                    </div></a>
                <a href="commerce.php" class="blok-four-main">
                    <div class="blok-four load">
                        <img src="images/del/commerce.png" />
                        <span>Коммерческий<br>груз</span>
                    </div></a>

            </div>
            <!--Конец / Выбор типа груза-->


            <!--Классификация грузов-->
            <div id="app" class="tabklas section" >
                <div  class="zag-rubr">КЛАССИФИКАЦИЯ ГРУЗОВ ДЛЯ ПЕРЕСЕЧЕНИЯ ГРАНИЦЫ</div>

                <div class="table-main">
                    <table>
                        <tr><th>1. Товары личного пользования</th></tr>
                        <tr><td style="text-indent: 30px; text-align: left;">Товары, предназначенные для личных, семейных, домашних и иных, не связанных с     осуществлением коммерческой деятельности, нужд физических лиц, в количестве необходимом для 1 человека и         в течение 1 месяца, перемещаемые через таможенную границу:<br><br>
                            а) бывшие в употреблении личные вещи и товары, которые использовались в быту, не имеющие коммерческой стоимости;<br><br>
                            б) документы и корреспонденция, не имеющая коммерческой стоимости.<br><br>

                            Стоимость рассчитывается по <a data-remodal-target="form-calc" href="#">базовому тарифу</a>.<br><br><br></td></tr>
                    </table>
                </div>

                <div style="margin-bottom: 30px;" class="table-main">
                    <table>
                        <tr><th>2. Товары двойного применения</th></tr>
                        <tr><td style="text-indent: 30px; text-align: left;">Новые товары, предназначенные для личных нужд физических лиц, но могут быть связанные с осуществлением предпринимательской деятельности, в том числе для перепродажи:<br><br>
                            а) новые личные вещи и товары, которые используются в офисе;<br><br>
                            б) товары личного пользования, приобретенные в интернет магазинах;<br><br>
                            в) бывшие в употреблении товары (ТЛП), которы могут использоваться для ведения предпринимательской деятельности, либо дальнейшей перепродажи.<br><br>

                            Стоимость: базовый тариф + <a data-remodal-target="vts" href="#">транспортная экспедиция</a>.<br><br></td></tr>
                    </table>
                </div>

                <div class="table-main">
                    <table>
                        <tr><th>3. Коммерческие товары</th></tr>
                        <tr><td style="text-indent: 30px; text-align: left;">Новые товары, предназначенные для осуществления предпринимательской               деятельности и/или перепродажи:<br><br>
                            а) товары, предназначенные для коммерческих целей и дальнейшей продажи;<br><br>
                            б) товары, качественные и количественные характеристики которых не позволяют их отнести к товарам, предназначенным для личных потребностей физических лиц;<br><br>
                            в) товары, общая стоимость которых превышает €1000.<br><br>

                            Для расчета стоимости перейдите в раздел <a href="commerce.php" target="_blank" >“Коммерческий груз”</a>.<br><br></td></tr>
                    </table>
                </div>

                <div class="warning">
                    <span>Товары, запрещенные к перемещению</span>
                    <p style="padding: 30px 50px;" class="font-light">
                        1. Ювелирные изделия, драгоценные металлы и камни. <br>
                        2. Антиквариат. <br>
                        3. Наркотические вещества и психотропные препараты, их аналоги и прекурсоры, которые подлежат специальному контролю.<br>
                        4. Огнестрельное оружие и его части, боеприпасы.<br>
                        5. Асбест; огнеопасные, легковоспламеняющиеся и взрывные вещества, радиоактивные вещества, другие опасные посылки, с соответствующей маркировкой («невоспламеняющиеся газы», «окислитель», «инфекционные вещества», «самовозгорающиеся вещества», «яд», «радиоактивные вещества», «опасные вещества, при увлажнении», «вредные вещества», «ядовитый газ»).<br>
                        6. Баллоны с жидкостью и газом.<br>
                        7. Автомобильные аккумуляторы, аккумуляторы для мото- и с/х техники.<br>
                        8. Порнографические материалы. <br>
                        9. Животные (останки животных) и растения. <br>
                        10. Продукты питания (скоропортящиеся продукты).<br>
                        11. Посылки, которые требуют специального температурного режима. <br>
                        12. Лекарственные препараты.<br>
                        13. Посылки, которые имеют резкий запах, грязные и могут нанести вред другим посылкам или нанести вред здоровью людей.<br>
                        14. Товары и предметы, запрещенные Таможенным законодательством РФ.<br>

                    </p>
                </div>
            </div>
            <!--Конец / Классификация грузов-->

            <div id="tariff" class="section main-bg-two">
                <div  class="zag-rubr">НАШИ ТАРИФИКАТОРЫ</div>
                <div class="btn-main">
                    <a href="./docs/new_tariff.pdf" target="_blank" class="btn sb">
                        <span style="border: none" class="btn-txt">ОТКРЫТЬ ТАРИФИКАТОРЫ</span>
                    </a>
                </div>
                <!-- <ul>
                    <li><a target="_blank" href="./docs/tariffs/dnr/dnr-dnr.pdf">ДНР - ДНР</a></li>
                    <li><a target="_blank" href="./docs/tariffs/dnr/dnr-crimea.pdf">ДНР - Крым</a></li>
                    <li><a target="_blank" href="./docs/tariffs/dnr/dnr-lnr.pdf">ДНР - ЛНР</a></li>
                    <li><a target="_blank" href="./docs/tariffs/dnr/dnr-rostov.pdf">ДНР - Ростов-на-Дону</a></li>
                    <li><a target="_blank" href="./docs/tariffs/dnr/dnr-ukraine.pdf">ДНР - Украина</a></li>
                    <li><a target="_blank" href="./docs/tariffs/commerce.pdf">Коммерческие грузы</a></li>
                </ul>
                <ul>
                    <li><a target="_blank" href="./docs/tariffs/lnr/lnr-lnr.pdf">ЛНР - ЛНР</a></li>
                    <li><a target="_blank" href="./docs/tariffs/lnr/lnr-crimea.pdf">ЛНР - Крым</a></li>
                    <li><a target="_blank" href="./docs/tariffs/lnr/lnr-rostov.pdf">ЛНР - Ростов-на-Дону</a></li>
                    <li><a target="_blank" href="./docs/tariffs/lnr/lnr-ukraine.pdf">ЛНР - Украина</a></li>
                    <li><a target="_blank" href="./docs/tariffs/rf/rostov-crimea.pdf">Ростов-на-Дону - Крым</a></li>
                    <li><a target="_blank" href="./docs/tariffs/season.pdf">Сезоная доставка</a></li>
                </ul>
                -->
            </div>
            <style>
                #tariff ul li a {
                    padding: 10px 20px;
                    font: 20px 'Lato Light';
                    background: rgba(255,255,255,.7);
                    display: block;
                    margin: 5px auto;
                    color: #c20303;
                    text-decoration: none;
                }
                #tariff ul li a:hover {
                    background: #fff;
                }
                #tariff ul {
                    list-style: none;
                    display: inline-block;
                    width: 49%;
                }
                #tariff ul li {
                    text-align: center;
                }
            </style>



            <?include("share.php")?>


            <?include("footer.php")?>

            <!--Возмещение таможенных расходов-->
            <div  class="remodal" style="max-width: 850px;" data-remodal-id="vts">
                <!--<button data-remodal-action="close" class="remodal-close"></button>-->

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-car"></i>Автотовары</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>Товар</td>
                                    <td>Условие</td>
                                    <td>Рамер возмещения</td>
                                    <td>Максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>автомасла и другие ГСМ и жидкости</td>
                                    <td>до 10 л</td>
                                    <td>300 р</td>
                                    <td>10 л</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td rowspan="2">запчасти</td>
                                    <td>стоимость &lt; 15 тыс .р.</td>
                                    <td>500 р/ед</td>
                                    <td rowspan="2">15 кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>стоимость &gt; 15 тыс .р.</td>
                                    <td>2000 р/ед</td>
                                </tr>
                                <tr>
                                    <td>шины/диски</td>
                                    <td>До 2 ед</td>
                                    <td>500 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Под видом авто з/ч</td>
                                    <td>1-2 кг</td>
                                    <td>500 р/ед</td>
                                    <td rowspan="3">10 кг</td>
                                </tr>
                                <tr>
                                    <td>3-5 кг</td>
                                    <td>1000 р/ед</td>
                                </tr>
                                <tr>
                                    <td>6-10 кг</td>
                                    <td>1800 р/ед</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-chainsaw"></i>Бензооборудование</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">

                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>



                            <tbody>
                                <tr>
                                    <td rowspan="3">бензогенератор до 3,5 квт</td>
                                    <td>1-29 кг</td>
                                    <td>1500 р</td>
                                    <td rowspan="3">1 ед</td>
                                </tr>
                                <tr>
                                    <td>30-49 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr>
                                    <td>50-75 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td rowspan="3">бензопила/бензокосилка/бензокусторез</td>
                                    <td>1-9 кг</td>
                                    <td>1000 р</td>
                                    <td rowspan="3">1 ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>10-24 кг</td>
                                    <td>1500 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>25-40 кг</td>
                                    <td>2000 р</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-byt"></i>Быттехника</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>блендер/миксер</td>
                                    <td>До 2 ед</td>
                                    <td>300 р/ед</td>
                                    <td>2 ед</td>
                                </tr>

                                <tr style="background:#e4e4e4;">
                                    <td rowspan="2">бойлер/газ. колонка</td>
                                    <td>до 30 кг</td>
                                    <td>1000 р</td>
                                    <td rowspan="2">1 ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>30-60 кг</td>
                                    <td>1500 р</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">кондиционер</td>
                                    <td>до 30 кг</td>
                                    <td>1000 р</td>
                                    <td rowspan="2">1 ед</td>
                                </tr>
                                <tr>
                                    <td>30-60 кг</td>
                                    <td>1500 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>микроволновая печь</td>
                                    <td>1 ед</td>
                                    <td>300 р</td>
                                    <td>1 ед</td>
                                </tr>
                                <tr>
                                    <td>мультиварка</td>
                                    <td>До 2 ед</td>
                                    <td>400 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td rowspan="2">пылесос</td>
                                    <td>1-15 кг</td>
                                    <td>300 р</td>
                                    <td rowspan="2">1 ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>От 15 кг</td>
                                    <td>600 р</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">стиральная машина</td>
                                    <td>до 60 кг</td>
                                    <td>2000 р</td>
                                    <td rowspan="2">1 ед</td>
                                </tr>
                                <tr>
                                    <td>60-100 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>хлебопечка</td>
                                    <td>1 ед</td>
                                    <td>500 р</td>
                                    <td>1 ед</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">холодильник</td>
                                    <td>до 60 кг</td>
                                    <td>2000 р</td>
                                    <td rowspan="2">1 ед</td>
                                </tr>
                                <tr>
                                    <td>60-100 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr  style="background: #e4e4e4;">
                                    <td>электрочайник</td>
                                    <td>До 2 ед</td>
                                    <td>100 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr >
                                    <td>мелкие электроприборы (фен, утюг и т.д.)</td>
                                    <td>До 3 ед</td>
                                    <td>100 р/ед</td>
                                    <td>3 ед</td>
                                </tr>
                                <tr  style="background: #e4e4e4;">
                                    <td rowspan="5">сборная бытовая техника, в кол-ве не более 1 ед каждого товара</td>
                                    <td>До 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="5">40 кг</td>
                                </tr>
                                <tr  style="background: #e4e4e4;">
                                    <td>1-3 кг</td>
                                    <td>30 р</td>
                                </tr>
                                <tr  style="background: #e4e4e4;">
                                    <td>4-9 кг</td>
                                    <td>800 р</td>
                                </tr>
                                <tr  style="background: #e4e4e4;">
                                    <td>10-24 кг</td>
                                    <td>1200 р</td>
                                </tr>
                                <tr  style="background: #e4e4e4;">
                                    <td>25-40 кг</td>
                                    <td>1800 р</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-shampoo"></i>Гигиена</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3">порошки, моющие средства</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="3">50 кг</td>
                                </tr>
                                <tr>
                                    <td>1-10 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr>
                                    <td>11-50 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td rowspan="6">средства личной гигиены</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="6">50 кг</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>1-5 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>6-9 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>10-19 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>20-29 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>30-50 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Памперсы</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="3">50 кг</td>
                                </tr>
                                <tr>
                                    <td>1-9 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr>
                                    <td>10-50 кг</td>
                                    <td>100 р/кг</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-baby"></i>Детские товары</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="6">Игрушки   мелкие и малые</td>
                                    <td>до 2 кг</td>
                                    <td>0</td>
                                    <td rowspan="6">50 кг</td>
                                </tr>
                                <tr>
                                    <td>3-10 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr>
                                    <td>11-19 кг</td>
                                    <td>90 р/кг</td>
                                </tr>
                                <tr>
                                    <td>20-30 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr>
                                    <td>30-40 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr>
                                    <td>40-50 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td rowspan="5">Игрушки  средние, большие</td>
                                    <td>до 5 кг</td>
                                    <td>0</td>
                                    <td rowspan="5">75 кг</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>6-19 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>20-30 кг</td>
                                    <td>1500 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>30-50 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>50-75 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Коляска/кроватка/детский велосипед</td>
                                    <td>до 50 кг</td>
                                    <td>0</td>
                                    <td rowspan="2">1 шт</td>
                                </tr>
                                <tr>
                                    <td>50-75 кг</td>
                                    <td>500 р</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-treadmill"></i>Домашнее оборудование</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="4">Столы и стулья (в разобранном виде)</td>
                                    <td>до 20 кг</td>
                                    <td>0</td>
                                    <td rowspan="4">1 ед</td>
                                </tr>
                                <tr>
                                    <td>20-30 кг</td>
                                    <td>500 р</td>
                                </tr>
                                <tr>
                                    <td>30-50 кг</td>
                                    <td>800 р</td>
                                </tr>
                                <tr>
                                    <td>50-75 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td rowspan="4">Тренажер/велосипед/басейн и тд</td>
                                    <td>до 20 кг</td>
                                    <td>0</td>
                                    <td rowspan="4">1 ед</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>20-30 кг</td>
                                    <td>800 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>30-50 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>50-75 кг</td>
                                    <td>1500 р</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-lipstick"></i>Косметика и парфюмерия</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="4">косметика</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="4">10 кг</td>
                                </tr>
                                <tr>
                                    <td>1-2 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr>
                                    <td>2-3 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr>
                                    <td>3-10 кг</td>
                                    <td>90 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>парфюмерия и алкоголь</td>
                                    <td>1 л (до 2 ед)</td>
                                    <td>200 р/ед</td>
                                    <td>1 л (до 2 ед)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-mult"></i>Мультимедийная техника</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2">веб-камеры</td>
                                    <td>до 1 ед</td>
                                    <td>0</td>
                                    <td rowspan="2">5 ед</td>
                                </tr>
                                <tr>
                                    <td>от 1 ед</td>
                                    <td>100 р/ед</td>
                                </tr>


                                <tr>
                                    <td rowspan="5">кабель и др. комплект.</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="5">40 кг</td>
                                </tr>
                                <tr>
                                    <td>1-3 кг</td>
                                    <td>30 р</td>
                                </tr>
                                <tr>
                                    <td>4-9 кг</td>
                                    <td>800 р</td>
                                </tr>
                                <tr>
                                    <td>10-24 кг</td>
                                    <td>1200 р</td>
                                </tr>
                                <tr>
                                    <td>25-40 кг</td>
                                    <td>1800 р</td>
                                </tr>

                                <tr style="background: #e4e4e4;">
                                    <td>Материнские и др. платы</td>
                                    <td>До 3 ед</td>
                                    <td>200 р/ед</td>
                                    <td>3 ед</td>
                                </tr>

                                <tr>
                                    <td rowspan="7">комплектующие и периферийные устройства к компьютеру</td>
                                    <td>до 1 кг (не более 2 ед)</td>
                                    <td>0</td>
                                    <td rowspan="7">50 кг</td>
                                </tr>
                                <tr>
                                    <td>1-2 кг</td>
                                    <td>30 р</td>
                                </tr>
                                <tr>
                                    <td>3-5 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr>
                                    <td>6-9 кг</td>
                                    <td>90 р/кг</td>
                                </tr>
                                <tr>
                                    <td>10-19 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr>
                                    <td>20-29 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr>
                                    <td>30-50 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>монитор</td>
                                    <td>до 2 ед</td>
                                    <td>300 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr>
                                    <td>ноутбук</td>
                                    <td>до 3 ед</td>
                                    <td>300 р/ед</td>
                                    <td>3 ед</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>планшет</td>
                                    <td>До 4 ед</td>
                                    <td>100 р/ед</td>
                                    <td>4 ед</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">принтер/сканер</td>
                                    <td>до 9 кг</td>
                                    <td>500 р</td>
                                    <td rowspan="2">1 ед</td>
                                </tr>
                                <tr>
                                    <td>10-25 кг</td>
                                    <td>800 р</td>
                                </tr>

                                <tr>
                                    <td rowspan="2">Процессор, оперативная память, накопители и т.д.</td>
                                    <td>стоимость &lt; 20 тыс .р.</td>
                                    <td>100 р</td>
                                    <td rowspan="2">10 кг (не > 2 ед каждого)</td>
                                </tr>
                                <tr>
                                    <td>стоимость &gt; 20 тыс .р.</td>
                                    <td>200 р</td>
                                </tr>

                                <tr style="background: #e4e4e4;">
                                    <td rowspan="4">роутер</td>
                                    <td>1 ед</td>
                                    <td>0</td>
                                    <td rowspan="4">5 ед</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>1-2 кг</td>
                                    <td>30 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>2-4 кг</td>
                                    <td>50 р/ед</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>5-10 кг</td>
                                    <td>100 р/ед</td>
                                </tr>
                                <tr>
                                    <td>сист. блок пустой б/у или компютер в сборе б/у</td>
                                    <td>До 2 ед</td>
                                    <td>100 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>сист. блок новый</td>
                                    <td>1 ед</td>
                                    <td>500 р</td>
                                    <td>1 ед</td>
                                </tr>
                                <tr>
                                    <td rowspan="4">телевизор</td>
                                    <td>до 32"</td>
                                    <td>400 р</td>
                                    <td rowspan="4">1 ед</td>
                                </tr>
                                <tr>
                                    <td>32"-42"</td>
                                    <td>800 р</td>
                                </tr>
                                <tr>
                                    <td>42"-50"</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr>
                                    <td>От 50"</td>
                                    <td>1500 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td rowspan="2">телефон б/у</td>
                                    <td>1 ед</td>
                                    <td>0</td>
                                    <td rowspan="2">4 ед</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>2-4 ед</td>
                                    <td>100 р/ед</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">телефон новый</td>
                                    <td>стоимость &lt; 20 тыс .р.</td>
                                    <td>200 р</td>
                                    <td rowspan="2">1 ед</td>
                                </tr>
                                <tr >
                                    <td>стоимость &gt; 20 тыс .р.</td>
                                    <td>300 р</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td rowspan="2">фотоаппарат/камера с креплением</td>
                                    <td>стоимость &lt; 50 тыс .р.</td>
                                    <td>200 р</td>
                                    <td rowspan="2">1 ед</td>
                                </tr>
                                <tr style="background: #e4e4e4;">
                                    <td>стоимость &gt; 50 тыс .р.</td>
                                    <td>400 р</td>
                                </tr>

                                <tr>
                                    <td rowspan="4">Электронный блок управления</td>
                                    <td>1-2 кг</td>
                                    <td>100 р</td>
                                    <td rowspan="4">1 ед</td>
                                </tr>
                                <tr>
                                    <td>2-9 кг</td>
                                    <td>600 р</td>
                                </tr>
                                <tr>
                                    <td>10-19 кг</td>
                                    <td>800 р</td>
                                </tr>
                                <tr>
                                    <td>20-30 кг</td>
                                    <td>1200 р</td>
                                </tr>

                                <tr>
                                    <td rowspan="5">сборная мультимедийная техника, в кол-ве не более 1 ед каждого товара</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="5">40 кг</td>
                                </tr>
                                <tr>
                                    <td>1-3 кг</td>
                                    <td>30 р</td>
                                </tr>
                                <tr>
                                    <td>4-9 кг</td>
                                    <td>800 р</td>
                                </tr>
                                <tr>
                                    <td>10-24 кг</td>
                                    <td>1200 р</td>
                                </tr>
                                <tr>
                                    <td>25-40 кг</td>
                                    <td>1800 р</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-polo-shirt"></i>Одежда новая</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="6">белье, колготки, носки</td>
                                    <td>до 2 кг</td>
                                    <td>0</td>
                                    <td rowspan="6">50 кг</td>
                                </tr>
                                <tr>
                                    <td>3-10 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr>
                                    <td>11-19 кг</td>
                                    <td>90 р/кг</td>
                                </tr>
                                <tr>
                                    <td>20-30 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr>
                                    <td>30-40 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr>
                                    <td>40-50 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td rowspan="7">легкая одежда (рубашки, платья, юбки, халаты, брюки, шорты и т.д.)</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="7">50 кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>1-4 кг</td>
                                    <td>30 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>5-10 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>11-19 кг</td>
                                    <td>90 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>20-30 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>30-40 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>40-50 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr>
                                    <td rowspan="7">объемная одежда (пиджаки, костюмы, куртки, пальто и т.д.)</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="7">50 кг</td>
                                </tr>
                                <tr>
                                    <td>1-4 кг</td>
                                    <td>30 р</td>
                                </tr>
                                <tr>
                                    <td>5-10 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr>
                                    <td>11-19 кг</td>
                                    <td>90 р/кг</td>
                                </tr>
                                <tr>
                                    <td>20-30 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr>
                                    <td>30-40 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr>
                                    <td>40-50 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr>
                                    <td rowspan="7">одежда меховая</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="7">50 кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>2-4 кг</td>
                                    <td>30 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>5-10 кг</td>
                                    <td>90 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>11-19 кг</td>
                                    <td>120 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>20-30 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>30-40 кг</td>
                                    <td>4000 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>40-50 кг</td>
                                    <td>5000 р</td>
                                </tr>
                                <tr>
                                    <td rowspan="6">обувь</td>
                                    <td>до 2 пар</td>
                                    <td>0</td>
                                    <td rowspan="6">50 кг</td>
                                </tr>
                                <tr>
                                    <td>3-5 пар</td>
                                    <td>50 р/пара</td>
                                </tr>
                                <tr>
                                    <td>6-10 пар</td>
                                    <td>100 р/пара</td>
                                </tr>
                                <tr>
                                    <td>20-30 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr>
                                    <td>30-40 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr>
                                    <td>40-50 кг</td>
                                    <td>4000 р</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-food"></i>Питание</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3">корм для животных</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="3">25 кг</td>
                                </tr>
                                <tr>
                                    <td>1-9 кг</td>
                                    <td>30 р</td>
                                </tr>
                                <tr>
                                    <td>10-25 кг</td>
                                    <td>300 р/ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td rowspan="2">спортивное питание, БАДы</td>
                                    <td>до 1 кг, до 2 ед</td>
                                    <td>0</td>
                                    <td rowspan="2">10 кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>2-10 кг</td>
                                    <td>90 р/ед</td>
                                </tr>

                                <tr>
                                    <td rowspan="5">чай, кофе, сухарики, чипсы и другие гастрономические продукты</td>
                                    <td>до 14 кг до 3 ед каждого вида</td>
                                    <td>30 р/кг</td>
                                    <td rowspan="5">50 кг</td>
                                </tr>
                                <tr>
                                    <td>15-19 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr>
                                    <td>20-29 кг</td>
                                    <td>1500 р</td>
                                </tr>
                                <tr>
                                    <td>30-39 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr>
                                    <td>40-50 кг</td>
                                    <td>3000 р</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-spoon-and-fork-crossed"></i>Столовые приборы</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2">ножи бытовые</td>
                                    <td>до 1 ед</td>
                                    <td>0</td>
                                    <td rowspan="2">5 ед</td>
                                </tr>
                                <tr>
                                    <td>2-5 ед</td>
                                    <td>100 р/ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>ножи турист/охота</td>
                                    <td>до 2 ед</td>
                                    <td>300 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr>
                                    <td rowspan="5">посуда</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="5">50 кг</td>
                                </tr>
                                <tr>
                                    <td>2-10 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr>
                                    <td>11-19 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr>
                                    <td>20-29 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr>
                                    <td>30-50 кг</td>
                                    <td>3000 р</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-paintbrush"></i>Стройматериалы</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3">Лаки/краски</td>
                                    <td>до 5 кг</td>
                                    <td>0</td>
                                    <td rowspan="3">25 кг</td>
                                </tr>
                                <tr>
                                    <td>5-20 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr>
                                    <td>20-25 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td rowspan="2">Напольное покрытие (не в рулоне)</td>
                                    <td>до 20 кг</td>
                                    <td>0</td>
                                    <td rowspan="2">50 кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>20-50 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Натяжные потолки</td>
                                    <td>до 10 кг</td>
                                    <td>0</td>
                                    <td rowspan="3">50 кг</td>
                                </tr>
                                <tr>
                                    <td>10-20 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr>
                                    <td>20-50 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td rowspan="3">Плитка/изделия из камня и дерева</td>
                                    <td>до 5 кг</td>
                                    <td>0</td>
                                    <td rowspan="3">50 кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>5-20 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>20-50 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Подвесной потолок и его комлектующие</td>
                                    <td>до 10 кг</td>
                                    <td>0</td>
                                    <td rowspan="2">50 кг</td>
                                </tr>
                                <tr>
                                    <td>10-50 кг</td>
                                    <td>30 р/кг</td>
                                </tr>

                                <tr style="background:#e4e4e4;">
                                    <td rowspan="3">Сантехническое оборудование</td>
                                    <td>до 5 кг</td>
                                    <td>0</td>
                                    <td rowspan="3">50 кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>5-20 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>20-50 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Сухие смеси</td>
                                    <td>до 20 кг</td>
                                    <td>0</td>
                                    <td rowspan="2">50 кг</td>
                                </tr>
                                <tr>
                                    <td>20-50 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-carpet"></i>Текстиль</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2">Подушки, матрацы без пружин</td>
                                    <td>до 30 кг</td>
                                    <td>0</td>
                                    <td rowspan="2">75 кг</td>
                                </tr>
                                <tr>
                                    <td>30-75 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td rowspan="4">Пряжа, нити</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="4">10 кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>1-2 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>3-5 кг</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>5-10 кг</td>
                                    <td>90 р/кг</td>
                                </tr>
                                <tr>
                                    <td rowspan="6">Ткани, пленка, постельное белье, полотенца</td>
                                    <td>до 4 кг</td>
                                    <td>0</td>
                                    <td rowspan="6">50</td>
                                </tr>
                                <tr>
                                    <td>5-10 кг</td>
                                    <td>30 р/кг</td>
                                </tr>
                                <tr>
                                    <td>11-19</td>
                                    <td>60 р/кг</td>
                                </tr>
                                <tr>
                                    <td>20-30 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr>
                                    <td>30-40 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr>
                                    <td>40-50 кг</td>
                                    <td>3000 р</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-shop-cart"></i>Товары "тысяча мелочей"</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="6">Товары, размером "с орех"</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="6">20 кг</td>
                                </tr>
                                <tr>
                                    <td>2-3 кг</td>
                                    <td>150 р/кг</td>
                                </tr>
                                <tr>
                                    <td>3-5 кг</td>
                                    <td>180 р/кг</td>
                                </tr>
                                <tr>
                                    <td>5-10 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr>
                                    <td>10-15 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr>
                                    <td>15-20 кг</td>
                                    <td>3000 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td rowspan="7">Товары, размером "с кулак"</td>
                                    <td>до 1 кг</td>
                                    <td>0</td>
                                    <td rowspan="7">30 кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>1-2 кг</td>
                                    <td>90 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>3-5 кг</td>
                                    <td>120 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>6-10 кг</td>
                                    <td>150 р/кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>10-20 кг</td>
                                    <td>1500 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>20-25 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>25-30 кг</td>
                                    <td>3000 р</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-drill"></i>Электроинструменты</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>болгарка</td>
                                    <td>до 2 ед</td>
                                    <td>400 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>дрель</td>
                                    <td>до 2 ед</td>
                                    <td>400 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr>
                                    <td>перфоратор</td>
                                    <td>до 2 ед</td>
                                    <td>500 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>рубанок электрический</td>
                                    <td>до 2 ед</td>
                                    <td>300 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr>
                                    <td>циркулярная пила ручная</td>
                                    <td>до 1 ед</td>
                                    <td>400 р</td>
                                    <td>1 ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>шуруповерт</td>
                                    <td>до 2 ед</td>
                                    <td>300 р/ед</td>
                                    <td>2 ед</td>
                                </tr>
                                <tr>
                                    <td>электрокосилка</td>
                                    <td>до 1 ед</td>
                                    <td>500 р</td>
                                    <td>1 ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>сборная посылка из электроинстументов</td>
                                    <td>до 4 ед</td>
                                    <td>500 р/ед</td>
                                    <td>4 ед</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="spoiler closed">
                    <div class="title-sp">
                        <div class="title_h3"><strong><i class="icon-s"></i>Специальные товары</strong></div>
                    </div>
                    <div class="contents-sp">
                        <table id="table_vts" border="1" cellspacing="0">
                            <thead>
                                <tr>
                                    <td>товар</td>
                                    <td>условие</td>
                                    <td>размер возмещения</td>
                                    <td>максимальное кол-во</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3">Алкоголь</td>
                                    <td>1л (до 5 ед)</td>
                                    <td>0</td>
                                    <td rowspan="3">3 л</td>
                                </tr>
                                <tr>
                                    <td>1-2 л</td>
                                    <td>200 р/ед</td>
                                </tr>
                                <tr>
                                    <td>2-3 л</td>
                                    <td>500 р/ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td rowspan="6">Книги/сувениры/картины (не старше 1957 г. выпуска) </td>
                                    <td>до 2 кг</td>
                                    <td>0</td>
                                    <td rowspan="6">30 кг</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>3-5 кг</td>
                                    <td>500 р/ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>6-9 кг</td>
                                    <td>800 р/ед</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>10-20 кг</td>
                                    <td>1000 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>20-25 кг</td>
                                    <td>2000 р</td>
                                </tr>
                                <tr style="background:#e4e4e4;">
                                    <td>25-30 кг</td>
                                    <td>3000 р</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!--Конец / Возмещение таможенных расходов-->

            <script>
                jQuery(".closed").toggleClass("show");

                jQuery(".title-sp").click(function(){
                    jQuery(this).parent().toggleClass("show").children("div.contents-sp").slideToggle("medium");

                    if (jQuery(this).parent().hasClass("show")){
                        jQuery(this).children(".title_h3").removeClass("vts-active");
                    }
                    else {
                        jQuery(this).children(".title_h3").addClass("vts-active");
                    }
                });
            </script>

            </body>
        </html>
