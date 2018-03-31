

<?php
$email=$_SESSION['usuarioLogin'];
include("publicacao_perfil_amigo_bd.php");
$caminho=caminho_foto($email_publicacao);
$fotousuario=usuario_perfil($email_publicacao);
$cont=0;
while ($cont<$aux) {
         # code...

if(empty($imagem_banco[$cont])){
  echo"
 <div class='white-panel6 pn8'>
 <table>
 <tr><td><img src='$caminho/$fotousuario' class='img-circle' width='60px'></td>
 <td><label>&nbsp$nome_banco[$cont]</label>&nbsp&nbsp<font size=1 color=black>$hora_banco[$cont] - $data_banco[$cont]</font></td></tr>
 </table><hr>

 <label><p aligng='justify'>$publicacao_banco[$cont]</p></label></div>";

  include("dados_comentario.php");
  include("conexao/campo_comentario.php");

}
else{
 echo"
 <div class='white-panel6 pn7'>
 <table>
 <tr><td><img src='$caminho/$fotousuario' class='img-circle' width='60px'></td>
 <td><label>&nbsp$nome_banco[$cont]</label>&nbsp&nbsp<font size=1 color=black>$hora_banco[$cont] - $data_banco[$cont]</font></label></td></tr>
 </table><hr>
 <img src='$imagem_banco[$cont]' id='foto'>
 <label><p align='justify'>$publicacao_banco[$cont]</p></label></div>";

  include("dados_comentario.php");
  include("conexao/campo_comentario.php");
}

$cont++;
}

if($aux==0){
  echo "
  <div class='white-panel6 pn7'>
  <table>
  <tr><td></td>
  <td></td></tr>
  </table>
  </div>
  </div>";
}
 ?>