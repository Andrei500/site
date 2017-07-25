Vue.component('typeahead', {

    template: '\n        <div :class="typeaheadState" >\n            <div class="typeahead__toggle" ref="toggle" @mousedown.prevent="toggle">\n                <input type="text" class="typeahead__search" ref="search"\n                v-model.trim="search"\n                @focus="onFocus"\n                @blur="onBlur"\n                @keydown.esc="onEscape"\n                @keydown.down="onDownKey"\n                @keydown.up="onUpKey"\n                @keydown.enter="onEnterKey"\n                >\n                <span class="typeahead__text" ref="text">{{displayText}}</span>\n            </div>\n\n            <ul class="typeahead__list" ref="list" v-if="open" @scroll="onScroll">\n                <li class="typeahead__item" v-for="(option, index) in filteredOptions" :key="index">\n                    <a class="typeahead__link" @mousedown.prevent="select(option)"\n                        :class="[selectIndex === index ? \'typeahead__active\':\'\']">{{option.city}}\n                    </a>\n                </li>\n                <li class="no_search" v-if="noSearch">\u0413\u043E\u0440\u043E\u0434 \u043D\u0435 \u043D\u0430\u0439\u0434\u0435\u043D...</li>\n            </ul>\n        </div>\n    ',
    props: {
        options: {
            type: Array,
            default() {
                return []
            }
        },
        value: {
            type: [String, Number],
            default: null
        },
        directionText: {
            type: String,
            default: null
        }
    },
    data: function() {
        return {
            open: false,
            selectIndex: 0,
            displayText: this.directionText,
            search: '',
            count: 15,
            noSearch: false
        };
    },
    computed: {
        typeaheadState: function() {
            return this.open ? 'typeahead typeahead__open' : 'typeahead'
        },
        filteredOptions: function() {
            var exp = new RegExp(this.search, 'i');

            var afterFilter = this.options.filter(function(option) {
                return exp.test(option.region) || exp.test(option.city);
            });

            if (afterFilter.length >= this.count)
                afterFilter.length = this.count;

            if (afterFilter.length == 0)
                this.noSearch = true;
            else this.noSearch = false;

            return afterFilter;
        }
    },
    methods: {
        onDownKey: function() {
            if(this.filteredOptions.length -1 > this.selectIndex) {
                this.selectIndex++

                // scroll when overflow
                if(this.selectIndex > 2) {
                    this.$refs.list.scrollTop += (20 + this.selectIndex);
                }
            }
        },
        onUpKey: function() {
            if(this.selectIndex > 0) {
                this.selectIndex--;

                // scroll when overflow
                if(this.selectIndex > 0) {
                    this.$refs.list.scrollTop -= (20 + this.selectIndex);
                }
            }
        },
        onEnterKey: function() {
            var option = this.filteredOptions[this.selectIndex];

            if (option) {
                this.select(option);
            }
        },
        select: function(option) {
            this.displayText = option.city,
                this.search = '',
                this.$emit('input', (option.region));
            this.$refs.search.blur();
        },
        toggle: function(e) {
            if(e.target === this.$refs.toggle ||
               e.target === this.$refs.search ||
               e.target === this.$refs.text) {

                if (this.open) {
                    if (e.target !== this.$refs.search &&
                        e.target !== this.$refs.text) {
                        this.$refs.search.blur();
                    }
                } else {
                    this.$refs.search.focus();
                }
            }
        },
        onFocus: function() {
            this.open = true;
        },
        onBlur: function() {
            this.selectIndex = 0;
            this.$refs.list.scrollTop = 0;
            this.open = false;
        },
        onEscape: function() {
            this.$refs.search.blur();
        },
        onScroll: function() {
            this.count += 1;
        }
    }

});



