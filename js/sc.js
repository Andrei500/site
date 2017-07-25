//masked.input
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});

//waypoints.min.js
(function($,k,m,i,d){var e=$(i),g="waypoint.reached",b=function(o,n){o.element.trigger(g,n);if(o.options.triggerOnce){o.element[k]("destroy")}},h=function(p,o){var n=o.waypoints.length-1;while(n>=0&&o.waypoints[n].element[0]!==p[0]){n-=1}return n},f=[],l=function(n){$.extend(this,{element:$(n),oldScroll:0,waypoints:[],didScroll:false,didResize:false,doScroll:$.proxy(function(){var q=this.element.scrollTop(),p=q>this.oldScroll,s=this,r=$.grep(this.waypoints,function(u,t){return p?(u.offset>s.oldScroll&&u.offset<=q):(u.offset<=s.oldScroll&&u.offset>q)}),o=r.length;if(!this.oldScroll||!q){$[m]("refresh")}this.oldScroll=q;if(!o){return}if(!p){r.reverse()}$.each(r,function(u,t){if(t.options.continuous||u===o-1){b(t,[p?"down":"up"])}})},this)});$(n).scroll($.proxy(function(){if(!this.didScroll){this.didScroll=true;i.setTimeout($.proxy(function(){this.doScroll();this.didScroll=false},this),$[m].settings.scrollThrottle)}},this)).resize($.proxy(function(){if(!this.didResize){this.didResize=true;i.setTimeout($.proxy(function(){$[m]("refresh");this.didResize=false},this),$[m].settings.resizeThrottle)}},this));e.load($.proxy(function(){this.doScroll()},this))},j=function(n){var o=null;$.each(f,function(p,q){if(q.element[0]===n){o=q;return false}});return o},c={init:function(o,n){this.each(function(){var u=$.fn[k].defaults.context,q,t=$(this);if(n&&n.context){u=n.context}if(!$.isWindow(u)){u=t.closest(u)[0]}q=j(u);if(!q){q=new l(u);f.push(q)}var p=h(t,q),s=p<0?$.fn[k].defaults:q.waypoints[p].options,r=$.extend({},s,n);r.offset=r.offset==="bottom-in-view"?function(){var v=$.isWindow(u)?$[m]("viewportHeight"):$(u).height();return v-$(this).outerHeight()}:r.offset;if(p<0){q.waypoints.push({element:t,offset:null,options:r})}else{q.waypoints[p].options=r}if(o){t.bind(g,o)}if(n&&n.handler){t.bind(g,n.handler)}});$[m]("refresh");return this},remove:function(){return this.each(function(o,p){var n=$(p);$.each(f,function(r,s){var q=h(n,s);if(q>=0){s.waypoints.splice(q,1)}})})},destroy:function(){return this.unbind(g)[k]("remove")}},a={refresh:function(){$.each(f,function(r,s){var q=$.isWindow(s.element[0]),n=q?0:s.element.offset().top,p=q?$[m]("viewportHeight"):s.element.height(),o=q?0:s.element.scrollTop();$.each(s.waypoints,function(u,x){if(!x){return}var t=x.options.offset,w=x.offset;if(typeof x.options.offset==="function"){t=x.options.offset.apply(x.element)}else{if(typeof x.options.offset==="string"){var v=parseFloat(x.options.offset);t=x.options.offset.indexOf("%")?Math.ceil(p*(v/100)):v}}x.offset=x.element.offset().top-n+o-t;if(x.options.onlyOnScroll){return}if(w!==null&&s.oldScroll>w&&s.oldScroll<=x.offset){b(x,["up"])}else{if(w!==null&&s.oldScroll<w&&s.oldScroll>=x.offset){b(x,["down"])}else{if(!w&&o>x.offset){b(x,["down"])}}}});s.waypoints.sort(function(u,t){return u.offset-t.offset})})},viewportHeight:function(){return(i.innerHeight?i.innerHeight:e.height())},aggregate:function(){var n=$();$.each(f,function(o,p){$.each(p.waypoints,function(q,r){n=n.add(r.element)})});return n}};$.fn[k]=function(n){if(c[n]){return c[n].apply(this,Array.prototype.slice.call(arguments,1))}else{if(typeof n==="function"||!n){return c.init.apply(this,arguments)}else{if(typeof n==="object"){return c.init.apply(this,[null,n])}else{$.error("Method "+n+" does not exist on jQuery "+k)}}}};$.fn[k].defaults={continuous:true,offset:0,triggerOnce:false,context:i};$[m]=function(n){if(a[n]){return a[n].apply(this)}else{return a.aggregate()}};$[m].settings={resizeThrottle:200,scrollThrottle:100};e.load(function(){$[m]("refresh")})})(jQuery,"waypoint","waypoints",this);
//

