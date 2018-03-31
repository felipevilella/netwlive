<?php
$url="http://netwlive.com.br/recuperarsenha?cod=8fd4sf4$emailurl";
$comando="insert into solicitacao_senha(url,usuario,cont,validar,criptografia)values('$url','$email','1','1','$emailurl')";
include("functions.php");
mysql_query($comando,$conexao) or die("impossivel salvar");

?>