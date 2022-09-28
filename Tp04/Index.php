<?php
//Primera consigna
echo "<h3>1. Mostrar los números del 1 al 100.</h3>";
$i=0;
while ($i <= 100) {
    echo $i. "<br>";
    $i++;
}
echo "<hr>";

//Segunda consigna
echo "<h3>2. Mostrar los números del 100 al 1.</h3>";
$i=100;
while ($i >= 1) {
    echo $i. "<br>";
    $i--;
}
echo "<hr>";

//Tercera consigna
echo "<h3>3. Mostrar los números pares del 1 al 100.</h3>";
$i=2;
while ($i <= 100) {
    echo $i. "<br>";
    $i=$i+2;
}
echo "<hr>";

//Cuarta consigna
echo "<h3>4. Mostrar los números impares del 1 al 100.
</h3>";
$i=1;
while ($i <= 100) {
    echo $i. "<br>";
    $i=$i+2;
}
echo "<hr>";

//Quinta consigna
echo "<h3>5. Mostrar la suma de los números de 1 a 20
</h3>";
$suma = 0;
for ($i=1; $i <=20 ; $i++) { 
    $suma += $i;
    echo $suma. "<br>";
}
echo "<hr>";

//Sexta consigna
echo "<h3>6. Mostrar la suma de números pares de 1 a 20.
</h3>";
$suma = 0;
for ($i=2; $i <=20 ; $i+=2) { 
    $suma += $i;
     echo $suma. "<br>";
    
}
echo "<hr>";
?>