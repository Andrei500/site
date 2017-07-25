
var gruz_array = []; //пустой массив для данных о грузах
var client_array = []; //пустой массив для данных о клиенте
var first_gruz_id_val;  //Переменная для номера первой записи
var input_gruz_id = $("#input_gruz_id"); //Элемент для номера первой записи

//Отрисовывает таблицу из созраненного массива грузов
function draw_gruz_table() {
    var new_gruz = $("#new_gruz");

    $(".old_gruz").remove();

    gruz_array.forEach(function(gruz, i, gruz_array)
    {
        var next_gruz_id = i + 1;
        var article_name = gruz[0];
        var remark_product = gruz[1];
        var product_creater = gruz[2];
        var product_ves = gruz[3];
        var product_obem = gruz[4];
        var product_country = gruz[5];
        var product_price = gruz[6];

        new_gruz.before(
        "<tr class='old_gruz'>" +
            "<td align='center'>" + next_gruz_id + "</td>" +
            "<td align='center'>" + article_name + "</td>" +
            "<td align='center'>" + remark_product+ "</td>" +
            "<td align='center'>" + product_creater + "</td>" +
            "<td align='center'>" + product_ves + "</td>" +
            "<td align='center'>" + product_obem + "</td>" +
            "<td align='center'>" + product_country + "</td>" +
            "<td align='center'>" + product_price + "</td>" +
        "</tr>");
    });

    input_gruz_id.text(gruz_array.length + 1);

    return true;
}

//Красит HTML элемент
function notice_if_empty(element)
{
    element.css('border', '2px solid #c20303');
    element.attr('placeholder','Заполните это поле!');
    return true;
}

//Очищает HTML элемент от покраски (см. notice_if_empty)
function clean_if_filled(element)
{
    element.css('border', '');
    element.attr('placeholder','');
    return true;
}

//Проверка на заполнение инпутов для груза
function check_if_gruz_filled()
{
    var gruz_filled = true;
    return gruz_filled;
    
}

//Добавление строки и запись данных
function add_gruz()
{
    
    if ($("#article_name").val() == "") {
        $("#article_name").val("-");
    }
    if ($("#remark_product").val() == "") {
        $("#remark_product").val("-");
    }
    if ($("#product_creater").val() == "") {
        $("#product_creater").val("-");
    }
    if ($("#product_ves").val() == "") {
        $("#product_ves").val("-");
    }
    if ($("#product_obem").val() == "") {
        $("#product_obem").val("-");
    }
    if ($("#product_country").val() == "") {
        $("#product_country").val("-");
    }
    if ($("#product_price").val() == "") {
        $("#product_price").val("-");
    }
    
    var article_name = $("#article_name").val();
    var remark_product = $("#remark_product").val();
    var product_creater = $("#product_creater").val();
    var product_ves = $("#product_ves").val();
    var product_obem = $("#product_obem").val();
    var product_country = $("#product_country").val();
    var product_price = $("#product_price").val();
    

    //Записываем груз в память только в том случае, если все поля зополнены
    if (check_if_gruz_filled() == true) {
        gruz_array.push([
            article_name,
            remark_product,
            product_creater,
            product_ves,
            product_obem,
            product_country,
            product_price
        ]); //записываем массив

        //И отрисовываем таблицу из массива с сохраненными грузами
        draw_gruz_table();
        //Затем очищаем инпуты для груза
        $( ".clear_gruz" ).val('');
    }

    return true;
}

function send_data_to_server()
{
    var client_values_array = [
      client_array[0].val(), //Имя
      client_array[1].val(), //Телефон
      client_array[2].val(), //Почта
      client_array[3].val() //Город
    ];

    if(true) {
      var inputFiles = $("#file_to_calc").get(0).files;
      //console.log(inputFiles);

      form = $('form#formcomm')[0];
      var fd = new FormData(form);
      fd.append('inputfiles', jQuery.makeArray(inputFiles));
      fd.append('action', 'saveFormData');
      fd.append('gruz', JSON.stringify(gruz_array));
      fd.append('client', JSON.stringify(client_values_array));

      //console.log("Send Data to Server Begin");

      return $.ajax({
          url: 'php/send_form_comm.php',
          type: 'post',
          processData: false,
          contentType: false,
          data: fd,
          success: function(response) {
            console.log('resp: ' + response);
          }
        });
    }
}

//Отправка формы и валидация
function send_form_comm()
{
    var name = $("#name");
    var tel = $("#tel");
    var mail = $("#mail");
    var destination = $("#city");

    client_array = [name, tel, mail, destination];

    var blank_items_exist = false;

    //В цикле валидируем клиентские инпуты
    client_array.forEach(function(item, i, client_array)
    {
        clean_if_filled(item);
        if (item.val() == '') {
            notice_if_empty(item);
            blank_items_exist = true;
        }
    });

    //Проверяем все ли данные клиента заполнены
    if(blank_items_exist == false)
    {
        //Загружаем данные по грузам на сервер только в том случае, если есть заполненные записи о грузе
        if (check_if_gruz_filled() == true || gruz_array.length != 0)
        {
            //В соучае, если заполнена первая строка, добавляем ее в массив грузов
            if(check_if_gruz_filled()) {
              add_gruz();
              //$("#new_gruz").remove(); //Опасно. Удаляет строку с инпутами.
            }
            send_data_to_server();
        }
    }
    var inst = $.remodal.lookup[$('[data-remodal-id=table-commerce-calc]').data('remodal')];
    inst.close();
    alert('Данные переданы менеджеру для расчета!');
    //Перезагрузка страницы. В случае использования попап-формы,
    //Здесь нужно алертить или дропать поп-ап
    //location.reload(); //В текущем коде чтобы без заморочек сбросить данные формы
    return true;
}
//Конец "Расчет коммерческого груза"

//Вешаем слушатели на нажатия клавиш в инпутах пользователя
function add_keypress_listeners()
{
    var name = $("#name");
    var tel = $("#tel");
    var mail = $("#mail");
    var input_array = [name, tel, mail];

    input_array.forEach(function(item, i, input_array)
    {
        item.keypress(function() {
            clean_if_filled(item);
        });
    });
}

//Проставляем единичку в идентификатор первого груза при загрузке страницы
function init_first_gruz_row_num()
{
    first_gruz_id_val = gruz_array.length + 1;
    input_gruz_id.text(first_gruz_id_val);
    return true;
}


$(function() {
    add_keypress_listeners(); //Для сброса красных рамок и плейсхолдеров
    init_first_gruz_row_num();

    $("form#form_comm").submit(function(event){
        event.preventDefault();
    });
});
