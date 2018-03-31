

<?php
session_start(); 
$usuario=$_SESSION['usuarioLogin'];
	 $comando="update usuarios set estado=0 where usuario='$usuario'";
	 include("functions.php");
     mysql_query($comando,$conexao)or die("impossivel cadastrar");
 unset($_SESSION['usuarioNome']);
 session_destroy();
 header("Location: index"); exit;
 
?>