//jquery.scrollTo-1.4.2-min.js
(function(d){var k=d.scrollTo=function(a,i,e){d(window).scrollTo(a,i,e)};k.defaults={axis:'xy',duration:parseFloat(d.fn.jquery)>=1.3?0:1};k.window=function(a){return d(window)._scrollable()};d.fn._scrollable=function(){return this.map(function(){var a=this,i=!a.nodeName||d.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!i)return a;var e=(a.contentWindow||a).document||a.ownerDocument||a;return d.browser.safari||e.compatMode=='BackCompat'?e.body:e.documentElement})};d.fn.scrollTo=function(n,j,b){if(typeof j=='object'){b=j;j=0}if(typeof b=='function')b={onAfter:b};if(n=='max')n=9e9;b=d.extend({},k.defaults,b);j=j||b.speed||b.duration;b.queue=b.queue&&b.axis.length>1;if(b.queue)j/=2;b.offset=p(b.offset);b.over=p(b.over);return this._scrollable().each(function(){var q=this,r=d(q),f=n,s,g={},u=r.is('html,body');switch(typeof f){case'number':case'string':if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(f)){f=p(f);break}f=d(f,this);case'object':if(f.is||f.style)s=(f=d(f)).offset()}d.each(b.axis.split(''),function(a,i){var e=i=='x'?'Left':'Top',h=e.toLowerCase(),c='scroll'+e,l=q[c],m=k.max(q,i);if(s){g[c]=s[h]+(u?0:l-r.offset()[h]);if(b.margin){g[c]-=parseInt(f.css('margin'+e))||0;g[c]-=parseInt(f.css('border'+e+'Width'))||0}g[c]+=b.offset[h]||0;if(b.over[h])g[c]+=f[i=='x'?'width':'height']()*b.over[h]}else{var o=f[h];g[c]=o.slice&&o.slice(-1)=='%'?parseFloat(o)/100*m:o}if(/^\d+$/.test(g[c]))g[c]=g[c]<=0?0:Math.min(g[c],m);if(!a&&b.queue){if(l!=g[c])t(b.onAfterFirst);delete g[c]}});t(b.onAfter);function t(a){r.animate(g,j,b.easing,a&&function(){a.call(this,n,b)})}}).end()};k.max=function(a,i){var e=i=='x'?'Width':'Height',h='scroll'+e;if(!d(a).is('html,body'))return a[h]-d(a)[e.toLowerCase()]();var c='client'+e,l=a.ownerDocument.documentElement,m=a.ownerDocument.body;return Math.max(l[h],m[h])-Math.min(l[c],m[c])};function p(a){return typeof a=='object'?a:{top:a,left:a}}})(jQuery);
//


