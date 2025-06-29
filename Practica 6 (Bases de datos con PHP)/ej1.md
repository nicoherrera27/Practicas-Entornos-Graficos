# Ejercicio 1: Completar

## Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función 
`mysqli_connect`

## Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
 - `$hostname`: nombre del servidor
 - `$username`: nombre de usuario de la base de datos
 - `$password`: la contraseña del usuario de la base de datos

## Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función
`mysqli_select_db`

## Esta función debe pasar como parámetro 
 - nombre de la conexion
 - nombre de la base de datos

## La función mysqli_query () se utiliza para 
ejecutar una consulta a la base de datos seleccionado, por ejemplo un `select * from nombreBBDD`

## y requiere como parámetros
 - nombre de la conexion
 - consulta

## La cláusula or die() se utiliza para
capturar el error y finalizar la ejecucion de una operacion que puede llegar a fallar (conexion a la base de datos, consulta, etc)

## y la función mysqli_error () se puede usar para
devolver un mensaje de error para la ultima llamada a una funcion de MySQL

## Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo `$vResult`, y a continuación se puede ejecutar el siguiente código (explicarlo):

<?php
while ($fila = mysqli_fetch_array($vResultado))
  {
    ?>
    <tr>
     <td><?php echo ($fila[0]); ?></td>
     <td><?php echo ($fila[1]); ?></td>
     <td><?php echo ($fila[2']); ?></td>
    </tr>
    <tr>
     <td colspan="5">
    <?php
  }
  mysqli_free_result($vResultado);
  mysqli_close($link);
?>

El codigo recorre los resultados que contiene la variable `$vResultado` mediante un while y los agrega a un array llamado `$fila`, luego muestra cada elemento de ese array en forma de tabla en HTML, para finalizar libera la variable `$vResultado` y cierra la conexion a la base de datos

