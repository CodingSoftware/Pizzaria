<?php

require_once 'conector.php';


$modal=$_GET['modal'];
$escolha=$_GET['escolha'];


if($modal=="tamanho"){

  $select = "SELECT id, tamanho, qtd_fatias ,qtd_sabores , valor FROM tamanhos";
  $result = mysqli_query($conectar, $select);
  $result1 = mysqli_query($conectar, $select);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if($escolha == $row['tamanho']){
        echo JSON_encode($row);

            }
         }

} else {
    echo ". results";
}
}


mysqli_close($conectar);
?>
