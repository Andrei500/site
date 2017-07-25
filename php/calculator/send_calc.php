<?

//пишем DLC клиента для деловых линий - получаем закодированный json массив
class DLClient {
	private $session;

	function __construct($appKey){
		$appKey?$this->appKey = $appKey:die("No app key given");
	}

	function auth($login, $password){
        $url = 'https://api.dellin.ru/v1/customers/login.json';
		$body = array(
			'login' => $login,
			'password' => $password,
			'appKey' => $this->appKey
		);
		$opts = array(
			'http' => array(
				'header' => "Content-Type: application/json",
				'content' => json_encode($body)
			)
		);
		$result = file_get_contents($url, false, stream_context_create($opts));
		$res = (array)json_decode($result);
		$this->session = $res['sessionID'];
	}
	
	function request($op, $params = array()){
		$url = 'https://api.dellin.ru/v1/'.$op.'.json';
		$body = $params;
		$body["appKey"] = $this->appKey;
		if (isset($this->session)){
			$body["sessionID"] = $this->session;
		}
		$opts = array(
			'http' => array(
				'header' => "Content-Type: application/json",
				'content' => json_encode($body)
			)
		);
		$result = file_get_contents($url, false, stream_context_create($opts));
		$this->result = (array)json_decode($result);
		
	}
}



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


$dostavka=$_POST["dostavka"];
$otpravka=$_POST["otpravka"];
$gruz_type=$_POST["gruz_type"];
$gruz_ves=$_POST["gruz_ves"];
$gruz_dlina=$_POST["gruz_dlina"];
$gruz_shirina=$_POST["gruz_shirina"];
$gruz_visota=$_POST["gruz_visota"];
$doc=$_POST["doc"];
$money_cnt=$_POST["money_cnt"];

$otpravka_rus=$_POST["otpravka_rus"];
$otpravka_rus=explode(" ",$otpravka_rus);
$otpravka_rus=$otpravka_rus[0];


$dostavka_rus=$_POST["dostavka_rus"];
$dostavka_rus=explode(" ",$dostavka_rus);
$dostavka_rus=$dostavka_rus[0];

function get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota)
{

$ob=((($gruz_dlina)*($gruz_shirina)*($gruz_visota))/4000);  
if ($ob>$gruz_ves)
{
    return ($ob);
} else
{
    return ($gruz_ves);  
}

    
}






function sity_stat($otpravka)
{
// присваиваем константы в зависимости от города
switch ($otpravka) {
    case 1:
        $d="lnr";
        break;
    case 2:
        $d="dnr";
        break;
    case 3:
        $d="dnr";
        break;
    case 4:
        $d="dnr";
        break;
    case 5:
        $d="dnr";
        break;
    case 7:
        $d="lnr";
        break; 
    case 8:
        $d="lnr";
        break; 
    case 9:
        $d="dnr";
        break; 
    case 10:
        $d="rostov";
        break;
    case 11:
        $d="krim";
        break;
    case 12:
        $d="krim";
        break;
    case 13:
        $d="dnr";
        break;
    case 14:
        $d="lnr";
        break;
    case 15:
        $d="dnr";
        break;
    case 16:
        $d="dnr";
        break;
    case 17:
        $d="ukr";
        break;
    case 18:
        $d="rus";
        break;
    case 19:
        $d="krim";
        break;
    case 20:
        $d="krim";
        break; 
    case 21:
        $d="lnr";
        break;
}
return $d;
}




// выбрана доставка РОССИЯ-ДНР
if ((sity_stat($otpravka)=='dnr') and (sity_stat($dostavka)=='rus')) 

{
    
   if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=150; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=200; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=200+15*$ves; 
        }

        if ($ves>45.1)
        {
           $stoimost=300+15*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=100;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=150;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=200;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=300;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=500;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=1000;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1100;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=200;
    } else
    {
      $stoimost=100;  
    }
  }  
  

$kubik=round((($gruz_dlina/100)*($gruz_shirina/100)*($gruz_visota/100)), 2);

$gruz_dlina=round(($gruz_dlina/100), 0);
$gruz_shirina=round(($gruz_shirina/100), 0);
$gruz_visota=round(($gruz_visota/100), 0);







 $query = "SELECT * FROM city_pecom where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

