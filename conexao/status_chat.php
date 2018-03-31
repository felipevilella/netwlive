<?php 
if(!isset($_SESSION)) { 
	session_start(); 
}
$email_amigo=$_SESSION['email_amigo'];
$email_publicacao=$_SESSION["usuarioLogin"];


include_once("amigos_perfil_bd.php");
require_once("funcoes.php");
$caminho=caminho_foto($email_amigo);
$dir1=substr($caminho,9,100);
$online=array();
$codusuario=array();
$cont=0;
while ($cont<$aux) {

	$online[$cont]=usuario_online($email_amigo_banco[$cont]);
	if($email_amigo_banco[$cont]==$email_amigo){
		echo "<a href='menu?p=$dir1'>$nome_banco[$cont]</a>"; 

		if($online[$cont]==1){
			echo "<font color='green' size=2>  On-line</font>";
		}
		else{
			echo "<font color='Grey' size=2>  Indisponivel </font>";   
		}
	}
	$cont++;
}

?>