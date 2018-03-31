<?php
require_once"classe/dados.class.php";
$dados= new dados();
$comando="select * from usuarios where nome like '$pesquisa%'";
include("functions.php");
$rs=mysql_query($comando,$conexao);
$aux=0;
$Nome_banco=array();
$Email_banco=array();
$Foto_banco=array();
$Capa_banco=array();
$Pasta_banco=array();


while($aux<mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);

	$dados->SetNome($R["nome"]);
	$dados->SetEmail($R["usuario"]);
	$dados->SetFoto($R["foto"]);
	$dados->SetCapa($R["fotocapa"]);
	$dados->SetDiretorio($R["pasta"]);

	$Nome_banco[$aux]=$dados->GetNome();
	$Email_banco[$aux]=$dados->GetEmail();
	$Foto_banco[$aux]=$dados->GetFoto();
	$Capa_banco[$aux]=$dados->GetCapa();
	$Pasta_banco[$aux]=$dados->GetDiretorio();

	$aux++;
}



?>