//прилипание меню + выделение активной ссылки
$(function() {
	var nav_container = $(".sub-menu-main");
	var nav = $(".sub-menu");

	var top_spacing = 0;
	var waypoint_offset = 44;

	nav_container.waypoint({
		handler: function(event, direction) {
			if (direction == 'down') {
				nav_container.css({ 'height':nav.outerHeight() });
				nav.stop().addClass("sticky").css("top",-nav.outerHeight()).animate({"top":top_spacing});
			} else {
				nav_container.css({ 'height':'auto' });
				nav.stop().removeClass("sticky").css("top",nav.outerHeight()+waypoint_offset).animate({"top":""});
			}
		},
		offset: function() {
			return -nav.outerHeight()-waypoint_offset;
		}
	});

	var sections = $(".section");
	var navigation_links = $(".sub-menu a");
	sections.waypoint({
		handler: function(event, direction) {
			var active_section;
			active_section = $(this);
			if (direction === "up") active_section = active_section.prev();
			var active_link = $('.sub-menu a[href="#' + active_section.attr("id") + '"]');
			navigation_links.removeClass("selected");
			active_link.addClass("selected");
		},
		offset: '5%'
	})
});


//плавная прокрутка sub-menu
$(document).ready(function(){
	$(".sub-menu").on("click","a", function (event) {
		event.preventDefault();
			var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top+25}, 750);
	});
});


//плавная прокрутка вверх
$(document).ready(function(){

    $("#back-top").hide();
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });


});
$(document).ready(function(){
        $('.sub-menu ul li span').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
});
//открытие перечня документов
function show_list ()
{
$(".list-com  p").css("display", "block");
$(".list-com  span").html('Перечень необходимых документов для декларирования<a onclick="close_list()">ЗАКРЫТЬ</a>');
}

function close_list()
{
$(".list-com  p").css("display", "none");
$(".list-com  span").html('Перечень необходимых документов для декларирования<a onclick="show_list()">ОТКРЫТЬ</a>');
}

//обратный звонок
function show_cb_form (btn)
{
    btn.parent().parent().parent().next().css('display', 'flex');
}

function send_phone(form)
{
	var
		selectValue = form[0].children[0].value,
		phone = form[0].children[1].value;

	if (selectValue === 0) {
		alert('Выберите, чья консультация Вам нужна.');
		return
	}

	if (phone.length < 10) {
		alert('Проверьте правильность введенного номера телефона.');
		return;
	}

  $.ajax({
           type: "POST",
           async: false,
           url: "http://"+window.location.hostname+"/php/send_user_phone.php",
           dataType: "html",
           data: "phone=" + phone + "&who=" + selectValue,
           success: function(data) {
              alert('Спасибо за обращение! Ожидайте звонка оператора.');
              $('#user_phone').val('');
           }
       });

}

//Форма "Регистрация получателя"
function send_form_pol()
{
var inst = $.remodal.lookup[$('[data-remodal-id=form-pol]').data('remodal')];
if ($("#form_pol_name_pol").val()=='')
{
    $("#form_pol_name_pol").css('border', '2px solid #c20303');
    $("#form_pol_name_pol").attr('placeholder','Заполните это поле!');
   return;
}

if ($("#form_pol_tel_pol").val()=='')
{
    $("#form_pol_tel_pol").css('border', '2px solid #c20303');
    $("#form_pol_tel_pol").attr('placeholder','Заполните это поле!');
   return;
}

if ($("#form_pol_name_otp").val()=='')
{
    $("#form_pol_name_otp").css('border', '2px solid #c20303');
    $("#form_pol_name_otp").attr('placeholder','Заполните это поле!');
    return;
}

if ($("#form_pol_tel_otp").val()=='')
{
    $("#form_pol_tel_otp").css('border', '2px solid #c20303');
    $("#form_pol_tel_otp").attr('placeholder','Заполните это поле!');
    return;
}

if ($("#form_pol_city_otp").val()=='')
{
    $("#form_pol_city_otp").css('border', '2px solid #c20303');
    $("#form_pol_city_otp").attr('placeholder','Заполните это поле!');
    return;
}

if ($("#form_pol_tk").val()<1)
{
    $("#form_pol_tk").css('border', '2px solid #c20303');
    return;
}

if ($("#form_pol_id").val()=='')
{
	$("#form_pol_id").css('border', '2px solid #c20303');
	$("#form_pol_id").attr('placeholder','Заполните это поле!');
	return;
}

if ($("#form_pol_tk").val()==5)
{
    $("#form_pol_tk").css('border', '2px solid #c20303');
     $.ajax({
                 type: "POST",
                 async: false,
                 url: "http://"+window.location.hostname+"/php/send_form_pol_ukr.php",
                 data: $("#form_pol").serialize(),
                 dataType: "html",
                 success: function(data) {

                    inst.close();
                    alert('Получатель успешно зарегистрирован!');
                 }

             });
    return;
}







 $.ajax({
                 type: "POST",
                 async: false,
                 url: "http://"+window.location.hostname+"/php/send_form_pol.php",
                 data: $("#form_pol").serialize(),
                 dataType: "html",
                 success: function(data) {

                    inst.close();
                    alert('Получатель успешно зарегистрирован!');
                 }

             });

}
//Конец "Регистрация получателя"


