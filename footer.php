
<!--Футер-->
<div class="ftr">
    <div class="logo-ftr">
        <a href="/"><img src="images/logo.png" alt="Наша Почта Логотип" /></a>
        <div class="social">
            <a href="https://vk.com/donbass_post" target="_blank"><img src="images/vk.png" /></a>
            <a href="https://ok.ru/donbasspost" target="_blank"><img src="images/ok.png" /></a>
        </div>
        <p>Следите за<br>новостями:</p>
    </div>

    <div class="menu-ftr">
        <div class="razdel">
            <a class="razdel-main" href="delivery.php">Доставка</a>
            <ul>
                <li>- <a href="parcels.php">Посылки и документы</a></li>
                <li>- <a href="money.php">Денежные средства</a></li>
                <li>- <a href="online-shops.php">Интернет-заказы</a></li>
                <li>- <a href="commerce.php">Коммерческий груз</a></li>
                <li>- <a href="delivery.php#app">Классификация грузов</a></li>
            </ul>
        </div>

        <div class="razdel">
            <a class="razdel-main" href="about.php">Компания</a>
            <ul>
                <li>- <a href="about.php">О компании</a></li>
                <li>- <a href="about.php#docs">Документы</a></li>
                <li>- <a href="about.php#partners">Партнеры</a></li>
                <li>- <a href="about.php#vacancys">Вакансии</a></li>
            </ul>
        </div>

        <div class="razdel">
            <a class="razdel-main" href="branches.php">Контакты</a>
            <ul>
                <li>- <a href="branches.php">Отделения</a></li>
                <li>- <a target="_blank" href="https://vk.com/board91585733">Форум ВК</a></li>
                <li>- <a data-remodal-target="form-book" href="#">Книга жалоб</a></li>
            </ul>
        </div>

        <div class="razdel">
            <span class="razdel-main" style="background:none;">ООО "НАША ПОЧТА"</span><br>
            <i style="margin-right: 12px; padding-top:15px;">ИНН </i><b> 9102182010</b><br>
            <i style="margin-right: 15px;">КПП </i><b> 910201001</b><br>
            <i>ОГРН</i><b>1159102088012</b>
        </div>

        <div class="bolv"></div>
    </div>
</div>
<!--Конец / Футер-->


<!--Копирайт-->
<div class="cpy">
    © 2015-2017 ООО «Наша Почта». Все права защищены.
</div>
<!--Конец / Копирайт-->
</div>


<!--Книга жалоб и предложений-->
<div  class="remodal" data-remodal-id="form-book">
    <button data-remodal-action="close" class="remodal-close"></button>

    <form class="window_form" id="form_book" action="" method="POST">

        <div class="form-main">
            <span>Ваше ФИО</span>
            <input type="text" name="form_book_name"/>

            <div class="form-left">
                <span>Телефон</span>
                <input type="text" name="form_book_tel"/>
            </div>

            <div class="form-right">
                <span>Эл. адрес</span>
                <input type="text" name="form_book_mail"/>
            </div>
        </div>

        <div class="form-main">
            <textarea id="form_book_text" name="form_book_text" style="height: 300px!important;" placeholder="Опишите свою проблему..."></textarea>
        </div>

        <input type="button" onclick="send_form_book()" value="ОТПРАВИТЬ" />
    </form>
</div>
<!--Конец / Книга жалоб и предложений-->

<!--Форма поиска-->
<div  class="remodal" data-remodal-id="form-search">
    <button data-remodal-action="close" class="remodal-close"></button>
    <form id="fs" action="" method="POST">
        <input type="search" name="" id="" placeholder="Введите трек-номер отправления" autofocus>
        <input type="button" id="" value="">
    </form>
</div>
<!--Конец / Форма поиска-->

