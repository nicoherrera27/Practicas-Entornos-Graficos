<?php
session_start();

if (isset($_POST['username'])) {
  $username = $_POST['username'];
  setcookie("usuario", $username, time() + 86400 * 365);
} else if (isset($_COOKIE['usuario'])) {
  $username = $_COOKIE['usuario'];
} else {
  $username = "";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Ejercicio 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">
  <div class="container">
    <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
      <h2 class="mb-4 text-center">Ingreso de Usuario</h2>
      <form method="POST" action="ej3.php">
        <div class="mb-3">
          <label for="username" class="form-label">Nombre de Usuario:</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario"
            value="<?php echo $username; ?>">
        </div>
        <button type="submit" class="btn btn-primary w-100">Guardar</button>
      </form>

      <?php if (!empty($username)): ?>
        <div class="alert alert-success mt-4 text-center" role="alert">
          Último usuario ingresado: <strong><?php echo $username; ?></strong>
        </div>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>