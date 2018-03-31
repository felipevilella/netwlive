<?php
 
 include "cadastro_dados_formulario.php";
 require_once "funcoes.php";

 $email_exitente=usuario_existente($email_banco);

 if($email_exitente==true){
  
      $url = 'cadastro';
       echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

       echo("<script LANGUAGE=\"JavaScript\">
        alert(\"Usuario já existente.\");
      </SCRIPT>");
 }
 else{
 	include "cadastro_dados_confirmado.php";
 }

?>