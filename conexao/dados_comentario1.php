<?php

include("dados_comentario_bd.php");
 
$caminho1=array();
$fotousuario1=array(); 
$codusuario1=array();
$nomeusario1=array();

$contador1=0;
while ($contador1<$contador) {
 
	$caminho1[$contador1]=caminho_foto($email[$contador1]);
	$fotousuario1[$contador1]=usuario_perfil($email[$contador1]);
	$codusuario1[$contador1]=substr($caminho1[$contador1],9,100);
	$nomeusario1[$contador1]=usuario_nome($email[$contador1]);


	echo "<div class='white-panelcomentario pncomentario'>";
	if(empty($fotousuario1)){
      echo "<tr><td><a href='menu?p=$codusuario1[$contador1]'><img src='imagem/foto_perfil.jpg' class='img-circle' width='45px'></a></td>";
	}
	else{

		echo "<tr><td><a href='menu?p=$codusuario1[$contador1]'><img src='$caminho1[$contador1]/$fotousuario1[$contador1]' class='img-circle' width='45px'></a></td>";

	}
	if($emailusuario==$email[$contador1]){
	  echo "<td><label>&nbsp<a href='menu?p=$codusuario1[$contador1]'>$nomeusario1[$contador1]</a></label>&nbsp&nbsp<font size=1 color=black>$hora[$contador1] - $data[$contador1]</font><a href=menu?ex=$id[$contador1]><img src='imagem/lixeira.png' width='23px'></a></td></tr> </table></hr>";
	}
	else {
		echo "<td><label>&nbsp<a href='menu?p=$codusuario1[$contador1]'>$nomeusario1[$contador1]</a></label>&nbsp&nbsp<font size=1 color=black>$hora[$contador1] - $data[$contador1]</font></td></tr> </table></hr>";
	}
	echo "
	<label><p align='justify'>$comentario[$contador1]  </hr></p></label><br>
	</div>";
	



	$contador1++;
}

?>