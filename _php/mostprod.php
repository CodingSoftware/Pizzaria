<html>
<head>

<script src="js/ajaxdelete.js"></script>
</head>

<?php
require_once 'conector.php';

$acao=$_GET['acao'];



if($acao=="mostrartam"){
  
  $select = "SELECT id, tamanho, qtd_fatias ,qtd_sabores , valor FROM tamanho";
  $result = mysqli_query($conectar, $select);
  $result1 = mysqli_query($conectar, $select);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo "<option id='optam'>" . $row["tamanho"]."</option>"."<br>";
    }

} else {
    echo ". results";
}
}





if($acao=="deletartam"){
echo "<table class='table table-striped'>
      <tr><th>Tamanho</th>
      <th>Qnt. Fatias</th>
      <th>Qnt. Sabores</th>
      <th>Valor</th>
      <th>Remoção</th></tr>";
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        $valor='R$  ' . number_format($row1["valor"], 2, ',', '.');


        echo "<tr><td>"
        .$row1["tamanho"]."</td> <td>"
        .$row1["qtd_fatias"]."</td> <td>"
        .$row1["qtd_sabores"]."</td> <td>"
        .$valor."</td> <td>
        <button id=".$row1["id"]." class='lixo btn btn-sm btn-danger'>
        <i class='far fa-trash-alt'></i></button></td>";
    }

} else {

}
echo "</table>";
echo "<div id='recebe'></div>";
}





mysqli_close($conectar);
?>
</html>
