<?php


$servidor = "localhost";
$usuario = "filial185";
$senha = "senhafilial";
$banco = "test";
$conectar = mysqli_connect("$servidor","$usuario","$senha","$banco");

if (!$conectar) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}




?>
