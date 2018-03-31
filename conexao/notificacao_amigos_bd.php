<?php
$comando="select * from netwnotificacao where email='$email'";
include_once("functions.php");
require_once("funcoes.php");
$rs=mysql_query($comando,$conexao) or die("impossivel localizar");

$email_banco=array();
$texto_banco=array();
$id_banco=array();
$conta=array();


$aux=0;
while ($aux<mysql_num_rows($rs)) {
	$R=mysql_fetch_array($rs);

	$email_banco[$aux]=$R["emailamigo"];
	$texto_banco[$aux]=$R["texto"];
	$id_banco[$aux]=$R["id_postagem"];
	$conta[$aux]=$R["contador"];

	 
	$aux++;
}

?>
