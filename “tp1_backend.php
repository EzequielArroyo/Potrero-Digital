<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Mundo</h1>
    <?php 
    echo $mensaje ="Hola Mundo <br>";
    ?>
    <?php
    $entero1 = 10;
    $entero2 = 2;
    echo "<br> Los numeros 10 y 2 tienen como resultado: <br>";
    echo "La suma es = " . $entero1 + $entero2 ."<br>";
    echo "La resta es = " . $entero1 - $entero2 ."<br>";
    echo "La multiplicación es = " . $entero1 * $entero2 ."<br>";
    echo "La division entera es = " . $entero1 / $entero2 ."<br>";
    echo "El resto es = " . $entero1 % $entero2 ."<br>";
    ?>
    <?php
    $celsius = 20;
    $fahrenheit = ($celsius* 9/5) + 32;
    echo "<br>".$celsius ."°C es igual a ". $fahrenheit ."°F. <br>"; 
    ?>
    <?php
    $lado1 = 18;
    $lado2 = 12;
    echo "<br> El rectangulo de lado 18cm y 12cm tiene: <br>";
    echo "Un perimetro igual a " .($lado1*2 + $lado2*2)."cm y su area es igual a " .($lado1* $lado2) ."cm².<br>";
    ?>
    <?php
    $radio = 30;
    define ("PI",3.141);
    echo "<br> El circulo con un radio de 30cm tiene: <br>";
    echo "Un perimetro igual a " .(2*PI*$radio)."cm y su area es igual a " .(PI* $radio*$radio) ."cm².<br>";
    ?>
</body>
</html>