if ($row["num"]<>'')
{
$city=file_get_contents("http://calc.pecom.ru/bitrix/components/pecom/calc/ajax.php?places[0][1]=$gruz_shirina&places[0][2]=$gruz_dlina&places[0][3]=$gruz_visota&places[0][5]=$gruz_ves&places[0][6]=0&places[0][7]=0&take[town]=$row[num]&deliver[town]=-452");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data1=base64_encode($stoimost.'|Ростов-'.$dostavka_rus.'|'.$obj[auto][2].'|'.$obj[periods_days]);


// выгребаем данные из деловых линий при помощи нашего DLC клиента + API ключ


 $query = "SELECT * FROM city_dl where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

$appKey = '8E76D0E0-3A9F-11E6-862F-00505683A6D3';
$client = new DLClient($appKey);

$client->request('public/calculator', array('appKey' => '8E76D0E0-3A9F-11E6-862F-00505683A6D3', 'derivalPoint'=>$row[KD], 'derivalDoor'=>false, 'arrivalPoint'=>'6100000100000000000000000', 'arrivalDoor'=>false, 'sizedVolume'=>$kubik, 'sizedWeight'=>$gruz_ves));
$arr=$client->result;
$data2=base64_encode($stoimost.'|Ростов-'.$dostavka_rus.'|'.$arr['price'].'|'.$arr['time']->nominative);



// выгребаем данные из ТК КИТ

 $query = "SELECT * FROM kit where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);
 
$city=file_get_contents("http://tk-kit.ru/API.1/?f=price_order&I_DELIVER=0&I_PICK_UP=0&WEIGHT=$gruz_ves&VOLUME=$kubik&SLAND=RU&SZONE=$row[tzoneid]&SCODE=$row[ids]&SREGIO=$row[region]&RLAND=RU&RZONE=0000006100&RCODE=610000100000&RREGIO=61&KWMENG=1&LENGTH=&WIDTH=&HEIGHT=&GR_TYPE=&LIFNR=&PRICE=&WAERS=RUB");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data3=base64_encode($stoimost.'|Ростов-'.$dostavka_rus.'|'.$obj['PRICE']['TOTAL'].'|'.$obj['DAYS']);

echo $data1."|".$data2."|".$data3;
} else {echo "1";}
}

// выбрана доставка ДНР-Россия ------------
if ((sity_stat($otpravka)=='rus') and (sity_stat($dostavka)=='dnr'))

{
    
   if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=150; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=200; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=200+15*$ves; 
        }

        if ($ves>45.1)
        {
           $stoimost=300+15*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=100;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=150;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=200;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=300;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=500;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=1000;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1100;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=200;
    } else
    {
      $stoimost=100;  
    }
  }  
  

$kubik=round((($gruz_dlina/100)*($gruz_shirina/100)*($gruz_visota/100)), 2);

$gruz_dlina=round(($gruz_dlina/100), 0);
$gruz_shirina=round(($gruz_shirina/100), 0);
$gruz_visota=round(($gruz_visota/100), 0);







 $query = "SELECT * FROM city_pecom where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

if ($row["num"]<>'')
{
$city=file_get_contents("http://calc.pecom.ru/bitrix/components/pecom/calc/ajax.php?places[0][1]=$gruz_shirina&places[0][2]=$gruz_dlina&places[0][3]=$gruz_visota&places[0][5]=$gruz_ves&places[0][6]=0&places[0][7]=0&take[town]=-452&deliver[town]=$row[num]");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data1=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов'.'|'.$obj[auto][2].'|'.$obj[periods_days]);


// выгребаем данные из деловых линий при помощи нашего DLC клиента + API ключ


 $query = "SELECT * FROM city_dl where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

$appKey = '8E76D0E0-3A9F-11E6-862F-00505683A6D3';
$client = new DLClient($appKey);

$client->request('public/calculator', array('appKey' => '8E76D0E0-3A9F-11E6-862F-00505683A6D3', 'derivalPoint'=>'6100000100000000000000000', 'derivalDoor'=>false, 'arrivalPoint'=>$row[KD], 'arrivalDoor'=>false, 'sizedVolume'=>$kubik, 'sizedWeight'=>$gruz_ves));

$arr=$client->result;
$data2=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов|'.$arr['price'].'|'.$arr['time']->nominative);



// выгребаем данные из ТК КИТ

 $query = "SELECT * FROM kit where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);
 
$city=file_get_contents("http://tk-kit.ru/API.1/?f=price_order&I_DELIVER=0&I_PICK_UP=0&WEIGHT=$gruz_ves&VOLUME=$kubik&SLAND=RU&SZONE=0000006100&SCODE=610000100000&SREGIO=61&RLAND=RU&RZONE=$row[tzoneid]&RCODE=$row[ids]&RREGIO=$row[region]&KWMENG=1&LENGTH=&WIDTH=&HEIGHT=&GR_TYPE=&LIFNR=&PRICE=&WAERS=RUB");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data3=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов'.'|'.$obj['PRICE']['TOTAL'].'|'.$obj['DAYS']);

echo $data1."|".$data2."|".$data3;
} else {echo "1";}
}








// выбрана доставка РОССИЯ-ЛНР
if ((sity_stat($otpravka)=='rus') and (sity_stat($dostavka)=='lnr')) 

