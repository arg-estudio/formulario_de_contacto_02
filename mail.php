<?php
$para = 'hola@arg-estudio.com';
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$titulo = 'Formulario de Contacto';
$mensaje = $nombre.' te contacto y dejo el siguiente mensaje<br>'.$mensaje.'<br>Dejo el siguiente número de telefono'.$telefono;

$cabeceras = 'MIME-Version 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($para, $titulo, $mensaje, $cabeceras);
echo 'Gracias por contactarnos, en breve tendrás noticias nuestras';

?>