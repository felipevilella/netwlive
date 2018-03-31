<?php
if(!isset($_SESSION)) { 
 session_start(); 
}
$email=$_SESSION["usuarioLogin"];
include("mensagens_lista.php");

$cont=$aux-1;
$var=0;
$div=0;

$nome_mensagem=array();
$caminho_mensagem=array();
$foto_mensagem=array();
$cod_mensagem=array();

echo "<li id='carregamento_mensagem'>";

while(0<=$cont){

  $nome_mensagem[$cont]=usuario_nome($email_banco[$cont]);
  $foto_mensagem[$cont]=usuario_perfil($email_banco[$cont]);
  $caminho_mensagem[$cont]=caminho_foto($email_banco[$cont]);
  $contador=contador_mensagem1($email,$email_banco[$cont]);
  $cod_mensagem[$cont]=substr($caminho_mensagem[$cont],9,100);

  if($contador>0){

    if($var<5){
     echo "
     <a href=menu?c=$cod_mensagem[$cont]>

     <span class='message'>";
     if(empty($foto_mensagem[$cont])){
      echo "<span class='photo'><img  src='imagem/foto_perfil.jpg'></span>";
     }
     else{
      echo "<span class='photo'><img  src='$caminho_mensagem[$cont]/$foto_mensagem[$cont]'></span>";
     }
     
     echo "<span class='subject'>
     <span class='from'>$nome_mensagem[$cont]<font color='green'>  ($contador)</font></span>
     </span>
     <span class='message'>
     Mensagem oculta
     </span>
     </span>
     </a>
     ";

   }
    $var++;
 }
 $cont--;
}
$cont=5;
$var=0;
while(0<=$cont){



  $nome_mensagem[$cont]=usuario_nome($email_banco[$cont]);
  $foto_mensagem[$cont]=usuario_perfil($email_banco[$cont]);
  $caminho_mensagem[$cont]=caminho_foto($email_banco[$cont]);
  $contador=contador_mensagem1($email,$email_banco[$cont]);
  $cod_mensagem[$cont]=substr($caminho_mensagem[$cont],9,100);


  if(empty($contador) && !empty($email_banco[$cont])){  
    if($var<5){
     echo "
      <a href=menu?c=$cod_mensagem[$cont]>

     <span class='message'>";
     if(empty($foto_mensagem[$cont])){
      echo "<span class='photo'><img  src='imagem/foto_perfil.jpg'></span>";
     }
     else{
      echo "<span class='photo'><img  src='$caminho_mensagem[$cont]/$foto_mensagem[$cont]'></span>";
     }
     echo "<span class='subject'>
     <span class='from'>$nome_mensagem[$cont]</span>
     </span>
     <span class='message'>
     Mensagem oculta
     </span>
     </span>
     </a>
     ";
   }
 }
 if(empty($email_banco[$cont])){
  echo "
      <a href=>
     <span class='message'>";
     echo "<span class='subject'>
     <span class='from'>Que pena :(</span>
     </span>
     <span class='message'>
        Você não possui mensagem
     </span>
     </span>
     </a>
     ";
     $cont=0;
 }

 $var++;
 $cont--;
}

echo " </li>";
?>