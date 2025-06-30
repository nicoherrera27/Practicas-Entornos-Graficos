<?php
session_start();

if (isset($_SESSION["username"])) {
  $username = $_SESSION["username"];
  $password = $_SESSION["password"];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Ejercicio 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light py-5">
  <div class="container">
    <div class="card p-4 shadow-sm">
      <h2 class="mb-3 text-success">Datos de la Sesión</h2>
      <?php if (isset($_SESSION['usuario'])) { ?>
        <p><strong>Usuario:</strong> <?php echo $_SESSION['usuario']; ?></p>
        <p><strong>Clave:</strong> <?php echo $_SESSION['clave']; ?></p>
      <?php } else { ?>
        <p class="text-danger">No hay datos de sesión almacenados.</p>
      <?php } ?>
      <a href="ej5.php" class="btn btn-secondary mt-3">Volver</a>
    </div>
  </div>
</body>

</html>