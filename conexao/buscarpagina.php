<?php
require_once"classe/dados.class.php";
$dados= new dados();
$comando="select * from pagina where nome like '%$pesquisa%'";
include("functions.php");
$rs=mysql_query($comando,$conexao);
$aux=0;
$Nome_banco1=array();
$Email_banco1=array();
$Foto_banco1=array();
$Capa_banco1=array();
$url1=array();


while($aux<mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);

	$dados->SetNome($R["nome"]);
	$dados->SetEmail($R["email"]);
	$dados->SetFoto($R["foto"]);
	$dados->SetCapa($R["capa"]);
	$dados->SetDiretorio($R["url"]);

	$Nome_banco1[$aux]=$dados->GetNome();
	$Email_banco1[$aux]=$dados->GetEmail();
	$Foto_banco1[$aux]=$dados->GetFoto();
	$Capa_banco1[$aux]=$dados->GetCapa();
	$url1[$aux]=$dados->GetDiretorio();

	$aux++;
}



?>