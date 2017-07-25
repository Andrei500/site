<?
//Объявляем  константы


// защищаем ajax
if(isset($_POST['action']) && !empty($_POST['action'])) {
  // И определяем что выполнять
  $action = $_POST['action'];
  switch($action) {
      case 'saveFormData' : saveFormData(); break;
  }
} else {
  //echo json_encode(print_r($_POST, true));
  //echo json_encode(print_r($_FILES, true));
  echo "Cannot Save Form Data";
}

//Взять файлы из суперглобала FILES и записать на файловую систему
function saveFiles() {
  $UPLOAD_DIR = 'calc_docs'; //Директория для хранения файлов

  $fileList = $_FILES['filetocalc'];
  $filetmpnameList = $fileList['tmp_name'];
  $filenameList = $fileList['name'];

  $clientFiles = array();

  $i = 0;
  foreach($filetmpnameList as $filetmpname) {
    //print_r($filename);
    //echo(sprintf("%s%s\n", $UPLOAD_DIR, $filetmpname));
    if($filetmpname != '') {
      echo(sprintf("%s/%s_%s\n", $UPLOAD_DIR, date("YmdHis"), $filenameList[$i]));
      $newfilename = sprintf("%s/%s_%s", $UPLOAD_DIR, date("YmdHis"), $filenameList[$i]);
      array_push($clientFiles, $newfilename);
      move_uploaded_file($filetmpname, $newfilename);
    }
    $i += 1;
  }

  return $clientFiles;
}


function saveFormData() {

  $host='';
  $database='';
  $user1='';
  $pass1='';

  $msconnect=mysql_connect($host, $user1, $pass1); //подключаемся к базе
  mysql_select_db($database, $msconnect); //определяем таблицу

  //настройки кодировки
  mysql_query ("set_client='utf8'");
  mysql_query ("set character_set_results='utf8'");
  mysql_query ("set collation_connection='utf8_general_ci'");
  mysql_query ("SET NAMES utf8");


  $gruzArray = $_POST['gruz'];
  $gruzArray = json_decode($gruzArray);
  //print_r($gruzArray);
  $clientInfo = $_POST['client'];
  $clientInfo = json_decode($clientInfo);
  //print_r($clientInfo);

  //Обычно такие структуры БД и передают в HTML при загрузке страницы
  $cities = array (
    '1' => 'Горловка',
    '2' => 'Донецк-1 (Юзовский Пассаж)',
    '3' => 'Донецк-2 (Крытый рынок)',
    '4' => 'Донецк-3 (Покровский рынок)',
    '5' => 'Енакиево',
    '7' => 'Макеевка-1 (Центр)',
    '8' => 'Макеевка -2 (Мк-он Зеленый)',
    '9' => 'Снежное',
    '10' => 'Шахтерск',
    '11' => 'Ясиноватая',
    '12' => 'Алчевск',
    '13' => 'Дебальцево',
    '14' => 'Луганск',
    '15' => 'Стаханов',
  );

  $clientName = $clientInfo[0];
  $clientPhone = $clientInfo[1];
  $clientMail = $clientInfo[2];
  $clientCity = $cities[$clientInfo[3]];
  $clientFiles = "";
  $fileLinkList = array();



  if(isset($_FILES['filetocalc'])) {
    $clientFiles = saveFiles();
    $clientFiles = join(",", $clientFiles);

    $fileArray = explode(",", $clientFiles);
    foreach($fileArray as $file) {
        $upload_dir = 'calc_docs';
        $webPageHome = 'http://www.donbass-post.ru/php';

        $fileLink = sprintf("%s/%s", $webPageHome, $file);
        $fileHrefLink  = sprintf("<a href=\"%s/%s\">$file</a>", $webPageHome, $file);

        echo $fileLink . "\n";
        echo $fileHrefLink . "\n";

        array_push($fileLinkList, $fileLink);
    }
    $fileLinkList = join(",", $fileLinkList);
  }

  $gruz_id = 1;
  foreach($gruzArray as $gruz) {
    $article_name = $gruz[0];
    $remark_product = $gruz[1];
    $product_creater = $gruz[2];
    $product_ves = $gruz[3];
    $product_obem = $gruz[4];
    $product_country = $gruz[5];
    $product_price = $gruz[6];


    print_r(join("\n",array(
      $clientName,
      $clientPhone,
      $clientMail,
      $clientCity,
      $clientFiles,
      $gruz_id,
      $article_name,
      $remark_product,
      $product_creater,
      $product_ves,
      $product_obem,
      $product_country,
      $product_price
    )));


      //записываем данные о клиенте
      $query_form_comm = "insert into form_comm set dat=now(),
      form_comm_name='$clientName',
      form_comm_tel='$clientPhone',
      form_comm_mail='$clientMail',
      form_comm_city='$clientCity',
      link='$fileLinkList'";
      mysql_query($query_form_comm) or die(mysql_error());


    $user_id=mysql_insert_id();
    mysql_query("insert into table_gruz set user='$user_id',
      article_name='$article_name',
      remark_product='$remark_product',
      product_creater='$product_creater',
      product_ves='$product_ves',
      product_obem='$product_obem',
      product_country='$product_country',
      product_price='$product_price'")
    or die(mysql_error());


    $gruz_id += 1;
  }
}


?>
