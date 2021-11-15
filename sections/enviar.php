<?php
$name = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$phone = $_POST['numberPhone'];
$message = $_POST['msg'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $firsName . "  " . $lastName . "\r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Edad: " . $age . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'natachadanza1@gmail.com';
$asunto = 'Contacto desde la pagina';

mail($para, $asunto, utf8_decode($message), $header);

header("Location: ../index.html");
?>