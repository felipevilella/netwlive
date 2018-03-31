 <?php
 include("conexao/funcoes.php");
 require_once("seguranca.php");

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 	$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
 	$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
 	$senha1=md5($senha);
 	$s1=substr($senha1,0,12);
 	if (validaUsuario($usuario, $s1) == true) {

        online($usuario);
 		header("Location: menu?1");
      


 	} else {

 		voltar();
 	}
 }
 ?> 

