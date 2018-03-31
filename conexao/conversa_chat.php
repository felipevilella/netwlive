<?php
require_once("../conexao/funcoes.php");
if(!isset($_SESSION)) { 
	session_start(); 
} 
$emailusuario=$_SESSION["usuarioLogin"];
$email_amigo=$_SESSION['email_amigo'];

include_once("chat_conversa_bd.php");

$cont=1;

while($cont<=$aux){

	if($email[$cont]==$email_amigo && $emailusuario==$emailamigo[$cont]){
		echo "
		<div class='row msg_container base_sent'>
		<div class='col-md-10 col-xs-10'>
		<div class='messages1 msg_sent'>
		<p>$conversar[$cont]</p><time>$hora[$cont] * $data[$cont]</time>
		</div>
		</div>
		<div class='col-md-2 col-xs-2'>
		</div>
		</div>";
	}

	else  if($email[$cont]==$emailusuario && $email_amigo==$emailamigo[$cont]){
		echo "<div class='row msg_container base_receive'>
		<div class='col-md-2 col-xs-2 '>

		</div>
		<div class='col-md-10 col-xs-10'>
		<div class='messages msg_sent'>
		<p>$conversar[$cont]</p><time>$hora[$cont] </time>
		</div>
		</div>
		</div>";
	}
	$cont++;
}
?>
