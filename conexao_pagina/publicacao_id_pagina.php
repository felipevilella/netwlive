

<?php
$email=$_SESSION['usuarioLogin'];
include("publicacao_id_pagina_bd.php");
$caminho=array();
$fotousuario=array();
$codusuario=array();
$cont=0;

while ($cont<$aux) {
 $caminho[$cont]=caminho_foto($emailamigo[$cont]);
 $fotousuario=usuario_perfil_capa($emailamigo[$cont]);
 $codusuario[$cont]=substr($caminho[$cont],9,100);
 $url_nome=url_pagina($emailamigo[$cont]);
  if(empty($imagem_banco[$cont])){
      echo"
      <div class='white-panel6 pn8'>
      <table>";
      if(empty($fotousuario)){
         echo "<tr><td><a href='$url_nome'><img src='imagem/foto_perfil.jpg' class='img-circle' width='60px'></a></td>";
      }
      else{
      echo "<tr><td><a href='$url_nome'><img src='$caminho[$cont]/$fotousuario' class='img-circle' width='60px'></a></td>";
      }
      echo "<td><label>&nbsp<a href=$url_nome'>$nome_banco[$cont]</a></label>&nbsp&nbsp<font size=1 color=black>$hora_banco[$cont] - $data_banco[$cont]</font></td></tr>
      </table><hr>";
      if(empty($video_banco[$cont])){
           echo "<label><p align='justify'>$publicacao_banco[$cont]</p></label></div>";
      }
     if(!empty($video_banco[$cont])){
     $video=substr($video_banco[$cont],17,100);
      echo "<p>
      <div style='position:relative;height:0;padding-bottom:56.21%''><iframe src='https://www.youtube.com/embed/$video?ecver=2' style='position:absolute;width:100%;height:100%;left:0' width='541' height='360' frameborder='0' allowfullscreen></iframe><br><label><p align='justify'>$publicacao_banco[$cont]</p></label></div>";
     }
   

      include("dados_comentario_pagina.php");
      include("campo_comentario_pagina.php"); 

    }
    else{
     echo"
     <div class='white-panel6 pn7'>
     <table>";
      if(empty($fotousuario)){
         echo "<tr><td><a href='$url_nome'><img src='imagem/foto_perfil.jpg' class='img-circle' width='60px'></a></td>";
      }
      else{
      echo "<tr><td><a href='$url_nome'><img src='$caminho[$cont]/$fotousuario' class='img-circle' width='60px'></a></td>";
      }
      echo "<td><label>&nbsp<a href='menu?p=$codusuario[$cont]'>$nome_banco[$cont]</a></label>&nbsp&nbsp<font size=1 color=black>$hora_banco[$cont] - $data_banco[$cont]</font></label></td></tr>
     </table><hr>
     <p align='center'><img src='$imagem_banco[$cont]' id='foto'></p>
     <label><p align='justify'>$publicacao_banco[$cont]</p></label><br>

     </div>";

     include("dados_comentario_pagina.php");
      include("campo_comentario_pagina.php"); 
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