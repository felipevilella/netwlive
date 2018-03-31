<!DOCTYPE html>
<html>
<head>
	<title>Netwlive</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="shortcut icon" href="imagem/favicon.ico"
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
    if(isset($_GET["1"])){
    	include 'conexao/cadastro_banco_bd.php';
    }

    ?>
	<div class="Login">
		
		<form action="cadastro?1" method="post">
			<div class="inputBox">
				<input type="text" name="nome" id="nome" value="" placeholder="Digite o seu nome e sobrenome" required>
				<span><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
			</div>
			
			<div class="inputBox">
			    
				<input type="email" name="email" id="email" value="" placeholder="Digite o seu e-mail" required>
				<span><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
			</div>

			<div class="inputBox">
			  
				<input type="password" name="senha" id="senha" value="" placeholder="Digite sua senha" required>
				<span><i class="glyphicon glyphicon-asterisk" aria-hidden="true"></i></span>
			</div>
			<div class="inputBox">
				<label>Data de nascimento</label>
				<input type="date" name="data"  id="data" value="" placeholder="Digite sua data de nascimento" required>
			</div>
			<label><font size="2px">Ao clicar em Cadastre-se agora, você aceita o Contrato do Usuário, a Política de Privacidade e a Política de Cookies do netwlive.</font></label>
			<input type="submit" id="Cadastrar-se" name="" value="Cadastrar-se">
		</form>

	</div>


	<script src="./js/bootstrap.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>