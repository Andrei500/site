<?
$phone=$_POST["phone"];
$who = $_POST["who"]; //&why=3

$to  = "";

switch ($who) {
  case 1:
    $to = "callbacknp@mail.ru";
    break;
  case 2:
    $to = "ourpocta@gmail.com";
  case 3:
    $to = "aist.consult@yandex.ru";
}


$subject = "Заказ звонка";

$message =
"<html>
    <head>
        <title></title>
    </head>
    <body>
        <p>Номер телефона: $phone</p>
    </body>
</html>";

$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: CallBackNP <donbass-post@donbass-post.ru>\r\n";


mail($to, $subject, $message, $headers);

?>
