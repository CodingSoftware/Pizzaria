<?php

require_once('_php/conector.php');

$nome = $_POST['nome'];
$sabor1 = $_POST['sabor1']
$sabor2 = $_POST['sabor2']
$verificanome = "SELECT * FROM usuarios WHERE nome = '$nome'";
$verificasabor = "SELECT * FROM usuarios WHERE nome = '$sabor1'";
$verificadonome = mysql_query($verificanome) or die("r");
$verificadosabor = mysql_query($verificasabor) or die("r");

if ($verificadonome == 0) {

if($verificadosabor == 0){
  $insert1 = "INSERT INTO preco(cliente,sabor1) VALUES('$nome','$sabor1')";
  mysqli_query($conectar,$insert1) or die("Erro ao selecionar o sabor");
  mysqli_close($conectar);
  echo "sabor selecionado!";

}else{

  $update = "UPDATE preco SET sabor2='$sabor2' WHERE id=2";
  mysqli_query($conectar,$update) or die("Erro ao selecionar o sabor");
  mysqli_close($conectar);
  echo "sabor selecionado!!";

}

}
else
{
echo "<meta HTTP-EQUIV='Refresh' CONTENT='1;URL=erroregistro.php'>"; [color="#808080"]// redireciona pra página de erro
}



?>
