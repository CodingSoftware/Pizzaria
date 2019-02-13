<html>
<head>

<div id="script"><script src='js/ajaxdelete.js'></script></div>
</head>

<?php
require_once 'conector.php';

$acao=$_GET['acao'];



if($acao=="mostrartam"){

  $select = "SELECT id, tamanho, qtd_fatias ,qtd_sabores , valor FROM tamanhos";
  $result = mysqli_query($conectar, $select);
  $result1 = mysqli_query($conectar, $select);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo "<option>" . $row["tamanho"]."</option>"."<br>";
    }

} else {
    echo ". results";
}
}





if($acao=="deletartam"){
echo "<table class='table table-striped'>
      <tr><th>Tamanho</th>
      <th>Qnt. Sabores</th>
      <th>Qnt. Fatias</th>
      <th>Valor</th>
      <th>Remoção</th></tr>";
      $select = "SELECT id, tamanho, qtd_fatias ,qtd_sabores , valor FROM tamanhos";
      $result = mysqli_query($conectar, $select);
      $result1 = mysqli_query($conectar, $select);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        $valor='R$  ' . number_format($row1["valor"], 2, ',', '.');


        echo "<tr><td>"
        .$row1["tamanho"]."</td> <td>"
        .$row1["qtd_fatias"]."</td> <td>"
        .$row1["qtd_sabores"]."</td> <td>"
        .$valor."</td> <td>
        <button id=".$row1["id"]." class='removetam btn btn-sm btn-danger'>
        <i class='far fa-trash-alt'></i></button></td>";
    }

} else {

}
echo "</table>";
echo "<div id='recebetam'></div>";
}





if($acao=="mostrarbord"){

  $select = "SELECT id, borda, valor FROM bordas";
  $result = mysqli_query($conectar, $select);
  $result1 = mysqli_query($conectar, $select);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo "<option>" . $row["borda"]."</option>"."<br>";
    }

} else {
    echo ". results";
}
}





if($acao=="deletarbord"){
echo "<table class='table table-striped'>
      <tr><th>Borda</th>
      <th>Valor</th>
      <th>Remoção</th></tr>";
      $select = "SELECT id, borda, valor FROM bordas";
      $result = mysqli_query($conectar, $select);
      $result1 = mysqli_query($conectar, $select);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        $valor='R$  ' . number_format($row1["valor"], 2, ',', '.');


        echo "<tr><td>"
        .$row1["borda"]."</td> <td>"
        .$valor."</td> <td>
        <button id=".$row1["id"]." class='removebord btn btn-sm btn-danger'>
        <i class='far fa-trash-alt'></i></button></td>";
    }

} else {

}
echo "</table>";
echo "<div id='recebebord'></div>";
}







if($acao=="mostrarsabor"){

  $select = "SELECT id, sabor, valor FROM sabores";
  $result = mysqli_query($conectar, $select);
  $result1 = mysqli_query($conectar, $select);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo "<option>" . $row["sabor"]."</option>"."<br>";
    }

} else {
    echo ". results";
}
}





if($acao=="deletarsabor"){
echo "<table class='table table-striped'>
      <tr><th>Sabor</th>
      <th>Valor</th>
      <th>Remoção</th></tr>";
      $select = "SELECT id, sabor, valor FROM sabores";
      $result = mysqli_query($conectar, $select);
      $result1 = mysqli_query($conectar, $select);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        $valor='R$  ' . number_format($row1["valor"], 2, ',', '.');


        echo "<tr><td>"
        .$row1["sabor"]."</td> <td>"
        .$valor."</td> <td>
        <button id=".$row1["id"]." class='removesabor btn btn-sm btn-danger'>
        <i class='far fa-trash-alt'></i></button></td>";
    }

} else {

}
echo "</table>";
echo "<div id='recebesabor'></div>";
}






if($acao=="mostrarbebida"){

  $select = "SELECT id, bebida, tipo, valor FROM bebidas";
  $result = mysqli_query($conectar, $select);
  $result1 = mysqli_query($conectar, $select);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo "<option>" . $row["bebida"]."</option>"."<br>";
    }

} else {
    echo ". results";
}
}





if($acao=="deletarbebida"){
echo "<table class='table table-striped'>
      <tr><th>Bebida</th>
      <th>Valor</th>
      <th>Remoção</th></tr>";
      $select = "SELECT id, bebida, tipo, valor FROM bebidas";
      $result = mysqli_query($conectar, $select);
      $result1 = mysqli_query($conectar, $select);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        $valor='R$  ' . number_format($row1["valor"], 2, ',', '.');


        echo "<tr><td>"
        .$row1["bebida"]."</td> <td>"
        .$valor."</td> <td>
        <button id=".$row1["id"]." class='removebebida btn btn-sm btn-danger'>
        <i class='far fa-trash-alt'></i></button></td>";
    }

} else {

}
echo "</table>";
echo "<div id='recebebebida'></div>";
}




if($acao=="mostrarentrega"){

  $select = "SELECT id, entrega, valor FROM entregas";
  $result = mysqli_query($conectar, $select);
  $result1 = mysqli_query($conectar, $select);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo "<option>" . $row["entrega"]."</option>"."<br>";
    }

} else {
    echo ". results";
}
}





if($acao=="deletarentrega"){
echo "<table class='table table-striped'>
      <tr><th>Entrega</th>
      <th>Valor</th>
      <th>Remoção</th></tr>";
      $select = "SELECT id, entrega, valor FROM entregas";
      $result = mysqli_query($conectar, $select);
      $result1 = mysqli_query($conectar, $select);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
        $valor='R$  ' . number_format($row1["valor"], 2, ',', '.');


        echo "<tr><td>"
        .$row1["entrega"]."</td> <td>"
        .$valor."</td> <td>
        <button id=".$row1["id"]." class='removeentrega btn btn-sm btn-danger'>
        <i class='far fa-trash-alt'></i></button></td>";
    }

} else {

}
echo "</table>";
echo "<div id='recebeentrega'></div>";
}


mysqli_close($conectar);
?>
</html>