<!--Личный кабинет-->
<div  class="remodal" data-remodal-id="form-lk">
    <button data-remodal-action="close" class="remodal-close"></button>

    <div class="window_form" style="padding: 20px 40px;text-align: justify;">
        <span style="text-align:center;" >Уважаемый гость!</span>
        <p class="font-light" style="text-indent:35px; margin-bottom: 20px;" >
            Личный кабинет сейчас находится в стадии разработки. Вы можете оставить свой электронный адрес и мы Вас оповестим, когда данное приложение появится на нашем сайте!
        </p>

        <form id="flk" action="" method="POST">
            <input type="text" id="form_lk_mail"  name="form_lk_mail" placeholder="Введите E-mail" autofocus>
            <input type="button" onclick="send_data_lk()" value="Отправить">
        </form>
        <div class="all"></div>
    </div>
</div>
<!--Конец / Личный кабинет-->

<!--Калькулятор-->
<div style="max-width: 700px" class="remodal" data-remodal-id="form-calc">

    <div class="window_form_calc" style="min-height:660px; padding: 0">
      <div id="calc" v-cloak>

          <form action="#" class="calc__form">

              <span class="form-calc__section-title">Направление</span>
              <div class="fifty">

                  <typeahead
                      direction-text="Откуда..."
                      :options="citys"
                      v-model="direction.regionFrom">
                  </typeahead>

              </div>


              <div class="fifty" style="margin-left: 5px;">

                  <typeahead
                      direction-text="Куда..."
                      :options="citys"
                      v-model="direction.regionTo">
                  </typeahead>

              </div>


              <span class="form-calc__section-title">Тип груза</span>

              <input v-model="typeOfLoad" value="docs" type="radio" name="typeOfLoad" id="docs" class="form-calc__radio">
              <label for="docs" style="margin-right:15px">Документы</label>

              <input v-model="typeOfLoad" value="load" type="radio" name="typeOfLoad" id="load" class="form-calc__radio">
              <label for="load" style="margin-right:15px">Груз</label>
              <template v-if="TZ < 8">
                  <input v-model="typeOfLoad" style="display: inline-block; margin: 0" value="money" type="radio" name="typeOfLoad" id="money" class="form-calc__radio">
                  <label for="money">Денежные средства</label>
            </template>

              <div class="form-calc__section-load" style="text-align: center" v-if="typeOfLoad === 'docs'">
                  <input class="form-calc__radio" type="radio" v-model="typeOfDocs" value="copies" id="copies">
                  <label for="copies" style="display: inline-block; margin:13px 15px 13px 0">Копии</label>
                  <input class="form-calc__radio" type="radio" v-model="typeOfDocs" value="originals" id="originals">
                  <label for="originals">Оригиналы</label>
              </div>

              <div class="form-calc__section-load" v-if="typeOfLoad === 'load'">

                  <div class="calc__weight" v-if="typeOfLoad == 'load'">Расчетный вес груза - {{ calcWeight }} кг.
                      <div class="check__table-info">
                          <div class="img"></div>
                          <div class="text">
                              <h5>{{ messages.calcWeight.title }}</h5>
                              <p>{{ messages.calcWeight.descr }}</p>
                          </div>
                      </div>
                  </div>

                      <div class="quer" style="vertical-align:top">

                          <label for="weight">Вес, кг</label><br>

                          <input autofocus type="text" style="margin-bottom: 15px" placeholder="Вес, кг"
                              id="weight"
                              oninput="this.value = this.value.replace(',', '.')"
                              v-model.number="load.weight"
                              >
                      </div>

                      <div class="quer" style="vertical-align:top">

                          <label for="length">Длина, см</label><br>

                          <input type="text" style="margin-bottom: 15px" placeholder="Длина, см"
                                 id="length"
                                 oninput="this.value = this.value.replace(',', '.')"
                                 v-model.number="load.length"
                                 >
                      </div>

                      <div class="quer" style="vertical-align:top">

                          <label for="width">Ширина, см</label><br>

                          <input type="text" style="margin-bottom: 15px" placeholder="Ширина, см"
                                 id="width"
                                 oninput="this.value = this.value.replace(',', '.')"
                                 v-model.number="load.width"
                                 >
                      </div>

                      <div class="quer" style="vertical-align:top">

                          <label for="height">Высота, см</label><br>

                          <input type="text" style="margin-bottom: 15px" placeholder="Высота, см"
                                 id="height"
                                 oninput="this.value = this.value.replace(',', '.')"
                                 v-model.number="load.height"
                                 >
                      </div>

                      <div style="text-align: center; margin-top: 10px">
                          <label for="price">Стоимость груза, р</label>
                          <input type="text" placeholder="Оценочная стоимость, р"
                                 oninput="this.value = this.value.replace(',', '.')"
                                 id="price"
                                 v-model.number="load.price"
                                 style="width: 30%; margin-left: 10px;"
                              >
                      </div>

                      <hr style="margin-top: 20px">

                      <calc-expedition v-model="expedition"></calc-expedition>

              </div>

              <div class="form-calc__section-load" style="text-align: center" v-if="typeOfLoad === 'money'">
                  <span>Сумма, р</span>
                  <input ref="moneySummField" autofocus type="text" style="width: 30%; margin-left: 10px;" v-model.number="moneySumm">
              </div>

            <template v-if="typeOfLoad == 'load'">
                  <span style="margin-bottom:0" class="form-calc__section-title">Доп. услуги</span>


                    <div class="fifty" style="padding-top:12px">
                        <input v-model="cashPay.active" class="form-calc__checkbox-nal" type="checkbox" id="nal">
                        <label for="nal" class="form-calc__label-nal">Наложенный платеж</label>
                        <div class="check__table-info">
                            <div class="img"></div>
                            <div class="text">
                                <h5>{{ messages.nal.title }}</h5>
                                <p>{{ messages.nal.descr }}</p>
                            </div>
                        </div>
                    </div>


                  <div v-if="cashPay.active" class="fifty">
                      <span style="font-size: 18px">Сумма, р</span>
                      <input autofocus type="number" style="width: 50%; margin-left: 10px;"
                             oninput="this.value = this.value.replace(',', '.')"
                             @input="validate"
                             v-model.number="cashPay.sum"
                             >
                  </div>

                  <div>
                      <input v-model="fragil" class="form-calc__checkbox-nal" type="checkbox" id="fragil">
                      <label for="fragil" class="form-calc__label-nal">Хрупкий груз</label>
                      <div class="check__table-info">
                          <div class="img"></div>
                          <div class="text">
                              <h5>{{ messages.fragil.title }}</h5>
                              <p>{{ messages.fragil.descr }}</p>
                          </div>
                      </div>
                  </div>
                  <div>
                      <input style="margin-top:17px" v-model="quickly" class="form-calc__checkbox-nal" type="checkbox" id="quickly">
                      <label for="quickly" class="form-calc__label-nal">Срочная доставка</label>
                      <div class="check__table-info">
                          <div class="img"></div>
                          <div class="text">
                              <h5>{{ messages.quickly.title }}</h5>
                              <p>{{ messages.quickly.descr }}</p>
                          </div>
                      </div>
                  </div>

                  <div>
                      <input style="margin-top:17px" v-model="danger" class="form-calc__checkbox-nal" type="checkbox" id="danger">
                      <label for="danger" class="form-calc__label-nal">Опасный груз</label>
                      <div class="check__table-info">
                          <div class="img"></div>
                          <div class="text">
                              <h5>{{ messages.danger.title }}</h5>
                              <p>{{ messages.danger.descr }}</p>
                          </div>
                      </div>
                  </div>
            </template>

              <button id="btn_calc" @click.prevent="showResult()">Рассчитать</button>

          </form>
