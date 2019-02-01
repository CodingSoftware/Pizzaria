<?php

require_once('_php/conector.php');



$selecionar = "SELECT * FROM preco";
$result = $conectar->query($selecionar);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  " - Name: " . $row["cliente"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
