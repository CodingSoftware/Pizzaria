<?php
require_once 'conector.php';
$modal=$_POST['modal'];



if($modal == tamanho){

  $tamanho =  $_POST['tamanho'];
  $qntsabor = $_POST['qntsabor'];
  $qntfatia = $_POST['qntfatia'];
  $valort =   $_POST['valort'];

$insert = "INSERT INTO tamanho
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

$insert = "INSERT INTO borda
VALUES ('Default', '$borda','$valorb')";

if (mysqli_query($conectar, $insert)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conectar);
}
}
mysqli_close($conectar);
?>
