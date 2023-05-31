<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <title>PHP_test</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
  <?php
    echo "送信しました.";
    mb_language("Japanese);
    mb_internal_encodomg("UTF-8");

    $to = $_POST['to'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $headers = "From: hhhihuheho@gmail.com";
    if(mb_send_mail($to, $title, $messagem, $headers)){
      echo "送信しました.";
    }else{
      echo "失敗しました.";
    }
  ?>
</body>