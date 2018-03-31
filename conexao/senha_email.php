<?php

require_once "funcoes.php";
$email_exitente=usuario_existente($email);

if($email_exitente=="true"){
    $emailurl=md5($email);
    include"senha_solicitacao.php";
    $nome_usuario=usuario_nome($email);
    include"senha_email_recuperarsenha.php";
}
else{
  $url = 'esquecisenha';
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  echo("<script LANGUAGE=\"JavaScript\">
    alert(\"$email não cadastrado .\");
    </SCRIPT>");

} 

?> 