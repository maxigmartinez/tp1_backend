<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda</title>
  </head>
  <body>
<h1>tienda de ropa</h1>
<button type="submit" ><a href="index.html">inicio</a></button>
<button type="submit" ><a href="listar.php">listar ropa</a></button>
<button type="submit" ><a href="agregar.html">agregar ropa</a></button>
<h2>lista de ropa</h2>
<p>la siguiente lista muestra los datos de la ropa actualmente en stock</p>
<table border="1">
  <tr>
    <th>ID</th>
    <th>PRENDA</th>
    <th>MARCA</th>
    <th>TALLE</th>
    <th>PRECIO</th>
  </tr>
  <?php
// 1) conexion
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");

// 2)preparar la orden SQL
// sintaxis SQL SELECT
// SELECT * FROM tienda
// => selecciono todos los campos de la siguiente tabla
// SELECT ropa FROM tienda
// =>selecciono los siguientes campos de la siguiente tabla
$consulta= "SELECT*FROM ropa WHERE prenda = 'buzo' ";
// 3)ejecutar la orden y obtener los registros.
$datos= mysqli_query ($conexion, $consulta);


// 4)mostrar los datos del registro.
while ($reg =mysqli_fetch_array($datos)) {?>
  <tr>
    <td><?php echo $reg['id']; ?></td>
    <td><?php echo $reg['prenda']; ?></td>
    <td><?php echo $reg['marca']; ?></td>
    <td><?php echo $reg['talle']; ?></td>
    <td><?php echo $reg['precio']; ?></td>
  </tr>
<?php } ?>
</table>
  </body>
</html>
