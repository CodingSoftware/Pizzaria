<html>
<head>


</head>

<?php
require_once 'conector.php';

$acao=$_GET['acao'];



if($acao=="mostrartam"){

  $select = "SELECT id, tamanho, qtd_fatias ,qtd_sabores , valor FROM tamanhos";
  $result = mysqli_query($conectar, $select);
  $result1 = mysqli_query($conectar, $select);

$x=0;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


        $r["p$x"] = json_encode($row);



        $x=$x+1;
         }

} else {
    echo ". results";
}

      print_r($r);

}



mysqli_close($conectar);
?>
</html>
