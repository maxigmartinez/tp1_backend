<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h2>ejercicio 1</h2>
<p>Imprima por pantalla: “Hola mundo”.</p>
<br>
<?php
echo "hola mundo";
?>

<h2>ejercicio 2</h2>
<p> Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</p>
<br>
<?php
$titulo = "hola mundo";
echo $titulo;
?>

<h2>ejercicio 3</h2>
<p>Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.</p>

<p>variable 1= 20</p>
<p>variable 2= 2</p>

<?php
$precio_1 = 20;
$precio_2 = 2;

$suma = $precio_1 + $precio_2;
$resta = $precio_1 - $precio_2;
$producto = $precio_1 * $precio_2;
$cociente = $precio_1 / $precio_2;
$resto = $precio_1 % $precio_2;
?>
<p>suma</p>
<?php echo $suma; ?>
<br>
<p>resta</p>
<?php echo $resta;?>
<br>
<p>producto</p>
<?php echo $producto; ?>
<br>
<p>cociente</p>
<?php echo $cociente; ?>
<br>
<p>resto</p>
<?php echo $resto; ?>

 <h2>ejercicio 4</h2>
 <p> Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.
</p>
<br>
<p>grados celcius = 20°c</p>
<?php
$celcius = 20;
$farenheit = ($celcius * 1.8) + 32;
?>
<p>grados farenheit igual a:</p>
<?php echo $farenheit; ?>

<h2>ejercicio 5A</h2>
<p>Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</p>
<br>

<?php
$lado_1 = 18;
$lado_2 = 12;

$perimetro = $lado_1 + $lado_2 + $lado_1 + $lado_2;
$area = $lado_1 * $lado_2;
?>
<p>perimetro del rectangulo es igual a:</p>
<?php echo $perimetro; ?>
<p>area del rectangulo es igual a:</p>
<?php echo $area; ?>

<h2>ejercicio 5B</h2>
<p>Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</p>
<br>
<?php
$radio = 30;
$define = 3.14;
$perimetro = 2 * $define * $radio;
$area = ($define * $radio) *2;
?>
<p>perimetro de circulo igual a:</p>
<?php echo $perimetro; ?>
<p>el area del circulo es igual a:</p>
<?php echo $area; ?>
  </body>
</html>
