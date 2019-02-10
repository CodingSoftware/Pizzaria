<?php


$servidor = "localhost";
$usuario = "root";
$senha = "root";
$banco = "test";
$conectar = mysqli_connect("$servidor","$usuario","$senha","$banco");

if (!$conectar) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else{
  echo "ok";
}



?>