{
    
   if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=200; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=280; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=360; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=350+20*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=500+20*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=200;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=300;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=600;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=800;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=950;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=1100;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=1300;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=1500;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=1800;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=1900;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=2100;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=360;
    } else
    {
      $stoimost=200;  
    }
  }  
  

$kubik=round((($gruz_dlina/100)*($gruz_shirina/100)*($gruz_visota/100)), 2);

$gruz_dlina=round(($gruz_dlina/100), 0);
$gruz_shirina=round(($gruz_shirina/100), 0);
$gruz_visota=round(($gruz_visota/100), 0);




// выгребаем данные из ПЕК 


 $query = "SELECT * FROM city_pecom where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

if ($row["num"]<>'')
{

$city=file_get_contents("http://calc.pecom.ru/bitrix/components/pecom/calc/ajax.php?places[0][1]=$gruz_shirina&places[0][2]=$gruz_dlina&places[0][3]=$gruz_visota&places[0][5]=$gruz_ves&places[0][6]=0&places[0][7]=0&take[town]=$row[num]&deliver[town]=-452");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data1=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов'.'|'.$obj[auto][2].'|'.$obj[periods_days]);


// выгребаем данные из деловых линий при помощи нашего DLC клиента + API ключ


 $query = "SELECT * FROM city_dl where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

$appKey = '8E76D0E0-3A9F-11E6-862F-00505683A6D3';
$client = new DLClient($appKey);

$client->request('public/calculator', array('appKey' => '8E76D0E0-3A9F-11E6-862F-00505683A6D3', 'derivalPoint'=>$row[KD], 'derivalDoor'=>false, 'arrivalPoint'=>'6100000100000000000000000', 'arrivalDoor'=>false, 'sizedVolume'=>$kubik, 'sizedWeight'=>$gruz_ves));
$arr=$client->result;
$data2=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов|'.$arr['price'].'|'.$arr['time']->nominative);



// выгребаем данные из ТК КИТ

 $query = "SELECT * FROM kit where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);
 
$city=file_get_contents("http://tk-kit.ru/API.1/?f=price_order&I_DELIVER=0&I_PICK_UP=0&WEIGHT=$gruz_ves&VOLUME=$kubik&SLAND=RU&SZONE=$row[tzoneid]&SCODE=$row[ids]&SREGIO=$row[region]&RLAND=RU&RZONE=0000006100&RCODE=610000100000&RREGIO=61&KWMENG=1&LENGTH=&WIDTH=&HEIGHT=&GR_TYPE=&LIFNR=&PRICE=&WAERS=RUB");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data3=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов'.'|'.$obj['PRICE']['TOTAL'].'|'.$obj['DAYS']);

echo $data1."|".$data2."|".$data3;
} else {echo "1";}
}




// выбрана доставка ЛНР-РОССИЯ
if ((sity_stat($otpravka)=='lnr') and (sity_stat($dostavka)=='rus')) 

{
    
   if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=200; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=280; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=360; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=350+20*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=500+20*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=200;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=300;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=600;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=800;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=950;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=1100;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=1300;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=1500;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=1800;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=1900;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=2100;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=360;
    } else
    {
      $stoimost=200;  
    }
  }  
  

$kubik=round((($gruz_dlina/100)*($gruz_shirina/100)*($gruz_visota/100)), 2);

$gruz_dlina=round(($gruz_dlina/100), 0);
$gruz_shirina=round(($gruz_shirina/100), 0);
$gruz_visota=round(($gruz_visota/100), 0);




// выгребаем данные из ПЕК 


 $query = "SELECT * FROM city_pecom where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

if ($row["num"]<>'')
{

$city=file_get_contents("http://calc.pecom.ru/bitrix/components/pecom/calc/ajax.php?places[0][1]=$gruz_shirina&places[0][2]=$gruz_dlina&places[0][3]=$gruz_visota&places[0][5]=$gruz_ves&places[0][6]=0&places[0][7]=0&take[town]=-452&deliver[town]=$row[num]");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data1=base64_encode($stoimost.'|Ростов-'.$dostavka_rus.'|'.$obj[auto][2].'|'.$obj[periods_days]);


// выгребаем данные из деловых линий при помощи нашего DLC клиента + API ключ


 $query = "SELECT * FROM city_dl where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

$appKey = '8E76D0E0-3A9F-11E6-862F-00505683A6D3';
$client = new DLClient($appKey);

$client->request('public/calculator', array('appKey' => '8E76D0E0-3A9F-11E6-862F-00505683A6D3', 'derivalPoint'=>'6100000100000000000000000', 'derivalDoor'=>false, 'arrivalPoint'=>$row[KD], 'arrivalDoor'=>false, 'sizedVolume'=>$kubik, 'sizedWeight'=>$gruz_ves));
$arr=$client->result;
$data2=base64_encode($stoimost.'|Ростов-'.$dostavka_rus.'|'.$arr['price'].'|'.$arr['time']->nominative);



// выгребаем данные из ТК КИТ

 $query = "SELECT * FROM kit where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);
 
$city=file_get_contents("http://tk-kit.ru/API.1/?f=price_order&I_DELIVER=0&I_PICK_UP=0&WEIGHT=$gruz_ves&VOLUME=$kubik&SLAND=RU&SZONE=0000006100&SCODE=610000100000&SREGIO=61&RLAND=RU&RZONE=$row[tzoneid]&RCODE=$row[ids]&RREGIO=$row[region]&KWMENG=1&LENGTH=&WIDTH=&HEIGHT=&GR_TYPE=&LIFNR=&PRICE=&WAERS=RUB");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data3=base64_encode($stoimost.'|Ростов-'.$dostavka_rus.'|'.$obj['PRICE']['TOTAL'].'|'.$obj['DAYS']);

echo $data1."|".$data2."|".$data3;
} else {echo "1";}
}