Vue.component('calc-expedition', {
    template: `
        <div style="">

            <p style="text-align: center; margin: 15px 0; font-family: 'Lato Bold'">Укажите содержимое</p>

            <span class="exp_span">Выберите категорию товара</span>
            <span class="exp_span">Выберите товар</span>
            <select class="exp_select" style="float: left" v-model="selectedGroupId">
                <option v-for="(group, index) in groups" :value="index">{{ group.name }}</option>
            </select>
            <select class="exp_select" style="float: right" v-model="selectedItemId">
                <option v-for="(item, index) in groups[selectedGroupId].items" :value="index">{{ item.name }}</option>
            </select>

            <div style="text-align: center; margin-top: 10px; position: relative; clear: both">
                <label for="param">Вес, кг</label>
                <input type="text"
                    placeholder="Вес, кг"
                    oninput="this.value = this.value.replace(',', '.')"
                    id="param"
                    v-model.number="param"
                    style="width: 30%; margin-left: 10px;"
                >
                <span style="position: absolute; color: #c20303; font-size: 16px; padding: 0 20px">
                    Ограничение: <br> {{ selectedItem.max }}
                </span>
            </div>



            {{ priceExp }}
        </div>
    `,
    data: function() {
        return {
            selectedGroupId: 0,
            selectedItemId: 0,
            param: 0,
            groups: groups
        }
    },
    watch: {
        param: function(value) {
            var max = this.max();
            console.log(value, max);
            if (value > max) this.param = max;
        }
    },

    computed: {

        //  Выбранный товар
        selectedItem: function() {
            return this.groups[this.selectedGroupId].items[this.selectedItemId];
        },

        //  Стоимость экспедиции
        priceExp: function() {
            var param = this.param;
            //  Выбираем диапазон, согласно введенного параметра
            var ntrvl = this.selectedItem.intervals.find(function(item) {
                return (param > item.from && param <= item.to);
            });

            if (ntrvl !== undefined) this.$emit('input', ntrvl.price);
        }

    },
    methods: {
        max: function() {
            var max = this.selectedItem.intervals.find(function(item, index, array) {
                return ((index + 1) == array.length);
            });
            if (max !== undefined) return max.to;
            else return 100;
        }
    }
});



