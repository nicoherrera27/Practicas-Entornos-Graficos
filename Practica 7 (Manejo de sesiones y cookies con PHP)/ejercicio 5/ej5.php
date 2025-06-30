<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Ejercicio 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light py-5">
  <div class="container">
    <form action="createSession.php" method="POST" class="card p-4 shadow-sm">
      <h4 class="mb-3">Formulario de Usuario</h4>
      <div class="mb-3">
        <label for="username" class="form-label">Usuario</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Crear Sesión</button>
    </form>
  </div>
</body>

</html>