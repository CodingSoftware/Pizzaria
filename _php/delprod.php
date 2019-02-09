<?php
$id = $_GET['id'];
$acao = $_GET['acao'];
require_once 'conector.php';

if($acao==deletartam){

$delete = "DELETE FROM tamanhos WHERE id=$id";

if (mysqli_query($conectar, $delete)) {
    echo "Aguarde...";
} else {
    echo "Error deleting record: " . mysqli_error($conectar);
}

}

if($acao==deletarbord){

$delete = "DELETE FROM bordas WHERE id=$id";

if (mysqli_query($conectar, $delete)) {
    echo "Aguarde...";
} else {
    echo "Error deleting record: " . mysqli_error($conectar);
}

}



if($acao==deletarsabor){

$delete = "DELETE FROM sabores WHERE id=$id";

if (mysqli_query($conectar, $delete)) {
    echo "Aguarde...";
} else {
    echo "Error deleting record: " . mysqli_error($conectar);
}

}



if($acao==deletarbebida){

$delete = "DELETE FROM bebidas WHERE id=$id";

if (mysqli_query($conectar, $delete)) {
    echo "Aguarde...";
} else {
    echo "Error deleting record: " . mysqli_error($conectar);
}

}



if($acao==deletarentrega){

$delete = "DELETE FROM entregas WHERE id=$id";

if (mysqli_query($conectar, $delete)) {
    echo "Aguarde...";
} else {
    echo "Error deleting record: " . mysqli_error($conectar);
}

}

mysqli_close($conectar);
?>