//Форма "Итернет-заказ"
function send_form_os()
{

if ($("#form_os_name").val()=='')
{
    $("#form_os_name").css('border', '2px solid #c20303');
    $("#form_os_name").attr('placeholder','Заполните это поле!');
   return;
}

if ($("#form_os_tel").val()=='')
{
    $("#form_os_tel").css('border', '2px solid #c20303');
    $("#form_os_tel").attr('placeholder','Заполните это поле!');
   return;
}

if ($("#form_os_mail").val()=='')
{
    $("#form_os_mail").css('border', '2px solid #c20303');
    $("#form_os_mail").attr('placeholder','Заполните это поле!');
    return;
}

if ($("#form_os_links").val()=='')
{
    $("#form_os_links").css('border', '2px solid #c20303');
    $("#form_os_links").attr('placeholder','Предоставьте ссылки на товары!');
    return;
}

if ($("#form_os_summ").val()=='')
{
    $("#form_os_summ").css('border', '2px solid #c20303');
    $("#form_os_summ").attr('placeholder','Заполните это поле!');
    return;
}

    if ($("#ageOS").prop("checked") != true)
    {
        $("#ageOS").parent().css({border: "1px solid #c20303"});
        return;
    }
var inst = $.remodal.lookup[$('[data-remodal-id=online-order]').data('remodal')];

 $.ajax({
                 type: "POST",
                 async: false,
                 url: "http://"+window.location.hostname+"/php/send_form_os.php",
                 data: $("#form_os").serialize(),
                 dataType: "html",
                 success: function(data) {

                    inst.close();
                    alert('Заявка принята в обработку! В скором времени с Вами свяжется менеджер.');
                 }

             });

}
//Конец "Интернет-заказ"

