<?php
include"conexao/buscaamigo_bd.php";
$cont=0;
$dir=array();
while ($cont<$aux) {
	echo "
	<div class='col-md-3'>
	<div class='layout8'>
	<div class='white-panel5 pn10'>
	<div class='capa'>";

	$dir[$cont]=substr($Pasta_banco[$cont],9,100);

	if(empty($Capa_banco[$cont])){
		echo "<img src='imagem/capa.jpg'>";
	}
	else{
		echo " <img src='$Pasta_banco[$cont]/$Capa_banco[$cont]'>";
	}

	echo "
	</div>
	<div class='foto'>";
	 if(empty($Foto_banco[$cont])){
            echo "<a href='menu?p=$dir[$cont]'><img src='imagem/foto_perfil.jpg' class='img-circle'></a>";
          }
          else{
            echo "<a href='menu?p=$dir[$cont]'><img src='$Pasta_banco[$cont]/$Foto_banco[$cont]' class='img-circle'></a>";
          }
    
	echo"</div>
	<div class='nome'>
	<label><a href='menu?p=$dir[$cont]'>$Nome_banco[$cont]</a></label>
	</div>
	</div>
	</div>
	</div>";
	$cont++;
}

?>