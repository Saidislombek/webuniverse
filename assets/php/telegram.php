<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$surname = $_POST['surname'];
$username = $_POST['name'];
$usetypeofeducation = $_POST['typeofeducation'];
$userphone = $_POST['phone'];
$token = "1411004173:AAEqEx9XRl4e5RudK4hEA4UKkESqz5fcG70";
$chat_id = "-446570508";
$arr = array(
  'Фамилия пользователя: ' => $surname,  
  'Имя пользователя: ' => $username,
  'Выбранный вид обучения пользователем: ' => $usetypeofeducation,  
  'Телефон номер: ' => $userphone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>