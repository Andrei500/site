<?
$data_type=$_POST["data_type"];


switch ($data_type) {
    case 'get_city':
        get_city();
        break;
   
   
}


function get_city()
{
   
    
$city=file_get_contents('http://pecom.ru/ru/calc/towns.php');	



echo $city;

}


?>