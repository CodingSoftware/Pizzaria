<?php
require_once 'conector.php';

if($_POST['acao'] != ""){
  $acao = $_POST['acao'];
}else {

$acao = $_GET["acao"];
}



$selecionado = $_POST['selecionado'];


if ($acao == mostrartam) {

  $select = "SELECT id, tamanho, qtd_fatias ,qtd_sabores , valor FROM tamanhos";
  $result = mysqli_query($conectar, $select);

  // code...


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $tamanho= $row["tamanho"];
      $valor='R$  ' . number_format($row["valor"], 2, ',', '.');
        echo"
  <div class='list-group-item card bg-light'>
        <input type='radio' name='selecionado' value='$tamanho' id='$tamanho' checked>
        <p class='selecionartam'></p>
        <label for='$tamanho'>

        <div class='card-body text-center'>




        <img class='rounded-circle' src='image/tamanho/f.png'
        width='80px' height='80px'>
        <p class='card-text'>$tamanho</p>
        <p><strong>$valor</strong></p>






        </div>

        </div>

        </label>";


         }

} else {
    echo ". results";
}
}

if ($acao == selecionartam) {

  $select = "SELECT id, tamanho, qtd_fatias ,qtd_sabores , valor FROM tamanhos where tamanho='$selecionado' ";
  $result = mysqli_query($conectar, $select);

  // code...


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $tamanho= $row["tamanho"];
      $valor='R$  ' . number_format($row["valor"], 2, ',', '.');
        echo"
        <label for='$tamanho'>
        <div class='card-body text-center'>
        <input type='radio' name='tamanho' value='$tamanho' id='$tamanho' checked>



        <img class='rounded-circle' src='image/tamanho/f.png'
        width='80px' height='80px'>

        <p><strong>$valor</strong></p>


        <buttom class='btn btn-success removertam'>Remover</buttom>




        </div>

        </label>";


         }

} else {
    echo ". results";
}
}
echo "<script src='js/script.js'></script>";
