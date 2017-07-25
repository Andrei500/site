<?
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

$host='';
$database='';
$user1='';
$pass1='';

$msconnect=mysql_connect($host, $user1, $pass1);
mysql_select_db($database, $msconnect);

mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");

$form_ch_name=mysql_real_escape_string($_POST['form_ch_name']);
$form_ch_tel=mysql_real_escape_string($_POST['form_ch_tel']);
$otdelenie=mysql_real_escape_string($_POST['form_ch_city']);
$form_ch_links=mysql_real_escape_string($_POST['form_ch_links']);
$form_ch_summ=mysql_real_escape_string($_POST['form_ch_summ']);
$form_ch_plo=mysql_real_escape_string($_POST['form_ch_plo']);
$number=mysql_real_escape_string($_POST['number']);
include("forms/city_case.php");

switch ($form_ch_plo) {
    case 2:
        $form_ch_plo="AliExpress";
        break;
    case 3:
        $form_ch_plo="TaoBao";
        break;
}

$query_form_ch = "insert into form_ch set dat=now(), form_ch_name='$form_ch_name',  form_ch_tel='$form_ch_tel', form_ch_city='$otdelenie', form_ch_links='$form_ch_links', form_ch_summ='$form_ch_summ', form_ch_plo='$form_ch_plo', number='$number'";
mysql_query($query_form_ch) or die(mysql_error());


$mail_to = "nashapochta_aliexpress@mail.ru";

$thm = "AliExpress";

$msg = " $form_ch_name\n\n $number\n\n $form_ch_tel\n\n $otdelenie\n\n $form_ch_links\n\n $form_ch_summ\n\n $form_ch_plo";

$headers = 'From: Сайт "Наша Почта" <info@donbass-post.ru>';

mail($mail_to, $thm, $msg, $headers);

} else
{
   echo "404";
}
?>