<template v-if="direction.regionFrom > 5 && direction.regionTo > 5">
    <p :style="{padding: '50px', paddingTop: paddingCheck + 'px'}">
        Для расчета стоимости доставки по этому направлению перейдите на сайт нашего партнера - Международной Транспортной Компании <a class="link-under" href="http://www.nrg-tk.ru" target="_blank">«Энергия»</a>.
    </p>
</template>
<template v-else>
          <div v-show="showThisResult">
              <div id="check" :style="{paddingTop: paddingCheck + 'px'}">
                      <table class="check__table two">
                          <tr>
                              <td>Общая стоимость

                                  <div class="check__table-info">
                                      <div class="img"></div>
                                      <div class="text">
                                          <h5>{{ messages.total.title }}</h5>
                                          <p>{{ messages.total.descr }}</p>
                                      </div>
                                  </div>

                              </td>

                              <td>
                                  <template>{{ result }} p</template>
                                  </td>
                          </tr>
                      </table>

                      <table class="check__table">
                          <tr>
                              <td>Транспортировка
                                  <div class="check__table-info">
                                      <div class="img"></div>
                                      <div class="text">
                                          <h5>{{ messages.trans.title }}</h5>
                                          <p>{{ messages.trans.descr }}</p>
                                      </div>
                                  </div>
                              </td>
                              <td>{{ trans }} р</td>
                          </tr>

                          <tr v-if="rusDelivery">
                              <td>Доставка по России
                                  <div class="check__table-info">
                                      <div class="img"></div>
                                      <div class="text">
                                          <h5>{{ messages.transRus.title }}</h5>
                                          <p>{{ messages.transRus.descr }}</p>
                                      </div>
                                  </div>
                              </td>
                              <td>{{ rusDelivery }} р</td>
                          </tr>

                          <tr v-if="comiss">
                              <td>Сохранная стоимость
                                  <div class="check__table-info">
                                      <div class="img"></div>
                                      <div class="text">
                                          <h5>{{ messages.comiss.title }}</h5>
                                          <p>{{ messages.comiss.descr }}</p>
                                      </div>
                                  </div>
                              </td>
                              <td>{{ comiss }} р</td>
                          </tr>

                          <tr v-if="expedition">
                              <td>Экспедиция груза
                                  <div class="check__table-info">
                                      <div class="img"></div>
                                      <div class="text">
                                          <h5>{{ messages.expedition.title }}</h5>
                                          <p>{{ messages.expedition.descr }}</p>
                                      </div>
                                  </div>
                              </td>
                              <td>{{ expedition }} р</td>
                          </tr>

                          <tr v-if="cashPay.active">
                              <td>Наложенный платеж
                                  <div class="check__table-info">
                                      <div class="img"></div>
                                      <div class="text">
                                          <h5>{{ messages.nal.title }}</h5>
                                          <p>{{ messages.nal.descr }}</p>
                                      </div>
                                  </div>
                              </td>
                              <td>{{ cashPayComiss }} р</td>
                          </tr>

                          <tr v-if="fragil">
                              <td>Доплата за хрупкость
                                  <div class="check__table-info">
                                      <div class="img"></div>
                                      <div class="text">
                                          <h5>{{ messages.fragil.title }}</h5>
                                          <p>{{ messages.fragil.descr }}</p>
                                      </div>
                                  </div>
                              </td>
                              <td>{{ isFragil }} р</td>
                          </tr>

                          <tr v-if="quickly">
                              <td>Доплата за срочность
                                  <div class="check__table-info">
                                      <div class="img"></div>
                                      <div class="text">
                                          <h5>{{ messages.quickly.title }}</h5>
                                          <p>{{ messages.quickly.descr }}</p>
                                      </div>
                                  </div>
                              </td>
                              <td>{{ isQuickly }} р</td>
                          </tr>

                          <tr v-if="danger">
                              <td>Доплата за опасность
                                  <div class="check__table-info">
                                      <div class="img"></div>
                                      <div class="text">
                                          <h5>{{ messages.danger.title }}</h5>
                                          <p>{{ messages.danger.descr }}</p>
                                      </div>
                                  </div>
                              </td>
                              <td>{{ isDanger }} р</td>
                          </tr>

                      </table>
              </div>
          </div>
