<?php 


  $_POST['form_res_name'] = htmlspecialchars(stripslashes($_POST['form_res_name'])); 
  $_POST['form_res_tel'] = htmlspecialchars(stripslashes($_POST['form_res_tel'])); 
  $_POST['form_res_mail'] = htmlspecialchars(stripslashes($_POST['form_res_mail'])); 
  $_POST['form_res_vac'] = htmlspecialchars(stripslashes($_POST['form_res_vac'])); 
  $_POST['form_res_text'] = htmlspecialchars(stripslashes($_POST['form_res_text'])); 
  $picture = ""; 

  // Если поле выбора вложения не пустое - закачиваем его на сервер 

  if (!empty($_FILES['file']['tmp_name'])) 

  { 

    // Закачиваем файл 

    $path = $_FILES['file']['name']; 

    if (copy($_FILES['file']['tmp_name'], $path)) $picture = $path; 

  } 

  $thm = "Резюме с сайта";

  $form_res_name = $_POST['form_res_name'];
      
  $form_res_tel = $_POST['form_res_tel'];

  $form_res_mail = $_POST['form_res_mail'];

  $form_res_vac = $_POST['form_res_vac'];

  $form_res_text = $_POST['form_res_text'];

  $msg = "$form_res_name<br><br> $form_res_tel<br><br> $form_res_mail<br><br> $form_res_vac<br><br> $form_res_text";

  $mail_to = "sbkadrinashapochta@gmail.com";

  $headers = 'From: Сайт "Наша Почта" <info@donbass-post.ru>'; 

  // Отправляем почтовое сообщение 

  if(empty($picture)) mail($mail_to, $thm, $msg, $headers); 

  else send_mail($mail_to, $thm, $msg, $headers, $picture); 

  // Вспомогательная функция для отправки почтового сообщения с вложением 

  function send_mail($to, $thm, $html, $headers, $path) 

  { 

    $fp = fopen($path,"r"); 

    if (!$fp) 

    { 

      print "Файл $path не может быть прочитан"; 

      exit(); 

    } 

    $file = fread($fp, filesize($path)); 

    fclose($fp); 

    

    $boundary = "--".md5(uniqid(time())); // генерируем разделитель 

    $headers .= "MIME-Version: 1.0\n"; 

    $headers .="Content-Type: multipart/mixed; boundary=\"$boundary\"\n"; 

    $multipart .= "--$boundary\n"; 

    $kod = 'utf-8'; 

    $multipart .= "Content-Type: text/html; charset=$kod\n"; 

    $multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n"; 

    $multipart .= "$html\n\n"; 



    $message_part = "--$boundary\n"; 

    $message_part .= "Content-Type: application/octet-stream\n"; 

    $message_part .= "Content-Transfer-Encoding: base64\n"; 

    $message_part .= "Content-Disposition: attachment; filename = \"".$path."\"\n\n"; 

    $message_part .= chunk_split(base64_encode($file))."\n"; 

    $multipart .= $message_part."--$boundary--\n"; 



    if(!mail($to, $thm, $multipart, $headers)) 

    { 

      echo "К сожалению, письмо не отправлено"; 

      exit(); 

    } 

  } 
header('Location: http://www.donbass-post.ru/about.php#vacancys');
  exit;

?>