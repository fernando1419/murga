<?php

$name    = $_POST['name'];
$email   = $_POST['email'];
$asunto  = $_POST['asunto'];
$message = $_POST['message'];
$enviar  = $_POST['enviar'];

if (isset($name) && isset($email) && isset($asunto) && isset($message) && isset($enviar)) {
	$to = 'info@murga.tv';

	// Set Header:
	$headers = "From: " . $name . "<" . $email . ">\r\n";
	// $headers .= "Reply-To: {$email}\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset-utf-8";

	$texto = "Recibiste un mail de " . $name . ".\n\n" . $message;

	// Send Email
	if (mail($to, $asunto, $texto, $headers)) {
		header('Location: index.html');
		exit();
	}
	echo "Error al enviar el email";
}
