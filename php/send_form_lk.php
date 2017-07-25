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

$form_lk_mail=mysql_real_escape_string($_POST['form_lk_mail']);

$query_form_lk = "insert into form_lk set dat=now(), form_lk_mail='$form_lk_mail'";
mysql_query($query_form_lk) or die(mysql_error());
} else
{
   echo "404";
}
?>