// выбрана доставка ЛНР-ЛНР
if ((sity_stat($otpravka)=='lnr') and (sity_stat($dostavka)=='lnr'))
{
    
  if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=50; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=55; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=60; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=50+5*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=100+5*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=150;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=250;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=300;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=350;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=450;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=500;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1000;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=100;
    } else
    {
      $stoimost=50;  
    }
  }  
  

echo  (ceil($stoimost).'| |0');
    
}















// выбрана доставка ДНР-ДНР
if (((sity_stat($otpravka)=='dnr') and (sity_stat($dostavka)=='dnr') or (sity_stat($otpravka)=='krim') and (sity_stat($dostavka)=='krim')))
{
    
  if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=50; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=55; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=60; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=50+5*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=100+5*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=150;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=250;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=300;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=350;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=450;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=500;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1000;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=160;
    } else
    {
      $stoimost=100;  
    }
  }  
  

echo  (ceil($stoimost).'| |0');
    
}




// выбрана доставка ДНР-ЛНР
if (((sity_stat($otpravka)=='dnr') and (sity_stat($dostavka)=='lnr')) or ((sity_stat($otpravka)=='lnr') and (sity_stat($dostavka)=='dnr')))
{
    
  if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=130; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=160; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=150+5*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=200+5*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=100;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=150;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=200;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=300;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=450;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=500;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1000;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=160;
    } else
    {
      $stoimost=100;  
    }
  }  
  

echo  (ceil($stoimost).'| |0');
    
}

// выбрана доставка РОСТОВ-ЛНР
if (((sity_stat($otpravka)=='rostov') and (sity_stat($dostavka)=='lnr')) or ((sity_stat($otpravka)=='lnr') and (sity_stat($dostavka)=='rostov')))
{
    
    
   if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=200; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=280; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=360; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=350+20*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=500+20*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=200;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=300;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=600;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=800;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=950;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=1100;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=1300;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=1500;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=1800;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=1900;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=2100;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=360;
    } else
    {
      $stoimost=200;  
    }
  }  
  

echo  (ceil($stoimost).'| |0');
    
}


// выбрана доставка ДНР-КРЫМ
if (((sity_stat($otpravka)=='dnr') and (sity_stat($dostavka)=='krim')) or ((sity_stat($otpravka)=='krim') and (sity_stat($dostavka)=='dnr')))
{
    
  if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=150; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=200; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=250; 
        }
        if (($ves>2.1) and ($ves<=15.1))
        {
           $stoimost=235+15*$ves; 
        }
        if (($ves>15.1) and ($ves<=45.1))
        {
           $stoimost=150+20*$ves; 
        }
        if ($ves>45.1) 
        {
           $stoimost=300+20*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=150;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=250;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=300;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=400;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=600;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=700;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=1000;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=1100;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=1200;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1300;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=250;
    } else
    {
      $stoimost=150;  
    }
  }  
  

echo  (ceil($stoimost).'| |0');
    
}







// выбрана доставка УКРАИНА-КРЫМ
if (((sity_stat($otpravka)=='ukr') and (sity_stat($dostavka)=='krim')) or ((sity_stat($otpravka)=='krim') and (sity_stat($dostavka)=='ukr')))
{
    //ДНР-Крым
  if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=150; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=200; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=250; 
        }
        if (($ves>2.1) and ($ves<=15.1))
        {
           $stoimost=235+15*$ves; 
        }
        if (($ves>15.1) and ($ves<=45.1))
        {
           $stoimost=150+20*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=300+20*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=150;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=250;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=300;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=400;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=600;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=700;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=1000;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=1100;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=1200;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1300;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=250;
    } else
    {
      $stoimost=150;  
    }
  }  
  

