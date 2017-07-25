<?php 


  $_POST['form_book_name'] = htmlspecialchars(stripslashes($_POST['form_book_name'])); 
  $_POST['form_book_tel'] = htmlspecialchars(stripslashes($_POST['form_book_tel'])); 
  $_POST['form_book_mail'] = htmlspecialchars(stripslashes($_POST['form_book_mail'])); 
  $_POST['form_book_text'] = htmlspecialchars(stripslashes($_POST['form_book_text'])); 

  $thm = "Жалоба/предложение";

  $form_book_name = $_POST['form_book_name'];
      
  $form_book_tel = $_POST['form_book_tel'];

  $form_book_mail = $_POST['form_book_mail'];

  $form_book_text = $_POST['form_book_text'];

  $msg = "$form_book_name\n\n$form_book_tel\n\n$form_book_mail\n\n$form_book_text";

  $mail_to = "sbkadrinashapochta@gmail.com";

  $mail_to_two = "andrey.klimash@gmail.com";

  $headers = 'From: Сайт "Наша Почта" <info@donbass-post.ru>'; 

  mail($mail_to, $thm, $msg, $headers); 

  mail($mail_to_two, $thm, $msg, $headers); 

  

?>