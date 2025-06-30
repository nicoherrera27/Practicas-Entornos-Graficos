<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Ejercicio 6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light py-5">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card p-4 shadow-sm text-center">
          <h4 class="mb-4">Página Principal</h4>

          <?php
          if (isset($_SESSION['usuario'])) {
            echo '<div class="alert alert-success">Bienvenido <strong>' . $_SESSION['usuario'] . '</strong>.</div>';
          } else {
            echo '<div class="alert alert-danger">No tiene permitido visitar esta página.</div>';
          }
          session_destroy();
          ?>

          <a href="ej6.php" class="btn btn-secondary mt-3">Volver al inicio</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>