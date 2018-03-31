<?php
$emailusuario=$_SESSION['usuarioLogin'];

$curtida=contadorcurtidaspagina($id_banco[$cont]);
$descurtida=contadordescurtidaspagina($id_banco[$cont]);
$curtiu=emailcurtidapagina($emailusuario,$id_banco[$cont]);
$descurti=emaildescurtidapagina($emailusuario,$id_banco[$cont]);

echo "<div class='white-panelfuncionalidades pncomentario'>";

if($curtiu==$emailusuario){
   echo"&nbsp&nbsp<font color='green'><b>$curtida</b></font><a href='menu?desctpagina=$id_banco[$cont]' ><img src='imagem/hand1.png' width='42px'></font></a>";
   echo"&nbsp&nbsp<font color='red'><b>$descurtida</b><img src='imagem/paper-plane.png' width='42px'></font>";
}
else if($descurti==$emailusuario){
  echo"&nbsp&nbsp<font color='green'><b>$curtida</b></font><img src='imagem/hand.png' width='42px'></font>";
    echo"&nbsp&nbsp<font color='red'><b>$descurtida</b><a href='menu?desctpagina=$id_banco[$cont]'><img src='imagem/paper-plane1.png' width='42px'></font></a>";
}
else{
    echo"&nbsp&nbsp<font color='green'><b>$curtida</b></font><a href='menu?curpagina=$id_banco[$cont]'><img src='imagem/hand.png' width='42px'></a>";
    echo"&nbsp&nbsp<font color='red'><b>$descurtida</b><a href='menu?curnpagina=$id_banco[$cont]'><img src='imagem/paper-plane.png' width='42px'></font></a>";
}


echo "<div id='comentario'>
<form action='menu?compagina' method='post'>
<input type=hidden name='id' value='$id_banco[$cont]'>
<input type='text' class='btn btn-control round-form' placeholder='Digite o seu comentario..' maxlength='291' style='width: 80%;'' name='comentario'> <input type='submit' id='Cadastrar-se' name=''  value='Comentar'>
</form>
</div>
</div><br><br>";


?> 