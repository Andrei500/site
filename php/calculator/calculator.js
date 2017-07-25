//пишем функцию расфифровки алгоритма base64
var Base64 = {
    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
    //метод для кодировки в base64 на javascript
    encode: function (input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0
        input = Base64._utf8_encode(input);
        while (i < input.length) {
            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);
            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;
            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }
            output = output +
                this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
                this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
        }
        return output;
    },

    //метод для раскодировки из base64
    decode: function (input) {
        var output = "";
        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;
        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
        while (i < input.length) {
            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));
            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;
            output = output + String.fromCharCode(chr1);
            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }
        }
        output = Base64._utf8_decode(output);
        return output;
    },
    // метод для кодировки в utf8
    _utf8_encode: function (string) {
        string = string.replace(/\r\n/g, "\n");
        var utftext = "";
        for (var n = 0; n < string.length; n++) {
            var c = string.charCodeAt(n);
            if (c < 128) {
                utftext += String.fromCharCode(c);
            } else if ((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            } else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }
        }
        return utftext;

    },

    //метод для раскодировки из urf8
    _utf8_decode: function (utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;
        while (i < utftext.length) {
            c = utftext.charCodeAt(i);
            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            } else if ((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i + 1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            } else {
                c2 = utftext.charCodeAt(i + 1);
                c3 = utftext.charCodeAt(i + 2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }
        }
        return string;
    }
}

//убирание полей
function type_of_load(val, val) {
    if (($("#otpravka").val() == '17') || ($("#dostavka").val() == '17')) {
        $("#gruz_type").html('<option value="0">Выбрать</option><option value="1">Документы</option><option value="2">Посылки</option>');
        $("#money").css("display", "none");
        $("#gruz").css("display", "none");
        $("#doc").css("display", "none");
        return;

    } else $("#gruz_type").html('<option value="0">Выбрать</option><option value="1">Документы</option><option value="2">Посылки</option><option value="3">Денежные средства</option>');

    if (($("#otpravka").val() == '18') || ($("#dostavka").val() == '18')) {
        $("#gruz_type").html('<option value="0">Выбрать</option><option value="2">Посылки</option>');
        $("#money").css("display", "none");
        $("#gruz").css("display", "none");
        $("#doc").css("display", "none");

    } else $("#gruz_type").html('<option value="0">Выбрать</option><option value="1">Документы</option><option value="2">Посылки</option><option value="3">Денежные средства</option>');
}

$(document).ready(function () {


    $("#sity_rus").css("display", "none");
});

function forEach(data, callback) {
    for (var key in data) {
        if (data.hasOwnProperty(key)) {
            callback(key, data[key]);
        }
    }
}


function set_city(c) {
    $("#sity_rus1").val(c);
    $("#city_panel").css("display", "none");
    $("#sity_rus2").val(c);
    $("#city_panel2").css("display", "none");
}

function get_city_list_all(word) {
    if (word.length > 0) {
        $("#city_panel").css("display", "block");
        $.ajax({
            type: "POST",
            async: false,
            url: "http://" + window.location.hostname + "/php/calculator/get_city_list_all.php",
            dataType: "html",
            data: "word=" + word,
            success: function (data) {

                $("#city_panel").html(data);



            }
        });
    }




}

function get_city_list_all2(word) {
    if (word.length > 0) {
        $("#city_panel2").css("display", "block");
        $.ajax({
            type: "POST",
            async: false,
            url: "http://" + window.location.hostname + "/php/calculator/get_city_list_all.php",
            dataType: "html",
            data: "word=" + word,
            success: function (data) {

                $("#city_panel2").html(data);



            }
        });
    }




}


function get_rus_city(id) {
    $.ajax({
        type: "POST",
        async: false,
        url: "http://" + window.location.hostname + "/php/calculator/api_pecom.php",
        dataType: "html",
        data: "data_type=get_city",
        success: function (data) {
            $('#sity_rus' + id).empty();
            $('#sity_rus' + id).append('<option value="0">Выбрать</option>');

            var mas = JSON.parse(data);

            forEach(mas, function (key, value) {


                $('#sity_rus' + id).append(' <optgroup label="' + key + '" class="color_opt">');
                forEach(value, function (key1, value1) {


                    $('#sity_rus' + id).append('<option value="' + key1 + '" class="color_city">' + value1 + '</option>');


                })
                $('#sity_rus' + id).append('</optgroup>');


            })
        }
    });



}





