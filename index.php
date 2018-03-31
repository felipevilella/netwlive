<!DOCTYPE html>
<html>
<head>
	<title>Netwlive</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="shortcut icon" href="imagem/favicon.ico" >
	<!--- css ---->
	<link rel="stylesheet" href="./css/bootstrap.min.css" >
	<link rel="stylesheet" href="./css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="./css/login.css">
</head>
<body>
	<?php
      require_once("conexao/funcoes.php");
       verificacao_online();
     ?>

	<div class="logo">
		<a href="index"><img src="imagem/logo.png"></a>
	</div>
	<div class="informacao">
		<div class="col-md-4">
			<table>
				<p>CADASTRA-SE NO NETWLIVE E CONECTA-SE AOS SEU AMIGOS.</p>
				<div class="botao">
					<div class="col-md-9">
						<form action="cadastro">
						<br><input type="submit" name="" value="Cadastrar">
					</form>
					</div>
				</div>
			</table>
		</div>
	</div>
	<div class="Login">
		
		<form action="validacao" method="post">
			<img class="user" src="imagem/usuario.png">
			<h4>Área de acesso</h4>
			<div class="inputBox">
				<input type="email" name="usuario" placeholder="Digite o seu e-mail" >
				<span><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
			</div>

			<div class="inputBox">
				<input type="password" name="senha" placeholder="********" >
				<span><i class="glyphicon glyphicon-asterisk" aria-hidden="true"></i></span>
			</div>
			<input type="submit" name="" value="Entrar">
		</form>


		<a href="esquecisenha">Esqueci a senha</a>
	</div>


	<script src="./js/bootstrap.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
</body>
</html>