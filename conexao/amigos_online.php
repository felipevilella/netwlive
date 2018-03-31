<?php
if(!isset($_SESSION)) { 
	session_start(); 
}
$email_publicacao=$_SESSION["usuarioLogin"];

include_once("amigos_perfil_bd.php");
require_once("funcoes.php");
$online=array();
$codusuario=array();
$cont=0;
$cont1=0;

while ($cont<$aux) {

	$online[$cont]=usuario_online($email_amigo_banco[$cont]);
	$codusuario[$cont]=substr($diretorio_amigo[$cont],9,100);
	if($online[$cont]==1 && $cont1<9){
		echo " <div class='thumb'>";
		if(empty($foto_amigo[$cont])){
			echo "<br><a href='menu?c=$codusuario[$cont]'><img class='img-circle' src='imagem/foto_perfil.jpg' width='45px' height='45px'></a>
		";
		}
		else{
            echo "<br><a href='menu?c=$codusuario[$cont]'><img class='img-circle' src='$diretorio_amigo[$cont]/$foto_amigo[$cont]' width='45px' height='45px'></a>
		";
		}
		echo "<a href='menu?c=$codusuario[$cont]'> $nome_banco[$cont]</a><br/>
		</div>
		<div class='details'>
		<muted><font color='green'>On-line</font></muted><hr>
		</div>";
		$cont1++;
	}
	

	$cont++;
	
}

$cont=0;
while ($cont<$aux) {

	$online[$cont]=usuario_online($email_amigo_banco[$cont]);
	$codusuario[$cont]=substr($diretorio_amigo[$cont],9,100);
	if($online[$cont]==0 && $cont1<9){
		echo " <div class='thumb'>";
		if(empty($foto_amigo[$cont])){
			echo "<br><a href='menu?c=$codusuario[$cont]'><img class='img-circle' src='imagem/foto_perfil.jpg' width='45px' height='45px'></a>
		";
		}
		else{
            echo "<br><a href='menu?c=$codusuario[$cont]'><img class='img-circle' src='$diretorio_amigo[$cont]/$foto_amigo[$cont]' width='45px' height='45px'></a>
		";
		}
		echo "<a href='menu?c=$codusuario[$cont]'> $nome_banco[$cont]</a><br/>
		</div>
		<div class='details'>
		<muted><font color='Grey'>Indisponivel</font></muted><hr>
		</div>";
		$cont1++;
	}
	
	$cont++;

}

?>