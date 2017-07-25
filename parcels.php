<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Вам необходимо отправить посылку или документы в ДНР, ЛНР, Россию, Украину или Крым? Наша Почта доставит груз в нужное место и время по доступной цене!">
        <meta property="og:image" content="http://donbass-post.ru/images/logo.png">

        <title>Наша Почта | Посылки и Документы в ДНР, ЛНР, Россию, Украину, Крым</title>

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

            <h1 style="position: absolute; top:-500px; display: block;">Отправить посылку из Донецка, Макеевки, Горловки, Енакиево, Шахтерска, Снежного, Луганска, Красного Луча, Краснодона, Алчевска, Стаханова, Ясиноватой, Севастополя, Симферополя. Из России в ДНР, из Украины в ДНР.</h1>

            <?include("header.php")?>


            <!--Шапка страницы-->
            <div class="head-parcels">
                <div class="sub-menu-main">
                    <div class="sub-menu">
                        <ul>
                            <li><p class="back" onclick="return location.href = 'delivery.php'" href="delivery.php">< </p></li>
                            <li><span>Посылки и документы </span></li>
                            <li><a href="#about">Как отправить посылку </a></li>
                            <li><a href="#fromrus">Доставка из России </a></li>
                            <li><a href="#fromcrim">Доставка из Крыма </a></li>

                            <li><a href="#fromukr">Доставка из Украины </a></li>
                        </ul>
                    </div>
                </div>

                <div class="title-single title-parcels">
                    <img src="images/del/parcel.png" />
                    <span>ПОСЫЛКИ И</span>
                    <span>ДОКУМЕНТЫ</span>
                </div>

            </div>
            <!--Конец / Шапка страницы-->

            <!--О доставке-->
            <div id="about" class="main-bg-two section">
                <div class="zag-rubr">КАК ОТПРАВИТЬ ПОСЫЛКУ?</div>

                <div class="blok-three-main">
                    <div class="blok-three parcels">
                        <img src="images/del/money/house.png" />
                        <span>1. ОБРАТИТЕСЬ</span>
                        <p class="font-light">в ближайшее <a target="_blank" class="link-under" href="branches.php">отделение </a>"Наша Почта" с <b>данными о получателе</b> (ФИО, серия и № паспорта, город, телефон, адрес/индекс отделения транспортной компании). Для отправления юридическому лицу необходимо знать ИНН, КПП. </p>
                    </div>
                </div>

                <div class="blok-three-main">
                    <div class="blok-three parcels">
                        <img src="images/del/shops/get.png" />
                        <span>2. ПРЕДОСТАВЬТЕ</span>
                        <p class="font-light">посылку, вместе с <b>описью содержимого</b>, оператору для расчета стоимости доставки.</p>
                    </div>
                </div>

                <div class="blok-three-main">
                    <div class="blok-three parcels">
                        <img src="images/del/parcels/oplata.png" />
                        <span>3. ОПЛАТИТЕ</span>
                        <p class="font-light">услуги доставки или укажите оплату получателем. Стоимость и сроки доставки Вы можете рассчитать, воспользовавшись нашим <a href="#" class="link-under" data-remodal-target="form-calc">расчетом стоимости</a>.</p>
                    </div>
                </div>
            </div>
            <!--Конец / О доставке-->


            <!--Посылки из России-->
            <div id="fromrus" class="main-bg-one section">
                <div style="position:relative" class="zag-rubr">ДОСТАВКА ИЗ РОССИИ <a href="#list" data-remodal-target="list" style="position:absolute; right: 0; top:0;" class="link-under">Образец заполнения письма</a></div>
                <div class="blok-three-main">
                    <div class="blok-three parcels">
                        <img src="images/del/shops/write.png" />
                        <span>1. СОСТАВЬТЕ</span>
                        <p class="font-light">лист с <b>описью содержимого</b> посылки и <b>данными о получателе в ЛДНР</b>
                            и <b>вложите</b> его в посылку.</p>

                        <h5 style="padding: 10px 0;font: 20px 'Lato Medium';">Необходимые данные о получателе:</h5>
                        <p class="font-light" style="text-align: left;padding-left: 20px; margin-bottom: 30px;"> 1. Фамилия Имя Отчество<br>
                            2. Контактный телефон<br>
                            3. <a href="branches.php" class="link-under" target="_blank">Отделение</a> для получения
                        </p>
                    </div>
                </div>
                <style>
                    table {
                        font-family: 'Lato Light';
                    }
                </style>

                <div class="blok-three-main">
                    <div style="padding-bottom:15px;" class="blok-three parcels">
                        <img src="images/del/shops/get.png" />
                        <span>2. ОБРАТИТЕСЬ</span>
                        <p class="font-light">в отделение транспортной компании:<br>
                        <table style="width: 90%;display: block;margin: auto;">

                            <tr>
                                <td colspan="2" style="padding-top: 15px">Все грузы, кроме продуктовых:</td>
                            </tr>
                            <tr>
                                <td><img style="width:140px" src="images/ener.png" /></td>
                                <td style="padding-left: 25px; width:150px"><span style="margin:0;display: inline;font: 20px 'Lato Medium';text-align: center;">ТК «Энергия»</span><br>
                                    <a href="https://nrg-tk.ru/contacts/russia/" target="_blank" style="display: inline;font: 18px 'Lato Light';text-align: center;" class="link-under">Смотреть адреса</a>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="padding-top: 15px">Личные товары, в т.ч. продукты:</td>
                            </tr>
                            <tr>
                                <td><img src="images/del/parcels/pr.png" /></td>
                                <td style="padding-left: 25px;"><span style="margin:0;display: inline;font: 20px 'Lato Medium';text-align: center;">Почта России</span><br>
                                    <a href="https://www.pochta.ru/offices" target="_blank" style="display: inline;font: 18px 'Lato Light';text-align: center;" class="link-under">Смотреть адреса</a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="padding-top: 15px">Если Вас не удовлетворили условия этих компаний:</td>
                            </tr>
                            <tr style="text-align:center">
                                <td style="padding:10px" colspan="2">
                                    <a href="#" class="link" onclick="showOther(event)">Другие компании </a><span id="chevron">&or;</span>
                                </td>
                            </tr>

                            <script>
                                function showOther(event) {
                                    event.preventDefault();
                                    $('.other_tk').toggleClass('hidden');
                                    $('#chevron').toggleClass('chevron_top');
                                }
                                function showOther2(event) {
                                    event.preventDefault();
                                    $('.tk-wrap').toggleClass('hidden');
                                    $('#chevron1').toggleClass('chevron_top');
                                }

                            </script>
                            <style>
                                .hidden {
                                    display: none;
                                }
                                #chevron, #chevron1 {
                                    display: inline-block;
                                    color: #c20303;
                                    vertical-align: baseline;
                                    height: 10px;
                                    line-height: 5px;
                                }
                                .chevron_top {
                                    transform: scale(-1);
                                    vertical-align: middle;
                                }
                            </style>

                            <tr class="other_tk hidden">
                                <td><img src="images/del/parcels/kit.png" /></td>
                                <td style="padding-left: 25px;"><span style="margin:0;display: inline;font: 20px 'Lato Medium';text-align: center;">ТК Кит</span><br>
                                    <a href="http://tk-kit.ru/contact/representative/" target="_blank" style="display: inline;font: 18px 'Lato Light';text-align: center;" class="link-under">Смотреть адреса</a>
                                </td>
                            </tr>
                            <tr class="other_tk hidden">
                                <td><img src="images/del/parcels/dellin.png" /></td>
                                <td style="padding-left: 25px;"><span style="margin:0;display: inline;font: 20px 'Lato Medium';text-align: center;">Деловые Линии</span><br>
                                    <a href="http://www.dellin.ru/contacts/" target="_blank" style="display: inline;font: 18px 'Lato Light';text-align: center;" class="link-under">Смотреть адреса</a>
                                </td>
                            </tr>
                            <tr class="other_tk hidden">
                                <td><img src="images/del/parcels/pek.png" /></td>
                                <td style="padding-left: 25px;"><span style="margin:0;display: inline;font: 20px 'Lato Medium';text-align: center;">ПЭК</span><br>
                                    <a href="http://pecom.ru/contacts/list-filials/" target="_blank" style="display: inline;font: 18px 'Lato Light';text-align: center;" class="link-under">Смотреть адреса</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div style="margin-bottom: 20px;" class="blok-three-main">
                    <div class="blok-three parcels">
                        <img src="images/del/commerce/3.png" />
                        <span>3. ОТПРАВЬТЕ</span>
                        <p class="font-light">посылку, указывая следующие данные: <br><br>
                            Для <b>ТК «Энергия»</b> - ФИО, телефон, адрес получателя в ЛДНР.


                        <div style="padding:10px">
                            <a href="#" class="link" onclick="showOther2(event)">Для других компаний </a><span id="chevron1">&or;</span>
                        </div>


                        <div class="tk-wrap hidden">
                            <div class="tk-tabs">
                                <span class="tk-tab tk-pr"></span>
                                <span class="tk-tab tk-kit"></span>
                                <span class="tk-tab tk-dl"></span>
                                <span class="tk-tab tk-pek"></span>
                            </div>
                            <div class="tk-tab_content">
                                <div class="tk-tab_item">
                                    <h4 style="padding: 10px 15px;font: 20px 'Lato Medium';text-align: left;border-bottom:1px solid #c20303;">Данные для Почты России:</h4>
                                    <p style="text-align: left;padding: 10px 0 30px 15px;" class="font-light">
                                        <b>Получатель:</b> ООО «Наша Почта»<br>
                                        <b>Адрес:</b> Россия, г. Ростов-на-Дону, ул. Малиновского, 3Б<br>
                                        <b>Индекс:</b> 344091
                                    </p>
                                </div>
                                <div class="tk-tab_item">
                                    <h4 style="padding: 10px 15px;font: 20px 'Lato Medium';text-align: left;border-bottom:1px solid #c20303;">Данные для ТК Кит:</h4>
                                    <p style="text-align: left;padding: 10px 0 30px 15px;" class="font-light">
                                        <b>Получатель:</b> ООО «Наша Почта»<br>
                                        <b>Адрес:</b> Россия, г. Ростов-на-Дону, пр-т Стачки, 249<br>
                                        <b>Tелефон:</b> +79885448882
                                    </p>
                                </div>
                                <div class="tk-tab_item">
                                    <h4 style="padding: 10px 15px;font: 20px 'Lato Medium';text-align: left;border-bottom:1px solid #c20303;">Данные для Деловых Линий:</h4>
                                    <p style="text-align: left;padding: 10px 0 30px 15px;" class="font-light">
                                        <b>Получатель:</b> ООО «Наша Почта»<br>
                                        <b>Адрес:</b> Россия, г. Ростов-на-Дону, ул. Малиновского, 3<br>
                                        <b>Tелефон:</b> +79885448882
                                    </p>
                                </div>
                                <div class="tk-tab_item">
                                    <h4 style="padding: 10px 15px;font: 20px 'Lato Medium';text-align: left;border-bottom:1px solid #c20303;">Данные для ПЭК:</h4>
                                    <p style="text-align: left;padding: 10px 0 30px 15px;" class="font-light">
                                        <b>Получатель:</b> ООО «Наша Почта»<br>
                                        <b>Адрес:</b> Россия, г. Ростов-на-Дону, ул. Каширская, 5<br>
                                        <b>Tелефон:</b> +79885448882
                                    </p>
                                </div>
                                <span style="font: 14px 'Lato Regular';color: #c20303; margin-bottom:30px;"> * после отправления необходимо зарегистрировать получателя в форме, приведеннной ниже</span>
                            </div>
                        </div>


                        </p>
                </div>
            </div>
            <div class="btn-main">
                <a onclick="getOptions('rus')" data-remodal-target="form-pol" class="btn">
                    <span class="btn-ico"></span><span class="btn-txt">ФОРМА РЕГИСТРАЦИИ</span>
                </a>
            </div>
        </div>


        <div id="fromcrim" class="main-bg-one section">
            <div style="position:relative" class="zag-rubr">ДОСТАВКА ИЗ КРЫМА</div>
            <div class="blok-three-main">
                <div class="blok-three parcels">
                    <img src="images/del/shops/write.png" />
                    <span>1. СОСТАВЬТЕ</span>
                    <p class="font-light">лист с <b>описью содержимого</b> посылки и <b>данными о получателе в ЛДНР</b>
                        и <b>вложите</b> его в посылку.</p>

                    <h5 style="padding: 10px 0;font: 20px 'Lato Medium';">Необходимые данные о получателе:</h5>
                    <p class="font-light" style="text-align: left;padding-left: 20px; margin-bottom: 30px;"> 1. Фамилия Имя Отчество<br>
                        2. Контактный телефон<br>
                        3. <a href="branches.php" class="link-under" target="_blank">Отделение</a> для получения
                    </p>
                </div>
            </div>

            <div class="blok-three-main">
                <div style="padding-bottom:15px;" class="blok-three parcels">
                    <img src="images/del/shops/get.png" />
                    <span>2. ОБРАТИТЕСЬ</span>
                    <p class="font-light">в <a class="link-under" href="./branches.php" target="_blank">наше отделение</a> или отделение <a class="link-under" href="http://www.crimea-post.ru/offices/" target="_blank">"Почты Крыма"</a>.<br>
                </div>
            </div>

            <div style="margin-bottom: 20px;" class="blok-three-main">
                <div class="blok-three parcels">
                    <img src="images/del/commerce/3.png" />
                    <span>3. ОТПРАВЬТЕ</span>
                    <p class="font-light" style="text-align: left; width:90%; margin:auto;">посылку, указывая следующие данные: <br><br>
                        <strong>Индекс:</strong> 299034 <br>
                        <strong>Адрес:</strong> г. Севастополь, ул. Привокзальная 3а <br>
                        <strong>Получатель:</strong>ООО «Наша Почта» <br>
                        <strong>Номер телефона:</strong> +79789901350
                    </p>
                    <span style="font: 14px 'Lato Regular';color: #c20303; margin-bottom:30px;"> * после отправления необходимо зарегистрировать получателя в форме, приведеннной ниже</span>
                </div>
            </div>
            <div class="btn-main">
                <a onclick="getOptions('crm')" data-remodal-target="form-pol" class="btn">
                    <span class="btn-ico"></span><span class="btn-txt">ФОРМА РЕГИСТРАЦИИ</span>
                </a>
            </div>
        </div>
        <!--Конец / Посылки из России-->


        <!--Посылки из Украины-->
        <div id="fromukr" class="main-bg-two section">
            <div class="zag-rubr">ДОСТАВКА ИЗ УКРАИНЫ</div>
            <div class="blok-three-main">
                <div class="blok-three parcels">
                    <img src="images/del/parcels/call.png" />
                    <span>1. ПРОКОНСУЛЬТИРУЙТЕСЬ</span>
                    <p class="font-light">у оператора Call-центра о возможности доставки Вашей посылки и <b>получите реквизиты</b> к отправлению.</p>
                </div>
            </div>

            <div class="blok-three-main">
                <div class="blok-three parcels">
                    <img src="images/del/shops/get.png" />
                    <span>2. ОТПРАВЬТЕ</span>
                    <p class="font-light">посылку из любого отделения транспортной компании, которую укажет оператор и <b>оплатите пересылку по Украине</b>.</p>
                </div>
            </div>

            <div style="margin-bottom: 20px;" class="blok-three-main">
                <div class="blok-three parcels">
                    <img src="images/del/commerce/3.png" />
                    <span>3. ЗАРЕГИСТРИРУЙТЕ</span>
                    <p class="font-light">отправление и данные о получателе в форме, приведенной ниже.</p>
                </div>
            </div>


            <div class="warning">
                <span>Ограничения по содержимому посылок для доставки из/в Украину</span>
                <p class="font-light" > 1. Принимаются посылки фактическим весом до 10 кг, объемным весом до 10 кг.<br>
                    2. Наибольшая из сторон не должна превышать 80 см (если две другие узкие).<br>
                    3. Принимаются только товары личного пользования (коммерция для транспортировки не принимается).<br>
                    4. Если вещи новые — не более 2-3 единиц без этикеток.<br>
                    5. Лекарства — не более 2-3 упаковок, наличие чека и инструкции обязательно. Рецептурные лекарства не принимаются.<br>
                    6. Продукты — возможна перевозка в небольших количествах по согласованию с перевозчиком.<br>
                    7. При доставке любого вида новой техники обязательно наличие чека.<br>
                    8. При доставке б/у техники необходимо наличие тех. паспорта (инструкции), при возможности старые чеки. В случае отсутствия - по согласованию.<br>
                    9. Посылки с наложенным платежом - <b>не принимаются</b> к доставке.
                </p>
            </div>

            <div class="btn-main">
                <a onclick="getOptions('ukr')" data-remodal-target="form-pol" class="btn">
                    <span class="btn-ico"></span><span class="btn-txt">ФОРМА РЕГИСТРАЦИИ</span>
                </a>
            </div>
        </div>
        <!--Конец / Посылки из Украины-->

        <?include("share.php")?>

        <?include("footer.php")?>

        <!--Форма регистрации-->
        <div  class="remodal" data-remodal-id="form-pol">
            <button data-remodal-action="close" class="remodal-close"></button>

            <form class="window_form" id="form_pol" action="" method="POST">

                <div class="form-main">
                    <span>ФИО получателя</span>
                    <input type="text" id="form_pol_name_pol" name="form_pol_name_pol" required />

                    <div class="form-left">
                        <span>Телефон получателя</span>
                        <input type="text" id="form_pol_tel_pol" name="form_pol_tel_pol" required />
                    </div>

                    <div class="form-right">
                        <span>Город получения</span>
                        <select size="1" id="form_pol_city_pol" name="form_pol_city_pol" >
                            <?include("php/forms/city_select.php")?>
                        </select>
                    </div>
                </div>

                <hr align="left" width="100%" size="2" color=" #c20303 " style="margin-bottom: 15px;" />

                <div class="form-main">
                    <span>ФИО отправителя</span>
                    <input type="text" id="form_pol_name_otp" name="form_pol_name_otp" required />

                    <div class="form-left">
                        <span>Телефон отправителя</span>
                        <input type="text" id="form_pol_tel_otp" name="form_pol_tel_otp" required />
                    </div>

                    <div class="form-right">
                        <span>Город отправления</span>
                        <input type="text" id="form_pol_city_otp" name="form_pol_city_otp" required />
                    </div>
                </div>

                <hr align="left" width="100%" size="2" color=" #c20303 " style="margin-bottom: 15px;" />

                <div class="form-main">
                    <div class="form-left">
                        <span>Транспортная компания</span>
                        <select size="1" id="form_pol_tk" name="form_pol_tk">
                        <option value="0">Выберите</option>
                        <option value="1">ТК Кит</option>
                        <option value="2">Деловые Линии</option>
                        <option value="3">ПЭК</option>
                        <option value="4">Почта России</option>
                        <option value="5">ИнТайм</option>
                        <option value="6">Новая Почта</option>
                        <option value="7">Почта Крыма</option>
                        </select>
                    </div>

                    <div class="form-right">
                        <span>Идентификатор посылки</span>
                        <input type="text"  id="form_pol_id" name="form_pol_id" required />
                    </div>
                </div>

                <div class="form-main">
                    <span>Оплата:</span>

                    <input style="display: inline;width: inherit;margin: 10px;"  type="radio" name="whoPay" value="otp" id="whoPay1">
                    <label style="margin-right:30px" class="font-light" for="whoPay1">Отправителем</label>

                    <input style="display: inline;width: inherit;margin: 10px;"  type="radio" name="whoPay" value="pol" id="whoPay2">
                    <label class="font-light" for="whoPay2">Получателем</label>
                </div>

                <input type="button" onclick="send_form_pol()" value="ОТПРАВИТЬ" />
            </form>
        </div>
        <!--Форма регистрации конец-->



        <div style="max-width:960px; padding: 30px" class="remodal" data-remodal-id="list">
            <button data-remodal-action="close" class="remodal-close"></button>

            <p class="font-light" style="padding: 0 0 30px 0">
            1. При отправлении письма <b>из России</b> отправитель заполняет конверт следующим образом:
            </p>
            <img src="./images/convertFrom.jpg" width="100%" alt="">

            <br>
            <br>
            <br>

            <p class="font-light" style="padding: 0 0 30px 0">
            2. При отправлении письма <b>в Россию</b> отправитель заполняет конверт следующим образом:
            </p>
            <img src="./images/convertTo.jpg" width="100%" alt="">

        </div>
    </body>
</html>
