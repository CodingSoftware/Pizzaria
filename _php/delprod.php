<?php
$id = $_GET['id'];
require_once 'conector.php';



$delete = "DELETE FROM tamanho WHERE id=$id";

if (mysqli_query($conectar, $delete)) {
    echo "Aguarde...";
} else {
    echo "Error deleting record: " . mysqli_error($conectar);
}


mysqli_close($conectar);
?>
