<html>
<head>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>

<?php
require_once 'conector.php';

$acao=$_GET['acao'];


$select = "SELECT tamanho, qtd_fatias ,qtd_sabores , valor FROM tamanho";
$result = mysqli_query($conectar, $select);
$result1 = mysqli_query($conectar, $select);

if($acao=="mostrar"){


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option id='optam'>" . $row["tamanho"]."</option>"."<br>";
    }

} else {
    echo ". results";
}
}

if($acao=="deletar"){
echo "<table><tr><th>Tamanho</th> <th>Qnt. Fatias</th> <th>Qnt. Sabores</th> <th>Valor</th> <th>Remoção</th></tr>";
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        echo "<tr><td>".$row1["tamanho"]."</td> <td>".$row1["qtd_fatias"]."</td> <td>".$row1["qtd_sabores"]."</td> <td>".$row1["valor"]."</td> <td><button class='btn btn-sm btn-danger'>Deletar</button></td>";
    }

} else {
    echo ". results";
}
echo "</table>";

}





mysqli_close($conectar);
?>
</html>
