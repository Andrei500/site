<?
$host='donbas14.mysql.ukraine.com.ua';
$database='donbas14_db';
$user1='donbas14_db';
$pass1='nF72Wbdu';
 
$msconnect=mysql_connect($host, $user1, $pass1);
mysql_select_db($database, $msconnect);

mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");


$query = "SELECT * FROM kit where name LIKE '%Москва%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);
 echo "http://tk-kit.ru/API.1/?f=price_order&I_DELIVER=0&I_PICK_UP=0&WEIGHT=15&VOLUME=1&SLAND=RU&SZONE=$row[tzoneid]&SCODE=$row[ids]&SREGIO=$row[region]&RLAND=RU&RZONE=0000006100&RCODE=610000100000&RREGIO=61&KWMENG=1&LENGTH=&WIDTH=&HEIGHT=&GR_TYPE=&LIFNR=&PRICE=&WAERS=RUB";
$city=file_get_contents("http://tk-kit.ru/API.1/?f=price_order&I_DELIVER=0&I_PICK_UP=0&WEIGHT=15&VOLUME=1&SLAND=RU&SZONE=$row[tzoneid]&SCODE=$row[ids]&SREGIO=$row[region]&RLAND=RU&RZONE=0000006100&RCODE=610000100000&RREGIO=61&KWMENG=1&LENGTH=&WIDTH=&HEIGHT=&GR_TYPE=&LIFNR=&PRICE=&WAERS=RUB");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

echo($stoimost.'|'.$otpravka_rus.'-ДНР'.'|'.$obj['PRICE']['TOTAL'].'|'.$obj['DAYS']);

?>