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
        <div class="card p-4 shadow-sm">


          <?php
          include("conexion.inc");

          $mail = $_POST['mail'];
          $vSql = "SELECT * FROM alumnos WHERE mail = '$mail'";
          $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
          $fila = mysqli_fetch_array($vResultado);

          if (mysqli_num_rows($vResultado) == 0) {
            echo '<div class="alert alert-danger">Usuario inexistente.</div>';
          } else {
            $_SESSION['usuario'] = $fila['nombre'];
          }
          ?>

          <a href="pagina3.php" class="btn btn-primary mt-3">Ingresar a página principal</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>