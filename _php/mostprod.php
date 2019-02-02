<?php
require_once 'conector.php';




$select = "SELECT tamanho FROM tamanho";
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




if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        echo "<div id='divt'>".$row1["tamanho"]."</div>"."<br>";
    }

} else {
    echo ". results";
}








mysqli_close($conectar);
?>
