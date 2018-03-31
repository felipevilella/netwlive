<?php
require_once("../classe/dados.class.php");
$dados=new dados();
$comando="select * from netwchat";
include_once("../functions.php");
$rs=mysql_query($comando,$conexao)or die("erro ao buscar dados do chat");

$conversar=array();
$email=array();
$emailamigo=array();
$hora=array();
$data=array();

$nomeusuarios=$_SESSION['usuarioNome'];
$aux=1;
while($aux<=mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);

	$dados->SetConversa($R["conversa"]);
	$dados->SetEmail($R["email"]);
	$dados->SetEmail_amigo($R["emailamigo"]);
	$dados->SetHora($R["horario"]);
	$dados->SetData($R["data"]);

	$conversar[$aux]=$dados->GetConversa();
	$email[$aux]=$dados->GetEmail();
	$emailamigo[$aux]=$dados->GetEmail_amigo();
	$hora[$aux]=$dados->GetHora();
	$data[$aux]=$dados->GetData();

	$aux++;

}
?>