$stoimost1=$stoimost;


   //Украина-ДНР
  if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=150; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=200; 
        }
        if (($ves>2.1) and ($ves<=15.1))
        {
           $stoimost=150+30*$ves; 
        }
        if (($ves>15.1) and ($ves<=45.1))
        {
           $stoimost=300+20*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=500+20*$ves; 
        }
    
  }
    
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=200;
    } else
    {
      $stoimost=100;  
    }
  }  



$stoimost2=$stoimost;








echo  (ceil($stoimost1+$stoimost2).'| |0');
    
}





// выбрана доставка ЛНР-КРЫМ
if (((sity_stat($otpravka)=='lnr') and (sity_stat($dostavka)=='krim')) or ((sity_stat($otpravka)=='krim') and (sity_stat($dostavka)=='lnr')))
{
    
  if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=250; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=330; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=410; 
        }
        if (($ves>2.1) and ($ves<=15.1))
        {
           $stoimost=385+20*$ves; 
        }
        if (($ves>15.1) and ($ves<=45.1))
        {
           $stoimost=300+25*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=500+25*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=250;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=400;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=500;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=700;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=1000;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=1150;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=1300;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=1500;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=1700;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=1900;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=2100;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=2300;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=410;
    } else
    {
      $stoimost=250;  
    }
  }  
  

echo  (ceil($stoimost).'| |0');
    
}



// выбрана доставка РОСТОВ-КРЫМ
if (((sity_stat($otpravka)=='rostov') and (sity_stat($dostavka)=='krim')) or ((sity_stat($otpravka)=='krim') and (sity_stat($dostavka)=='rostov')))
{
    
  if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
      
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=110; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=120; 
        }
        if ($ves>2.1)
        {
           $stoimost=100+10*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=100;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=150;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=200;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=250;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=300;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=400;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=500;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1000;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=150;
    } else
    {
      $stoimost=100;  
    }
  }  
  

echo  (ceil($stoimost).'| |0');
    
}





// выбрана доставка ДНР-РОСТОВ
if (((sity_stat($otpravka)=='dnr') and (sity_stat($dostavka)=='rostov')) or ((sity_stat($otpravka)=='rostov') and (sity_stat($dostavka)=='dnr')))
{
    
  if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=150; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=200; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=200+15*$ves; 
        }

        if ($ves>45.1)
        {
           $stoimost=300+15*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=100;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=150;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=200;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=300;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=500;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=1000;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1100;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=200;
    } else
    {
      $stoimost=100;  
    }
  }  
  

echo  (ceil($stoimost).'| |0');
    
}


// выбрана доставка ДНР-УКРАИНА
if (((sity_stat($otpravka)=='dnr') and (sity_stat($dostavka)=='ukr')) or ((sity_stat($otpravka)=='ukr') and (sity_stat($dostavka)=='dnr')))
{
    
    if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=150; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=200; 
        }
        if (($ves>2.1) and ($ves<=15.1))
        {
           $stoimost=150+30*$ves; 
        }
        if (($ves>15.1) and ($ves<=45.1))
        {
           $stoimost=300+20*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=500+20*$ves; 
        }
    
  }
    
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=200;
    } else
    {
      $stoimost=100;  
    }
  }  
  

echo  (ceil($stoimost).'| |0');
    
}


// выбрана доставка ЛНР-УКРАИНА
if (((sity_stat($otpravka)=='lnr') and (sity_stat($dostavka)=='ukr')) or ((sity_stat($otpravka)=='ukr') and (sity_stat($dostavka)=='lnr')))
{
    
  if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=200; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=280; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=360; 
        }
        if (($ves>2.1) and ($ves<=15.1))
        {
           $stoimost=300+35*$ves; 
        }
        if (($ves>15.1) and ($ves<=45.1))
        {
           $stoimost=450+25*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=700+25*$ves; 
        }
    
  }
    
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=360;
    } else
    {
      $stoimost=200;  
    }
  }  
  

echo  (ceil($stoimost).'| |0');
    
}
















// выбрана доставка РОССИЯ-КРЫМ
if ((sity_stat($otpravka)=='krim') and (sity_stat($dostavka)=='rus')) 

{
   if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=110; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=120; 
        }
        if ($ves>2.1)
        {
           $stoimost=100+10*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=100;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=150;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=200;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=250;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=300;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=400;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=500;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1000;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=150;
    } else
    {
      $stoimost=100;  
    }
  }  
  
  

$kubik=round((($gruz_dlina/100)*($gruz_shirina/100)*($gruz_visota/100)), 2);

$gruz_dlina=round(($gruz_dlina/100), 0);
$gruz_shirina=round(($gruz_shirina/100), 0);
$gruz_visota=round(($gruz_visota/100), 0);







 $query = "SELECT * FROM city_pecom where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

