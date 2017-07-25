<?php

$_POST['call_to_manager_tel'] = htmlspecialchars(stripslashes($_POST['call_to_manager_tel']));

$subject = "Заказ консультации";

$call_to_manager_tel = $_POST['call_to_manager_tel'];

$message = "
<html>

<head>
    <title></title>
</head>

<body> Номер телефона: $call_to_manager_tel
</body>

</html>";

$todnr = "ourpocta@gmail.com";
$torus = "nashaposhta.rnd@gmail.com";

$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: CallBackNP <donbass-post@donbass-post.ru>\r\n";

mail($todnr, $subject, $message, $headers);
mail($torus, $subject, $message, $headers);

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

$query_call_to_manager = "insert into call_to_manager set dat=now(), call_to_manager='$call_to_manager_tel'";
mysql_query($query_call_to_manager) or die(mysql_error());
} else
{
   echo "404";
}

?>
