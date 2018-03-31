<!DOCTYPE html>
<html>
<head>
	<title>Netwlive</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--- css ---->
	<link rel="stylesheet" href="./css/bootstrap.min.css" >
	<link rel="stylesheet" href="./css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="./css/login.css">
</head>
<body>
	<div class="logo">
		<a href="index"><img src="imagem/logo.png"></a>
	</div>
	<?php
      if(isset($_GET['1'])){
      	$email=$_POST["usuario"];
      	include"conexao/senha_email.php";
      }
	?>
	<div class="Login">
		
		<form action="esquecisenha?1" method="post">
			<img class="user" src="imagem/usuario.png">
			<h4>Digite seu e-mail para recuperar a senha</h4>
			<div class="inputBox">
				<input type="email" name="usuario" placeholder="Digite o seu e-mail" >
				<span><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
			</div>
			<input type="submit" name="" value="Enviar">
      </form>
	</div>


	<script src="./js/bootstrap.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
</body>
</html>