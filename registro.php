<?php  //Este es el formulario de registro que va a recibir la información (que proviene del index.html)

//en cada variable voy a guardar lo que traiga Del POST(del html) como el campo nombre
//nota: el que tengo como name en html  es el campo que traigo aqui a PHP 
$nombres=$_POST['nombres'];
$correo=$_POST['email'];
$asunto=$_POST['asunto'];
$mensajetextarea=$_POST['mensaje'];
//en resumen AQUI RECIBO TODOS LOS DATOS DEL FORMULARIO HTML  Y CON PHP LOS PREPARO PARA ENVIARLOS POR EL SERVIDOR DE MAIL

// a partir de aqui ya es el servidor de correo interno que tiene php son las ventajas que tiene php para el backend

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'seat102020@outlook.com'; //'escribeaquitucorreo@hotmail.com';
$asunto = 'Mensaje de... (Escribe como quieres que se vea el remitente de tu correo)';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");


?>