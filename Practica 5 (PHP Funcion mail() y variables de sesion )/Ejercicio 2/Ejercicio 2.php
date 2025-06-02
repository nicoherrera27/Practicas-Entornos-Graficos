<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicio2.css">
  <title>Formulario</title>
</head>

<body>
  <?php
  function sendMail($name, $mail, $text)
  {
    $to = "herreranico42@gmail.com";
    $subject = "Ejercicio 2 - Practica 5 PHP";
    $body = "El visitante con nombre $name y mail $mail envio la siguiente consulta:\n $text";
    $from = "From: $mail";

    mail($to, $subject, $body, $from);
    echo 'Mail enviado correctamente!';
  }

  if (!isset($_POST['submit'])) {
    ?>

    <div class="formulario">
      <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Mail:</label>
        <input type="text" name="mail" required>

        <label> Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

        <button type='submit'>Enviar consulta</button>

      </form>
    </div>



    <?php
  } else {
    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $texto = $_POST['texto'];

    sendMail($nombre, $mail, $texto);
  }
  ?>


</body>

</html>