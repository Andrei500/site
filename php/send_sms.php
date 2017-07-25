<?
function send_request($url, $json_value, $user, $password) {




	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json_value));
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_USERPWD, $user.':'.$password);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);

}

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

$data_money_trans_name=mysql_real_escape_string($_POST['data_money_trans_name']);
$data_money_trans_phone=mysql_real_escape_string($_POST['data_money_trans_phone']);
$data_money_trans_city=mysql_real_escape_string($_POST['data_money_trans_city']);


$query1 = "insert into data_money_trans set dat=now(), data_money_trans_name='$data_money_trans_name', data_money_trans_phone='$data_money_trans_phone', data_money_trans_city='$data_money_trans_city'";
mysql_query($query1) or die(mysql_error());






$from = 'NashaPochta';
$text = 'Карта Сбербанка: 4279 5200 4783 5817 Татьяна Васильевна К.';



sendSMS($data_money_trans_phone, $text);
echo 'ok';

} else
{
   echo "404";
}

?>