if ($row["num"]<>'')
{
$city=file_get_contents("http://calc.pecom.ru/bitrix/components/pecom/calc/ajax.php?places[0][1]=$gruz_shirina&places[0][2]=$gruz_dlina&places[0][3]=$gruz_visota&places[0][5]=$gruz_ves&places[0][6]=0&places[0][7]=0&take[town]=$row[num]&deliver[town]=-452");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data1=base64_encode($stoimost.'|Ростов-'.$dostavka_rus.'|'.$obj[auto][2].'|'.$obj[periods_days]);


// выгребаем данные из деловых линий при помощи нашего DLC клиента + API ключ


 $query = "SELECT * FROM city_dl where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

$appKey = '8E76D0E0-3A9F-11E6-862F-00505683A6D3';
$client = new DLClient($appKey);

$client->request('public/calculator', array('appKey' => '8E76D0E0-3A9F-11E6-862F-00505683A6D3', 'derivalPoint'=>$row[KD], 'derivalDoor'=>false, 'arrivalPoint'=>'6100000100000000000000000', 'arrivalDoor'=>false, 'sizedVolume'=>$kubik, 'sizedWeight'=>$gruz_ves));
$arr=$client->result;
$data2=base64_encode($stoimost.'|Ростов-'.$dostavka_rus.'|'.$arr['price'].'|'.$arr['time']->nominative);



// выгребаем данные из ТК КИТ

 $query = "SELECT * FROM kit where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);
 
$city=file_get_contents("http://tk-kit.ru/API.1/?f=price_order&I_DELIVER=0&I_PICK_UP=0&WEIGHT=$gruz_ves&VOLUME=$kubik&SLAND=RU&SZONE=$row[tzoneid]&SCODE=$row[ids]&SREGIO=$row[region]&RLAND=RU&RZONE=0000006100&RCODE=610000100000&RREGIO=61&KWMENG=1&LENGTH=&WIDTH=&HEIGHT=&GR_TYPE=&LIFNR=&PRICE=&WAERS=RUB");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data3=base64_encode($stoimost.'|Ростов-'.$dostavka_rus.'|'.$obj['PRICE']['TOTAL'].'|'.$obj['DAYS']);

echo $data1."|".$data2."|".$data3;
} else {echo "1";}
}

// выбрана доставка КРЫМ-Россия ------------
if ((sity_stat($otpravka)=='rus') and (sity_stat($dostavka)=='krim'))

{
   if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=110; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=120; 
        }
       if ($ves>2.1)
        {
           $stoimost=100+10*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=100;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=150;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=200;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=250;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=300;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=400;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=500;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1000;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=150;
    } else
    {
      $stoimost=100;  
    }
  }  
  
  

$kubik=round((($gruz_dlina/100)*($gruz_shirina/100)*($gruz_visota/100)), 2);

$gruz_dlina=round(($gruz_dlina/100), 0);
$gruz_shirina=round(($gruz_shirina/100), 0);
$gruz_visota=round(($gruz_visota/100), 0);







 $query = "SELECT * FROM city_pecom where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

if ($row["num"]<>'')
{
$city=file_get_contents("http://calc.pecom.ru/bitrix/components/pecom/calc/ajax.php?places[0][1]=$gruz_shirina&places[0][2]=$gruz_dlina&places[0][3]=$gruz_visota&places[0][5]=$gruz_ves&places[0][6]=0&places[0][7]=0&take[town]=-452&deliver[town]=$row[num]");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data1=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов'.'|'.$obj[auto][2].'|'.$obj[periods_days]);


// выгребаем данные из деловых линий при помощи нашего DLC клиента + API ключ


 $query = "SELECT * FROM city_dl where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

$appKey = '8E76D0E0-3A9F-11E6-862F-00505683A6D3';
$client = new DLClient($appKey);

$client->request('public/calculator', array('appKey' => '8E76D0E0-3A9F-11E6-862F-00505683A6D3', 'derivalPoint'=>'6100000100000000000000000', 'derivalDoor'=>false, 'arrivalPoint'=>$row[KD], 'arrivalDoor'=>false, 'sizedVolume'=>$kubik, 'sizedWeight'=>$gruz_ves));

$arr=$client->result;
$data2=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов|'.$arr['price'].'|'.$arr['time']->nominative);



// выгребаем данные из ТК КИТ

 $query = "SELECT * FROM kit where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);
 
$city=file_get_contents("http://tk-kit.ru/API.1/?f=price_order&I_DELIVER=0&I_PICK_UP=0&WEIGHT=$gruz_ves&VOLUME=$kubik&SLAND=RU&SZONE=0000006100&SCODE=610000100000&SREGIO=61&RLAND=RU&RZONE=$row[tzoneid]&RCODE=$row[ids]&RREGIO=$row[region]&KWMENG=1&LENGTH=&WIDTH=&HEIGHT=&GR_TYPE=&LIFNR=&PRICE=&WAERS=RUB");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data3=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов'.'|'.$obj['PRICE']['TOTAL'].'|'.$obj['DAYS']);

echo $data1."|".$data2."|".$data3;
} else {echo "1";}
}


