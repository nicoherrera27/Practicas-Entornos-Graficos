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
  echo "Se ha accedido a esta pagina " . $_SESSION['cont_visitas'] . " veces.";
  ?>
  <br>
  <br>
  <a href='ejercicio1.php'>Pagina Principal</a>
</body>

</html>