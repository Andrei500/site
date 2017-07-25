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

$form_pol_name_pol=mysql_real_escape_string($_POST['form_pol_name_pol']);
$form_pol_tel_pol=mysql_real_escape_string($_POST['form_pol_tel_pol']);
$otdelenie=mysql_real_escape_string($_POST['form_pol_city_pol']);
$form_pol_name_otp=mysql_real_escape_string($_POST['form_pol_name_otp']);
$form_pol_tel_otp=mysql_real_escape_string($_POST['form_pol_tel_otp']);
$form_pol_city_otp=mysql_real_escape_string($_POST['form_pol_city_otp']);
$form_pol_tk=mysql_real_escape_string($_POST['form_pol_tk']);
$form_pol_id=mysql_real_escape_string($_POST['form_pol_id']);


include("forms/city_case.php");

switch ($form_pol_tk) {
    case 1:
        $form_pol_tk="ТК Кит";
        break;
    case 2:
        $form_pol_tk="Деловые Линии";
        break;
    case 3:
        $form_pol_tk="ПЭК";
        break;
    case 4:
        $form_pol_tk="Почта России";
        break;
    case 5:
        $form_pol_tk="ИнТайм";
        break;
    case 6:
        $form_pol_tk="Новая Почта";
        break;
    case 7:
        $form_pol_tk="Почта Крыма";
        break;
}

$query_form_pol = "insert into form_pol_ukr set dat=now(), form_pol_name_pol_ukr='$form_pol_name_pol',  form_pol_tel_pol_ukr='$form_pol_tel_pol', form_pol_city_pol_ukr='$otdelenie', form_pol_name_otp_ukr='$form_pol_name_otp',  form_pol_tel_otp_ukr='$form_pol_tel_otp', form_pol_city_otp='$form_pol_city_otp', form_pol_tk='$form_pol_tk',  form_pol_id='$form_pol_id'";
mysql_query($query_form_pol) or die(mysql_error());
} else
{
   echo "404";
}
?>