//Форма "Китай-регистрация"
function send_form_ch()
{
    var pattern = /^[a-zA-Z\s]+$/;
if ($("#form_ch_name").val() == '')
{
    $("#form_ch_name").css('border', '2px solid #c20303');
    $("#form_ch_name").attr('placeholder','Заполните это поле!');
    return;
}
    else {
        if ($("#form_ch_name").val().search(pattern) != 0)
        {
        $("#form_ch_name").css('border', '2px solid #c20303');
            $("#form_ch_name").val('');
            $("#form_ch_name").attr('placeholder','Поле не должно содержать кириллицу!');
        return;
    }
}

if ($("#form_ch_tel").val()=='')
{
    $("#form_ch_tel").css('border', '2px solid #c20303');
    $("#form_ch_tel").attr('placeholder','Заполните это поле!');
   return;
}

if ($("#form_ch_links").val()=='')
{
    $("#form_ch_links").css('border', '2px solid #c20303');
    $("#form_ch_links").attr('placeholder','Предоставьте ссылки на товары!');
    return;
}

if ($("#form_ch_summ").val()=='')
{
    $("#form_ch_summ").css('border', '2px solid #c20303');
    $("#form_ch_summ").attr('placeholder','Заполните это поле!');
    return;
}

var inst = $.remodal.lookup[$('[data-remodal-id=china-links]').data('remodal')];

    var url = $("#form_ch_links").val();
    var regV = /snapshot/gi;
    var result = url.match(regV);

    if (result) {
        $("#form_ch_links").val('');
        $("#form_ch_links").css('border', '2px solid #c20303');
        $("#form_ch_links").attr('placeholder','Вы предоставили ссылки на скриншоты, а не на товар! Ссылка на товар должна содержать значение "item", а не "snapshot".');

    }

    if ($("#age").prop("checked") != true)
    {
        $("#age").next().css({color : '#c20303', textDecoration : 'underline'});
        return;
    }

    else {
        $.ajax({
            type: "POST",
            async: false,
            url: "http://"+window.location.hostname+"/php/send_form_ch.php",
            data: $("#form_ch").serialize(),
            dataType: "html",
            success: function(data) {

                inst.close();
                alert('Заказ успешно зарегистрирован!');
            }

        });
    }

}
//Конец "Китай-регистрация"


//Форма "Книга жалоб"
function send_form_book()
{

if ($("#form_book_text").val()=='')
{
    $("#form_book_text").css('border', '2px solid #c20303');
    $("#form_book_text").attr('placeholder','Вы ничего не написали!');
   return;
}

var inst = $.remodal.lookup[$('[data-remodal-id=form-book]').data('remodal')];

 $.ajax({
                 type: "POST",
                 async: false,
                 url: "http://"+window.location.hostname+"/php/send_form_book.php",
                 data: $("#form_book").serialize(),
                 dataType: "html",
                 success: function(data) {

                    inst.close();
                    alert('Спасибо, что помогаете Нам становиться лучше!');
                 }

             });

}
//Конец "Книга жалоб"

//Форма "Резюме"
function send_form_res()
{

if ($("#form_res_name").val()=='')
{
    $("#form_res_name").css('border', '2px solid #c20303');
    $("#form_res_name").attr('placeholder','Заполните это поле!');
   return;
}

if ($("#form_res_tel").val()=='')
{
    $("#form_res_tel").css('border', '2px solid #c20303');
    $("#form_res_tel").attr('placeholder','Заполните это поле!');
   return;
}

if ($("#form_res_vac").val()=='')
{
    $("#form_res_vac").css('border', '2px solid #c20303');
    $("#form_res_vac").attr('placeholder','Заполните это поле!');
   return;
}


var inst = $.remodal.lookup[$('[data-remodal-id=form-resume]').data('remodal')];

 $.ajax({
                 type: "POST",
                 async: false,
                 url: "http://"+window.location.hostname+"/php/send_form_res.php",
                 data: $("#form_res").serialize(),
                 dataType: "html",
                 success: function(data) {

                    inst.close();
                    alert('Резюме принято для рассмотрения!');
                 }

             });

}
//Конец "Резюме"





//Заглушка "Личный кабинет"
function send_data_lk()
{

if ($("#form_lk_mail").val()=='')
{
    $("#form_lk_mail").css('border', '2px solid #c20303');
   return;
}

var inst = $.remodal.lookup[$('[data-remodal-id=form-lk]').data('remodal')];

 $.ajax({
                 type: "POST",
                 async: false,
                 url: "http://"+window.location.hostname+"/php/send_form_lk.php",
                 data: $("#flk").serialize(),
                 dataType: "html",
                 success: function(data) {

                    inst.close();
                    alert('Спасибо!');
                 }

             });

}
//Конец / Заглушка "Личный кабинет"

