<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['password'] = $_POST['password'];
  header("Location: showSession.php");
} else {
  header("Location: ej5.php");
}
?>
<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ejercicio 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light py-5">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm p-4">
          <?php if (isset($_POST["sent"])) { ?>
            <h4 class="mb-3 text-success">Variables creadas con exito</h4>
            <p> $_SESSION['username'] = <?php echo $_SESSION["username"] ?> </p>
            <p> $_SESSION['password'] = <?php echo $_SESSION["password"] ?> </p>
          <?php } else { ?>
            <h4 class="mb-3 text-danger"> Sesión no creada</h4>
            <p>Para crear las variables de sesión, complete el siguiente formulario:</p>
            <a href="ej5.php" class="btn btn-primary">Ir al Formulario</a>
          <?php } ?>

          <hr class="my-4">
          <a href="ej5.php" class="btn btn-outline-secondary">&larr; Volver </a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>