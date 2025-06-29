<?php
include("conexion.inc");

$vID = $_POST['id'];
$vCity = $_POST['city'];
$vCountry = $_POST['country'];
$vHab = $_POST['hab'];
$vSup = $_POST['sup'];
$vTieneMetro = $_POST['tieneMetro'];

$vSql = "UPDATE ciudades set ciudad='$vCity', pais='$vCountry', habitantes='$vHab', superficie='$vSup', tieneMetro='$vTieneMetro' where id='$vID'";
mysqli_query($link, $vSql) or die(mysqli_error($link));
echo ("<p>La ciudad fue modificada</p>");

mysqli_close($link);

?>
<a class="btn btn-primary m-3" href="menu.html">Volver al menú</a>