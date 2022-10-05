<h2>ejercicio 1</h2>
<p>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</p>
<?php
$numeros = ["2", "4", "6", "8", "10", "12", "14", "16", "18", "20"];
foreach ($numeros as $valor) {
print "<pre>";
print_r($valor);
print "</pre>";
}
 ?>

<h2>ejercicio 2</h2>
<p> Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().
</p>

<?php
$valores = ["pedro", "ana", "40", "1"];
print "<pre>";
print_r($valores);
print "</pre>";
 ?>

<h2>ejercicio 3</h2>
<p>Crear un array asociativo e introducir los siguientes valores:<br>
Nombre: Pedro <br>
Apellido: Torres <br>
Dirección: Av. Mayor 3703 <br>
Teléfono: 1122334455</p>

<?php
$valores = ['nombre' => "pedro", 'apellido' => "torres", 'direccion' => "av. mayor 3703", 'telefono' => "1122334455"];
 ?>

 <h2>ejercicio 4</h2>
 <p> Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</p>

<?php
$ciudades = ["madrid", "barcelona", "londres", "new york", "los angeles", "chicago"];
foreach ($ciudades as $indice => $valor) {
print "<pre>";
print_r("<p>la ciudad con el indice $indice tiene el nombre </p> $valor");
print "</pre>";
}
 ?>

<h2>ejercicio 5</h2>
<p>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD</p>

<?php
$ciudades = ['MD' => "madrid", 'BCL' => "barcelona", 'LD' => "londres", 'NY' => "new york", 'LA' => "los angeles", 'CCG' => "chicago"];
foreach ($ciudades as $indice => $valor) {
print "<pre>";
print_r("<p> el indice de $valor es $indice");
print "</pre>";
}
 ?>
