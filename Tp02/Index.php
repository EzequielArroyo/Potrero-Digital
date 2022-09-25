<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--PUNTO 1-->
    <p>1.</p>
    <?php
    /*VARIABLE N */
    $n =4;
    if ($n >= 0) {
        echo "El numero ".$n ." es positivo";
    }else {
        echo "El numero ".$n ." es negativo";
    }
    ?>
    <hr>

    <!--PUNTO 2-->
    <p>2.</p>
    <?php 
    if ($n >1 & $n < 10) {
        echo "El numero ".$n ." es mayor a 1 y menor a 10.";
    }else {
        echo "El numero ".$n ." NO es mayor a 1 y menor a 10.";
    }
    ?>
    <hr>

    <!--PUNTO 3-->
    <p>3.</p>
    <?php 
    if ($n <2 || $n>10) {
        echo "El numero ".$n ." es un número mayor a 10 o menor a 2.";
    }else {
        echo "El numero ".$n ." NO un número mayor a 10 o menor a 2.";
    }
    ?>
    <hr>
    <!--PUNTO 4-->
    <p>4.</p>
    <?php
    $numero1= 4;
    $numero2= 4;
    if ($numero1 > $numero2) {
        echo "El numero1 es mayor que numero2 <br> La suma es = " .$numero1 + $numero2 ." y la resta es = ".$numero1 - $numero2;
    }elseif($numero1 < $numero2) {
        echo "El numero2 es mayor que numero1 <br> La multiplicacion es = " .$numero2 * $numero1 ." y la division es = " .$numero2 / $numero1 ." con resto = " .$numero2 % $numero1;
    }else {
        echo "Los números ingresados son iguales.";
    }   
    ?>
    <hr>
</body>
</html>