// выбрана доставка УКРАИНА-Россия 
if ((sity_stat($otpravka)=='rus') and (sity_stat($dostavka)=='ukr'))

{
    // РОСТОВ-ДНР
   if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=150; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=200; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=200+15*$ves; 
        }

        if ($ves>45.1)
        {
           $stoimost=300+15*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=100;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=150;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=200;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=300;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=500;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=1000;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1100;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=200;
    } else
    {
      $stoimost=100;  
    }
  }  
  
  
  
  
// ДНР-УКРАИНА

 if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=150; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=200; 
        }
        if (($ves>2.1) and ($ves<=15.1))
        {
           $stoimost=150+30*$ves; 
        }
        if (($ves>15.1) and ($ves<=45.1))
        {
           $stoimost=300+20*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=500+20*$ves; 
        }
    
  }
    
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=200;
    } else
    {
      $stoimost=100;  
    }
  }  
  
  
  
$stoimost=round($stoimost+$stoimost2, 0);  
  
  
  
  

$kubik=round((($gruz_dlina/100)*($gruz_shirina/100)*($gruz_visota/100)), 2);

$gruz_dlina=round(($gruz_dlina/100), 0);
$gruz_shirina=round(($gruz_shirina/100), 0);
$gruz_visota=round(($gruz_visota/100), 0);







 $query = "SELECT * FROM city_pecom where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

if ($row["num"]<>'')
{
$city=file_get_contents("http://calc.pecom.ru/bitrix/components/pecom/calc/ajax.php?places[0][1]=$gruz_shirina&places[0][2]=$gruz_dlina&places[0][3]=$gruz_visota&places[0][5]=$gruz_ves&places[0][6]=0&places[0][7]=0&take[town]=-452&deliver[town]=$row[num]");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data1=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов'.'|'.$obj[auto][2].'|'.$obj[periods_days]);


// выгребаем данные из деловых линий при помощи нашего DLC клиента + API ключ


 $query = "SELECT * FROM city_dl where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

$appKey = '8E76D0E0-3A9F-11E6-862F-00505683A6D3';
$client = new DLClient($appKey);

$client->request('public/calculator', array('appKey' => '8E76D0E0-3A9F-11E6-862F-00505683A6D3', 'derivalPoint'=>'6100000100000000000000000', 'derivalDoor'=>false, 'arrivalPoint'=>$row[KD], 'arrivalDoor'=>false, 'sizedVolume'=>$kubik, 'sizedWeight'=>$gruz_ves));

$arr=$client->result;
$data2=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов|'.$arr['price'].'|'.$arr['time']->nominative);



// выгребаем данные из ТК КИТ

 $query = "SELECT * FROM kit where name LIKE '%$otpravka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);
 
$city=file_get_contents("http://tk-kit.ru/API.1/?f=price_order&I_DELIVER=0&I_PICK_UP=0&WEIGHT=$gruz_ves&VOLUME=$kubik&SLAND=RU&SZONE=0000006100&SCODE=610000100000&SREGIO=61&RLAND=RU&RZONE=$row[tzoneid]&RCODE=$row[ids]&RREGIO=$row[region]&KWMENG=1&LENGTH=&WIDTH=&HEIGHT=&GR_TYPE=&LIFNR=&PRICE=&WAERS=RUB");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data3=base64_encode($stoimost.'|'.$otpravka_rus.'-Ростов'.'|'.$obj['PRICE']['TOTAL'].'|'.$obj['DAYS']);

echo $data1."|".$data2."|".$data3;
} else {echo "1";}
}


// выбрана доставка Россия-Украина 
if ((sity_stat($otpravka)=='ukr') and (sity_stat($dostavka)=='rus'))

{
    // РОСТОВ-ДНР
   if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=150; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=200; 
        }
        if (($ves>2.1) and ($ves<=45.1))
        {
           $stoimost=200+15*$ves; 
        }

        if ($ves>45.1)
        {
           $stoimost=300+15*$ves; 
        }
    
  }
    
  
  if ($money_cnt<>'')
  {
    if (($money_cnt>0) and ($money_cnt<2001))
    {
        $stoimost=100;
    }
    if (($money_cnt>2000) and ($money_cnt<5001))
    {
        $stoimost=150;
    }    
    if (($money_cnt>5000) and ($money_cnt<10001))
    {
        $stoimost=200;
    }   
    if (($money_cnt>10000) and ($money_cnt<20001))
    {
        $stoimost=300;
    }  
    if (($money_cnt>20000) and ($money_cnt<30001))
    {
        $stoimost=400;
    }   
    if (($money_cnt>30000) and ($money_cnt<40001))
    {
        $stoimost=500;
    }  
    if (($money_cnt>40000) and ($money_cnt<50001))
    {
        $stoimost=600;
    } 
    if (($money_cnt>50000) and ($money_cnt<60001))
    {
        $stoimost=700;
    } 
    if (($money_cnt>60000) and ($money_cnt<70001))
    {
        $stoimost=800;
    } 
    if (($money_cnt>70000) and ($money_cnt<80001))
    {
        $stoimost=900;
    } 
    if (($money_cnt>80000) and ($money_cnt<90001))
    {
        $stoimost=1000;
    } 
    if (($money_cnt>90000) and ($money_cnt<100001))
    {
        $stoimost=1100;
    } 
  }
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=200;
    } else
    {
      $stoimost=100;  
    }
  }  
  
  
  
  
