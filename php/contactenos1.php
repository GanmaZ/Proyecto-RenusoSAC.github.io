<?php 
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$cantidad = $_POST['cantidad'];
$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $nombre . ", de la empresa " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
$para = 'ventas@sellosrenuso.com';
$asunto = 'Contacto desde la web de Distribuidora Renuso';
mail($para, $asunto, utf8_decode($mensaje), $header);
echo 'Mensaje enviado correctamente';
?> 
