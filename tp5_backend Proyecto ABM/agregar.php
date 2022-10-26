<?php
// 1) conexion
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");

// 2)almacenamos los datos del envio POST
// a)generar variables para cada dato a almacenar en la bbdd
$prenda = $_POST['prenda'];
$marca = $_POST['marca'];
$talle = $_POST['talle'];
$precio = $_POST['precio'];
// b)si se decea almacenar una imagen en la base de datos usar lo siguientes:
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

// 3) preparar la orden SQL
// INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
// => ingrasar dentro de la siguiente tabla, los siguientes valores
// a)generar la consulta a realizar
$consulta = "INSERT INTO ropa (ID,prenda,marca,talle,precio,imagen)
  VALUES ('','$prenda','$marca','$talle','$precio','$imagen')";

  // 4)ejecutamos la orden y ingresamos datos.
  // a) ejecutar la consulta.
  mysqli_query($conexion,$consulta);
  // b) redirijir a index.
  header('location: index.html');
 ?>
