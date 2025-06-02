<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ejercicio3.css">
  <title>Formulario</title>
</head>

<body>
  <?php
  function recomendacion($name, $mail, $friend, $mail_friend, $text)
  {
    $to = $mail_friend;
    $subject = "Recomendacion de un sitio";
    $body = "Hola $friend, tu amigo $name te recomienda visitar un sitio web.\n\n Mensaje de $name: $text" .
      $from = "From: $mail";

    mail($to, $subject, $body, $from);
    echo 'Recomendacion enviada correctamente!';
  }

  if (!isset($_POST['submit'])) {
    ?>
    <div class="formulario">
      <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">

        <label>Tu nombre:</label>
        <input type="text" name="nombre" required>

        <label>Tu mail:</label>
        <input type="text" name="mail" required>

        <label>Nombre de tu amigo:</label>
        <input type="text" name="nombre_amigo" required>

        <label>Mail de tu amigo:</label>
        <input type="text" name="mail_amigo" required>

        <label>Mensaje de recomendacion:</label>
        <textarea id="mensaje" name="mensaje" placeholder="¡Este sitio está genial! Deberías visitarlo."
          rows="5"></textarea>

        <button type='submit'>Enviar recomendacion</button>

      </form>
    </div>
    <?php
  } else {
    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $amigo = $_POST['nombre_amigo'];
    $mail_amigo = $_POST['mail_amigo'];
    $mensaje = $_POST['mensaje'];

    recomendacion($nombre, $mail, $amigo, $mail_amigo, $mensaje);
  }
  ?>


</body>

</html>