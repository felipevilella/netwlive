<?php
include"conexao/buscarpagina.php";
$cont=0;
$dir=array();
while ($cont<$aux) {
	echo "
	<div class='col-md-3'>
	<div class='layout8'>
	<div class='white-panel5 pn10'>
	<div class='capa'>";

	$dir[$cont]=caminho_foto($Email_banco1[$cont]);

	if(empty($Capa_banco1[$cont])){
		echo "<img src='imagem/capa.jpg'>";
	}
	else{
		echo " <img src='$dir[$cont]/$Capa_banco1[$cont]'>";
	}

	echo "
	</div>
	<div class='foto'>";
	 if(empty($Foto_banco1[$cont])){
            echo "<a href='$url1[$cont]'><img src='imagem/foto_perfil.jpg' class='img-circle'></a>";
          }
          else{
            echo "<a href='$url1[$cont]'><img src='$dir[$cont]/$Foto_banco1[$cont]' class='img-circle'></a>";
          }
    
	echo"</div>
	<div class='nome'>
	<label><a href='$url1[$cont]'>$Nome_banco1[$cont]</a></label>
	</div>
	</div>
	</div>
	</div>";
	$cont++;
}

?>