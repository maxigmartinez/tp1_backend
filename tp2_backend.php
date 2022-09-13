<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>ejercicio 1</h2>
  <p>Crear una variable n y validar que sea un número positivo.</p>
  <?php
    $n = 5;
    if ($n > 0){
      echo "$n es positivo";
    }?>

<h2>ejercicio 2</h2>
  <p>Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</p>
  <?php
$n =6;

if ($n > 1){
  echo "$n es mayor a 1<br>";}
if ($n < 10){
  echo "$n es menor a 10";}
?>

<h2>ejercicio 3</h2>
  <p>Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</p>

<?php
$n = 15;

if ($n > 10){
  echo "$n es mayor a 10";}
elseif ($n < 2){
  echo "$n es menor a 2";
}
 ?>
<h2>ejercicio 4</h2>
<p> Crear dos variables, una con nombre numero 1 y otra con el nombre de numero 2. Si numero 1 es
mayor a numero 2, mostrar por pantalla, la suma y la resta. Si numero 2 es mayor a numero 1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero 1 y
numero 2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</p>

<?php
$numero1 = 8;
$numero2 = 4;

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$producto = $numero2 * $numero1;
$cociente = $numero2 / $numero1;
$resto = $numero2 % $numero1;

if ($numero1 > $numero2){
  echo "$suma<br>$resta";}
elseif ($numero1 == $numero2){
  echo "los numeros ingresados son iguales";}
else {
  echo "$producto<br>$cociente<br>$resto";}
 ?>
  </body>
</html>
