<?php
ob_start("ob_gzhandler");
session_start();

$link = mysqli_connect("localhost:3306", "root", "2719") or die("Problemas de conexión a la base de datos");
mysqli_select_db($link, "compras");

$carro = $_SESSION['carro'] ?? false;

$vSql = 'SELECT * FROM catalogo ORDER BY producto ASC';
$vResult = mysqli_query($link, $vSql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e94f1b6b83.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light text-dark">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-dark">Catálogo de Productos</h2>
            <a href="verCarrito.php" class="btn btn-success">
                <i class="fa-solid fa-cart-shopping me-1"></i> Ver Carrito
            </a>
        </div>

        <table class="table table-dark table-hover shadow rounded">
            <thead class="table-primary text-dark">
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($vResult)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['producto']) ?></td>
                        <td>$<?= number_format($row['precio'], 2) ?></td>
                        <td>
                            <?php
                            $idHash = md5($row['id']);
                            if (!$carro || !isset($carro[$idHash]) || $carro[$idHash]['identificador'] != $idHash) {
                                ?>
                                <a class="btn btn-outline-primary btn-sm" href="agregarCarrito.php?id=<?= $row['id'] ?>">
                                    <i class="fa-solid fa-plus"></i> Agregar
                                </a>
                            <?php } else { ?>
                                <a class="btn btn-outline-danger btn-sm" href="borrarCarrito.php?id=<?= $row['id'] ?>">
                                    <i class="fa-solid fa-xmark"></i> Quitar
                                </a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php ob_end_flush(); ?>