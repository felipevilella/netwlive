<?php
require_once "classe/dados.class.php";
$dados=new dados();
$email_amigo=array();
$email_banco=array();
$comando="select * from solicitacao where email='$email'";
include"functions.php";
$rs=mysql_query($comando,$conexao) or die ("impossivel localizar");

$aux=0;

while ($aux <= mysql_num_rows($rs)) {
	$R=mysql_fetch_array($rs);

	$dados->SetEmail($R["emailamigo"]);
    $email_amigo[$aux]=$dados->GetEmail();
    $dados->SetEmail_amigo($R["email"]);
    $email_banco[$aux]=$dados->GetEmail_amigo();

    



    $aux++;

}




?>