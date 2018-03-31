<?php
	
   require_once "classe/dados.class.php";
   	$dados=new dados;

	$nome=$_POST["nome"];
	$dados->SetNome($nome);
    $nome_banco=$dados->GetNome();

	$senha=md5($_POST["senha"]);
	$dados->SetSenha($senha);
	$senha_banco=$dados->GetSenha();

	$data=$_POST["data"];
	//$ano=substr($data,0,4);
	//$dia=substr($data,8,9);
	//$mes=substr($data,4,4);
    //$data_formada='$dia$mes$ano';  

	$dados->SetData($data);
	$data_banco=$dados->GetData();

	$email=$_POST["email"];
	$dados->SetEmail($email);
	$email_banco=$dados->GetEmail();



?>