<?php
$name = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mail = $_POST['mail'];
$genero = $_POST['genero'];
$phone = $_POST['numberPhone'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $firsName . "  " . $lastName . "\r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Genero: " . $genero . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'natachadanza1@gmail.com';
$asunto = 'Contacto desde la pagina';

mail($para, $asunto, utf8_decode($message), $header);

header("Location: contaco.html");
?>