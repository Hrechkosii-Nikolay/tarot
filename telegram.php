<?php

/* https://api.telegram.org/bot7680012686:AAGxHZxUCmNh3Pd6iWzYvVTRFk7DTkLDrO8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашого бота, отриманий раніше */


$name = $_POST['user_name'];
$age = $_POST['user_age'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$token = "7680012686:AAGxHZxUCmNh3Pd6iWzYvVTRFk7DTkLDrO8";
$chat_id = "-1002272598043";
$arr = array(
  '👤 Імя: ' => $name,
  '⏳ Вік: ' => $age,
  '☎️ Телефон: ' => $phone,
  '💌 Питання:' => $message
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
