<?php
require_once 'conector.php';
$tamanho =  $_POST['tamanho'];
$qntsabor = $_POST['qntsabor'];
$qntfatia = $_POST['qntfatia'];
$valort =   $_POST['valort'];


echo json_encode($tamanho.$qntfatia.$valort.$qntsabor);



$insert = "INSERT INTO tamanho
VALUES ('Default', '$tamanho', '$qntsabor','$qntfatia','$valort')";

if (mysqli_query($conectar, $insert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conectar);
}

mysqli_close($conectar);
?>
