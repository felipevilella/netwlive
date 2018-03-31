<?php

include("fotos_pagina.php");
$url_nome=url_pagina($url_pagina);

echo "	<div class='col-md-8'>
<div class='layoutfoto'>
<label>Fotos</label>
<div class='foto'><ul>";
$cont=0;
while ($cont<$aux) {
	echo "<li><a data-fancybox='gallery' href='$foto[$cont]'><img src='$foto[$cont]'></a><a href='$url_nome?delfot=$id_banco[$cont]'><img src=imagem/excluir.png id=butt></a></li>";
	
$cont++;
}
	
echo"</div>";

?>