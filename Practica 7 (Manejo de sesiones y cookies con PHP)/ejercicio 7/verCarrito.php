<?php
session_start();
$carro = $_SESSION['carro'] ?? [];
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ver Carrito</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/e94f1b6b83.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light text-dark p-4">

  <div class="container">
    <h1 class="text-center mb-4">🛒 Carrito de Compras</h1>

    <?php if ($carro): ?>
      <div class="table-responsive">
        <table class="table table-dark table-hover align-middle">
          <thead class="table-primary">
            <tr>
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Modificar</th>
              <th>Borrar</th>
              <th>Actualizar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $total = 0;
            $totalUnidades = 0;

            foreach ($carro as $v):
              $subtotal = $v['cantidad'] * $v['precio'];
              $total += $subtotal;
              $totalUnidades += $v['cantidad'];
              ?>
              <tr>
                <td><?= $v['producto'] ?></td>
                <td>$<?= number_format($v['precio'], 2) ?></td>
                <td><?= $v['cantidad'] ?></td>
                <td>
                  <form action="agregarCarrito.php" method="post" class="d-flex gap-2">
                    <input type="hidden" name="id" value="<?= $v['id'] ?>">
                    <input type="number" name="cantidad" value="<?= $v['cantidad'] ?>" min="1" class="form-control w-50" />
                    <button type="submit" class="btn btn-sm btn-info">Actualizar</button>
                  </form>
                </td>
                <td>
                  <a href="borrarCarrito.php?id=<?= $v['id'] ?>" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i> Borrar
                  </a>
                </td>
                <td>
                  <a href="verCarrito.php?id=<?= $v['id'] ?>" class="btn btn-secondary btn-sm">
                    <i class="fa-solid fa-arrows-rotate"></i> Refrescar
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="text-center mt-4">
        <p class="h5">Total de artículos: <?= $totalUnidades ?></p>
        <p class="h4">Total a pagar: <strong>$<?= number_format($total, 2) ?></strong></p>
        <div class="d-grid gap-2 col-6 mx-auto mt-4">
          <a href="catalogo.php?costo=<?= $total ?>" class="btn btn-success">
            <i class="fa-solid fa-arrow-left"></i> Continuar comprando
          </a>
          <a href="registrarPago.php?costo=<?= $total ?>" class="btn btn-primary">
            <i class="fa-brands fa-paypal"></i> Finalizar compra
          </a>
        </div>
      </div>

    <?php else: ?>
      <div class="alert alert-warning text-center">
        <p>No hay productos en el carrito.</p>
        <a href="catalogo.php" class="btn btn-danger">Volver al catálogo</a>
      </div>
    <?php endif; ?>
  </div>

</body>

</html>