//вкладки личного кабинета
$(".tk-tab_item").not(":first").hide();
$(".tk-wrap .tk-tab").click(function() {
    $(".tk-wrap .tk-tab").removeClass("tk-active").eq($(this).index()).addClass("tk-active");
    $(".tk-tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("tk-active");

//вкладки личного кабинета
$(".lk-tab_item").not(":first").hide();
$(".lk-wrap .lk-tab").click(function() {
	$(".lk-wrap .lk-tab").removeClass("lk-active").eq($(this).index()).addClass("lk-active");
	$(".lk-tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("lk-active");

//вкладки админ-панели
$(".admin-tab_item").not(":first").hide();
$(".admin-wrap .admin-tab").click(function() {
	$(".admin-wrap .admin-tab").removeClass("admin-active").eq($(this).index()).addClass("admin-active");
	$(".admin-tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("admin-active");

//изменение пароля
function open_set_pas () {
    $(".set-pas").css("display", "inline-block");
}



//Маска
jQuery(function(){
	jQuery(".mask").mask("7(999)999-99-99");
    jQuery(".mask-ch").mask("+38(999)999-99-99");
});


//пополнение кошельков
function changes(region, summ){
    if ($("#usumm").val()!='')
{
    $("#usumm").val(parseInt($("#usumm").val(),10));
}

var summ=parseInt(summ,10);

if (region<11) {
    if (1 < summ && summ<=2000) {
        doptot=100;

    var rez = parseInt(summ*0.015+doptot, 10);
    if (rez <= 0) {
        rez = 0;
    }

$("#tot").html(rez+' руб.');
}

if (2001 <= summ && summ<=5000)
{
        doptot=150;

$("#tot").html(parseInt(summ*0.015+doptot, 10)+' руб.');
}

if (5001 <= summ && summ<=10000)
{
        doptot=200;

$("#tot").html(parseInt(summ*0.015+doptot, 10)+' руб.');
}

}
        if (summ>10000){

$("#tot").html('Лимит - 10 000 р!');
}
}

//var inst = $.remodal.lookup[$('[data-remodal-id=table-commerce-calc]').data('remodal')];

                 //   inst.close();
                  //  alert('Данные переданы менеджеру для расчета!');


//Связь с менеджером
function send_to_manager(btn)
{
    var phone = btn.prev();
    var form = btn.parent();

if (phone.val()=='')
{
    phone.css('border', '2px solid #c20303');
    phone.attr('placeholder','Заполните это поле!');
   return;
}
    var inst = $.remodal.lookup[$('[data-remodal-id=call_to_manager]').data('remodal')];
    var instr = $.remodal.lookup[$('[data-remodal-id=call_to_manager_rus]').data('remodal')];
    $.ajax({
                  type: "POST",
                 async: false,
                 url: "http://"+window.location.hostname+"/php/call_to_manager.php",
                 data: form.serialize(),
                 dataType: "html",
                 success: function(data) {

                    inst.close();
                    instr.close();
                    alert('Спасибо за обращение! Ожидайте звонка!');
                 }

             });

}

//Конец / Связь с менеджером
var options = [
	{ value: 0, region: '', name: 'Выберите'},
	{ value: 1, region: 'rus', name: 'ТК Кит'},
	{ value: 2, region: 'rus', name: 'Деловые Линии'},
	{ value: 3, region: 'rus', name: 'ПЭК'},
	{ value: 4, region: 'rus', name: 'Почта России'},
	{ value: 5, region: 'ukr', name: 'ИнТайм'},
	{ value: 6, region: 'ukr', name: 'Новая Почта'},
	{ value: 7, region: 'crm', name: 'Почта Крыма'}
];
function getOptions(dir) {

	var container = document.getElementById('form_pol_tk');

	while (container.firstChild) {
	    container.removeChild(container.firstChild);
	}

	options.filter(function(option) {
					return option.region === dir;
			 }).forEach(function(option) {
			 			form_pol_tk.appendChild(createOptions(option));
			 });
}

function createOptions(option) {
	var opt = document.createElement('option');
	opt.value = option.value;
	opt.text = option.name;
	console.dir(opt);
	return opt;
}
