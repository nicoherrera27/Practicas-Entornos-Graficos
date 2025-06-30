<?php
session_start();

setcookie("titular_preferido", "", time() - 3600);

header("Location: ej4.php");
?>