<?php
require_once("classe/dados.class.php");
$dados=new dados();

$comando="select * from sobre where email='$email'";
include("functions.php");
$rs=mysql_query($comando,$conexao);
$aux=0;

$Email=array();
$Cidade=array();
$Formacao=array();
$Genero=array();
$Sobre=array();
$Trabalho=array();

while($aux<mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);

	$dados->SetEmail($R["email"]);
	$dados->SetCidade($R["cidade"]);
	$dados->SetFormacao($R["formacao"]);
	$dados->SetGenero($R["Genero"]);
	$dados->SetSobre($R["sobre"]);
	$dados->SetTrabalho($R["trabalho"]);

	$Email[$aux]=$dados->GetEmail();
	$Cidade[$aux]=$dados->GetCidade();
	$Formacao[$aux]=$dados->GetFormacao();
	$Genero[$aux]=$dados->GetGenero();
	$Sobre[$aux]=$dados->GetSobre();
	$Trabalho[$aux]=$dados->GetTrabalho();

	$aux++;
}

?>






