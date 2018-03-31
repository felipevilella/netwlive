<?php
require_once "funcoes.php";
include("perfil_amigo_bd.php");
$email_publicacao="";
$emailusuario=$_SESSION['usuarioLogin'];

$cont=0;

$email_publicacao=$Email_banco;
echo "
<div class='col-md-5'>
<div class='layout9'>
<div class='white-panel5 pn11'>
<div class='capa'>"; 

$dir[$cont]=substr($Pasta_banco,9,100);

if(empty($Capa_banco[$cont])){
	echo "<img src='imagem/capa.jpg'>";
}
else{
	echo " <img src='$Pasta_banco/$Capa_banco'>";
}

echo "
</div>
<div class='foto'>";
if(empty($Foto_banco[$cont])){
	echo "<img src='imagem/foto_perfil.jpg' class='img-circle'>";
}
else{
	echo "<img src='$Pasta_banco/$Foto_banco' class='img-circle'>";
}

echo"</div>
<div class='nome'>
<label>$Nome_banco</label>
</div>
<div class='botao'>
<a href='menu?amigos1=$dir'><input type='button' class='btn btn-default' value='amigos'></a>
</div>
<div class='botao1'>
<a href='menu?f=$dir'><input type='button' class='btn btn-default' value='fotos'></a>
</div>
";
if($email_publicacao==$emailusuario){

}

else{
	echo "<div class='botao3'>
	<a href='menu?cp=$dir'><img src='imagem/envelope.png' width='27px'></a>
	</div>";
	echo "<div class='botao4'>
	<a href='menu?samg=$dir'><img src='imagem/sobre.png' width='27px'></a>
	</div>";

	include("verificacao_amigo_bd.php");
	$email_amigo=solicitacao_amigo($email_publicacao,$emailusuario);
	$email_proprio=solicitacao_amigo1($email_publicacao,$emailusuario);

	$email_adicionado=verificacao_amigo1($email_publicacao,$emailusuario);

	$email_amigo_adicionado=verificacao_amigo($emailusuario,$email_publicacao);

	$validacao=0;

	if($emailusuario==$email_proprio){

		$validacao++;

	}

	if((empty($email_adicionado) && empty($email_amigo_adicionado))  && ($emailusuario!=$email_amigo) && $validacao=="0"){
		echo "<div class='botao2'>
		<a href='menu?add=$dir'><input type='button' class='btn btn-success' value='Enviar solicitação'></a>
		</div>";
	}


	if(($email_adicionado==$email_amigo_adicionado) && (!empty($email_adicionado) && !empty($email_amigo_adicionado))){
		echo "<div class='botao2'>
		<button class='btn btn-primary' data-toggle=dropdown><span class='glyphicon glyphicon-ok'></span>  Amigo <b class=caret></b></button>
		<ul class=dropdown-menu>
		<a href='menu?exc=$dir'><input type='button' class='btn btn-danger btn-block' value='Desfazer amizade'></a>

		</form>
		</div>";
	}

	if($emailusuario==$email_proprio){
		echo("<div class='botao2'>
			<button class='btn btn-primary' data-toggle=dropdown>Responder solicitação<b class=caret></b></button>
			<ul class=dropdown-menu>
			<a href='menu?acc=$dir'><input type='button' class='btn btn-success btn-block' value='Aceitar'></a>
			<a href='menu?rec=$dir'><input type='button' class='btn btn-danger btn-block' value='Recusar'></a>

			</form>
			</div>");

	}

	else if($email_amigo==$emailusuario){
		echo "<div class='botao2'>
		<a href='menu?del=$dir'><input type='button' class='btn btn-danger' value='Cancelar solicitação'></a>
		</div>";
	}
	$seguidores=momentos_seguidores($emailusuario,$email_publicacao);
	
	if($seguidores!=$emailusuario){
		echo "<div class='botao5'>
		<a href='menu?seguir=$dir'><input type='button' class='btn btn-primary' value='acompanhar momentos'></a>
		</div>";
	}
	else if($seguidores==$emailusuario){
		echo "<div class='botao5'>
		<a href='menu?naoseguir=$dir'><input type='button' class='btn btn-danger' value='Não seguir momentos '></a>
		</div>";
	}
	echo "

	
	</div>
	</div>";
}

?>