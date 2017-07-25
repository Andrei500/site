<?
// error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

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


$name_otp=mysql_real_escape_string($_POST['name_otp']);
$phone_otp=mysql_real_escape_string($_POST['phone_otp']);
$city_otp=mysql_real_escape_string($_POST['city_otp']);
$what=mysql_real_escape_string($_POST['what']);
$other_bank=mysql_real_escape_string($_POST['other_bank']);
$card_number=mysql_real_escape_string($_POST['card_number']);
$osb=mysql_real_escape_string($_POST['osb']);
$time=mysql_real_escape_string($_POST['time']);
$phone_pol=mysql_real_escape_string($_POST['phone_pol']);
$name_pol=mysql_real_escape_string($_POST['name_pol']);
$otdelenie=mysql_real_escape_string($_POST['otdelenie']);
$user_summ=mysql_real_escape_string($_POST['user_summ']);
$window_summ=mysql_real_escape_string($_POST['window_summ']);
$sb_proc=mysql_real_escape_string($_POST['sb_proc']);
$our_proc=mysql_real_escape_string($_POST['our_proc']);
$okrug=mysql_real_escape_string($_POST['okrug']);

include("forms/city_case.php");

switch ($what) {
    case 1:
        $what="Отделение Сбербанка";
        break;
    case 2:
        $what="Банкомат Сбербанка";
        break;
    case 3:
        $what="Сбербанк-Онлайн";
        break;
    case 4:
        $what="Другой банк";
        break;
}
$query1 = "insert into sms_data set
            dat=now(),
            name_otp='$name_otp',
            phone_otp='$phone_otp',
            city_otp='$city_otp',
            what='$what',
            other_bank='$other_bank',
            card_number='$card_number',
            osb='$osb',
            time='$time',
            phone_pol='$phone_pol',
            name_pol='$name_pol',
            otdelenie='$otdelenie',
            user_summ='$user_summ',
            total_summ='$window_summ',
            sb_proc='$sb_proc',
            our_proc='$our_proc',
            okrug='$okrug'"
    ;
mysql_query($query1) or die(mysql_error());



$bytehandId = 25151;
$bytehandKey = "A1E36F8237A366B1";
$bytehandFrom = "NashaPochta";

function sendSMS($to, $text)
{
    global $bytehandId;
    global $bytehandKey;
    global $bytehandFrom;

    $result = @file_get_contents('http://api.bytehand.com/send?id='.$bytehandId.'&key='.$bytehandKey.'&to='.urlencode($to).'&from='.urlencode($bytehandFrom).'&text='.urlencode($text));
    if ($result === false)
        return false;
    else
        return true;
}

$names_otp = explode(' ', $name_otp);

$firstName = $names_otp[1];
$lastName  = $names_otp[0];
$middleName = $names_otp[2];

$firstLetter  = $firstName  ? ($firstName[0]  . '. ') : '';
$secondLetter = $middleName ? ($middleName[0] . '. ') : '';

$name_otp = $lastName . ' ' . $firstLetter . $secondLetter;

$text = 'К Вам зарегистр. денежная отправка. Доставка в теч. 3 д';

sendSMS($phone_pol, $text);


} else
{
   echo "404";
}
?>
