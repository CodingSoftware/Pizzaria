<?php
require_once 'conector.php';




$select = "SELECT tamanho FROM tamanho";
$result = mysqli_query($conectar, $select);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<option id='optam'> Tamanho: " . $row["tamanho"]."</option>"."<br>";
    }

} else {
    echo ". results";
}

mysqli_close($conectar);
?>
