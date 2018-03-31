<?php
$email=$_SESSION['usuarioLogin'];
$id=usuario_id($email);
include("publicacao_amigos_bd.php");
$caminho=array();
$fotousuario=array();
$codusuario=array();
$cont=0; 

while ($cont<$aux) {

  $caminho[$cont]=caminho_foto($emailamigo[$cont]);
  $fotousuario[$cont]=usuario_perfil($emailamigo[$cont]);
  $codusuario[$cont]=substr($caminho[$cont],9,100);
  $nome_pagina=nome_pagina($emailamigo[$cont]);
  $url_nome="";


  if($aux<1){

  }

  else{

    if(empty($imagem_banco[$cont])){
      if($nome_pagina==$nome_banco[$cont]){
        $fotousuario[$cont]=usuario_perfil_capa($emailamigo[$cont]);
        $url_nome=url_pagina($emailamigo[$cont]);
        echo"
        <div class='white-panel6 pn8'>
        <table>";
        if(!empty($fotousuario[$cont])){
          echo "<tr><td><a href='$url_nome'><img src='$caminho[$cont]/$fotousuario[$cont]' class='img-circle' width='60px'></a></td>";
        }
        else{
          echo "<tr><td><a href='$url_nome'><img src='imagem/foto_perfil.jpg' class='img-circle' width='60px'></a></td>";
        }
        echo "<td><label>&nbsp<a href='$url_nome'>$nome_banco[$cont]</a></label>&nbsp&nbsp<font size=1 color=black>$hora_banco[$cont] - $data_banco[$cont]</font></td></tr>
        </table><hr>";
      }
      else{
        echo"
        <div class='white-panel6 pn8'>
        <table>
        <tr><td><a href='menu?p=$codusuario[$cont]'><img src='$caminho[$cont]/$fotousuario[$cont]' class='img-circle' width='60px'></a></td>
        <td><label>&nbsp<a href='menu?p=$codusuario[$cont]'>$nome_banco[$cont]</a></label>&nbsp&nbsp<font size=1 color=black>$hora_banco[$cont] - $data_banco[$cont]</font></td></tr>
        </table><hr>";
      }


       echo "<label><p align='justify'>$publicacao_banco[$cont]</p></label></div>";
     
     if(!empty($video_banco[$cont])){
       $video=substr($video_banco[$cont],17,100);
       echo "
       <div class='videopubli'>
       <div style='position:relative;height:0;padding-bottom:56.21%''><iframe src='https://www.youtube.com/embed/$video?ecver=2' style='position:absolute;width:100%;height:140%;left:0' width='541' height='360' frameborder='0' allowfullscreen></iframe></div></div>";
     }
     if($nome_pagina==$nome_banco[$cont]){
      include("conexao_pagina/dados_comentario_pagina.php");
     include("conexao_pagina/campo_comentario_pagina.php"); 
    }
    else{
      include("dados_comentario.php");
      include("conexao/campo_comentario.php");
    }
    
  }
  else{

   if($nome_pagina==$nome_banco[$cont]){
    $fotousuario[$cont]=usuario_perfil_capa($emailamigo[$cont]);
    $url_nome=url_pagina($emailamigo[$cont]);
    echo"
    <div class='white-panel6 pn7'>
    <table>";
    if(!empty($fotousuario[$cont])){
      echo "<tr><td><a href='$url_nome'><img src='$caminho[$cont]/$fotousuario[$cont]' class='img-circle' width='60px'></a></td>";
    }
    else{
      echo "<tr><td><a href='$url_nome'><img src='imagem/foto_perfil.jpg' class='img-circle' width='60px'></a></td>";
    }
    echo "<td><label>&nbsp<a href='$url_nome'>$nome_banco[$cont]</a></label>&nbsp&nbsp<font size=1 color=black>$hora_banco[$cont] - $data_banco[$cont]</font></td></tr>
    </table><hr>";
  }
  else{
    echo"
    <div class='white-panel6 pn7'>
    <table>";
    if(!empty($fotousuario[$cont])){
      echo "<tr><td><a href='$url_nome'><img src='$caminho[$cont]/$fotousuario[$cont]' class='img-circle' width='60px'></a></td>";
    }
    else{
      echo "<tr><td><a href='$url_nome'><img src='imagem/foto_perfil.jpg' class='img-circle' width='60px'></a></td>";
    }
    echo "<td><label>&nbsp<a href='menu?p=$codusuario[$cont]'>$nome_banco[$cont]</a></label>&nbsp&nbsp<font size=1 color=black>$hora_banco[$cont] - $data_banco[$cont]</font></td></tr>
    </table><hr>";
  }
  echo"<p align='center'><img src='$imagem_banco[$cont]' id='foto'></p>
  <label><p align='justify'>$publicacao_banco[$cont]</p></label><br></div>";

  if($nome_pagina==$nome_banco[$cont]){
    include("conexao_pagina/dados_comentario_pagina.php");
    include("conexao_pagina/campo_comentario_pagina.php"); 
  }
  else{
    include("dados_comentario.php");
    include("conexao/campo_comentario.php");
  }

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
}
?>