// ДНР-УКРАИНА

 if ($gruz_ves<>'')
  {
    $ves=get_ves($gruz_ves, $gruz_dlina, $gruz_shirina, $gruz_visota);
    
        if (($ves>0) and ($ves<=0.3))
        {
           $stoimost=100; 
        }
        if (($ves>0.3) and ($ves<=1))
        {
           $stoimost=150; 
        }
        if (($ves>1) and ($ves<=2.1))
        {
           $stoimost=200; 
        }
        if (($ves>2.1) and ($ves<=15.1))
        {
           $stoimost=150+30*$ves; 
        }
        if (($ves>15.1) and ($ves<=45.1))
        {
           $stoimost=300+20*$ves; 
        }
        if ($ves>45.1)
        {
           $stoimost=500+20*$ves; 
        }
    
  }
    
  
  if ($gruz_type==1)
  {
     if ($doc==1) 
    {
      $stoimost=200;
    } else
    {
      $stoimost=100;  
    }
  }  
  
  
  
$stoimost=round($stoimost+$stoimost2, 0);  
  
  
  
  

$kubik=round((($gruz_dlina/100)*($gruz_shirina/100)*($gruz_visota/100)), 2);

$gruz_dlina=round(($gruz_dlina/100), 0);
$gruz_shirina=round(($gruz_shirina/100), 0);
$gruz_visota=round(($gruz_visota/100), 0);







 $query = "SELECT * FROM city_pecom where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

if ($row["num"]<>'')
{
$city=file_get_contents("http://calc.pecom.ru/bitrix/components/pecom/calc/ajax.php?places[0][1]=$gruz_shirina&places[0][2]=$gruz_dlina&places[0][3]=$gruz_visota&places[0][5]=$gruz_ves&places[0][6]=0&places[0][7]=0&take[town]=$row[num]&deliver[town]=-452");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data1=base64_encode($stoimost.'|'.$dostavka_rus.'-Ростов'.'|'.$obj[auto][2].'|'.$obj[periods_days]);


// выгребаем данные из деловых линий при помощи нашего DLC клиента + API ключ


 $query = "SELECT * FROM city_dl where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);

$appKey = '8E76D0E0-3A9F-11E6-862F-00505683A6D3';
$client = new DLClient($appKey);

$client->request('public/calculator', array('appKey' => '8E76D0E0-3A9F-11E6-862F-00505683A6D3', 'derivalPoint'=>$row[KD], 'derivalDoor'=>false, 'arrivalPoint'=>'6100000100000000000000000', 'arrivalDoor'=>false, 'sizedVolume'=>$kubik, 'sizedWeight'=>$gruz_ves));

$arr=$client->result;
$data2=base64_encode($stoimost.'|'.$dostavka_rus.'-Ростов|'.$arr['price'].'|'.$arr['time']->nominative);



// выгребаем данные из ТК КИТ

 $query = "SELECT * FROM kit where name LIKE '%$dostavka_rus%' order by name limit 1";  
 $res = mysql_query($query) or die(mysql_error());
 $row=mysql_fetch_array($res);
 
$city=file_get_contents("http://tk-kit.ru/API.1/?f=price_order&I_DELIVER=0&I_PICK_UP=0&WEIGHT=$gruz_ves&VOLUME=$kubik&SLAND=RU&SZONE=$row[tzoneid]&SCODE=$row[ids]&SREGIO=$row[region]&RLAND=RU&RZONE=0000006100&RCODE=610000100000&RREGIO=61&KWMENG=1&LENGTH=&WIDTH=&HEIGHT=&GR_TYPE=&LIFNR=&PRICE=&WAERS=RUB");
$obj=json_decode($city, JSON_UNESCAPED_UNICODE);

$data3=base64_encode($stoimost.'|'.$dostavka_rus.'-Ростов'.'|'.$obj['PRICE']['TOTAL'].'|'.$obj['DAYS']);

echo $data1."|".$data2."|".$data3;
} else {echo "1";}
}




?>