<?php require_once('_php/conector.php');



$inserir = "INSERT INTO preco(cliente,sabor1) VALUES('Marcos','2')";
mysqli_query($conectar,$inserir) or die("Erro ao tentar cadastrar registro");
mysqli_close($conectar);
echo "Cliente cadastrado com sucesso!";
?>
