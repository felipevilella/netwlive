<?php

$comando="select * from netwfotopagina where usuario='$url_pagina'";
include("functions.php");
$rs=mysql_query($comando,$conexao) or die("impossivel encontrar");
$aux=0;

$foto=array();
$id_banco=array();

while ($aux<mysql_num_rows($rs)) {
	$R=mysql_fetch_array($rs);

	$dados->SetFoto($R["fotocapa"]);
	$foto[$aux]=$dados->GetFoto();
	$dados->SetId($R["id"]);
	$id_banco[$aux]=$dados->GetId();

	$aux++;
}





?>