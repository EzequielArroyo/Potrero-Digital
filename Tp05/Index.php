<?php
//Primera consigna
echo"<p style='color: darkred'>1) Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.<p>";
$primerosPares =  range(0, 18, 2);
foreach ($primerosPares as $value) {
    print "<p>$value<p>";
    
}
echo "<hr>";

//Segunda consigna
echo "<p style='color: darkred'>2) Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().<p>";
$persona = ["Pedro", "Ana", "34", "1"];
print_r($persona);
echo "<hr>";

//Tercera consigna
echo "<p style='color: darkred'>3) Crear un array asociativo e introducir los siguientes valores:<p>";
$infoPersonal = ["Nombre" => "Pedro", "Apellido" => "Torres
", "Direccion" => " Av. Mayor 3703", "Teléfono" =>" 1122334455
"];
foreach ($infoPersonal as $key => $value) {
    print "$key: $value<br>";
}
echo "<hr>";

//Cuarta consigna
echo "<p style='color: darkred'>4) Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.<p>";
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles","
Chicago"];
foreach ($ciudades as $key => $value) {
    print "La ciudad con el índice $key tiene el nombre $value. <br>";
}
echo "<hr>";

//Quinta consigna
echo "<p style='color: darkred'>5) Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.<p>";
$ciudades = ["MD" => "Madrid", "BCL" => "Barcelona", "LD" => "Londres", "NY" => "New York", "LA" => "Los Ángeles", "CCG" => "
Chicago"];
foreach ($ciudades as $key => $value) {
    print "El índice de $value es $key. <br>";
}
echo "<hr>";
?>