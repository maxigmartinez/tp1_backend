
<h2>ejercicio 1</h2>
<p>Mostrar los números del 1 al 100.</p>
<?php
$i = 1;
while ($i <= 100) {
  print $i . "-";
  if ($i % 20 == 0){
  echo "<br>";}
  $i++;
}
 ?>

<br>
<h2>ejercicio 2</h2>
<p>Mostrar los números del 100 al 1.</p>
<?php
$i = 100;
while ($i >= 1) {
  print $i . "-";
  if ($i % 20 == 0){
  echo "<br>";}
  $i--;
}
 ?>

<br>
<h2>ejercicio 3</h2>
<p>Mostrar los números pares del 1 al 100.</p>
<?php
$i =1;
while ($i <= 100) {
  if($i%2==0){
    print  $i . "-";
  }
  if ($i % 25==0){
    print "<br>";
  }
  $i++;
}
 ?>

<br>
<h2>ejercicio 4</h2>
<p> Mostrar los números impares del 1 al 100.</p>
<?php
$i =1;
while ($i <= 100) {
  if($i%2!=0){
    print  $i . "-";
  }
  if ($i % 25==0){
    print "<br>";
  }
  $i++;
}
 ?>

<br>
<h2>ejercicio 5</h2>
<p> Mostrar la suma de los números de 1 a 20.</p>
<?php
$i = 1;
$suma =0;
while ($i <= 20) {
  $suma+=$i;
  $i++;
}
print $suma;
 ?>

<br>
<h2>ejercicio 6</h2>
<p>Mostrar la suma de números pares de 1 a 20.</p>
<?php
$i = 1;
$suma =0;
while ($i <= 20) {
  if($i%2==0){
  $suma+=$i;
}
  $i++;
}
print $suma;
 ?>
