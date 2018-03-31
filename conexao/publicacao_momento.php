<?php
include("publicacao_momento_bd.php");


?>
<?php
$cont=0;
while($cont<$aux){
  $caracter=strlen($publicacao_banco[$cont]);
  $imagem="";
  if($tipo_banco[$cont]==9){
   $imagem="imagem/group-of-men.png";
  }
  if($tipo_banco[$cont]==10){
   $imagem="imagem/sun.png";
  }

  if($tipo_banco[$cont]==5){
   $imagem="imagem/sunset-.png";
  }

  if($tipo_banco[$cont]==6){
   $imagem="imagem/half-moon.png";
  }

  if($tipo_banco[$cont]==7){ 
   $imagem="imagem/play-button.png";
  }



  if(empty($imagem_banco[$cont] && empty($video_banco[$cont]) ) ){
    if($caracter<300){
      echo "<div class='layoutpublicacao'>
      <div class='white-panel6 p_momento_publicacao1'>";
    }
    else if($caracter<500){
      echo "<div class='layoutpublicacao'>
      <div class='white-panel6 p_momento_publicacao3'>";
    }
    else if($caracter<700){
      echo "<div class='layoutpublicacao'>
      <div class='white-panel6 p_momento_publicacao12'>";
    }
    else if($caracter<900){
      echo "<div class='layoutpublicacao'>
      <div class='white-panel6 p_momento_publicacao4'>";
    }
    else{
      echo "<div class='layoutpublicacao'>
      <div class='white-panel6 p_momento_publicacao'>";
    }

    echo "
    <div class='foto'>";

    if(empty($foto)){
      echo "<img src='imagem/foto_perfil.jpg' id='img' class='img-circle'>";
    }
    else{
      echo "<img src='$diretorio/$foto' id='img' class='img-circle'>";
    }

    echo "   
    <label>$nome</label>&nbsp&nbsp&nbsp<img src=$imagem width=25px;><label id=tempo>$data_banco[$cont] - $hora_banco[$cont]&nbsp&nbsp&nbsp&nbsp<a href=momento?del=$id_banco[$cont]><img src=imagem/excluir.png width=18px></a></label><hr>";
    if(empty($video_banco[$cont])){
      echo "<p>$publicacao_banco[$cont] </p>";
    }
    else{
      $video=substr($video_banco[$cont],17,100);
      echo "<p><div class='col-md-12'>
      <div style='position:relative;height:0;padding-bottom:56.21%''><iframe src='https://www.youtube.com/embed/$video?ecver=2' style='position:absolute;width:100%;height:100%;left:0' width='541' height='360' frameborder='0' allowfullscreen></iframe><br>

      </div><br><font color=black>$publicacao_banco[$cont]</font></div></p>";
    }
    echo "</div>
    </div>

    </div><br>";
  }

  else{
   if($caracter<100){
    echo "<div class='layoutpublicacao'>
    <div class='white-panel6 p_momento_publicacao4'>";
  }
  else if($caracter<500){
    echo "<div class='layoutpublicacao'>
    <div class='white-panel6 p_momento_publicacao5'>";
  }
  else if($caracter>700){
    echo "<div class='layoutpublicacao'>
    <div class='white-panel6 p_momento_publicacao6'>";
  }

  echo "
  <div class='foto'>";

  if(empty($foto)){
    echo "<img src='imagem/foto_perfil.jpg'  id='img' class='img-circle'>";
  }
  else{
    echo "<img src='$diretorio/$foto' id='img' class='img-circle'>";
  }
  echo "   
  <label>$nome</label>&nbsp&nbsp&nbsp<img src=$imagem width=25px;><label id=tempo>$data_banco[$cont] - $hora_banco[$cont]&nbsp&nbsp&nbsp&nbsp<a href=momento?del=$id_banco[$cont]><img src=imagem/excluir.png width=18px></a></label><hr>
  <div class='img1'>
  <img src=$imagem_banco[$cont]>
  </div>
  <p>$publicacao_banco[$cont]</p>
  </div>
  </div>

  </div><br>";
}
$cont++;
}
?>