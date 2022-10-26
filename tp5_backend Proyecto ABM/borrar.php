<?php
// conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");
// 2) almacenamos los daros del envio GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) preparar la orden SQL
// DELETE FROM nombre_tabla WHERE campo_tabla=dato
// => Elimina de la suiguiente tabla el registro depmde este cmpo sea igual
// DELETE FROM nombre_tabla
// => Elimina todos los registros de la siguiente tabla}
// a) generar la consulta a realizar
$consulta= "DELETE FROM `ropa` WHERE `id`=$id";

// 4) ejecutar la orden y eliminamos el registro seleccionado
// a)ejecutar la consulta
mysqli_query($conexion,$consulta);
// b) redirigir a index.html
header('location: index.html');

 ?>
