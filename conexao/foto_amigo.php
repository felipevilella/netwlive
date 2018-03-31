<?php

include("fotos_bd.php");

echo "	<div class='col-md-12'>
<div class='layoutfoto'>
<label>Fotos</label>
<div class='foto'><ul>";
$cont=0;
while ($cont<$aux) {
	echo "<li><a data-fancybox='gallery' href='$foto[$cont]'><img src='$foto[$cont]'></a></li>";
	
$cont++;
}
	
echo"</div>";

?>