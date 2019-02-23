<?php
require_once 'conector.php';



  $select = "SELECT id, tamanho, qtd_fatias ,qtd_sabores , valor FROM tamanhos";
  $result = mysqli_query($conectar, $select);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $tamanho= $row["tamanho"];
      $valor='R$  ' . number_format($row["valor"], 2, ',', '.');
        echo"

        <p><input type='radio' name='tamanho' value='$tamanho' id='$tamanho' checked>
        <label for='$tamanho'>
        <div class='list-group-item card bg-light'>
        <div class='card-body text-center'>




        <img class='rounded-circle' src='image/tamanho/f.png'
        width='80px' height='80px'>
        <p class='card-text'>$tamanho</p>
        <p><strong>$valor</strong></p>





        </div>
        </div>
        </label></p>";


         }

} else {
    echo ". results";
}

echo "<script src='js/script.js'></script>";