var vm = new Vue({

    el: '#calc',

    data: {

        rostovID: 863,

        //  Города
        /*
          0 ДНР
          1 ЛНР
          2 Ростов
          3 Крым
          4 Украина
        */

        citys:
        [
            { region: '1', city: 'ДНР | Горловка' },
            { region: '1', city: 'ДНР | Дебальцево' },
            { region: '1', city: 'ДНР | Донецк' },
            { region: '1', city: 'ДНР | Енакиево' },
            { region: '1', city: 'ДНР | Макеевка' },
            { region: '1', city: 'ДНР | Снежное' },
            { region: '1', city: 'ДНР | Шахтерск' },
            { region: '1', city: 'ДНР | Ясиноватая' },

            { region: '2', city: 'ЛНР | Алчевск' },
            { region: '2', city: 'ЛНР | Луганск' },
            { region: '2', city: 'ЛНР | Стаханов' },

            { region: '4', city: 'Крым | Евпатория'},
            { region: '4', city: 'Крым | Севастополь'},
            { region: '4', city: 'Крым | Симферополь'},
            { region: '4', city: 'Крым | Феодосия'},
			{ region: '4', city: 'Крым | Ялта'},

            { region: '5', city: 'Украина'},

            { region: '3', city: 'РФ | Ростов-на-Дону'}
        ],

        countOfOurCitys: null,

        //  Тарифы и сроки
        tables: {

            tariffZone: [
            //    0  1  2   3   4
                [ 1, 2, 4,  5,  8  ], // 0  ДНР
                [ 2, 1, 6,  7,  9  ], // 1  ЛНР
                [ 4, 6, 0,  3,  10 ], // 2  Ростов
                [ 5, 7, 3,  1,  11 ], // 3  Крым
                [ 8, 9, 10, 11, 0  ]  // 4  Украина
            ],

            tariffs: {

                loads: [
                //    .6-1  1-2  2-3  3-4  4-5 5-10 10-15 15-20 20-25  25-30 30-35 35-40 >40
                    [   0,   0,   0,   0,   0,   0,    0,    0,    0,    0,    0,    0,  0 ], // tarifZone = 0
                    [  50,  55,  60,  65,  70, 100,  130,  160,  190,  220,  250,  280,  7 ], // tarifZone = 1
                    [ 100, 120, 140, 160, 180, 200,  250,  300,  320,  340,  360,  400, 10 ], // tarifZone = 2
                    [   0, 150, 150, 150, 150, 300,  300,  300,  500,  500,  500,  500, 11 ], // tarifZone = 3
                    [ 150, 200, 250, 300, 350, 400,  500,  550,  650,  700,  800,  900, 25 ], // tarifZone = 4
                    [ 200, 230, 260, 290, 320, 450,  550,  700,  800, 1000, 1200, 1400, 37 ], // tarifZone = 5
                    [ 250, 320, 390, 460, 530, 600,  750,  850,  970, 1040, 1160, 1300, 35 ], // tarifZone = 6
                    [ 250, 300, 330, 370, 400, 550,  700,  850,  950, 1150, 1350, 1600, 42 ], // tarifZone = 7
                    [ 150, 200, 250, 300, 350, 500,  650,  800,  950, 1100, 1300, 1400,  0 ], // tarifZone = 8
                    [ 250, 320, 390, 460, 530, 700,  900, 1100, 1270, 1440, 1660, 1800,  0 ], // tarifZone = 9
                    [ [80,  200], [200, 100], [350, 45], [350, 45], [450, 45] ], // tarifZone = 10
                    [ 350, 430, 510, 590, 670, 950, 1200, 1500, 1750, 2100, 2500, 2800,  0 ]  // tarifZone = 11
                ],

                money: [
                //    <2   <5   <10  <20  <30   <40   <50   <60   <70   <80   <90   <100
                    [   0,   0,   0,   0,   0,    0,    0,    0,    0,    0,    0,    0,    0 ], // tarifZone = 0
                    [  50, 100, 150, 200, 250,  300,  400,  500,  600,  700,  800,  900, 1000 ], // tarifZone = 1
                    [ 100, 100, 150, 200, 300,  400,  450,  500,  600,  700,  800,  900, 1000 ], // tarifZone = 2
                    [ 100, 100, 150, 200, 250,  300,  400,  500,  600,  700,  800,  900, 1000 ], // tarifZone = 3
                    [ 100, 100, 150, 200, 300,  400,  500,  600,  700,  800,  900, 1000, 1100 ], // tarifZone = 4
                    [ 150, 150, 250, 300, 400,  600,  700,  800,  900, 1000, 1100, 1200, 1300 ], // tarifZone = 5
                    [ 200, 200, 300, 400, 600,  800,  950, 1100, 1300, 1500, 1700, 1900, 2100 ], // tarifZone = 6
                    [ 250, 250, 400, 500, 700, 1000, 1150, 1300, 1500, 1700, 1900, 2100, 2300 ], // tarifZone = 7
                    [   0,   0,   0,   0,   0,    0,    0,    0,    0,    0,    0,    0,    0 ], // tarifZone = 8
                    [   0,   0,   0,   0,   0,    0,    0,    0,    0,    0,    0,    0,    0 ], // tarifZone = 9
                    [   0,   0,   0,   0,   0,    0,    0,    0,    0,    0,    0,    0,    0 ], // tarifZone = 10
                    [   0,   0,   0,   0,   0,    0,    0,    0,    0,    0,    0,    0,    0 ]  // tarifZone = 11
                ],

                docs: [
                    //
                    [ 0,   0   ], // tarifZone = 0
                    [ 50,  100 ], // tarifZone = 1
                    [ 100, 150 ], // tarifZone = 2
                    [ 100, 150 ], // tarifZone = 3
                    [ 150, 250 ], // tarifZone = 4
                    [ 200, 300 ], // tarifZone = 5
                    [ 250, 400 ], // tarifZone = 6
                    [ 250, 375 ], // tarifZone = 7
                    [ 150, 200 ], // tarifZone = 8
                    [ 250, 350 ], // tarifZone = 9
                    [ 300, 500 ], // tarifZone = 10
                    [ 350, 500 ]  // tarifZone = 11
                ]
            }
        },


        //  Направление
        direction: {
            regionFrom: 0,
            regionTo: 0
        },

        //  Тип груза по умолчанию
        typeOfLoad: 'docs',

        //  Вид документа
        typeOfDocs: 'originals',

        moneySumm: 5000,

        //  Данные груза для расчета
        load: {
            weight: 10,
            length: 50,
            width: 20,
            height: 30,
            price: 500
        },

        //  Наложенный платеж
        cashPay: {
            active: false,
            sum: false
        },

        //  Хрупкость
        fragil: false,

        quickly: false,

        danger: false,

        //  Подсказки
        messages: {

            nal: {
                title: 'Наложенный платеж',
                descr: 'Наложенный платеж тарифицируется как доставка денежных средств.'
            },
            total: {
                title: 'Общая стоимость',
                descr: 'Расчет стоимости актуален на сегодня и является ориентировочным. Стоимость доставки определяется на отделении «Наша Почта», при принятии груза.'
            },
            trans: {
                title: 'Транспортировка',
                descr: 'В стоимость транспортировки входит прием груза, его доставка и выдача.'
            },
            comiss: {
                title: 'Сохранная стоимость',
                descr: 'В случае утери или порчи груза клиенту будет выплачена объявленная им стоимость содержимого. Стоимость услуги - 0.5% от объявленной стоимости.'
            },
            transRus: {
                title: 'Доставка по России',
                descr: ''
            },
            fragil: {
                title: 'Доплата за хрупкость',
                descr: 'Груз с пометкой «Хрупкое» транспортируется с особой осторожностью, исключающей порчу содержимого.'
            },
            quickly: {
                title: 'Доплата за срочность',
                descr: 'Срочный груз формируется отдельно на складе и выезжает дополнительно выделенной машиной для ускорения доставки.'
            },
            danger: {
                title: 'Доплата за опасность',
                descr: 'Организация мер безопасности при разгерметизации упаковки во избежание нанесения ущерба другим грузам. Стоимость - 100% от стоимости транспортировки.'
            },
            calcWeight: {
                title: 'Расчетный вес',
                descr: 'Вес с наибольшим значением между фактическим весом и объемным весом груза. Объемный вес рассчитывается по формуле: (Д * Ш * В) / 4000.'
            },
            expedition: {
                title: 'Экспедиция груза',
                descr: 'Комплекс услуг по вопросам связанным с перевозкой грузов и ее правовыми аспектами (например, таможенным оформлением, получением доверенности на груз, сопроводительных документов и прочее).'
            }
        },

        showThisResult: false,
        expedition: 0

    },

    computed: {

        TZ: function() {

            if (this.direction.regionFrom > 0 && this.direction.regionTo > 0) {
                var idFrom = (this.isRusDelivery.from) ? 3 : this.direction.regionFrom;
                var idTo   = (this.isRusDelivery.to) ? 3 : this.direction.regionTo;

                return this.tables.tariffZone[idTo - 1][idFrom - 1];

            }   else return 0;
        },

        calcWeight: function() {
            var volumeWeight = Math.round((this.load.width * this.load.length * this.load.height) / 4000);
            return (this.load.weight >= volumeWeight) ? this.load.weight : volumeWeight;
        },

        isRusDelivery: function() {
            return {
                from: (this.direction.regionFrom > 5) ? true : false,
                to: (this.direction.regionTo > 5) ? true : false
            };
        },

        rusDelivery: function() {

            if (this.isRusDelivery.from || this.isRusDelivery.to) {

                if (this.typeOfLoad === 'load') {

                    var data = {
                        "idCityFrom": (this.isRusDelivery.to) ? this.rostovID : this.direction.regionFrom,
                        "idCityTo": (this.isRusDelivery.from) ? this.rostovID : this.direction.regionTo,
                        'cover': 0,
                        'idCurrency': 0,
                        'items': [
                          {
                            'weight': this.load.weight,
                            'width': this.load.width / 100,
                            'height': this.load.height / 100,
                            'length': this.load.length / 100
                          }
                        ]
                    };

                    var rusPrice = null;

                    $.ajax({
                        type: "POST",
                        async: false,
                        data: JSON.stringify(data),
                        url: "https://api2.nrg-tk.ru/v2/price",
                        success: function (resp) {
                            rusPrice = resp.transfer.find(function(item) {
                                return item.typeId == 1;
                            }).price;
                        },
                        error: function (e) {
                            console.log(e.responseText);
                        }
                    });

                    this.messages.transRus.descr = 'Доставка осуществляется нашим партнером, международной транспортной компанией «Энергия».';

                    return rusPrice;
                }


                if (this.typeOfLoad === 'docs') {
                    this.messages.transRus.descr = 'Доставка осуществляется ФГУП «Почта России».';

                    return 100;
                }


                if (this.typeOfLoad === 'money') {
                    this.messages.transRus.descr = 'Перевод осуществляется «Сбербанком России» . Комиссия перевода - 1%.';

                    return this.moneySumm * 0.01;
                }

            }   else return false;
        },

        trans: function() {

            //  Документы
            if (this.typeOfLoad == 'docs') {
                switch (this.typeOfDocs) {
                    case 'copies':
                        return this.tables.tariffs.docs[this.TZ][0];
                        break;
                    case 'originals':
                        return this.tables.tariffs.docs[this.TZ][1];
                        break;
                }
            }

            //  Деньги
            if (this.typeOfLoad == 'money') {
                return this.calcMoney(this.moneySumm);
            }

            //  Посылки
            if (this.typeOfLoad == 'load') {

                var diapW = false;

                if ( this.calcWeight >= 0 && this.calcWeight <= 1  ) diapW = 0;
                if ( this.calcWeight > 1  && this.calcWeight <= 2  ) diapW = 1;
                if ( this.calcWeight > 2  && this.calcWeight <= 3 )  diapW = 2;
                if ( this.calcWeight > 3  && this.calcWeight <= 4 )  diapW = 3;
                if ( this.calcWeight > 4  && this.calcWeight <= 5 )  diapW = 4;
                if ( this.calcWeight > 5  && this.calcWeight <= 10 ) diapW = 5;
                if ( this.calcWeight > 10 && this.calcWeight <= 15 ) diapW = 6;
                if ( this.calcWeight > 15 && this.calcWeight <= 20 ) diapW = 7;
                if ( this.calcWeight > 20 && this.calcWeight <= 25 ) diapW = 8;
                if ( this.calcWeight > 25 && this.calcWeight <= 30 ) diapW = 9;
                if ( this.calcWeight > 30 && this.calcWeight <= 35 ) diapW = 10;
                if ( this.calcWeight > 35 && this.calcWeight <= 40 ) diapW = 11;
                if ( this.calcWeight > 40 ) diapW = 12;

                var tarrif = this.tables.tariffs.loads[this.TZ][diapW];

                return (diapW !== 12) ? tarrif : (this.calcWeight * tarrif);
            }
        },

        comiss: function() {
            if (this.typeOfLoad == 'load' || this.typeOfLoad == 'docs') {
                var comiss = Math.round(this.load.price * 0.005);
                return (comiss >= 10) ? comiss : 10;
            }   else return false;
        },

        cashPayComiss: function() {
            return (this.cashPay.active) ? this.calcMoney(this.cashPay.sum) : false;
        },

        isFragil: function() {
            return (this.fragil) ? 100 : false;
        },

        isQuickly: function() {
            return (this.quickly) ? 100 : false;
        },

        isDanger: function() {
            return (this.danger) ? this.trans : false;
        },

        result: function() {
            var result = this.trans + this.comiss + this.cashPayComiss + this.isFragil + this.rusDelivery + this.isQuickly + this.isDanger + this.expedition;
            return (result > 0) ? result : false;
        },

        paddingCheck: function() {
            return (this.typeOfLoad === 'load') ? 920 : 530;
        }
    },

    methods: {

        showResult: function() {

            if (this.direction.regionFrom && this.direction.regionTo) {

                this.showThisResult = true;

                setTimeout(function() {
                    var scrollTop = $('#toScrollResult').offset().top;
                    $('.remodal-wrapper').scrollTop(scrollTop);
                }, 100);

            }   else {
                this.showThisResult = false;
                alert('Укажите маршрут!');
            }
        },

        calcMoney: function (summ) {

            var diapM = false;

            if ( summ >= 0    && summ <= 2000  ) diapM = 0;
            if ( summ > 2000  && summ <= 5000  ) diapM = 1;
            if ( summ > 5000  && summ <= 10000 ) diapM = 2;
            if ( summ > 10000 && summ <= 20000 ) diapM = 3;
            if ( summ > 20000 && summ <= 30000 ) diapM = 4;
            if ( summ > 30000 && summ <= 40000 ) diapM = 5;
            if ( summ > 40000 && summ <= 50000 ) diapM = 6;
            if ( summ > 50000 && summ <= 60000 ) diapM = 7;
            if ( summ > 60000 && summ <= 70000 ) diapM = 8;
            if ( summ > 70000 && summ <= 80000 ) diapM = 9;
            if ( summ > 80000 && summ <= 90000 ) diapM = 10;
            if ( summ > 90000 && summ <= 100000) diapM = 11;
            if ( summ > 100000 ) {
                this.moneySumm = 100000;
            }

            return this.tables.tariffs.money[this.TZ][diapM];
        },

        //  Валидация полей
        validate: function(event) {

            var el = event.target;
            var value = el.value;

            var matches = function(el, selector) {
                return (el.matches || el.matchesSelector || el.msMatchesSelector || el.mozMatchesSelector || el.webkitMatchesSelector || el.oMatchesSelector).call(el, selector);
            };


            if (matches(el, 'input')) {

                if (value <= 0) {
                    if (el.classList)
                        el.classList.add('novalid');
                    else
                        el.className += ' ' + 'novalid';
                }
                else {
                    if (el.classList)
                        el.classList.remove('novalid');
                    else
                        el.className = el.className.replace(new RegExp('(^|\\b)' + 'novalid'.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
                }

            }
        },

        getRusCities: function() {
            var that = this;
            $.ajax({
                type: "GET",
                async: false,
                url: "https://api2.nrg-tk.ru/v2/cities",
                success: function (resp) {

                    for (var i = 0; i < resp.cityList.length; i++) {

                        if (resp.cityList[i].name != 'Горловка,ДНР'   &&
                            resp.cityList[i].name != 'Алчевск,ЛНР'    &&
                            resp.cityList[i].name != 'Антрацит,ЛНР'   &&
                            resp.cityList[i].name != 'Донецк,ДНР'     &&
                            resp.cityList[i].name != 'Дебальцево,ДНР' &&
                            resp.cityList[i].name != 'Горловка,ДНР'   &&
                            resp.cityList[i].name != 'Енакиево,ДНР'   &&
                            resp.cityList[i].name != 'Макеевка,ДНР'   &&
                            resp.cityList[i].name != 'Луганск,ЛНР'    &&
                            resp.cityList[i].name != 'Снежное,ДНР'    &&
                            resp.cityList[i].name != 'Стаханов,ЛНР'   &&
                            resp.cityList[i].name != 'Шахтерск,ДНР'   &&
                            resp.cityList[i].name != 'Ясиноватая,ДНР' &&
                            resp.cityList[i].name != 'Евпатория'      &&
                            resp.cityList[i].name != 'Севастополь'    &&
                            resp.cityList[i].name != 'Симферополь'    &&
                            resp.cityList[i].name != 'Феодосия'       &&
                            resp.cityList[i].name != 'Ялта'           &&
                            resp.cityList[i].name != 'Ростов-на-Дону'
                        ) {
                            that.citys.push({
                                region: resp.cityList[i].id,
                                city: resp.cityList[i].name
                            });
                        }
                    }

                },
                error: function (e) {
                    console.log('Ошибка API: ' + e.responseText)
                }
            });
        }


    },

    created: function() {
        this.countOfOurCitys = this.citys.length;
        this.getRusCities();
    }

});
