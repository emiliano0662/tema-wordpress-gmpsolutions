<?php
$nombre 	= $_POST['nombre'];
$email 		= $_POST['email'];
$telefono 	= $_POST['telefono'];
$mensaje 	= $_POST['mensaje'];

$para = 'handresvegarodriguez@gmail.com';

$asunto = 'Formulario de contacto - www.gmpsolutions.co';

$mensaje = "Nombre: ".$nombre."<br><br>"."Telefono: ".$telefono."<br><br>"."Email: ".$email."<br><br>"."Mensaje: ".$mensaje;

//Cabecera de la funcion mail()
$headers = "From: ".$email." \r\n";
$headers .= "Reply-To: ".$email."\r\n"; //La dirección por defecto si se responde el email enviado.
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n"; //La codificación del email.
 
//Mandamos el email.
mail($para, $asunto, $mensaje, $headers); ?>