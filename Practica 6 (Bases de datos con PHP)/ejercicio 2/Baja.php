<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Baja</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">

    <div class="container py-4">

        <p>
            <a href="menu.html" class="btn btn-primary d-inline-flex align-items-center mb-4">

                Volver al menú
            </a>
        </p>

        <?php
        include("conexion.inc");

        $vID = $_POST['id'];

        $vSql = "SELECT * FROM ciudades WHERE id='$vID'";
        $vResultado = mysqli_query($link, $vSql);

        if (mysqli_num_rows($vResultado) == 0) {
            echo '<div class="alert alert-danger" role="alert">
                    Ciudad inexistente.<br>
                    Recuerde que puede consultar la lista en cualquier momento.
                </div>';
            echo '<p>
                    <a href="lista.php" class="btn btn-info d-inline-flex align-items-center">
                        Consulta
                    </a>
                </p>';
        } else {
            $vSql = "DELETE FROM ciudades WHERE id='$vID'";
            mysqli_query($link, $vSql);

            echo '<div class="alert alert-success" role="alert">
                    La ciudad fue borrada correctamente.
                </div>';
        }

        mysqli_free_result($vResultado);
        mysqli_close($link);
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>