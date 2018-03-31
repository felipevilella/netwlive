<?php
$url_nome=url_pagina($usuario);
if(isset($_GET["7"])){
	$email=$_SESSION['usuarioLogin'];
	include_once 'classe/resize-class.php'; 
	require_once "conexao/funcoes.php";
	$caminho =caminho_foto($email);
	$caminho1="$caminho/";
	$imagem = $_FILES['foto']['name']; 

	if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminho1 . $imagem)) { 

		$resize_tamanho1 = new resize($caminho1 . $imagem);
		$resize_tamanho1->resizeImage(851, 315, 'crop');
		$tamanho1 = "tamanho1_" . $imagem;
		$resize_tamanho1->saveImage($caminho1 . $tamanho1, 100);

		update_capa_pagina($email,$tamanho1);
		

		$url = "$url_nome";
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

		echo("<script LANGUAGE=\"JavaScript\">
			alert(\"Foto alterado com sucesso.\");
			</SCRIPT>");
	}


}
if(isset($_GET["8"])){
	$email=$_SESSION['usuarioLogin'];
	$nome=$_SESSION["usuarioNome"];
	include_once 'classe/resize-class.php'; 
	require_once "conexao/funcoes.php";
	$caminho =caminho_foto($email);
	$caminho1="$caminho/";
	$imagem=$_FILES['foto']['name']; 

	$tamanho=strlen($imagem);

	if($tamanho>19){
		$url = "$url_nome";
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

		echo("<script LANGUAGE=\"JavaScript\">
			alert(\"Nome da foto está muito extenso, solicitamos que renomeie a foto.\");
			</SCRIPT>");
	}

	else{
		if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminho1 . $imagem)) { 

			$resize_tamanho1 = new resize($caminho1 . $imagem);
			$resize_tamanho1->resizeImage(512, 512, 'crop');
			$tamanho1 = "t_paginaamanho1_" . $imagem;
			$resize_tamanho1->saveImage($caminho1 . $tamanho1, 100);

			update_foto_pagina($email,$tamanho1);

			$url = "$url_nome";
			echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

			echo("<script LANGUAGE=\"JavaScript\">
				alert(\"Foto alterado com sucesso.\");
				</SCRIPT>");
		}
	}

}
?>