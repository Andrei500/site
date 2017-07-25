<?
$city=file_get_contents('http://tk-kit.ru/API.1/?f=get_city_list');	
$obj=json_decode($city, JSON_UNESCAPED_UNICODE); 

foreach ($obj as &$value) {
    
    foreach ($value as $key => $val) 
    {
      echo($key."--".$val);   
    }
}
?>