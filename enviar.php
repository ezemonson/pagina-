<?php

//llamando a los campos//

$nombre = $_POST['nombre']; 
$correo = $_POST['correo']; 
$mensaje = $_POST['mensaje']; 

//datos para el correo//

$destinatario = "ezemonson@outlook.com";
$asunto = "Contacto desde la página"

$consulta = "De: $nombre \n";
$consulta .= "Correo: $correo \n";
$consulta .= "Mensaje: $mensaje"; 

//Enviando mensaje//

mail($destinatario, $asunto, $consulta);
header('Location:mensaje-de-envio.html');

?>