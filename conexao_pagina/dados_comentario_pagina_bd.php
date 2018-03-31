<?php
require_once("classe/dados.class.php");
$dados= new dados();

$comando="select * from netwcomentario_pagina where id='$id_banco[$cont]'";
include("functions.php");
$rs=mysql_query($comando,$conexao) or die("impossivel localizar");
$contador=0;

$comentario=array();
$curtida=array();
$data=array();
$hora=array();
$email=array();
$id=array();
 


while($contador<mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);

	$dados->SetComentario($R["comentario"]);
	$dados->SetHora($R["hora"]);
	$dados->SetEmail($R["email"]);
	$dados->SetCurtida($R["curtidas"]);
	$dados->SetData($R["data"]);
	$dados->SetId($R["id_postagem"]);

	$comentario[$contador]=$dados->GetComentario();
	$curtida[$contador]=$dados->GetCurtida();
	$data[$contador]=$dados->GetData();
	$hora[$contador]=$dados->GetHora();
	$email[$contador]=$dados->GetEmail();
    $id[$contador]=$dados->GetId();

    $contador++;


}




?>