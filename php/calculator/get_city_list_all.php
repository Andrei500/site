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

$word=mysql_real_escape_string($_POST['word']);

   $query = "SELECT * FROM city_pecom where name LIKE '$word%' order by name";  
    $res = mysql_query($query) or die(mysql_error());
 while ($row=mysql_fetch_array($res))
   { 
  echo "<span onclick='set_city(\"$row[name]\")'>$row[name]</span>";
    
    
    }




?>