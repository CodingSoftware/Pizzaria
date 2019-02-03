<?php
require_once 'conector.php';

$acao=$_GET['acao'];


$select = "SELECT tamanho FROM tamanho";
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

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        echo "<tr><td>".$row1["tamanho"]."</td><td><button class='btn btn-danger'>Deletar</button></td><tr>";
    }

} else {
    echo ". results";
}


}





mysqli_close($conectar);
?>
