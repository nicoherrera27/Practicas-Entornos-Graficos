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
      <div class="col-md-6">
        <div class="card p-4 shadow-sm">
          <h4 class="mb-4 text-center">Consulta de Alumno</h4>
          <form action="pagina2.php" method="post">
            <div class="mb-3">
              <label for="mail" class="form-label">Ingrese el mail del alumno a consultar:</label>
              <input type="email" class="form-control" name="mail" id="mail" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>