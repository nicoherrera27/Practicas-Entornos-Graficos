<?php

$headers = "MIME-Version: 1.0\r\n";
$headers .= 'From: Entornos graficos <entornosgraficos@utn.com>' . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$destinatario = "herreranico42@gmail.com";
$asunto = "Prueba de funcion mail()";
$cuerpo = "<html> <head> Practica 5 PHP Funcion mail() y variables de sesion </head>
<body> <p> Probando funcion mail() con el ejercicio 1 </p> </body>";

mail($destinatario, $asunto, $cuerpo);

echo "Mail enviado correctamente!";

?>