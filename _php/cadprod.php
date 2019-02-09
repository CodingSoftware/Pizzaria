<?php
require_once 'conector.php';
$modal=$_POST['modal'];



if($modal == tamanho){

  $tamanho =  $_POST['tamanho'];
  $qntsabor = $_POST['qntsabor'];
  $qntfatia = $_POST['qntfatia'];
  $valort =   $_POST['valort'];

$insert = "INSERT INTO tamanhos
VALUES ('Default', '$tamanho', '$qntsabor','$qntfatia','$valort')";

if (mysqli_query($conectar, $insert)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conectar);
}
}

if($modal == borda){

  $borda =  $_POST['borda'];
  $valorb = $_POST['valorb'];

$insert = "INSERT INTO bordas
VALUES ('Default', '$borda','$valorb')";

if (mysqli_query($conectar, $insert)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conectar);
}
}

if($modal == sabor){

  $sabor =  $_POST['sabor'];
  $valors = $_POST['valors'];
$insert = "INSERT INTO sabores
VALUES ('Default', '$sabor','$valors')";

if (mysqli_query($conectar, $insert)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conectar);
}
}


if($modal == bebida){

  $bebida =  $_POST['bebida'];
  $tipo = $_POST['tipo'];
  $valorbe = $_POST['valorbe'];

$insert = "INSERT INTO bebidas
VALUES ('Default', '$bebida','$tipo','$valorbe')";

if (mysqli_query($conectar, $insert)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conectar);
}
}




if($modal == entrega){

  $entrega =  $_POST['entrega'];
  $valore = $_POST['valore'];

$insert = "INSERT INTO entregas
VALUES ('Default', '$entrega','$valore')";

if (mysqli_query($conectar, $insert)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conectar);
}
}

mysqli_close($conectar);
?>
