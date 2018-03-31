<?php
$emailusuario=$_SESSION['usuarioLogin'];

require_once("funcoes.php");
include("notificacao_bd.php");

$contador=contador_solicitacao($email);
$cont=0;

$diretorio=array();
$imagem=array();
$nome=array();
$email_pesquisa=array();                     


echo " 
<li id='header_inbox_bar' class='dropdown'>
<a data-toggle='dropdown' class='dropdown-toggle' href=''>
<img src='imagem/home.png' width='27px'>";

if(empty($contador)){
echo "</a>
     <ul class='dropdown-menu extended inbox'>
     
     <li>
     <a href=''>";
    echo "<span class='subject'>
     <span class='from'></span>
     </span>
     <span class='message'>
     Você não possui solicitaçao de amizade.
     </span>
     </a>
     </li>        
     </ul>
     </li>";
   
}
else{ 
 echo "<span class='badge bg-theme'>$contador</span>";
}

if($aux==0){

}
else{

  while($cont<$aux){
   
   $imagem[$cont]=usuario_perfil($email_amigo[$cont]);
   $nome[$cont]=usuario_nome($email_amigo[$cont]);
   $diretorio[$cont]=caminho_foto($email_amigo[$cont]);
   $email_amigo[$cont]=substr($diretorio[$cont],9,100);
   
   if($emailusuario==$email_banco[$cont]){
     echo "</a>
     <ul class='dropdown-menu extended inbox'>
     
     <li>
     <a href='menu?p=$email_amigo[$cont]'>";
     if(empty($imagem[$cont])){
      echo "<span class='photo'><img  src='imagem/foto_perfil.jpg'></span>";
     }
     else{
      echo "<span class='photo'><img  src='$diretorio[$cont]/$imagem[$cont]'></span>";
    }

    echo "<span class='subject'>
     <span class='from'>$nome[$cont]</span>
     </span>
     <span class='message'>
     Enviou um solicitaçao de amizade
     </span>
     </a>
     </li>        
     </ul>
     </li>";
   }
   $cont++;
 }

 
}

?>