<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Доставка посылок, коммерческих грузов, документов и интернет-заказов по ЛНР, ДНР, России, Украине, Крыму и всему миру.">
        <meta property="og:image" content="http://donbass-post.ru/images/logo.png">

        <title>Наша Почта | О компании, документы, парнеры, вакансии</title>

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

            <h1 style="position: absolute; top:-200px; display: block;">Наша почта ДНР отзывы, документы, вакансии, приём, на, работу</h1>

            <?include("header.php")?>

            <!--Шапка страницы-->
            <div class="head-abo">

                <div class="sub-menu-main">
                    <div class="sub-menu">
                        <ul>
                            <li><span>О КОМПАНИИ </span></li>
                            <li><a href="#docs">Документы </a></li>
                            <li><a href="#partners">Партнеры </a></li>
                            <li><a href="#vacancys">Вакансии </a></li>
                        </ul>
                    </div>
                </div>

                <div class="title-page"><span>О КОМПАНИИ</span></div>

            </div>
            <!--Конец / Шапка страницы-->

            <!--Цель и миссия-->
            <div class="content-abo">
                <span>НАША ПОЧТА -</span>
                <p>  молодая логистическая компания, которая занимается доставкой документов, посылок и грузов. Мы постоянно совершенствуем свои услуги, создавая новые возможности. Вся наша деятельность
                    направлена на выяснение и удовлетворение потребностей наших Клиентов.</p>

                <div class="cel-mis-main">
                    <div class="cel-mis">
                        <span>НАША ЦЕЛЬ</span>
                        <p>Обеспечить удобную и быструю доставку посылок и грузов.
                            Предоставить доступные тарифы и высокий сервис с целью поддержки, развития и налаживания контактов для граждан и бизнеса.</p>
                    </div>
                </div>

                <div class="cel-mis-main">
                    <div class="cel-mis">
                        <span>НАША МИССИЯ</span>
                        <p>Мы должны стать первым помощником клиентов в сфере логистики и доставки посылок по всей территории ЛДНР и за ее пределами,
                            предлагая широкий выбор надежных и эффективных решений.
                            Мы стремимся быть такой компанией, которой по праву гордятся сотрудники и доверяют Клиенты.</p>
                    </div>
                </div>
            </div>
            <!--Конец / Цель и миссия-->

            <!--Документы-->
            <div id="docs" class="main-bg-one section">
                <div class="zag-rubr">НАШИ ДОКУМЕНТЫ</div>

                <div class="docs-main-main">
                    <div class="docs-main">
                        <a href="docs/oferta.docx" target="_blank" >
                            <span>Скачать</span><br>
                            “Договор оферты”
                        </a>
                        <a href="docs/Oferta_dlya_raboty_s_IM.docx" target="_blank" style="margin-bottom: 50px;" >
                            <span>Скачать</span><br>
                            “Договор поручения по приобретению товара в интернет-магазине”
                        </a>
                        <a href="docs/Pravila_predostavleniya_uslug.docx" target="_blank" style="margin-bottom: 50px;" >
                            <span>Скачать</span><br>
                            “Правила предоставления услуг”
                        </a>
                    </div>

                    <div class="adres">
                        <span>Юридический адрес:</span>
                        <p>295006 Республика Крым, г. Симферополь, ул. Ленина, 14/2</p><br>
                        <span>Почтовый адрес:</span>
                        <p>344091 г. Ростов-на-Дону, ул. Малиновского, 3Б</p>
                    </div>
                </div>

                <div class="svid-main" style="text-align: center">

                    <div class="doc-heading">
                        <h4>ООО "Наша Почта"</h4>
                        <a href="#" class="link-svid np2 active" onclick="showSvid(event, 'np', 0); return false;">Свидетельство #1</a>
                        <a href="#" class="link-svid np2" onclick="showSvid(event, 'np', 1); return false;">Свидетельство #2</a>
                    </div>

                    <div class="doc-heading">
                        <h4>ООО "Почта-по-новому"</h4>
                        <a href="#" class="link-svid ppn2 active" onclick="showSvid(event, 'ppn', 0); return false;">Свидетельство</a>
                        <a href="#" class="link-svid ppn2" onclick="showSvid(event, 'ppn', 1); return false;">Справка ЕГР</a>
                    </div>

                    <style>
                        .doc-heading {
                            display: inline-block;
                            width: 400px;
                            margin-bottom: 20px;
                        }
                        .doc-heading > h4 {
                            color: #181818;
                            font: 20px 'Lato Medium';
                            font-weight: normal;
                        }
                        .link-svid {
                            font: 18px 'Lato Light';
                            display: inline-block;
                            width: 198px;
                            color: #c20303;
                            margin: 10px auto 0;
                        }
                        .link-svid.active {
                            text-decoration: none;
                        }
                    </style>

                    <div class="svid np">
                        <a class="remodal" style="max-width: 742px!important;" data-remodal-id="svid-one-np"><img data-remodal-action="confirm" style="max-width: 100%;"  src="images/abo/INN-KPP.jpg" /></a>
                        <a data-remodal-target="svid-one-np" href="#"><img src="images/abo/INN-KPP.jpg" /></a>
                    </div>
                    <div class="svid np" style="display: none">
                        <a class="remodal" style="max-width: 742px!important;" data-remodal-id="svid-two-np"><img data-remodal-action="confirm" style="max-width: 100%;"  src="images/abo/OGRN.jpg" /></a>
                        <a data-remodal-target="svid-two-np" href="#"><img src="images/abo/OGRN.jpg" /></a>
                    </div>

                    <div class="svid ppn">
                        <a class="remodal" style="max-width: 742px!important;" data-remodal-id="svid-one-ppn"><img data-remodal-action="confirm" style="max-width: 100%;"  src="images/ttwo.jpg" /></a>
                        <a data-remodal-target="svid-one-ppn" href="#"><img src="images/ttwo.jpg" /></a>
                    </div>
                    <div class="svid ppn" style="display: none">
                        <a class="remodal" style="max-width: 742px!important;" data-remodal-id="svid-two-ppn"><img data-remodal-action="confirm" style="max-width: 100%;"  src="images/oone.jpg" /></a>
                        <a data-remodal-target="svid-two-ppn" href="#"><img src="images/oone.jpg" /></a>
                    </div>
                </div>
            </div>
            <!--Конец / Документы-->


            <!--Партнеры-->
            <div id="partners" class="main-bg-two section">
                <div class="zag-rubr">НАШИ ПАРТНЕРЫ</div>

                <div class="blok-three-main">
                    <div class="blok-three par">
                        <a target="_blank" href="http://www.donbass-tour.ru/"><img src="images/abo/dt.jpg" /></a>
                        <span>Экспресс-рейсы в Крым<br>
                            "<a class="link-under" target="_blank" href="http://www.donbass-tour.ru/">Донбасс-Тур</a>"
                        </span>
                    </div>
                </div>
                <div class="blok-three-main">
                    <div class="blok-three par">
                        <a target="_blank" href="https://nrg-tk.ru"><img src="images/ener.png" /></a>
                        <span>Транспортная компания<br>
                            "<a class="link-under" target="_blank" href="https://nrg-tk.ru">Энергия</a>"
                        </span>
                    </div>
                </div>

                <div class="blok-three-main">
                    <div class="blok-three par">
                        <a target="_blank" href="http://e-mobi.com.ru/"><img src="images/abo/e-mobi.png" /></a>
                        <span>Интернет-магазин<br>
                            "<a class="link-under" target="_blank" href="http://e-mobi.com.ru/">E-mobi</a>"
                        </span>
                    </div>
                </div>


            </div>
            <!--Конец / Партнеры-->


            <!--Вакансии-->
            <div id="vacancys" class="main-bg-one section">
                <div class="zag-rubr">ВАКАНСИИ</div>

                <div class="blok-three-main" class="blok-three-main">
                    <div class="blok-three vac">
                        <img src="images/abo/prod.png" />
                        <span>МЕНЕДЖЕР ПО ПРОДАЖАМ</span>
                        <div class="vac-city">
                            <p><span>Город:</span> Донецк, Макеевка, Горловка, Севастополь, Симферополь, Ростов-на-Дону</p>
                        </div>
                        <p>Приветствуется опыт работы в страховых компаниях, коммуникабельность и обучаемость.</p>
                    </div>
                </div>

                <div class="blok-three-main">
                    <div class="blok-three vac">
                        <img src="images/abo/pr.png" />
                        <span>PR-МЕНЕДЖЕР, МАРКЕТОЛОГ</span>
                        <div class="vac-city">
                            <p><span>Город:</span> Донецк, Макеевка, Севастополь, Симферополь, Ростов-на-Дону</p>
                        </div>
                        <p>Опыт работы - обязателен. Желательно наличие портфолио.<br><br><br></p>
                    </div>
                </div>

                <div class="btn-main">
                    <a data-remodal-target="form-resume" class="btn cn">
                        <span class="btn-ico"></span><span class="btn-txt">ОТПРАВИТЬ РЕЗЮМЕ</span>
                    </a>
                </div>
            </div>
            <!--Конец / Вакансии-->

            <?include("share.php")?>

            <?include("footer.php")?>


            <!--Форма резюме-->
            <div  class="remodal" data-remodal-id="form-resume">
                <button data-remodal-action="close" class="remodal-close"></button>

                <form style="min-height:480px;" onsubmit="alert('Резюме принято для рассмотрения!')" class="window_form" id="form_res" action="php/send_form_res.php" enctype="multipart/form-data" method="post">

                    <div class="form-main" style="margin-bottom:0px!important;">
                        <span>Ваше ФИО</span>
                        <input type="text" id="form_res_name" name="form_res_name" required/>

                        <div class="form-left">
                            <span>Телефон</span>
                            <input type="text" id="form_res_tel" name="form_res_tel" required/>
                        </div>

                        <div class="form-right">
                            <span>Эл. адрес</span>
                            <input type="text" id="form_res_mail" name="form_res_mail"/>
                        </div></div>

                    <div style="margin-bottom:0;" class="form-main" >
                        <span>Желаемая должность и город работы</span>
                        <input type="text" id="form_res_vac" name="form_res_vac" required/>
                    </div>


                    <div class="inputfile" style="border:0;padding:0;" >
                        <span>Прикрепите резюме </span>
                        <input style="padding:10px; box-sizing:border-box; " id="file" name="file" type="file"/>
                    </div>

                    <input type="submit" id="form_res_send" name="form_res_send" value="ОТПРАВИТЬ" />

                </form>
            </div>
            <!--Конец / Форма резюме-->

            <script>

                function showSvid(event, className, index) {

                    $('.link-svid'+'.' + className + '2').removeClass('active');
                    $(event.target).addClass('active');

                    var docks = $('.' + className);

                    $(docks).hide();
                    $(docks[index]).show();
                }
            </script>

            </body>
        </html>
