<?php
include"amigos_perfil_bd1.php";
require_once"funcoes.php";

$contador=contador_amigos($email_publicacao);

echo "<div class='layout10'>
<div class='white-panel6 pnamigos'>
<label>Amigos de $Nome_banco</label>
<label><font color='Grey'>&nbsp$contador</font></label>
<div class='foto'><ul>";
$cont=0;
while ($cont<$aux) {
$email=substr($diretorio_amigo[$cont],9,100);
 if($cont<5){

  if(empty($foto_amigo[$cont])){
  	echo " <li><a href='menu?p=$email'><img src='imagem/foto_perfil.jpg' class='img-circle'></a>
 </li>";
  }
  else{
  echo "
  <li><a href='menu?p=$email'><img src='$diretorio_amigo[$cont]/$foto_amigo[$cont]' class='img-circle'></a>
  </li>";
  }
}
$cont++;
}
echo "</ul></div>";
if($cont>5){
echo "
<div class='ver'><a href='menu?amigos1=$dir'><input type='button' class='btn btn-success ' value='Ver mais'></a></div>";
}

echo "</div></div>";


?>