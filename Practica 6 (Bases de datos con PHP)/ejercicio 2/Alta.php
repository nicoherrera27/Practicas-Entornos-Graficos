<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Alta Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">

    <div class="container py-4">

        <p>
            <a href="menu.html" class="btn btn-primary d-inline-flex align-items-center">
                Volver al menú
            </a>
        </p>

        <?php
        include("conexion.inc");

        $vCity = $_POST["city"];
        $vCountry = $_POST["country"];
        $vHab = $_POST["hab"];
        $vSup = $_POST["sup"];
        $vMeters = $_POST["meters"];

        $vSql = "SELECT COUNT(*) as cant FROM ciudades WHERE pais='$vCountry' AND ciudad='$vCity'";
        $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
        $vCant = mysqli_fetch_assoc($vResultado);

        if ($vCant['cant'] != 0) {
            echo '<div class="alert alert-danger" role="alert">
                La ciudad y el país ya existen.
            </div>';
        } else {
            $vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) 
                     VALUES ('$vCity', '$vCountry', '$vHab', '$vSup', '$vMeters')";
            mysqli_query($link, $vSql) or die(mysqli_error($link));

            echo '<div class="alert alert-success" role="alert">
                La ciudad fue registrada correctamente.
            </div>';
        }

        mysqli_close($link);
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>