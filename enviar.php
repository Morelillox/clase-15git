<?php
/* PHP */

$nombre = $_POST ["Nombre"];
$apellido = $_POST ["Apellidos"];
$telefono = $_POST ["Telefono"];
$mail = $_POST ["mail"];
$message = $_POST ["message"];
$archivo = $_POST ["archivoadjunto"];

$header = "from :" . $mail . " \r\n";
$header = "X-Mailer: PHP" . phpversion() . " \r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: ext/plain";

$mensaje = "Este mensaje fue enviado por:" . $nombre,$apellido . " \r\n";
$mensaje = "Su Email es:" .  $mail . " \r\n";
$mensaje = "Mensaje:" . $_POST["message"] . " \r\n";
$mensaje = "Enviado el dia:" . date("d/m/y" , time());

$para = "damian.morel@hotmail.com"; //mail a donde llegan mensajes
$asunto = "Mimix trabaja con nosotros"

mail ($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");

?>