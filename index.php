<?php
$banco = "d1vue62a45nmd5";
$usuario = "hytmsojwrxcwvd";
$senha = "6fbd732c07b43fc938b9cf0f246650b2d6c5ec5d8457b1c6e06d160e08c619c6";
$hostname = "ec2-54-243-228-140.compute-1.amazonaws.com:5432";
$conn = mysql_connect($hostname,$usuario,$senha);
mysql_select_db($banco) or die( "Não foi possível conectar ao banco MySQL");
if (!$conn) {echo "Não foi possível conectar ao banco MySQL.";
exit;}
else {echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.";}
mysql_close(); 
?>
