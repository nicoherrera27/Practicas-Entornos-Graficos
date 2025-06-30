<?php
if (!isset($_COOKIE['visitas'])) {
  $visitas = 1;
  setcookie("visitas", $visitas, time() + 3600 * 24 * 365);
} else {
  $visitas = $_COOKIE['visitas'] + 1;
  setcookie("visitas", $visitas, time() + 3600 * 24 * 365);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Ejercicio 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">
  <div class="container text-center">
    <div class="card shadow border-0 p-4 mx-auto" style="max-width: 500px;">
      <h1 class="mb-4">Bienvenido</h1>
      <p class="fs-5">
        <?php
        if ($visitas > 1) {
          echo "Esta es tu visita número <strong>" . $_COOKIE['visitas'] . "</strong>.";
        } else {
          echo "¡Bienvenido! Esta es la primera vez que visitás esta página.";
        }
        ?>
      </p>
    </div>
  </div>
</body>

</html>