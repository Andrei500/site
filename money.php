<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Денежные переводы в конверте и через Сбербанк России в ДНР, ЛНР, Россию, Украину, Крым.">
        <meta property="og:image" content="http://donbass-post.ru/images/logo.png">

        <title>Наша Почта | Доставка денежных средств, денежные переводы</title>

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

            <h1 style="position: absolute; top:-200px; display: block;">Отправить перевод в ДНР ЛНР Крым Россию, на карту Сбербанка.</h1>

            <?include("header.php")?>

            <!--Шапка Страницы-->
            <div class="head-money">

                <div class="sub-menu-main">
                    <div class="sub-menu">
                        <ul>
                            <li>
                                <p class="back" onclick="return location.href = 'delivery.php'" href="delivery.php">
                                    < </p>
                            </li>
                            <li><span>Денежные средства </span></li>
                            <li><a href="#inside">По ЛДНР и Крыму </a></li>
                            <li><a href="#inrus">Из/в Россию </a></li>
                        </ul>
                    </div>
                </div>

                <div class="title-single title-money">
                    <img src="images/del/money.png" />
                    <span>ДЕНЕЖНЫЕ</span>
                    <span>СРЕДСТВА*</span>
                    <p class="font-light" style="clear:both; font-size:16px; color:#fff; margin-top:15px; text-shadow: 5px 5px 5px #000">* Доставка денежных средств не является переводом денежных средств и осуществляется путем перевозки наземным транспортном.</p>
                </div>

            </div>
            <!--Конец / Шапка Страницы-->


            <!--По ЛДНР и Крыму-->
            <div id="inside" class="main-bg-two section">
                <div class="zag-rubr">ДОСТАВКА ПО ЛДНР И КРЫМУ</div>

                <div class="blok-three-main">
                    <div class="blok-three money">
                        <img src="images/del/money/house.png" />
                        <span>1. ОБРАТИТЕСЬ</span>
                        <p class="font-light">в ближайшее <a class="link-under" target="_blank" href="branches.php">отделение</a> "Наша Почта".</p>
                    </div>
                </div>

                <div class="blok-three-main">
                    <div class="blok-three money">
                        <img src="images/del/money/convert.png" />
                        <span>2. ОТПРАВЬТЕ</span>
                        <p class="font-light">конвертом необходимую сумму получателю.
                        </p>
                    </div>
                </div>

                <div class="blok-three-main">
                    <div class="blok-three money">
                        <img src="images/del/parcels/oplata.png" />
                        <span>3. ОПЛАТИТЕ</span>
                        <p class="font-light">услуги доставки или укажите оплату получателем.
                        </p>
                    </div>
                </div>

                <!--Быстрый расчет-->
                <div class="adr-fil-main">Расчет стоимости услуги</div>

                <form class="money-calc">

                    <div class="money-calc-sel">
                        <span>Откуда</span>
                        <select size="1" id="from" name="from" onchange="quikly_calc($(this).val(), $('#to').val(), $('#quikly-summ').val())">
                            <option value="0">Выберите</option>
                            <option value="1">Горловка</option>
							<option value="1">Дебальцево</option>
							<option value="1">Донецк</option>
							<option value="1">Енакиево</option>
                            <option value="1">Макеевка</option>
                            <option value="1">Снежное</option>
                            <option value="1">Шахтерск</option>
                            <option value="1">Ясиноватая</option>
                            <option value="2">Луганск</option>
                            <option value="2">Алчевск</option>
                            <option value="2">Стаханов</option>
							<option value="3">Евпатория</option>
							<option value="3">Севастополь</option>
                            <option value="3">Симферополь</option>
							<option value="3">Феодосия</option>
							<option value="3">Ялта</option>
                            <option value="4">Ростов-на-Дону</option>
                        </select>
                    </div>

                    <div class="money-calc-sel">
                        <span>Куда</span>
                        <select size="1" id="to" name="to" onchange="quikly_calc($('#from').val(), $(this).val(), $('#quikly-summ').val())">
                            <option value="0">Выберите</option>
                            <option value="1">Донецк</option>
                            <option value="1">Макеевка</option>
                            <option value="1">Горловка</option>
                            <option value="1">Енакиево</option>
                            <option value="1">Снежное</option>
                            <option value="1">Шахтерск</option>
                            <option value="1">Ясиноватая</option>
                            <option value="1">Дебальцево</option>
                            <option value="2">Луганск</option>
                            <option value="2">Алчевск</option>
                            <option value="2">Стаханов</option>
                            <option value="2">Красный луч</option>
                            <option value="3">Симферополь</option>
                            <option value="3">Севастополь</option>
                            <option value="4">Ростов-на-Дону</option>
                            <option value="5">ДРУГИЕ ГОРОДА РОССИИ</option>
                        </select>
                    </div>

                    <div class="money-calc-in">
                        <span>Отправляемая сумма, р</span>
                        <input type="text" id="quikly-summ" name="quikly-summ" onkeyup="quikly_calc($('#from').val(), $('#to').val(), $(this).val())" />
                    </div>

                    <div class="money-calc-in">
                        <span>Стоимость доставки</span>
                        <div class="kopl">
                            <strong id="result">0 р</strong>
                        </div>
                    </div>

                </form>
                <!--Конец / Быстрый расчет-->

            </div>
            <!--Конец / По ЛДНР и Крыму-->


            <!--Из/в Россию-->
            <div id="inrus" class="main-bg-one section" style="position:relative">
                <div class="zag-rubr">Доставка из России через Банки РФ и др. платежные системы</div>



                <div class="list">
                    <div class="num">1</div>
                    <div class="instr">
                        <p class="font-light">Из любого банка или платежной системы вышлите необходимую сумму на
                            <a href="#" data-remodal-target="price_money_del" class="link-under">наши реквизиты</a> (карта СберБанка). <br>
                            <span style="font: 14px 'Lato Regular';color: #c20303; margin-bottom:30px;">* комиссия, снимаемая при переводе, оплачивается Вами, согласно тарифам используемого банка или платежной системы</span>
                        </p>
                    </div>
                </div>
                <div class="list">
                    <div class="num">2</div>
                    <div class="instr">
                        <p class="font-light">После отправки <b>зарегистрируйте</b> денежное отправление в форме, приведенной ниже. <br>
                            <br>
                            <br>
                            <br>
                        </p>
                    </div>
                </div>

                <span style="font-size: 20px;font-family: 'Lato Light';text-align: center;display: block;margin-top: 15px; margin-bottom: 15px;"><b style="font-size:20px;">Консультация по отправлению денежных средств из России:</b><br>

                    <p>+7 (863) 308-25-01 &rarr; «Вызов» &rarr; 0713027326</p></span>

                <span style="font-size: 20px;font-family: 'Lato Light';text-align: center;display: block;margin-top: 15px; margin-bottom: 15px;">
                    <p>+7 (863) 308-25-00 &rarr; «Вызов» &rarr; 0713027326</p></span>
                <!--                <span class="wrng"><b>!</b>В связи с проблемами со связью в ДНР, номера временно не работают.</span>-->

                <style>
                    .wrng {
                        float: right;
                        font-size: 12px;
                        right: 270px;
                        top: 295px;
                        position: absolute;
                        font-family: 'Lato Regular';
                        display: block;
                        width: 180px;
                        color: #c20303;
                    }
                    .wrng > b {
                        font-size: 55px;
                        line-height: 0.8;
                        float: left;
                    }
                </style>


                <span style="font-size: 20px;font-family: 'Lato Light';text-align: center;display: block;margin-top: 15px; margin-bottom: 15px;">
                    +7 (863) 333-52-06</span>

                <div class="btn-main">
                    <a data-remodal-target="money-trans" class="btn sb">
                        <span class="btn-ico"></span><span class="btn-txt">ФОРМА РЕГИСТРАЦИИ</span>
                    </a>
                </div>
                <div class="adr-fil-main">Расчет стоимости услуги</div>
                <form class="window_form" style="    min-height: 140px!important;padding-top: 0px;padding-left: 10px;padding-right: 10px;padding-bottom: 15px;border-bottom-width: 0px;margin-top: 10px;background-color: rgba(255,255,255,0.7);" action="" method="POST">


                    <div class="form-main" style="float: none;width: 31%;display: inline-block;margin: 1%;">
                        <span>Получение<br>отправления в</span>
                        <select size="1" id="otdelenie-one" name="otdelenie" onchange="change_summ_one($(this).val(), $('#user_summ-one').val())">
                            <option value="1">ДНР</option>
                            <option value="2">ЛНР</option>
                        </select>
                    </div>
                    <div class="form-left" style="float: none;width: 31%;display: inline-block;vertical-align: top;margin: 1%;">
                        <span>Отправляемая<br>сумма:</span>
                        <input value="0" id="user_summ-one" onkeyup="change_summ_one($('#otdelenie-one').val(), $(this).val())">
                    </div>

                    <div class="form-right" style="float: none;width: 31%;vertical-align: top;display: inline-block;margin: 1%;">
                        <span>К выдаче на руки<br>получателю:</span>
                        <div class="kopl">
                            <strong id="total-one" style="font-weight:normal!important;">0 р</strong>
                        </div>
                    </div>


                </form>

            </div>
            <!--Конец / Из/в Россию-->


            <?include("share.php")?>

            <?include("footer.php")?>

            <!--Регистрация перевода-->
            <div class="remodal" data-remodal-id="money-trans">
                <button data-remodal-action="close" class="remodal-close"></button>
                <form class="window_form" id="form_mon" action="" method="POST">

                    <div class="form-main">
                        <span>ФИО отправителя</span>
                        <input type="text" id="name_otp" name="name_otp" required />

                        <div class="form-left">
                            <span>Телефон отправителя</span>
                            <input type="text" id="phone_otp" class="mask" name="phone_otp" required />
                        </div>

                        <div class="form-right">
                            <span>Город отправления</span>
                            <input type="text" id="city_otp" name="city_otp" required />
                        </div>
                        <div id="block_what" class="form-left" style="width:100%;">
                            <span>Чем отправлено?</span>
                            <select size="1" id="what" name="what" onchange="change_what($('#this').val())">
                                <option value="0">Выбрать</option>
                                <option value="1">Отделение Сбербанка</option>
                                <option value="2">Банкомат Сбербанка</option>
                                <option value="3">Сбербанк Онлайн</option>
                                <option value="4">Другой банк или денежная система</option>
                            </select>
                        </div>
                        <div style="display:none;" id="name_other_bank" class="form-right">
                            <span>Название</span>
                            <input type="text" id="other_bank" name="other_bank" autofocus/>
                        </div>
                        <div style="display:none;" id="card_number" class="form-right">
                            <span>Номер карты</span>
                            <input type="text" id="card_number" name="card_number" autofocus/>
                        </div>
                        <div style="display:none;" id="osb" class="form-right">
                            <span>Номер ОСБ</span>
                            <input type="text" id="osb" name="osb" autofocus/>
                        </div>
                        <div style="width: 50%;margin: auto;text-align: center;/* height: 100px; */clear: both;padding-top: 5px" class="form-center">
                            <span>Время с чека</span>
                            <input type="text" id="time" name="time" />
                        </div>
                    </div>

                    <hr align="left" width="100%" size="2" color=" #c20303 " style="margin-bottom: 15px;" />

                    <div class="form-main">
                        <span>ФИО получателя</span>
                        <input type="text" id="name_pol" name="name_pol" required />

                        <div class="form-left">
                            <span>Телефон получателя</span>
                            <input type="text" value="+380" id="phone_pol" name="phone_pol" required />
                        </div>

                        <div class="form-right">
                            <span>Город получения</span>
                            <select size="1" id="otdelenie" name="otdelenie" onchange="change_summ($(this).val(), $('#user_summ').val())">
                                <?include("php/forms/city_select.php")?>
                            </select>
                        </div>
                    </div>

                    <hr align="left" width="100%" size="2" color=" #c20303 " style="margin-bottom: 15px;" />

                    <div class="form-main">

                        <div class="form-left">
                            <span>Отправляемая<br>сумма:</span>
                            <input type="text" id="user_summ" name="user_summ" value="0" onkeyup="change_summ($('#otdelenie').val(), $(this).val())" />
                        </div>

                        <div class="form-right">
                            <span>К выдаче на руки<br>получателю:</span>
                            <div class="kopl-form"><strong id="total">0 р</strong></div>
                            <input type="hidden" id="window_summ" name="window_summ" />
                            <input type="hidden" id="sb_proc" name="sb_proc" />
                            <input type="hidden" id="our_proc" name="our_proc" />
                            <input type="hidden" id="okrug" name="okrug" />
                        </div>
                    </div>
                    <input type="button" onclick="send_form_mon()" value="ОТПРАВИТЬ" />
                </form>
            </div>
            <!--Конец / Регистрация перевода-->

            <!--Получить реквизиты-->
            <div class="remodal" data-remodal-id="price_money_del">
                <button data-remodal-action="close" class="remodal-close"></button>
                <div class="window_form" style="min-height: 200px;">

                    <form class="window_form" id="data_money_trans" style="min-height:170px!important;padding-top: 0px;padding-left: 10px;padding-right: 10px;padding-bottom: 15px;border-bottom-width: 0px;" action="" method="POST">

                        <div class="form-main" style="margin-bottom: 20px;">
                            <span>Ваше ФИО:</span>
                            <input type="text" name="data_money_trans_name" id="data_money_trans_name">

                            <div class="form-left">
                                <span>Ваш телефон:</span>
                                <input type="text" id="data_money_trans_phone" class="mask" name="data_money_trans_phone" />
                            </div>

                            <div class="form-right">
                                <span>Ваш город:</span>
                                <input type="text" id="data_money_trans_city" name="data_money_trans_city" />
                            </div>

                        </div>
                        <input type="button" onclick="data_money_trans()" value="Получить реквизиты по СМС">
                    </form>

                </div>

            </div>
            <!--Конец / Получить реквизиты-->

            <script src="js/money-calc.js?v=3" charset="utf-8" type="text/javascript"></script>

            </body>

        </html>
