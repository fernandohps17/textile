<?php
session_start();
require_once '../vendor/autoload.php';

use App\MailClass;

// $response_recaptcha = $_POST["g-recaptcha-response"];

// if (isset($response_recaptcha) && $response_recaptcha) {
//   $secret = "6LdoPsoUAAAAAN_hMO9v6w5DqGSYuZqXlJ9NWkLI";
//   $ip = $_SERVER["REMOTE_ADDR"];
//   $validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");

//   if ($validation_server["success"] == true) {
// obtenemos los datos 
$data = [
  "name" => htmlentities(addslashes($_POST['name'])),
  "email" => htmlentities(addslashes($_POST['email'])),
  "mensaje" => htmlentities(addslashes($_POST['mensaje'])),
];

// instanciamos la clase
$mail = new MailClass();

// usamos el metodo de consulta
$send = $mail->consulta($data);

if ($send) {
  $_SESSION["mail"] = 1;
} else {
  $_SESSION["mail"] = 0;
}
//   } else {
//     $_SESSION["mail"] = 0;
//   }
// } else {
//   $_SESSION["mail"] = 0;
// }

header("Location: /");