</template>
          <div id="toScrollResult"></div>

    </div>

</div>
<!--Конец / Калькулятор-->

<!-- Линия занята -->
<div style="max-width: 655px; height: 700px;" class="remodal notCall" data-remodal-id="notCall">
    <button data-remodal-action="close" class="remodal-close"></button>

    <h3>
        Не смогли дозвониться?
    </h3>
    <p>
        Из-за большого кол-ва звонков линии часто бывают перегружены, и не всегда есть возможность ответить Вам. </p>
    <b>
        Получить консультацию Вы можете<br> следующими способами: <br>
        <ul>
            <li>Воспользоваться чатом, расположенным в нижнем правом углу окна.</li>
            <li>Задать вопрос консультанту в Вконтакте</a> или в Одноклассниках:</a>. <br><br>
                <p class="font-light">
                    <strong>Наша Почта:</strong>  <a class="link-under" href="https://vk.com/id337489713" target="_blank">ВК</a>
                    <a class="link-under" href="https://ok.ru/nashapochta.donbass" target="_blank">ОК</a> <br>
                    <strong>Наша Почта | Коммерческий отдел:</strong> <a class="link-under" href="https://vk.com/id337489713" target="_blank">ВК</a>; <br>
                    <strong>Доставка из/в Украину:</strong> <a class="link-under" href="https://vk.com/aistpost" target="_blank">ВК</a>

                </p>    <br><br>
            </li>
            <li><a style="cursor:pointer;" onclick="show_cb_form($(this))" class="link-under">Заказать звонок</a> по номеру телефона.</li>
        </ul>
    </b>

    <form action="" id="send_user_form">
        <select style="width: 180px;">
            <option>Выберите</option>
            <option value="1">Наша Почта</option>
            <option value="2">Наша Почта | Коммерческий отдел</option>
            <option value="3">Доставка из/в Украину</option>
        </select>
        <input style="width: 180px;" autofocus type="text" name="" id="user_phone" placeholder="Ваш номер телефона"/>
        <input style="width: 150px;" type="button" value="Заказать" onclick="send_phone($('#send_user_form'))"/>
    </form>

