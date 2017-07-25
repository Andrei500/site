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

$form_os_name=mysql_real_escape_string($_POST['form_os_name']);
$form_os_tel=mysql_real_escape_string($_POST['form_os_tel']);
$form_os_mail=mysql_real_escape_string($_POST['form_os_mail']);
$form_os_links=mysql_real_escape_string($_POST['form_os_links']);
$form_os_desc=mysql_real_escape_string($_POST['form_os_desc']);
$form_os_summ=mysql_real_escape_string($_POST['form_os_summ']);
$otdelenie=mysql_real_escape_string($_POST['form_os_city']);

include("forms/city_case.php");


$query_form_os = "insert into form_os set dat=now(), form_os_name='$form_os_name', form_os_tel='$form_os_tel',  form_os_mail='$form_os_mail', form_os_links='$form_os_links', form_os_desc='$form_os_desc', form_os_summ='$form_os_summ',  form_os_city='$otdelenie'";
mysql_query($query_form_os) or die(mysql_error());
} else
{
   echo "404";
}
?>
