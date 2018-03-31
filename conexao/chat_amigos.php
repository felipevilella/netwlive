<?php
require_once"classe/dados.class.php";
$dados= new dados();

$comando="select * from usuarios where pasta like '%$dir%'";

include("functions.php");
$rs=mysql_query($comando,$conexao);
$aux=0;
$Nome_chat;
$Email_chat;
$Foto_chat;
$Capa_chat;
$Pasta_chat;
$Estado_chat;

while($aux<mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);

	$dados->SetNome($R["nome"]);
	$dados->SetEmail($R["usuario"]);
	$dados->SetFoto($R["foto"]);
	$dados->SetCapa($R["fotocapa"]);
	$dados->SetDiretorio($R["pasta"]);
	$dados->SetEstado($R["estado"]);

	$Nome_chat=$dados->GetNome();
	$Email_chat=$dados->GetEmail();
	$Foto_chat=$dados->GetFoto();
	$Capa_chat=$dados->GetCapa();
	$Pasta_chat=$dados->GetDiretorio();
    $Estado_chat=$dados->GetEstado();
	$aux++;


}



?>