</div>
<!-- Линия занята / Конец -->
<style>
    .notCall {
        font: 20px/150% "Lato Light";
        padding: 40px;
        text-align: left;
        text-indent: 50px;
    }
    .notCall > h3 {
        font: 30px 'Lato Medium';
        margin-bottom: 20px;
        text-align: center;
        text-indent: 0;
    }
    .notCall > b {
        margin: 15px auto;
        font-family: 'Lato Regular';
        text-indent: 0;
        text-align: center;
        display: block;
    }
    .notCall > b > ul {
        list-style: disc;
        font-family: 'Lato Light';
        text-align: left;
        padding: 5px 40px;
    }
    .notCall > b > ul > li {
        line-height: 120%;
        margin: 10px 0;
    }
    #send_user_form {
        display: none;
        justify-content: center;
    }
    #send_use_form > input {
        display: block;
    }
    input#user_phone {
        font-size: 18px;
        padding: 15px;
        border: 1px solid #c20303;
        outline: none;
    }
    #send_user_form input[type="button"] {
        height: 54px;
        padding: 0 10px;
        font-size: 18px;
        border: none;
        background-color: #c20303;
        color: #fff;
        width: 207px;
        cursor: pointer;
        outline: none;
    }
    #send_user_form input[type="button"]:hover {
        opacity: .85;
    }
</style>

<!--Скрипты-->
<script src="https://use.fontawesome.com/3663df9a6c.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./calculator/libs/vue.js"></script>
<link rel="stylesheet" href="./calculator/calculator-styles.css?v=2">

<script src="./calculator/js/all_groups.js?v=4"></script>
<script src="./calculator/js/calculator.js?v=4"></script>

<script src="js/sc.js?v=1"></script>
<script src="slider/style-slider.js"></script>
<script src="js/modal/remodal.min.js"></script>
<script type='text/javascript'>
    (function(){ var widget_id = '6qYNeO9qQJ';
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>

<script type="text/javascript" src="//vk.com/js/api/openapi.js?139"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter35131910 = new Ya.Metrika({
                    id:35131910,
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
<noscript><div><img src="https://mc.yandex.ru/watch/35131910" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!--Конец / Скрипты-->
<script>
  document.body.style.zoom = (window.innerWidth * 100 / 1380) + "%";

    var cloud = document.getElementById('cloud');
    function openLinks() {
      cloud.classList.toggle('active');
      return false;
    }
    $(document).on('click', function(e) {
        if (e.target.id !== 'opener') {
            if ($(cloud).hasClass('active')) $(cloud).removeClass('active');
        }
        //
    });
</script>
