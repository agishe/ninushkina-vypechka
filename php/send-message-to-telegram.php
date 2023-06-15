<?php

// Токен
  const TOKEN = '6287839466:AAGadHvqjQKAMPTiAgjBi9YGU1nXYU2H1n0';

  // ID чата
  const CHATID = '-1001878232770';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $fileSendStatus = '';
  $textSendStatus = '';
  $msgs = [];
  
  // Проверяем не пусты ли поля с именем и телефоном
  if (!empty($_POST['name']) && !empty($_POST['phone'])) {
    
    // Если не пустые, то валидируем эти поля и сохраняем и добавляем в тело сообщения. Минимально для теста так:
    $txt = "";
    
    // Имя
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $txt .= "Имя пославшего: " . strip_tags(trim(urlencode($_POST['name']))) . "%0A";
    }
    
    // Номер телефона
    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $txt .= "Телефон: " . strip_tags(trim(urlencode($_POST['phone']))) . "%0A";
    }
    
    // Не забываем про тему сообщения
    if (isset($_POST['theme']) && !empty($_POST['theme'])) {
        $txt .= "Тема: " . strip_tags(urlencode($_POST['theme']));
    }

    $textSendStatus = @file_get_contents('https://api.telegram.org/bot'. TOKEN .'/sendMessage?chat_id=' . CHATID . '&parse_mode=html&text=' . $txt); 

    if( isset(json_decode($textSendStatus)->{'ok'}) && json_decode($textSendStatus)->{'ok'} ) {
      echo json_encode('SUCCESS');
    } else {
      echo json_encode('ERROR');
    }
  } else {
    echo json_encode('NOTVALID');
  }
} else {
  header("Location: /");
}
