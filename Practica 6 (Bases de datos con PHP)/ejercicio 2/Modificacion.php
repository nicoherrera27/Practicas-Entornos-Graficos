<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar Ciudad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-4">
        <p>
            <a href="menu.html" class="btn btn-primary d-inline-flex align-items-center mb-4">

                Volver al menú
            </a>
        </p>
        <?php
        include("conexion.inc");
        // Obtener el ID
        $vID = $_POST["id"];

        $vSql = "SELECT * FROM ciudades WHERE id='$vID'";
        $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
        $fila = mysqli_fetch_array($vResultado);

        if (mysqli_num_rows($vResultado) == 0) {
            echo '<div class="alert alert-danger" role="alert">
                    Ciudad inexistente.<br>
                     Recuerde que puede consultar la lista en cualquier momento.
            </div>
        ';

            echo '<p>
            <a href="lista.php" class="btn btn-info d-inline-flex align-items-center">
            Consulta
            </a>
        </p>';
        } else {
            ?>


            <div class="container mt-5">

                <form action="Modi.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">ID:</label>
                        <input type="text" class="form-control" name="id" value="<?php echo ($fila['id']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="pais" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" name="city" value="<?php echo ($fila['ciudad']); ?>"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Pais</label>
                        <input type="text" class="form-control" name="country"
                            value="<?php echo htmlspecialchars($fila['pais']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="pais" class="form-label">Habitantes</label>
                        <input type="text" class="form-control" name="hab" value="<?php echo ($fila['habitantes']); ?>"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="pais" class="form-label">Superficie</label>
                        <input type="text" class="form-control" name="sup" value="<?php echo ($fila['superficie']); ?>"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="pais" class="form-label">Tiene metro</label>
                        <input type="text" class="form-control" name="tieneMetro"
                            value="<?php echo ($fila['tieneMetro']); ?>" required>
                    </div>

                    <button type="submit" class="btn btn-warning">Guardar Cambios</button>
                    <a href="index.html" class="btn btn-secondary">Volver al menú</a>
                </form>
            </div>

            <?php
        }
        //Liberar  resultados
        mysqli_free_result($vResultado);

        //Cerrar la conexion
        mysqli_close($link)
            ?>

    </div>

</body>

</html>