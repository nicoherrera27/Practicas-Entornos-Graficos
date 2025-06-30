<?php
session_start();

if (isset($_POST['titular'])) {
    $tipoTitular = $_POST['titular'];
    setcookie('titular_preferido', $tipoTitular, time() + (86400 * 30)); // 30 días
} else if (isset($_COOKIE['titular_preferido'])) {
    $tipoTitular = $_COOKIE['titular_preferido'];
} else {
    $tipoTitular = '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejecicio 4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <h1 class="text-center mb-4">Periódico</h1>

  <form action="ej4.php" method="POST" class="card p-4 shadow-sm mb-4">
    <h5 class="mb-3">Selecciona el tipo de titular que deseas ver:</h5>
    <div class="form-check mb-2">
      <input class="form-check-input" type="radio" name="titular" id="politica" value="politica"
        <?php if ($tipoTitular == 'politica') echo 'checked'; ?>>
      <label class="form-check-label" for="politica">Noticia Política</label>
    </div>
    <div class="form-check mb-2">
      <input class="form-check-input" type="radio" name="titular" id="economia" value="economia"
        <?php if ($tipoTitular == 'economia') echo 'checked'; ?>>
      <label class="form-check-label" for="economia">Noticia Económica</label>
    </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="radio" name="titular" id="deportes" value="deportes"
        <?php if ($tipoTitular == 'deportes') echo 'checked'; ?>>
      <label class="form-check-label" for="deportes">Noticia Deportiva</label>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Preferencia</button>
  </form>
  <div class="row">
    <?php if ($tipoTitular == 'politica' or !$tipoTitular){?> 
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Política</h5>
            <p class="card-text">Nuevo proyecto de ley genera debate en el Congreso.</p>
          </div>
        </div>
      </div>
    <?php } 
    if ($tipoTitular == 'economia' or !$tipoTitular){ ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Economía</h5>
            <p class="card-text">El dólar sube y preocupa a los mercados internacionales.</p>
          </div>
        </div>
      </div>
    <?php }
    
    if ($tipoTitular == 'deportes' or !$tipoTitular){?>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Deportes</h5>
            <p class="card-text">La selección nacional gana 3-1 y pasa a la final.</p>
          </div>
        </div>
      </div>
  </div>
  <?php } ?>
  
  <div class="text-center mt-4">
    <a href="borrarCookie.php" class="btn btn-danger">Borrar Preferencia</a>
  </div>
</div>

</body>
</html>