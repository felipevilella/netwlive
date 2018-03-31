<?php
require_once"classe/dados.class.php";
$dados= new dados();

$comando="select * from usuarios where pasta like '%$dir%'";

include("functions.php");
$rs=mysql_query($comando,$conexao);
$aux=0;
$Nome_banco;
$Email_banco;
$Foto_banco;
$Capa_banco;
$Pasta_banco;

while($aux<mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);

	$dados->SetNome($R["nome"]);
	$dados->SetEmail($R["usuario"]);
	$dados->SetFoto($R["foto"]);
	$dados->SetCapa($R["fotocapa"]);
	$dados->SetDiretorio($R["pasta"]);

	$Nome_banco=$dados->GetNome();
	$Email_banco=$dados->GetEmail();
	$Foto_banco=$dados->GetFoto();
	$Capa_banco=$dados->GetCapa();
	$Pasta_banco=$dados->GetDiretorio();

	$aux++;


}



?>