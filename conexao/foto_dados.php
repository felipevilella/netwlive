<?php
if(isset($_GET["3"])){
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

		update_capa($email,$tamanho1);
		

		$url = 'menu?1';
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

		echo("<script LANGUAGE=\"JavaScript\">
			alert(\"Foto alterado com sucesso.\");
			</SCRIPT>");
	}


}
if(isset($_GET["4"])){
	$email=$_SESSION['usuarioLogin'];
	$nome=$_SESSION["usuarioNome"];
	include_once 'classe/resize-class.php'; 
	require_once "conexao/funcoes.php";
	$caminho =caminho_foto($email);
	$caminho1="$caminho/";
	$imagem=$_FILES['foto']['name']; 

	$tamanho=strlen($imagem);

	if($tamanho>19){
			$url = 'menu?1';
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

		echo("<script LANGUAGE=\"JavaScript\">
			alert(\"Nome da foto está muito extenso, solicitamos que renomeie a foto.\");
			</SCRIPT>");
	}

   else{
	if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminho1 . $imagem)) { 

		$resize_tamanho1 = new resize($caminho1 . $imagem);
		$resize_tamanho1->resizeImage(512, 512, 'crop');
		$tamanho1 = "tamanho1_" . $imagem;
		$resize_tamanho1->saveImage($caminho1 . $tamanho1, 100);

		update_foto($email,$tamanho1);
		adicionar_foto_perfil($email,$tamanho1);

		$caminho_imagem="$caminho1$tamanho1";
		$publicacao="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$nome adicionou uma nova foto de perfil.";
		date_default_timezone_set('America/Sao_Paulo');
		$data = date('Y-m-d');
		$hora= date('H:i:s');
		$ano=substr($data,0,4);
		$dia=substr($data,8,9);
		$mes=substr($data,4,4);

		save_publicacao_imagem($email,$nome,$publicacao,$caminho_imagem,$ano,$dia,$mes,$hora);
		$id=save_tbl_publicacao_foto_amigo_id($publicacao,$caminho_imagem);
		save_tbl_publicacao_imagem_amigo($id,$usuario,$nome,$publicacao,$caminho_imagem,$data,$hora);

		$url = 'menu?1';
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

		echo("<script LANGUAGE=\"JavaScript\">
			alert(\"Foto alterado com sucesso.\");
			</SCRIPT>");
	}
}

}
?>