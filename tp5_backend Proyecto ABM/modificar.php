<?php
// conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");
// 2)almacenamos los datos del envio GET
// generar variables para el id a utilizar
$id = $_GET['id'];
// 3)preparar la orden SQL
// a)genera la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";
// 4) ejecuta la orden y almacena en una variable el resultado
// a) ejecutar la consulta
$respuesta = mysqli_query($conexion, $consulta);

// 5)tranformamos el registro en un array
$datos = mysqli_fetch_array($respuesta);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>tienda</title>
   </head>
   <body>
  <?php
$prenda=$datos['prenda'];
$marca=$datos['marca'];
$talle=$datos['talle'];
$precio=$datos['precio'];
$imagen=$datos['imagen'];?>

 <h2>modificar datos</h2>
 <p>ingrese los datos</p>

 <form action="" method="POST" enctype="multipart/form-data">
   <label>prenda</label>
   <input type="text" name="prenda" placeholder="prenda" value="<?php echo "$prenda"?>">
   <label>marca</label>
   <input type="text" name="marca" placeholder="marca" value="<?php echo "$marca"?>">
   <label>talle</label>
   <input type="text" name="talle" placeholder="talle" value="<?php echo "$talle"?>">
   <label>precio</label>
   <input type="text" name="precio" placeholder="precio" value="<?php echo "$precio"?>">
   <label>imagen</label>
   <input type="file" name="imagen" placeholder="imagen">
   <input type="submit" name="guardar_cambios" value="guardar cambios">
   <button type="submit" name="cancelar" formaction="index.html">cancelar</button>
 </form>
 <?php
if(array_key_exists('guardar_cambios',$_POST)){

  $prenda=$_POST['prenda'];
  $marca=$_POST['marca'];
  $talle=$_POST['talle'];
  $precio=$_POST['precio'];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  $consulta = "UPDATE ropa SET prenda='$prenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id=$id";

  mysqli_query($conexion, $consulta);

  header('location: index.html');}
  ?>
   </body>
 </html>
