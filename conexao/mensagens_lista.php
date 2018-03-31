<?php
$comando="select distinct email from netwchat where emailamigo='$email'";
include_once("functions.php");
require_once("funcoes.php");
$rs=mysql_query($comando,$conexao) or die("impossivel localizar");

$email_banco=array();


$aux=0;
while ($aux<mysql_num_rows($rs)) {
	$R=mysql_fetch_array($rs);

	$email_banco[$aux]=$R["email"];
	
	$aux++;
}

?>
