<?php
session_start();
$carro = $_SESSION['carro'];

$products = '';
$products2 = '';

foreach ($carro as $k => $v) {
  $unidad = $v['cantidad'] > 1 ? " unidades de " : " unidad de ";
  $products .= $v['cantidad'] . $unidad . $v['producto'] . " + ";
  $products2 .= $v['cantidad'] . $unidad . $v['producto'] . ", ";
}

$products = substr($products, 0, -2);
$products2 = substr($products2, 0, -2);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Finalizar Compra</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light py-5">
  <div class="container">
    <div class="card shadow p-4">
      <h3 class="card-title text-center mb-4">Finalizar la Compra</h3>

      <div class="text-center mb-3">
        <a href="#"
          onclick="window.open('https://www.paypal.com/cgi-bin/webscr?cmd=xpt/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no,location=no,status=no,scrollbars=yes,resizable=no,width=400,height=350');">
          <img src="https://www.paypal.com/en_US/i/bnr/horizontal_solution_PP.gif" alt="PayPal" border="0">
        </a>
      </div>

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="shipping" value="0">
        <input type="hidden" name="cbt" value="Presione aquí para volver a ...">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="rm" value="2">
        <input type="hidden" name="bn" value="Agus">
        <input type="hidden" name="business" value="agussv360@gmail.com">
        <input type="hidden" name="item_name" value="<?php echo $products2; ?>">
        <input type="hidden" name="item_number" value="Nombre">
        <input type="hidden" name="amount" value="<?php echo number_format($_GET['costo'], 2); ?>">
        <input type="hidden" name="custom" value="<?php echo $_GET['costo']; ?>">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="no_shipping" value="0">
        <input type="hidden" name="no_note" value="0">
        <input type="hidden" name="return" value="http://www.nuestrodominio.com/ipn_success.php">
        <input type="hidden" name="cancel_return" value="http://www.nuestrodominio.com/ipn_error.php">


        <div class="mb-4">
          <div class="alert alert-warning">
            <h5>Detalle de los Productos Seleccionados</h5>
            <p><strong>Productos:</strong> <?php echo $products; ?></p>
            <p><strong>Precio Total:</strong> $<?php echo number_format($_GET['costo'], 2); ?></p>
          </div>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Pagar con PayPal</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>