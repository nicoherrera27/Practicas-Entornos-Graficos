<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4</title>
</head>

<body>
  <?php
  session_start();
  if (!isset($_SESSION['cont_visitas'])) {
    $_SESSION['cont_visitas'] = 1;
  } else {
    $_SESSION['cont_visitas']++;
  }
  ?>
  <a href='otra_pagina.php'>Otra pagina</a>
</body>

</html>