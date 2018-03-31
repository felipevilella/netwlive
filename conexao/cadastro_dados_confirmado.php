<script>
		localStorage.setItem("nome","");
		localStorage.setItem("email","");
		localStorage.setItem("data","");
</script>
<?php
require_once("funcoes.php");
$nomecrip=md5($nome_banco);
$pathName = "usuarios/" . $nomecrip;
$senha_seguranca=substr($senha_banco,0,12);

mkdir($pathName); 
cadastro_de_usuarios($nome_banco,$email_banco,$senha_seguranca,$data_banco,$pathName);
include("dados_email.php");
$id=usuario_id($email_banco);
table_id($id);


//include "dados_email.php";

$url = 'index';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

echo("<script LANGUAGE=\"JavaScript\">
	alert(\"Seu cadastro foi realizado com sucesso.\");
	</SCRIPT>");
?>

