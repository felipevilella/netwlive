<?php
require_once("classe/dados.class.php");
$dados=new dados();

$comando="select sum(contador) from curtidaspostagem where id_publicacao='$id_banco[$cont]' and tipo='1'";
include("functions.php");
$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
$aux2=0;
$contador=0;
while ($aux2<= mysql_num_rows($rs)) {
	$R=mysql_fetch_array($rs);
	$dados->SetContador($R["sum(contador)"]);
	$contador=$dados->GetContador();
	echo "$contador";

	$aux2++;
}






?>