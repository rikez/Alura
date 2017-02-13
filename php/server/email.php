<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

require_once("../lib/PHPMailer/PHPMailerAutoload.php");

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "xx";
$mail->Password = "xxx";

$mail->setFrom("enricomalvarenga@gmail.com", "Enrico Alvarenga PHP");
$mail->addAddress("enricomalvarenga@gmail.com");
$mail->Subject = "Enrico ALvarenga PHP";
$mail->msgHTML("<html>de: {$name}<br /> email: {$email} <br/> mensagem: ${message}</html>");
if($mail->send()) {
  $_SESSION["success"] = "Email enviado";
  header("Location: /");
} else {
  $_SESSION["danger"] = "Erro ao enviar email";
  header("Location: /contato.php");
}
die();
