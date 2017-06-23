<?php
$destino = walteros2006@yahoo.es;
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre: " . $nombre . "\nTelefono: " . $telefono . "\nCorreo: " . $mail . "\nMensaje: " . $mensaje;
mail(= walteros2006@yahoo.es;
, " mensaje enviado desde tu pagina web", message) 

?>

/*

  $header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ignaciobluuweb@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
*/