function get_sity_list(val, id) {
    if (val == 18) {
        $("#sity_rus" + id).css("display", "block");
        get_rus_city(id);

    } else {
        $("#sity_rus" + id).css("display", "none");
    }



    if (id == 1) {
        $("#dostavka option").show();
        $("#dostavka option[value=" + $("#otpravka").val() + "]").hide();


    } else {
        $("#otpravka option").show();
        $("#otpravka option[value=" + $("#dostavka").val() + "]").hide();
    }

}

function get_type_gruz(id) {
    $("#money_cnt").val('');
    if (id == 0) {
        $(".typ").css("display", "none");


    }
    if (id == 1) {
        $(".typ").css("display", "none");
        $("#doc").css("display", "block");

    }
    if (id == 2) {
        $(".typ").css("display", "none");
        $("#gruz").css("display", "block");
    }
    if (id == 3) {
        $(".typ").css("display", "none");
        $("#money").css("display", "block");
    }
}




function send() {

    $("#noresult").css("display", "none");
    if ($("#otpravka").val() == 0) {
        $("#otpravka").css('border', '2px solid #c20303');
        return;
    } else {
        $("#otpravka").css('border', '1px solid #727272');
    }

    if ($("#dostavka").val() == 0) {
        $("#dostavka").css('border', '2px solid #c20303');
        return;
    } else {
        $("#dostavka").css('border', '1px solid #727272');
    }
    if ($("#gruz_type").val() < 1) {
        $("#gruz_type").css('border', '2px solid #c20303');
        return;
    } else {
        $("#gruz_type").css('border', '1px solid #727272');
    }

    if ($("#gruz_type").val() == 2) {
        if ($("#gruz_ves").val() == 0) {
            $("#gruz_ves").css('border', '2px solid #c20303');
            return;
        } else {
            $("#gruz_ves").css('border', '1px solid #727272');
        }

        if ($("#gruz_dlina").val() == 0) {
            $("#gruz_dlina").css('border', '2px solid #c20303');
            return;
        } else {
            $("#gruz_dlina").css('border', '1px solid #727272');
        }

        if ($("#gruz_shirina").val() == 0) {
            $("#gruz_shirina").css('border', '2px solid #c20303');
            return;
        } else {
            $("#gruz_shirina").css('border', '1px solid #727272');
        }

        if ($("#gruz_visota").val() == 0) {
            $("#gruz_visota").css('border', '2px solid #c20303');
            return;
        } else {
            $("#gruz_visota").css('border', '1px solid #727272');
        }
    }
    if ($("#gruz_type").val() == 3) {
        if ($("#money_cnt").val() == 0) {
            $("#money_cnt").css('border', '2px solid #c20303');
            return;
        } else {
            $("#money_cnt").css('border', '1px solid #727272');
        }
    }
    if (($("#otpravka").val() == '15') || ($("#dostavka").val() == '15')) {
        if ($("#gruz_type").val() == '3') {
            alert("Доставка по этому направлению не производится");
            return;
        }
    }

    if ($("#money_cnt").val() > 100000) {
        alert("Максимальная сумма 100 000 руб!");
        return;
    }

    if (($("#otpravka").val() == '17') || ($("#dostavka").val() == '17')) {
        if ($("#gruz_ves").val() > 20) {
            alert("Максимальный вес груза по данному направлению - 20 кг.");
            return;
        }

        if ($("#gruz_dlina").val() > 80) {
            alert("Максимальная длина стороны груза по данному направлению - 80 см.");
            return;
        }
        if ($("#gruz_shirina").val() > 80) {
            alert("Максимальная длина стороны груза по данному направлению - 80 см.");
            return;
        }
        if ($("#gruz_visota").val() > 80) {
            alert("Максимальная длина стороны груза по данному направлению - 80 см.");
            return;
        }
    }



    var timeDelay = 1000; // MILLISECONDS (5 SECONDS).
    $("#preloader").show();
    // MAKE THE AJAX CALL AFTER FEW SECONDS DELAY.
    setTimeout(function () {
        $.ajax({
            type: "POST",
            async: true,
            url: "http://" + window.location.hostname + "/php/calculator/send_calc.php",
            data: $("#send_calc").serialize(),
            dataType: "html",
            beforeSend: function () {

            },
            success: function (data) {
                $("#preloader").hide();
                pred = data.split('|');

                if (data != '1') {

                    $("#api_result").show();
                    $("#stoimost").css("display", "none");
                    $("#travel_data").css("display", "none");
                    $("#srok").css("display", "none");
                    $("#vts_link").css('display', 'block');


                    arr2 = Base64.decode(pred[1]);

                    if (arr2.length > 0) {
                        //                   $("#srok").css("display", "block"); 
                        //                    $("#stoimost").css("display", "block");
                        $("#our-res").css("display", "block");
                        $("#api_result").css("display", "block");
                        arr1 = Base64.decode(pred[0]);
                        arr1 = arr1.split('|');


                        if (!isNaN(arr1[2])) {
                            $("#period").html("Срок доставки - " + arr1[3]);
                            $("#price_pec").html("Стоимость - " + parseInt(Math.ceil((parseInt(arr1[2]) + (parseInt(arr1[2]) * 0.1)) / 50) * 50) + " р.");
                            //  $("#city_name3").html(arr1[1]); 
                            $("#city_name3").html(" ");
                            $("#our-res").html("Доставка ЛДНР - Ростов-на-Дону: " + Math.ceil(arr1[0]) + " руб, 3-5 дней.");
                            //                $("#srok").html('Сроки: от 3 до 5 дней');

                        } else {
                            $("#noresult").css("display", "none");
                            $("#period").html("");
                            $("#price_pec").html("");
                            $("#city_name3").html("Город не обслуживается");
                        }

                        arr2 = Base64.decode(pred[1]);
                        arr2 = arr2.split('|');

                        if (!isNaN(arr2[2])) {
                            $("#period1").html("Срок доставки - " + arr2[3]);
                            $("#price_pec1").html("Стоимость - " + parseInt(Math.ceil((parseInt(arr2[2]) + (parseInt(arr2[2]) * 0.1)) / 50) * 50) + " р.");

                            //  $("#city_name1").html(arr2[1]);  
                            $("#city_name1").html(" ");

                        } else {
                            $("#noresult").css("display", "none");
                            $("#period1").html("");
                            $("#price_pec1").html("");
                            $("#city_name1").html("Город не обслуживается");
                        }

                        arr3 = Base64.decode(pred[2]);
                        arr3 = arr3.split('|');
                        summ = parseInt(arr3[0], 10) + parseInt(arr3[2], 10);

                        if (!isNaN(arr3[2])) {

                            $("#noresult").css("display", "none");
                            $("#period2").html("Срок доставки - " + arr3[3] + " дня");
                            $("#price_pec2").html("Стоимость - " + parseInt(Math.ceil((parseInt(arr3[2]) + (parseInt(arr3[2]) * 0.1)) / 50) * 50) + " р.");
                            //   $("#city_name2").html(arr3[1]); 
                            $("#city_name2").html(" ");

                        } else {
                            $("#noresult").css("display", "none");
                            $("#period2").html("");
                            $("#price_pec2").html("");
                            $("#city_name2").html("Город не обслуживается");

                        }

                    } else {


                        $("#api_result").css("display", "none");
                        $("#our-res").css("display", "none");
                        $("#stoimost").css("display", "block");
                        $("#travel_data").css("display", "block");
                        $("#srok").css("display", "block");

                        $("#stoimost").html("Доставка: " + pred[0] + " р");

                        //Показываем срок перевозки и отделения
                        var o = 0;
                        switch ($("#otpravka").val()) {
                        case '1':
                            o = "lnr";
                                cityo = "<li><strong>Отделение в г. Алчевск:</strong>ул. Гмыри, 55 (ТРЦ «Столица», 0-й этаж)<br><a href='branches.php#branche-alchevsk' target='_blank'>На карту</a></li>";
                            break;
                        case '2':
                            o = "dnr";
                            cityo = "<li><strong>Отделение в г. Горловка:</strong>пр-т Победы, 2Б (ост. Украина)<br><a href='branches.php#branche-gorlovka' target='_blank'>На карту</a></li>";
                            break;
                        case '3':
                            o = "dnr";
                            cityo = "<li><strong>Отделение в г. Донецк:</strong>пл. Коммунаров 1 (ТЦ «Юзовский Пассаж»)<br><a href='branches.php#branche-donetsk' target='_blank'>Все адреса</a></li>";
                            break;
                        case '4':
                            o = "dnr";
                            cityo = "<li><strong>Отделение в г. Енакиево:</strong>пр-т Ленина, 91 (в здании отеля «Мир»)<br><a href='branches.php#branche-enakievo' target='_blank'>На карту</a></li>";
                            break;
                        case '5':
                            o = "dnr";
                            cityo = "<li><strong>Отделение в г. Кировское:</strong>ул. Асфальтная, 1 (помещение Автомагазина)<br><a href='branches.php#branche-kirovskoe' target='_blank'>На карту</a></li>";
                            break;
                        case '8':
                            o = "lnr";
                            cityo = "<li><strong>Отделение в г. Луганск:</strong>ул. Оборонная, 28 (здание Автовокзала)<br><a href='branches.php#branche-lugansk' target='_blank'>На карту</a></li>";
                            break;
                        case '9':
                            o = "dnr";
                            cityo = "<li><strong>Отделение в г. Макеевка:</strong>ул. Московская 29/48 (ост. бывшая Вареничная)<br><a href='branches.php#branche-makeevka' target='_blank'>Все адреса</a></li>";
                            break;
                        case '10':
                            o = "rostov";
                            cityo = "<li><strong>Отделение в г. Ростов-на-Дону:</strong>ул. Малиновского, 3Б, офис №3<br><a href='branches.php#branche-rostov-na-donu' target='_blank'>На карту</a></li>";
                            break;
                        case '11':
                            o = "krim";
                            cityo = "<li><strong>Отделение в г. Севастополь:</strong>5-й км (стоянка вещевого рынка, 11 павильон)<br><a href='branches.php#branche-sevastopol' target='_blank'>На карту</a></li>";
                            break;
                        case '12':
                            o = "krim";
                            cityo = "<li><strong>Отделение в г. Симферополь:</strong>бул. Ленина 14 (Ж/Д вокзал)<br><a href='branches.php#branche-simferopol' target='_blank'>На карту</a></li>";
                            break;
                        case '13':
                            o = "dnr";
                            cityo = "<li><strong>Отделение в г. Снежное:</strong>ул. Ленина, 22 (маг. «Фуршет»)<br><a href='branches.php#branche-snezhnoe' target='_blank'>На карту</a></li>";
                            break;
                        case '14':
                            o = "lnr";
                            cityo = "<li><strong>Отделение в г. Стаханов:</strong>пр. Ленина, 25 (ост. «Шахтер»)<br><a href='branches.php#branche-stahanov' target='_blank'>На карту</a></li>";
                            break;
                        case '15':
                            o = "dnr";
                            cityo = "<li><strong>Отделение в г. Шахтерск:</strong>ул. Крупской, 1 (здание Автовокзала)<br><a href='branches.php#branche-shahtersk' target='_blank'>На карту</a></li>";
                            break;
                        case '16':
                            o = "dnr";
                            cityo = "<li><strong>Отделение в г. Ясиноватая:</strong>ул. Некрасова, 6<br><a href='branches.php#branche-yasinovataya' target='_blank'>На карту</a></li>";
                            break;
                        case '17':
                            o = "ukr";
                            cityo = " ";
                            break;
                        case '18':
                            o = "rus";
                            cityo = " ";
                            break;
                        case '19':
                            o = "krim";
                            cityo = "<li><strong>Отделение в г. Евпатория:</strong>пр-т Победы, 63/2, офис 24А<br><a href='branches.php#branche-evpatoriya' target='_blank'>На карту</a></li>";
                            break;  
                        case '20':
                            o = "krim";
                                cityo = "<li><strong>Отделение в г. Феодосия:</strong>Керченское шоссе, (ост. пр-т Украина, возле кафе «Калиба»)<br><a href='branches.php#branche-feodosiya' target='_blank'>На карту</a></li>";
                            break;
                        case '21':
                            o = "lnr";
                                cityo = "<li><strong>Отделение в г. Антрацит:</strong>ул. Петровского, 12<br><a href='branches.php#branche-antacit' target='_blank'>На карту</a></li>";
                            break;
                        }

                        var d = 0;

                        switch ($("#dostavka").val()) {
                        case '1':
                            d = "lnr";
                                city = "<li><strong>Отделение в г. Алчевск:</strong>ул. Гмыри, 55 (ТРЦ «Столица», 0-й этаж)<br><a href='branches.php#branche-alchevsk' target='_blank'>На карту</a></li>";
                            break;
                        case '2':
                            d = "dnr";
                            city = "<li><strong>Отделение в г. Горловка:</strong>пр-т Победы, 2Б (ост. Украина)<br><a href='branches.php#branche-gorlovka' target='_blank'>На карту</a></li>";
                            break;
                        case '3':
                            d = "dnr";
                            city = "<li><strong>Отделение в г. Донецк:</strong>пл. Коммунаров 1 (ТЦ «Юзовский Пассаж»)<br><a href='branches.php#branche-donetsk' target='_blank'>Все адреса</a></li>";
                            break;
                        case '4':
                            d = "dnr";
                            city = "<li><strong>Отделение в г. Енакиево:</strong>пр-т Ленина, 91 (в здании отеля «Мир»)<br><a href='branches.php#branche-enakievo' target='_blank'>На карту</a></li>";
                            break;
                        case '5':
                            d = "dnr";
                            city = "<li><strong>Отделение в г. Кировское:</strong>ул. Асфальтная, 1 (помещение Автомагазина)<br><a href='branches.php#branche-kirovskoe' target='_blank'>На карту</a></li>";
                            break;
                        case '8':
                            d = "lnr";
                            city = "<li><strong>Отделение в г. Луганск:</strong>ул. Оборонная, 28 (здание Автовокзала)<br><a href='branches.php#branche-lugansk' target='_blank'>На карту</a></li>";
                            break;
                        case '9':
                            d = "dnr";
                            city = "<li><strong>Отделение в г. Макеевка:</strong>ул. Московская 29/48 (ост. бывшая Вареничная)<br><a href='branches.php#branche-makeevka' target='_blank'>Все адреса</a></li>";
                            break;
                        case '10':
                            d = "rostov";
                            city = "<li><strong>Отделение в г. Ростов-на-Дону:</strong>ул. Малиновского, 3Б, офис №3<br><a href='branches.php#branche-rostov-na-donu' target='_blank'>На карту</a></li>";
                            break;
                        case '11':
                            d = "krim";
                            city = "<li><strong>Отделение в г. Севастополь:</strong>5-й км (стоянка вещевого рынка, 11 павильон)<br><a href='branches.php#branche-sevastopol' target='_blank'>На карту</a></li>";
                            break;
                        case '12':
                            d = "krim";
                            city = "<li><strong>Отделение в г. Симферополь:</strong>бул. Ленина 14 (Ж/Д вокзал)<br><a href='branches.php#branche-simferopol' target='_blank'>На карту</a></li>";
                            break;
                        case '13':
                            d = "dnr";
                            city = "<li><strong>Отделение в г. Снежное:</strong>ул. Ленина, 22 (маг. «Фуршет»)<br><a href='branches.php#branche-snezhnoe' target='_blank'>На карту</a></li>";
                            break;
                        case '14':
                            d = "lnr";
                            city = "<li><strong>Отделение в г. Стаханов:</strong>пр. Ленина, 25 (ост. «Шахтер»)<br><a href='branches.php#branche-stahanov' target='_blank'>На карту</a></li>";
                            break;
                        case '15':
                            d = "dnr";
                            city = "<li><strong>Отделение в г. Шахтерск:</strong>ул. Крупской, 1 (здание Автовокзала)<br><a href='branches.php#branche-shahtersk' target='_blank'>На карту</a></li>";
                            break;
                        case '16':
                            d = "dnr";
                            city = "<li><strong>Отделение в г. Ясиноватая:</strong>ул. Некрасова, 6<br><a href='branches.php#branche-yasinovataya' target='_blank'>На карту</a></li>";
                            break;
                        case '17':
                            d = "ukr";
                            city = " ";
                            break;
                        case '18':
                            d = "rus";
                            city = " ";
                            break;
                        case '19':
                            d = "krim";
                            city = "<li><strong>Отделение в г. Евпатория:</strong>пр-т Победы, 63/2, офис 24А<br><a href='branches.php#branche-evpatoriya' target='_blank'>На карту</a></li>";
                            break;
                        case '20':
                            d = "krim";
                            city = "<li><strong>Отделение в г. Феодосия:</strong>Керченское шоссе, (ост. пр-т Украина, возле кафе «Калиба»)<br><a href='branches.php#branche-feodosiya' target='_blank'>На карту</a></li>";
                            break;
                        case '21':
                            d = "lnr";
                            city = "<li><strong>Отделение в г. Антрацит:</strong>ул. Петровского, 12<br><a href='branches.php#branche-antracit' target='_blank'>На карту</a></li>";
                            break;
                        }


                        if (((d == 'dnr') && (o == 'dnr')) || ((d == 'krim') && (o == 'krim'))) {
                            $("#srok").html('Срок: от 3 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'none');
                        }
                        if ((d == 'lnr') && (o == 'lnr')) {
                            $("#srok").html('Срок: от 3 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'none');
                        }

                        if (((d == 'dnr') && (o == 'lnr')) || ((d == 'lnr') && (o == 'dnr'))) {
                            $("#srok").html('Срок: от 3 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'block');
                        }

                        if (((d == 'krim') && (o == 'lnr')) || ((d == 'lnr') && (o == 'krim'))) {
                            $("#srok").html('Срок: от 7 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'block');
                        }
                        if (((d == 'krim') && (o == 'dnr')) || ((d == 'dnr') && (o == 'krim'))) {
                            $("#srok").html('Срок: от 3 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'block');
                        }
                        if (((d == 'ukr') && (o == 'dnr')) || ((d == 'dnr') && (o == 'ukr'))) {
                            $("#srok").html('Срок: от 3 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'block');
                        }
                        if (((d == 'ukr') && (o == 'lnr')) || ((d == 'lnr') && (o == 'ukr'))) {
                            $("#srok").html('Срок: от 10 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'block');
                        }
                        if (((d == 'dnr') && (o == 'rostov')) || ((d == 'rostov') && (o == 'dnr'))) {
                            $("#srok").html('Срок: от 3 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'block');
                        }
                        if (((d == 'lnr') && (o == 'rostov')) || ((d == 'rostov') && (o == 'lnr'))) {
                            $("#srok").html('Срок: от 7 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'block');
                        }
                        if (((d == 'krim') && (o == 'rostov')) || ((d == 'rostov') && (o == 'krim'))) {
                            $("#srok").html('Срок: от 3 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'none');
                        }
                        if (((d == 'ukr') && (o == 'rostov')) || ((d == 'rostov') && (o == 'ukr'))) {
                            $("#srok").html('Срок: от 10 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                            $("#vts_link").css('display', 'block');
                        }
                        if (((d == 'ukr') && (o == 'krim')) || ((d == 'krim') && (o == 'ukr'))) {
                            $("#srok").html('Срок: от 10 дней');
                            $("#otd").html(city);
                            $("#otd1").html(cityo);
                        }


                    }

                } else {
                    $("#noresult").css("display", "block");
                    $("#city_panel").css("display", "none");
                    $("#city_panel2").css("display", "none");
                    $("#api_result").css("display", "none");
                    $("#our-res").css("display", "none");
                    $("#stoimost").css("display", "none");
                    $("#travel_data").css("display", "none");
                    $("#srok").css("display", "none");
                    $("#vts_link").css('display', 'none');
                }

            },
            beforeSend: function () {
                $("#over").css('display', 'block');

            }
        })
    }, timeDelay);




}