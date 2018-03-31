<?php

include("amigos_perfil_bd1.php");
require_once"funcoes.php";

$contador=contador_amigos($email_publicacao);

echo "	<div class='col-md-5'>
<div class='layout13'>
<label>Amigos</label>
<label><font color='Grey'>&nbsp$contador </font></label>
<div class='foto'><ul>";
$cont=0;
while ($cont<$aux) {
	$email=substr($diretorio_amigo[$cont],9,100);
    $nome1=substr($nome_banco[$cont],0,6);   
       if(empty($foto_amigo[$cont])){
       	echo "
		<li><a href='menu?p=$email'><img src='imagem/foto_perfil.jpg' class='img-circle'></a>";
       }
       else{
       	echo "
		<li><a href='menu?p=$email'><img src='$diretorio_amigo[$cont]/$foto_amigo[$cont]' class='img-circle'></a>";
       }
		
		echo "<a href='menu?p=$email' id='nome'>$nome1..</a></li>";


	$cont++;
}
echo "</div>";
?>