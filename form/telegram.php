<?php

/* https://api.telegram.org/bot5323092806:AAFvMcdQBK_boNBw9zNEMavh3CdL3bO1Uq0/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$familia = $_POST['user_familia'];
$patronymic = $_POST['user_patronymic'];
$citizenship = $_POST['user_citizenship'];
$passport = $_POST['user_passport'];
$year = $_POST['user_year'];
$faculty = $_POST['user_faculty'];
$hostel = $_POST['user_hostel'];
$room = $_POST['user_room'];
$token = "5323092806:AAFvMcdQBK_boNBw9zNEMavh3CdL3bO1Uq0";
$chat_id = "-647476196";
$arr = array(
  'Имя: ' => $name,
  'Фамилия: ' => $familia,
  'Отчество: ' => $patronymic,
  'Гражданство: ' => $citizenship,
  'Номер паспорта: ' => $passport,
  'Факультет: ' => $faculty,
  'Номер общежития: ' => $hostel,
  'Номер комнаты: ' => $room,
  'Курс: ' => $year,
  'Телефон: ' => $phone,
  'Email:' => $email
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