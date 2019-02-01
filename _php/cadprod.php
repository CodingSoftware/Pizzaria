<?php





$tamanho =  $_POST['tamanho'];
$qntfatia = $_POST['qntfatia'];
$valort =   $_POST['valort'];
$qntsabor = $_POST['qntsabor'];

echo json_encode($tamanho.$qntfatia.$valort.$qntsabor);
