<?php
$usuario = $_POST ["user"]; //creo la variable usuario y le guardo el valor traido del POST
$contrasenia = $_POST ["pass"];

//Valores a validar
$ckuser = "admin";
$ckpass = "1234";
if ($usuario==$ckuser && $contrasenia==$ckpass) {
    echo"Login exitosa!";
}else {
    echo "Usuario o contraseña incorrecta";
}