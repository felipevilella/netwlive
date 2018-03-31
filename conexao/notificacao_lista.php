<?php
if(!isset($_SESSION)) { 
 session_start(); 
}
$email=$_SESSION["usuarioLogin"];
include("notificacao_amigos_bd.php");



$nome_notificacao=array();
$foto_notificacao=array();
$caminho_notificacao=array();
$contador=array();
$cont=$aux-1;
$var=0;
$div=0;

echo "<li id='carregamento_notificacao'>";

while(0<=$cont){

  $nome_notificacao[$cont]=usuario_nome($email_banco[$cont]);
  $foto_notificacao[$cont]=usuario_perfil($email_banco[$cont]);
  $caminho_notificacao[$cont]=caminho_foto($email_banco[$cont]);
  $contador[$cont]=contador_notificacao1($email,$email_banco[$cont]);




  if($contador[$cont]>0){

    if($var<5){
     echo "
     <a href='menu?publin=$id_banco[$cont]'>

     <span class='message'>";
     if(empty($foto_notificacao[$cont])){
      echo "<span class='photo'><img  src='imagem/foto_perfil.jpg'></span>";
     }
     else{
     echo "<span class='photo'><img  src='$caminho_notificacao[$cont]/$foto_notificacao[$cont]'></span>";
     }
     echo"<span class='subject'>
     <span class='from'>$nome_notificacao[$cont]<font color='green'> Novo</font></span>
     </span>
     <span class='message'>
     $texto_banco[$cont]
     </span>
     </span>
     </a>";

   }
 }
 $var++;
 $cont--;
}
$cont=$var-$cont;
$var=0;
$cont=$cont-2;
while(0<=$cont){



  $nome_mensagem[$cont]=usuario_nome($email_banco[$cont]);
  $foto_mensagem[$cont]=usuario_perfil($email_banco[$cont]);
  $caminho_mensagem[$cont]=caminho_foto($email_banco[$cont]);
  $contador=contador_mensagem1($email,$email_banco[$cont]);



  if($conta[$cont]==0){  
    if($var<5){
     echo "
    <a href='menu?publin=$id_banco[$cont]'>

     <span class='message'>";
     if(empty($foto_notificacao[$cont])){
      echo "<span class='photo'><img  src='imagem/foto_perfil.jpg'></span>";
     }
     else{
     echo "<span class='photo'><img  src='$caminho_notificacao[$cont]/$foto_notificacao[$cont]'></span>";
     }
     echo "<span class='subject'>
     <span class='from'>$nome_notificacao[$cont]<font color='green'></font></span>
     </span>
     <span class='message'>
     $texto_banco[$cont]
     </span>
     </span>
     </a>
     ";
   }
 }

 $var++;
 $cont--;
}
echo " </li>";
?>