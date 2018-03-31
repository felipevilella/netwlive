<?php 
require_once"classe/dados.class.php";
$dados= new dados();

$emailuser=$_SESSION['usuarioLogin'];

$emailsuario=array();
$emailcerto=array();
$emaill=array();

$comando="select * from netwamigo where emailamigo='$email_publicacao'";
include("functions.php");
$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
$aux=0;

while($aux<mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);


	$dados->SetEmail_amigo($R["emailamigo"]);
	$dados->SetEmail($R["email"]);
	
    $emailsuario[$aux]=$dados->GetEmail();
    $emaill[$aux]=$dados->GetEmail_amigo();   

	if($emaill[$aux]==$emailuser){
		$emailcerto[$aux]=$emailll;
	}
	$aux++;
}
?>