<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Listado de Ciudades</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">

    <div class="container py-5">

        <h1 class="mb-4">Listado de Ciudades</h1>

        <p>
            <a href="menu.html" class="btn btn-primary mb-4 d-inline-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20"
                    class="me-2">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                        clip-rule="evenodd" />
                </svg>
                Volver al menú
            </a>
        </p>

        <?php
        include("conexion.inc");

        $vSql = "SELECT * FROM ciudades ORDER BY id";
        $vResultado = mysqli_query($link, $vSql);

        if (mysqli_num_rows($vResultado) > 0) {
            echo '<div class="table-responsive">';
            echo '<table class="table table-striped table-bordered">';
            echo '<thead class="table-dark">';
            echo '<tr>
                    <th>ID</th>
                    <th>Ciudad</th>
                    <th>País</th>
                    <th>Habitantes</th>
                    <th>Superficie</th>
                    <th>Tiene Metro</th>
                  </tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($fila = mysqli_fetch_assoc($vResultado)) {
                echo '<tr>';
                echo '<td>' . $fila['id'] . '</td>';
                echo '<td>' . $fila['ciudad'] . '</td>';
                echo '<td>' . $fila['pais'] . '</td>';
                echo '<td>' . $fila['habitantes'] . '</td>';
                echo '<td>' . $fila['superficie'] . '</td>';
                echo '<td>' . $fila['tieneMetro'] . '</td>';
                echo '</tr>';
            }

            echo '</tbody></table></div>';
        } else {
            echo '<div class="alert alert-info" role="alert">No hay ciudades registradas.</div>';
        }

        mysqli_free_result($vResultado);
        mysqli_close($link);
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>