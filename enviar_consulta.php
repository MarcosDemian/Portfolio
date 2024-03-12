<?php

$nombre_form = $_POST['nombre']; // POST es un metodo para obtener valores a travez del head no por url 
$correo_form = $_POST['email']; //dicho valor se guarda en una variable para  ser utilizada luego
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail =
"Nombre: " . $nombre_form ."\r\n".
"Correo: " . $correo_form ."\r\n".
"Mensaje: " . $mensaje_form;

mail("demiangarcia254@gmail.com", "Mensaje desde nuestrositio.com", $cuerpo_mail); //para indicar a que mail se envian los datos y como
?>