<?php
if (isset($_POST['style'])) {
  $style = $_POST['style'];
  setcookie('style', $style, time() + (60 * 60 * 24 * 90));
} else {
  if (isset($_COOKIE['style'])) {
    $style = $_COOKIE['style'];
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>

<head>
  <title>Ejercicio 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php
  if (isset($style)) {
    echo "<link rel='stylesheet' type='text/css' href='$style.css'>";
  }
  ?>
</head>

<body class="p-4">
  <div class="container">
    <h1 class="mb-4">Selecciona el Estilo de la Página</h1>
    <form action="ej1.php" method="post" class="border p-4 rounded shadow-sm custom-form <?php echo $style ?? ''; ?>">
      <div class="mb-3">
        <label for="style" class="form-label">Estilo:</label>
        <select name="style" id="style" class="form-select">
          <option value="white" <?php if (isset($style) && $style == 'white')
            echo 'selected'; ?>>Blanco</option>
          <option value="dark" <?php if (isset($style) && $style == 'dark')
            echo 'selected'; ?>>Negro</option>
          <option value="blue" <?php if (isset($style) && $style == 'blue')
            echo 'selected'; ?>>Azul</option>
          <option value="pink" <?php if (isset($style) && $style == 'pink')
            echo 'selected'; ?>>Rosa</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Actualizar Estilo</button>
    </form>
  </div>
</body>

</html>