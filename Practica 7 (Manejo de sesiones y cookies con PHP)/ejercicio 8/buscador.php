<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>Buscador de Canciones</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container mt-5">
    <?php
    include "conexion.inc";
    $pal = $_POST['Palabra'] ?? '';
    if ($pal) {
      $pal_escaped = $link->real_escape_string($pal);
      $query = "SELECT * FROM buscador WHERE canciones LIKE '%$pal_escaped%'";
      $resp = $link->query($query);
      if (!$resp) {
        echo '<div class="alert alert-danger">Error en la consulta</div>';
      } elseif ($resp->num_rows == 0) {
        echo '<div class="alert alert-warning">No hay resultados respecto a la palabra que busca.</div>';
      } else {
        echo '<h3 class="text-center mb-4">Resultados de Búsqueda</h3>';
        echo '<table class="table table-bordered table-striped">';
        echo '<thead><tr><th>Canciones</th></tr></thead><tbody>';
        while ($cat = $resp->fetch_assoc()) {
          echo '<tr><td>' . htmlspecialchars($cat['canciones']) . '</td></tr>';
        }
        echo '</tbody></table>';
      }
      echo '<a href="ej8.html" class="btn btn-secondary mt-3">Nueva búsqueda</a>';
    } else {
      ?>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form name="FormBuscador" method="post" action="" class="card card-body shadow">
            <div class="mb-3">
              <label for="Palabra" class="form-label">Buscar canción</label>
              <input name="Palabra" type="text" id="Palabra" class="form-control" required>
            </div>
            <button type="submit" name="Submit" class="btn btn-primary">Buscar</button>
          </form>
        </div>
      </div>
    <?php } ?>
  </div>
</body>

</html>