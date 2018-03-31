<?php 
require_once("classe/publicacao.class.php");
$dados=new publicacao();
$comando="select * from netwpublicacao where usuario='$email' order by id desc";
include("functions.php");
$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
$aux=0;
 
$publicacao_banco=array();
$nome_banco=array();
$id_banco=array();
$data_banco=array();
$hora_banco=array();
$imagem_banco=array();
$emailamigo_banco=array();
$nomeamigo_banco=array();


while($aux<mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);

	$dados->SetPublicacao($R["publicacao"]);
	$dados->SetNome($R["nome"]);
	$dados->SetId($R["id"]);
	$dados->SetData($R["data"]);
	$dados->SetHora($R["hora"]);
	$dados->SetImagem($R["imagem"]);
	$dados->SetEmail_amigo($R["emailamigo"]);
	$dados->SetNome_amigo($R["nomeamigo"]);

	$publicacao_banco[$aux]=$dados->GetPublicacao();
	$nome_banco[$aux]=$dados->GetNome();
	$id_banco[$aux]=$dados->GetId();
	$data_banco[$aux]=$dados->GetData();
	$hora_banco[$aux]=$dados->GetHora();
	$imagem_banco[$aux]=$dados->GetImagem();
	$emailamigo[$aux]=$dados->GetEmail_amigo();
	$nomeamigo_banco[$aux]=$dados->GetNome_amigo();


$aux++;
}
	?>