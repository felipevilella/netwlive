<?php

function usuario_existente($email){

	$comando="select * from usuarios where usuario='$email'";
	include("functions.php");      
	$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
	$aux=0;
	while ($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$email_usuario=$R["usuario"];
		if($email_usuario==$email){
			return true;
		}
		$aux++;
	}
} 


function usuario_nome($email){

	$comando="select * from usuarios where usuario='$email'";
	include("functions.php");      
	$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
	$aux=0;
	while ($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$nome=$R["nome"];
		
		return $nome;
		
		$aux++;
	}
}
function usuario_nome1($email){

	$comando="select * from usuarios where usuario='$email'";
	include("../functions.php");      
	$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
	$aux=0;
	while ($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$nome=$R["nome"];
		
		return $nome;
		
		$aux++;
	}
}
function usuario_capa($email){

	$comando="select * from usuarios where usuario='$email'";
	include("functions.php");      
	$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
	$aux=0;
	while ($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$fotocapa=$R["fotocapa"];
		return $fotocapa;
		
		$aux++;
	}

}
function usuario_perfil($email){

	$comando="select * from usuarios where usuario='$email'";
	include("functions.php");      
	$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
	$aux=0;
	while ($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$foto=$R["foto"];
		return $foto;
		
		$aux++;
	}

}
function usuario_perfil1($email){

	$comando="select * from usuarios where usuario='$email'";
	include("../functions.php");      
	$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
	$aux=0;
	while ($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$foto=$R["foto"];
		return $foto;
		
		$aux++;
	}

}
function caminho_foto($email){

	$comando="select * from usuarios where usuario='$email'";
	include("functions.php");      
	$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
	$aux=0;
	while ($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$pasta=$R["pasta"];

		return $pasta;
		
		$aux++;
	}
}
function caminho_foto1($email){

	$comando="select * from usuarios where usuario='$email'";
	include("../functions.php");      
	$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
	$aux=0;
	while ($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$pasta=$R["pasta"];

		return $pasta;
		
		$aux++;
	}
}
function update_capa($email,$foto){

	$comando="update usuarios set fotocapa='$foto' where usuario='$email'";
	include("functions.php");      
	mysql_query($comando,$conexao)or die("impossivel cadastrar");

}
function update_foto($email,$foto){

	$comando="update usuarios set foto='$foto' where usuario='$email'";
	include("functions.php");      
	mysql_query($comando,$conexao)or die("impossivel cadastrar");

}
function save_publicacao($email,$nome,$publicacao,$ano,$dia,$mes,$hora){
	$comando="insert into  netwpublicacao(usuario,nome,publicacao,data,hora) values('$email','$nome','$publicacao','$dia$mes$ano','$hora')";
	include("functions.php");
	mysql_query($comando,$conexao)or die("impossivel salvar publicacao");  
}
function save_tbl_publicacao_amigo_id($publicacao){
	$comando="select * from netwpublicacao where publicacao='$publicacao'";
	include("functions.php");
	$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
	$aux=0;
	while($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$id=$R["id"];
		return $id;
		$aux++;
	}
}
function save_tbl_publicacao_amigo($id,$email,$usuario,$nome,$publicacao,$data,$hora){

	$comando="select * from netwamigo where email='$email'";
	include("functions.php");
	$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
	$aux=0;
	while($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$emailamigo=$R["emailamigo"];

		$comando="select * from usuarios where usuario='$emailamigo'";
		include("functions.php");
		$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
		$aux1=0;
		while($aux1<mysql_num_rows($rs1)) {
			$R1=mysql_fetch_array($rs1);
			$idtabela=$R1["id"];

			$comando="insert into  netw$idtabela(id,usuario,nome,publicacao,data,hora) values('$id','$email','$nome','$publicacao','$data','$hora')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel enviar na tabela $idtabela");
			$aux1++; 
		}
		$aux++;

	}
}

function save_publicacao_imagem($email,$nome,$publicacao,$imagem,$ano,$dia,$mes,$hora){
	$comando="insert into  netwpublicacao(usuario,nome,publicacao,imagem,data,hora) values('$email','$nome','$publicacao','$imagem','$dia$mes$ano','$hora')";
	include("functions.php");
	mysql_query($comando,$conexao)or die("impossivel salvar publicacao");  
}


function save_tbl_publicacao_foto_amigo_id($publicacao,$imagem){

	$comando="select * from netwpublicacao where publicacao='$publicacao' and imagem='$imagem'";
	include("functions.php");
	$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
	$aux=0;
	while($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$id=$R["id"];
		return $id;
		$aux++;
	}

}
function save_tbl_publicacao_imagem_amigo($id,$email,$nome,$publicacao,$imagem,$data,$hora){
	
	$comando="select * from netwamigo where email='$email'";
	include("functions.php");
	$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
	$aux=0;

	while($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$emailamigo=$R["emailamigo"];

		$comando="select * from usuarios where usuario='$emailamigo'";
		include("functions.php");
		$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
		$aux1=0;
		while($aux1<mysql_num_rows($rs1)) {
			$R1=mysql_fetch_array($rs1);
			$idtabela=$R1["id"];

			$comando="insert into netw$idtabela(id,usuario,nome,publicacao,imagem,data,hora) values('$id','$email','$nome','$publicacao','$imagem','$data','$hora')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel enviar na tabela $idtabela");

			$aux1++; 
		}
		$aux++;

	}
}
function cadastro_de_usuarios($nome_banco,$email_banco,$senha_seguranca,$data_banco,$pathName){

	$comando="insert into usuarios(nome,usuario,senha,data,pasta) values('$nome_banco','$email_banco','$senha_seguranca','$data_banco','$pathName')";
	include("functions.php");
	mysql_query($comando,$conexao)or die("impossivel cadastrar");

}

function usuario_id($email){
	$comando="select * from usuarios where usuario='$email'";
	include("functions.php");
	$rs=mysql_query($comando,$conexao);
	$aux=0;
	while ($aux<mysql_num_rows($rs)) {
		$R=mysql_fetch_array($rs);
		$id=$R["id"];
		return $id;
		$aux++;
	}	
}
function table_id($id){

	$comando="create table netw$id(
		id_publicacao int primary key auto_increment,
		id int,
		usuario varchar(45)not null,
		nome varchar(60) ,
		publicacao varchar(9999),
		imagem varchar(9999),
		data varchar(40),
		hora varchar(40),
		emailamigo varchar(40),
		nomeamigo varchar(40),
		video varchar(500),
		curtidas int);";

		include("functions.php");
		mysql_query($comando,$conexao) or die("impossivel criar a tabela");
	}

	function dir_email($email){
		$comando="select * from usuarios where pasta like '%$email%'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel encotrar");
		$aux=0;



		while($aux<mysql_num_rows($rs)){
			
			$R=mysql_fetch_array($rs);
			$email_banco=$R["usuario"];

			return $email_banco;
			$aux++;
		}

	}
	function solicitacao_amigo($email,$emaildousuario){
		$comando="select * from solicitacao  where email='$email'";;
		include("functions.php");
		$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;

		while($aux<mysql_num_rows($rs)){
			$R=mysql_fetch_array($rs);

			$emailamigo=$R["emailamigo"];
			if($emailamigo==$emaildousuario){
				return $emailamigo;
			}
			$aux++;
		} 

	}
	function solicitacao_amigo1($email,$emailamigo){
		$comando="select * from solicitacao  where emailamigo='$email'";

		
		include("functions.php");
		$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;

		while($aux<mysql_num_rows($rs)){
			$R=mysql_fetch_array($rs);

			$email_1=$R["email"];
			if($email_1==$emailamigo){
				return $email_1;
			} 
			
			$aux++;
		} 

	}
	function enviar_solicitacao($email,$emailamigo){

		$comandov="insert into solicitacao(n,email,emailamigo) values('1','$emailamigo','$email')";
		include("functions.php");
		mysql_query($comandov,$conexao)or die("impossivel cadastrar");
		
	}

	function deletar_solicitacao($email,$emailamigo){

		$comandov="delete from solicitacao where email='$emailamigo' and emailamigo='$email'";
		include("functions.php");
		mysql_query($comandov,$conexao)or die("impossivel cadastrar");


		
	}
	function id_usuario($email){
		$comando="select * from usuarios where usuario='$email'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel encotrar");
		$aux=0;

		while($aux<mysql_num_rows($rs)){
			
			$R=mysql_fetch_array($rs);
			$id=$R["id"];

			return $id;
			$aux++;
		}
	}
	function adicionar_linha_tempo($id,$usuario){

		require_once("classe/publicacao.class.php");
		$dados=new publicacao();
		$comando="select * from netwpublicacao where usuario='$usuario' order by id desc";
		include("functions.php");
		$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
		$aux=0;

		$publicacao_banco=array();
		$nome_banco=array();
		$id_banco=array();
		$data_banco=array();
		$hora_banco=array();
		$imagem_banco=array();
		$emailamigo_banco=array();
		$nomeamigo_banco=array();


		while($aux<mysql_num_rows($rs)){
			$R=mysql_fetch_array($rs);

			$dados->SetPublicacao($R["publicacao"]);
			$dados->SetNome($R["nome"]);
			$dados->SetId($R["id"]);
			$dados->SetData($R["data"]);
			$dados->SetHora($R["hora"]);
			$dados->SetImagem($R["imagem"]);
			$dados->SetEmail_amigo($R["usuario"]);
			$dados->SetNome_amigo($R["nomeamigo"]);

			$publicacao_banco[$aux]=$dados->GetPublicacao();
			$nome_banco[$aux]=$dados->GetNome();
			$id_banco[$aux]=$dados->GetId();
			$data_banco[$aux]=$dados->GetData();
			$hora_banco[$aux]=$dados->GetHora();
			$imagem_banco[$aux]=$dados->GetImagem();
			$emailamigo[$aux]=$dados->GetEmail_amigo();
			$nomeamigo_banco[$aux]=$dados->GetNome_amigo();

			adicionar_linha_tempo_tabela($id,$id_banco[$aux],$emailamigo[$aux],$nome_banco[$aux],$publicacao_banco[$aux],$imagem_banco[$aux],$data_banco[$aux],$hora_banco[$aux]);


			$aux++;
		}
	}
	function adicionar_linha_tempo_tabela($idamigo,$id,$usuario,$nome,$publicacao,$imagem,$data,$hora){
		$comando="insert into netw$idamigo(id,usuario,nome,publicacao,imagem,data,hora)value('$id','$usuario','$nome','$publicacao','$imagem','$data','$hora')";
		include("functions.php");
		mysql_query($comando,$conexao);
	}
	function adicionar_amigo($email,$emailamigo){
		$comando="insert into netwamigo (email,emailamigo,cont)values('$email','$emailamigo','1')";
		include("functions.php");
		mysql_query($comando,$conexao);
	}
	function verificacao_amigo1($email,$emailamigo){
		$comando="select * from netwamigo  where emailamigo='$email' and email='$emailamigo'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;

		while($aux<mysql_num_rows($rs)){
			require_once("classe/dados.class.php");
			$dados=new dados();

			$R=mysql_fetch_array($rs);

			$dados->SetEmail($R["email"]);
			$email=$dados->GetEmail();

			return $email;
			$aux++;
		} 

	}
	function verificacao_amigo($email,$emailamigo){
		$comando="select * from netwamigo  where emailamigo='$email' and email='$emailamigo'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;

		while($aux<mysql_num_rows($rs)){
			require_once("classe/dados.class.php");
			$dados=new dados();

			$R=mysql_fetch_array($rs);

			$dados->SetEmail($R["emailamigo"]);
			$email=$dados->GetEmail();
			return $email;
			$aux++;
		} 

	}
	function usuario_amigo($dir){
		require_once"classe/dados.class.php";
		$dados= new dados();

		$comando="select * from usuarios where pasta like '%$dir%'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao);
		$aux=0;
		while($aux<mysql_num_rows($rs)){
			$R=mysql_fetch_array($rs);

			$dados->SetEmail($R["usuario"]);
			$Email_banco=$dados->GetEmail();

			return $Email_banco;

			$aux++;
		}
	}

	function deletar_amizade($email,$emailamigo){
		$comandov="delete from netwamigo where email='$emailamigo' and emailamigo='$email'";
		include("functions.php");
		mysql_query($comandov,$conexao)or die("impossivel cadastrar");
	}

	function deletar_amizade_publicacao($id,$email){
		$comandov="delete from netw$id where usuario='$email'";
		include("functions.php");
		mysql_query($comandov,$conexao)or die("impossivel cadastrar");
	}



	function contador_amigos($email){
		require_once"classe/dados.class.php";
		$dados= new dados();

		$comando="select count(email) from netwamigo where email='$email'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
		$aux=0;
		while($aux<mysql_num_rows($rs)){
			$R=mysql_fetch_array($rs);

			$dados->SetContador($R["count(email)"]);
			$Email_banco=$dados->GetContador();

			return $Email_banco;

			$aux++;
		}
	}
	function contador_solicitacao($email){
		require_once"classe/dados.class.php";
		$dados= new dados();

		$comando="select sum(n) from solicitacao where email='$email'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
		$aux=0;
		while($aux<mysql_num_rows($rs)){
			$R=mysql_fetch_array($rs);

			$dados->SetContador($R["sum(n)"]);
			$contador=$dados->GetContador();

			return $contador;

			$aux++;
		}
	}

	function online($email){
		date_default_timezone_set('America/Sao_Paulo');
		
		$data =date('Y-m-d');
		$hora= date('H:i:s');

		$comando="update  usuarios set estado='1',horario='$hora',dia='$data' where usuario='$email'";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function verificacao_online(){
		require_once"classe/dados.class.php";
		$dados= new dados();

		date_default_timezone_set('America/Sao_Paulo');
		$data_atual=date('Y-m-d');
		$hora=date('H:i:s');

		$dados->SetDia(substr($data_atual,8,10));
		$dia_atual=$dados->GetDia();

		$dados->SetHora(substr($hora,0,2));
		$hora_atual=$dados->GetHora();

		$dados->SetMinuto(substr($hora,3,2));
		$minuto_atual=$dados->GetMinuto();




		$comando="select * from usuarios where estado='1'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
		$aux=0;
		
		while($aux<mysql_num_rows($rs)){
			$R=mysql_fetch_array($rs);
			
			$dados->SetData($R["dia"]);
			$data=$dados->GetData();
			$dados->SetTempo($R["horario"]);
			$horario=$dados->GetTempo();
			$dados->SetEmail($R["usuario"]);
			$email_amigo=$dados->GetEmail();


			$dados->SetDia(substr($data,8,10));
			$dia=$dados->GetDia();

			$dados->SetHora(substr($horario,0,2));
			$hora=$dados->GetHora();

			$dados->SetMinuto(substr($horario,3,2));
			$minuto=$dados->GetMinuto();

			$dia_total=$dia_atual-$dia;
			$hora_total=$hora_atual-$hora;
			$minuto_total=$minuto_atual-$minuto;

			if($hora_total>=1 || $dia_total>=1){
				offline($email_amigo);
			}
			else if($hora_total==0 && $minuto_total>7 && $dia_total==0){
				offline($email_amigo);
			}

			$aux++;
		}
	}
	function verificacao_online1(){
		require_once"../classe/dados.class.php";
		$dados= new dados();

		date_default_timezone_set('America/Sao_Paulo');
		$data_atual=date('Y-m-d');
		$hora=date('H:i:s');

		$dados->SetDia(substr($data_atual,8,10));
		$dia_atual=$dados->GetDia();

		$dados->SetHora(substr($hora,0,2));
		$hora_atual=$dados->GetHora();

		$dados->SetMinuto(substr($hora,3,2));
		$minuto_atual=$dados->GetMinuto();




		$comando="select * from usuarios where estado='1'";
		include("../functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
		$aux=0;
		
		while($aux<mysql_num_rows($rs)){
			$R=mysql_fetch_array($rs);
			
			$dados->SetData($R["dia"]);
			$data=$dados->GetData();
			$dados->SetTempo($R["horario"]);
			$horario=$dados->GetTempo();
			$dados->SetEmail($R["usuario"]);
			$email_amigo=$dados->GetEmail();


			$dados->SetDia(substr($data,8,10));
			$dia=$dados->GetDia();

			$dados->SetHora(substr($horario,0,2));
			$hora=$dados->GetHora();

			$dados->SetMinuto(substr($horario,3,2));
			$minuto=$dados->GetMinuto();

			$dia_total=$dia_atual-$dia;
			$hora_total=$hora_atual-$hora;
			$minuto_total=$minuto_atual-$minuto;

			if($hora_total>=1 || $dia_total>=1){
				offline1($email_amigo);
			}
			else if($hora_total==0 && $minuto_total>7 && $dia_total==0){
				offline1($email_amigo);
			}

			$aux++;
		}
	}
	function offline($email){

		$comando="update  usuarios set estado='0' where usuario='$email'";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function offline1($email){

		$comando="update  usuarios set estado='0' where usuario='$email'";
		include("../functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function usuario_online($email){
		require_once"../classe/dados.class.php";
		$dados= new dados();

		$comando="select * from usuarios where usuario='$email'";
		include("../functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
		$aux=0;
		
		while($aux<mysql_num_rows($rs)){
			$R=mysql_fetch_array($rs);

			$dados->SetEstado($R["estado"]);
			$estado=$dados->GetEstado();

			return $estado;

			$aux++;
		}
	}
	function enviar_mensagem($email,$mensagem,$emailamigo){

		date_default_timezone_set('America/Sao_Paulo');
		$data = date('Y-m-d');
		$hora= date('H:i:s');
		$ano=substr($data,0,4);
		$dia=substr($data,8,9);
		$mes=substr($data,4,4);

		$comando="insert into netwchat(email,conversa,emailamigo,data,horario)values('$email','$mensagem','$emailamigo','$dia$mes$ano','$hora')";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");

	}
	function notificacao_chat($email,$mensagem,$emailamigo,$nome){

		$comando="insert into notechat(email,conversa,emailamigo,cont,nome)values('$email','$mensagem','$emailamigo','1','$nome')";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");

	}
	function contador_mensagem($email){
		require_once("../classe/dados.class.php");
		$dados=new dados();

		$comando="select sum(cont) from notechat where emailamigo='$email'";
		include("../functions.php");
		$rs1=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;
		while($aux<mysql_num_rows($rs1)){
			$R=mysql_fetch_array($rs1);
			$dados->SetContador($R["sum(cont)"]);
			$contador=$dados->GetContador();

			return $contador;

			$aux++;
		}
	}
	function contador_mensagem1($email,$emailamigo){

		$comando="select sum(cont) from notechat where emailamigo='$email' and email='$emailamigo'";
		include("functions.php");
		$rs1=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;
		while($aux<mysql_num_rows($rs1)){
			$R=mysql_fetch_array($rs1);
			$contador=$R["sum(cont)"];

			return $contador;

			$aux++;
		}
	}
	function contador_email($email,$emailamigo){

		$comando="select * from notechat where emailamigo='$email' and email='$emailamigo' and cont='1'";
		include("functions.php");
		$rs1=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;
		while($aux<mysql_num_rows($rs1)){
			$R=mysql_fetch_array($rs1);
			$email=$R["emailamigo"];

			return $email;

			$aux++;
		}
	}
	function mensagem_lida($email,$emailamigo){
		$comando="update notechat set cont='0' where emailamigo='$email' and email='$emailamigo'";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function adicionar_comentario($id,$comentario,$email){

		date_default_timezone_set('America/Sao_Paulo');
		$data = date('Y-m-d');
		$hora= date('H:i:s');
		$ano=substr($data,0,4);
		$dia=substr($data,8,9);
		$mes=substr($data,4,4);


		$comando="insert into netwcomentario(id,comentario,email,data,hora) values('$id','$comentario','$email','$dia$mes$ano','$hora')";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function notificacao_comentario($id,$email,$emailamigo){

		$comando="insert into netwnotificacao(id_postagem,emailamigo,texto,contador,email) values('$id','$email','comentou na sua publicacao','1','$emailamigo')";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function id_publicacao($id){
		$comando="select * from netwcomentario where id_postagem='$id'";
		include("functions.php");
		$rs1=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;
		while($aux<mysql_num_rows($rs1)){
			$R=mysql_fetch_array($rs1);
			$id_publicacao=$R["id"];
			return $id_publicacao;
			$aux++;
		}
	}
	function delete_comentario($id){

		$comando="delete from netwcomentario where id_postagem='$id'";

		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function delete_publicacao($id){

		$comando="delete from netwpublicacao where id='$id'";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");


	}
	function delete_comentario_publicacao($id){
		$comando="delete from netwcomentario where id='$id'";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function curtidaspostagem($id,$email){

		$comando="insert into curtidaspostagem(id_publicacao,tipo,email,contador) values('$id','1','$email','1')";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function descurtidaspostagem($id,$email){

		$comando="insert into curtidaspostagem(id_publicacao,tipo,email,contador) values('$id','0','$email','1')";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function descurtir($id,$email){

		$comando="delete from curtidaspostagem  where id_publicacao='$id' and email='$email'";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}

	function contadorcurtidas($id){
		require_once("classe/dados.class.php");
		$dados=new dados();

		$comando="select sum(contador) from curtidaspostagem where id_publicacao='$id' and tipo='1'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
		$aux2=0;
		$contador=0;
		while ($aux2<= mysql_num_rows($rs)) {
			$R=mysql_fetch_array($rs);
			$dados->SetContador($R["sum(contador)"]);
			$contador=$dados->GetContador();

			return $contador;

			$aux2++;
		}
	}
	function contadordescurtidas($id){
		require_once("classe/dados.class.php");
		$dados=new dados();

		$comando="select sum(contador) from curtidaspostagem where id_publicacao='$id' and tipo='0'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
		$aux2=0;
		$contador=0;
		while ($aux2<mysql_num_rows($rs)) {
			$R=mysql_fetch_array($rs);
			$dados->SetContador($R["sum(contador)"]);
			$contador=$dados->GetContador();

			return $contador;

			$aux2++;
		}
	}
	function emailcurtida($email,$id){

		require_once("classe/dados.class.php");
		$dados=new dados();

		$comando="select * from curtidaspostagem where id_publicacao='$id' and email='$email' and tipo='1'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
		$aux=0;
		$contador=0;
		while ($aux<mysql_num_rows($rs)) {
			$R=mysql_fetch_array($rs);
			$dados->SetEmail($R["email"]);
			$email=$dados->GetEmail();

			return $email;

			$aux++;
		}
	}
	function emaildescurtida($email,$id){

		require_once("classe/dados.class.php");
		$dados=new dados();

		$comando="select * from curtidaspostagem where id_publicacao='$id' and email='$email' and tipo='0'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
		$aux=0;
		$contador=0;
		while ($aux<mysql_num_rows($rs)) {
			$R=mysql_fetch_array($rs);
			$dados->SetEmail($R["email"]);
			$email=$dados->GetEmail();

			return $email;

			$aux++;
		}
	}
	function notificacao_curtida($email,$id,$emailamigo){
		$comando="insert into netwnotificacao(id_postagem,emailamigo,texto,contador,email) values('$id','$email','Gostou da sua publicação','1','$emailamigo')";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function notificacao_descurtida($email,$id,$emailamigo){
		$comando="insert into netwnotificacao(id_postagem,emailamigo,texto,contador,email) values('$id','$email',' Não gostou da sua publicação','1','$emailamigo')";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function notificacao_descurtir($id,$email){

		$comando="delete from netwnotificacao  where id_postagem='$id' and emailamigo='$email'";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function excluir_comentario($id,$email){

		$comando="delete from netwnotificacao  where id_postagem='$id' and texto='Comentou na sua publicacao' and emailamigo='$email'";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}

	function emailpublicacao($id){

		require_once("classe/dados.class.php");
		$dados=new dados();

		$comando="select * from  netwpublicacao where id='$id'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
		$aux=0;
		$contador=0;
		while ($aux<mysql_num_rows($rs)) {
			$R=mysql_fetch_array($rs);
			$dados->SetEmail($R["usuario"]);
			$email=$dados->GetEmail();

			return $email;

			$aux++;
		}
	}

	function contador_notificacao($email){
		require_once("../classe/dados.class.php");
		$dados=new dados();

		$comando="select sum(contador) from netwnotificacao where email='$email'";
		include("../functions.php");
		$rs1=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;
		while($aux<mysql_num_rows($rs1)){
			$R=mysql_fetch_array($rs1);
			$dados->SetContador($R["sum(contador)"]);
			$contador=$dados->GetContador();

			return $contador;

			$aux++;
		}
	}
	function contador_notificacao1($email,$emailamigo){

		$comando="select sum(contador) from netwnotificacao where email='$email' and emailamigo='$emailamigo'";
		include("functions.php");
		$rs1=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;
		while($aux<mysql_num_rows($rs1)){
			$R=mysql_fetch_array($rs1);
			$contador=$R["sum(contador)"];

			return $contador;

			$aux++;
		}
	}
	function update_notificacao($id){

		$comando="update netwnotificacao set contador='0' where id_postagem='$id'";
		include("functions.php");      
		mysql_query($comando,$conexao)or die("impossivel cadastrar");

	}
	function usuario_data($email){

		$comando="select * from usuarios where usuario='$email'";
		include("functions.php");      
		$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
		$aux=0;
		while ($aux<mysql_num_rows($rs)) {
			$R=mysql_fetch_array($rs);
			$data=$R["data"];

			return $data;

			$aux++;
		}
	}
	function adicionar_sobre($email,$cidade,$formacao,$genero,$sobre,$trabalho){

		$comando="insert into sobre(email,cidade,formacao,genero,sobre,trabalho)values('$email','$cidade','$formacao','$genero','$sobre','$trabalho')";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");

	}
	function adicionar_sobre1($email,$cidade,$formacao,$genero,$sobre,$trabalho){

		$comando="update sobre set cidade='$cidade',formacao='$formacao',genero='$genero',sobre='$sobre',trabalho='$trabalho' where email='$email'";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");

	}
	function adicionar_foto($usuario,$foto){
		$comando="insert into netwfoto(usuario,foto)values('$usuario','$foto')";

		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}


	function adicionar_foto_perfil($usuario,$foto){
		$diretorio=caminho_foto($usuario);
		$imagem="$diretorio/$foto";
		$comando="insert into netwfoto(usuario,foto)values('$usuario','$imagem')";

		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function excluir_publicacao_notificacao($id){

		$comando="delete from netwnotificacao  where id_postagem='$id'";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}

	function momento($email){
		$comando="select * from momentos where email='$email'";
		include("functions.php");
		$rs=mysql_query($comando,$conexao) or die("impossivel localizar");
		$aux=0;
		while ($aux<mysql_num_rows($rs)) {
			$R=mysql_fetch_array($rs);
			$email=$R["email"];

			return $email;
		}
	}
	function criar_momento($nome,$email){
		$comando="insert into momentos(nome,email)values('$nome','$email')";
		include("functions.php");
		mysql_query($comando,$conexao)or die("impossivel cadastrar");
	}
	function table_momento_id($id){

		$comando="create table netwmomento$id(
			id_publicacao int primary key auto_increment,
			id int,
			usuario varchar(45)not null,
			nome varchar(60) ,
			publicacao varchar(9999),
			imagem varchar(1000),
			data varchar(40),
			hora varchar(40),
			video varchar(2000),
			tipo int,
			emailamigo varchar(40),
			nomeamigo varchar(40),
			curtidas int);";


			include("functions.php");
			mysql_query($comando,$conexao) or die("impossivel criar a tabela");
		}
		function save_publicacao_momento($email,$nome,$publicacao,$ano,$dia,$mes,$hora,$tipo){
			$comando="insert into publicacao_momentos(usuario,nome,publicacao,data,hora,tipo) values('$email','$nome','$publicacao','$dia$mes$ano','$hora','$tipo')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel salvar publicacao");  
		}
		function save_publicacao_video_momento($email,$nome,$publicacao,$ano,$dia,$mes,$hora,$tipo,$texto){
			$comando="insert into publicacao_momentos(usuario,nome,video,data,hora,tipo,publicacao) values('$email','$nome','$publicacao','$dia$mes$ano','$hora','$tipo','$texto')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel salvar publicacao");  
		}
		function save_publicacao_momento_imagem($email,$nome,$publicacao,$imagem,$ano,$dia,$mes,$hora,$tipo){
			$comando="insert into publicacao_momentos(usuario,nome,publicacao,imagem,data,hora,tipo) values('$email','$nome','$publicacao','$imagem','$dia$mes$ano','$hora','$tipo')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel salvar publicacao");  
		}





		function save_tbl_publicacao_momentos_amigo_id($publicacao){
			$comando="select * from publicacao_momentos where publicacao='$publicacao'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;
			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$id=$R["id"];
				return $id;
				$aux++;
			}
		}
		function save_tbl_publicacao_momentos_amigo_video_id($publicacao){
			$comando="select * from publicacao_momentos where video='$publicacao'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;
			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$id=$R["id"];
				return $id;
				$aux++;
			}
		}
		function save_tbl_publicacao_momentos_amigo($id,$email,$usuario,$nome,$publicacao,$data,$hora,$tipo){

			$comando="select * from momentos_seguidores where email='$email'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux3=0;
			while($aux3<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$emailamigo=$R["email_amigo"];

				$comando="select * from usuarios where usuario='$emailamigo'";
				include("functions.php");
				$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
				$aux1=0;
				while($aux1<mysql_num_rows($rs1)) {
					$R1=mysql_fetch_array($rs1);
					$idtabela=$R1["id"];

					$comando="insert into  netwmomento$idtabela(id,usuario,nome,publicacao,data,hora,tipo) values('$id','$email','$nome','$publicacao','$data','$hora','$tipo')";
					include("functions.php");
					mysql_query($comando,$conexao)or die("impossivel enviar na tabela $idtabela");
					$aux1++; 
				}
				$aux3++;

			}
		}
		function save_tbl_publicacao_momento_imagem_amigo($id,$email,$nome,$publicacao,$imagem,$data,$hora,$tipo){

			$comando="select * from momentos_seguidores where email='$email'";

			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;

			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$emailamigo=$R["email_amigo"];

				$comando="select * from usuarios where usuario='$emailamigo'";
				include("functions.php");
				$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
				$aux1=0;
				while($aux1<mysql_num_rows($rs1)) {
					$R1=mysql_fetch_array($rs1);
					$idtabela=$R1["id"];

					if($aux1<1){

						$comando="insert into netwmomento$idtabela(id,usuario,nome,publicacao,imagem,data,hora,tipo)  values('$id','$email','$nome','$publicacao','$imagem','$data','$hora','$tipo')";

						include("functions.php");
						mysql_query($comando,$conexao)or die("impossivel enviar na tabela $idtabela");
					}

					$aux1++; 
				}
				$aux++;

			}
		}

		function save_tbl_publicacao_mvideo_amigo($id,$email,$usuario,$nome,$publicacao,$data,$hora,$tipo,$texto){

			$comando="select * from momentos_seguidores where email='$email'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;
			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$emailamigo=$R["email_amigo"];

				$comando="select * from usuarios where usuario='$emailamigo'";
				include("functions.php");
				$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
				$aux1=0;
				while($aux1<mysql_num_rows($rs1)) {
					$R1=mysql_fetch_array($rs1);
					$idtabela=$R1["id"];

					$comando="insert into  netwmomento$idtabela(id,usuario,nome,video,data,hora,tipo,publicacao) values('$id','$email','$nome','$publicacao','$data','$hora','$tipo','$texto')";
					include("functions.php");
					mysql_query($comando,$conexao)or die("impossivel enviar na tabela $idtabela");
					$aux1++; 
				}
				$aux++;

			}
		}
		function contador_seguidores($email){

			$comando="select count(email) from momentos_seguidores where email='$email'";
			include("functions.php");      
			$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$contador=$R["count(email)"];

				return $contador;

				$aux++;
			}
		}
		function contador_publicacao($email){

			$comando="select count(publicacao) from publicacao_momentos where usuario='$email'";
			include("functions.php");      
			$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$contador=$R["count(publicacao)"];

				return $contador;

				$aux++;
			}
		}
		function momentos_seguidores($email,$emailamigo){
			$comando="select * from momentos_seguidores where email_amigo='$email'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao) or die("impossivel localizar");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$email1=$R["email"];
				if($email1==$emailamigo){
					return $email;
				}
				$aux++;
			}
		}
		function seguir($email,$emailamigo){

			$comandov="insert into momentos_seguidores(n,email,email_amigo) values('1','$emailamigo','$email')";
			include("functions.php");
			mysql_query($comandov,$conexao)or die("impossivel cadastrar");

		}

		function naoseguir($email,$emailamigo){

			$comandov="delete from momentos_seguidores where email='$emailamigo' and email_amigo='$email'";
			include("functions.php");
			mysql_query($comandov,$conexao)or die("impossivel cadastrar");



		}
		function adicionar_linha_tempo_momentos($id,$usuario){

			require_once("classe/publicacao.class.php");
			$dados=new publicacao();
			$comando="select * from publicacao_momentos where usuario='$usuario' order by id desc";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
			$aux=0;

			$publicacao_banco=array();
			$nome_banco=array();
			$id_banco=array();
			$data_banco=array();
			$hora_banco=array();
			$imagem_banco=array();
			$video_banco=array();
			$tipo_banco=array();


			while($aux<mysql_num_rows($rs)){
				$R=mysql_fetch_array($rs);

				$dados->SetPublicacao($R["publicacao"]);
				$dados->SetNome($R["nome"]);
				$dados->SetId($R["id"]);
				$dados->SetData($R["data"]);
				$dados->SetHora($R["hora"]);
				$dados->SetImagem($R["imagem"]);
				$dados->SetTipo($R["tipo"]);
				$dados->SetVideo($R["video"]);

				$publicacao_banco[$aux]=$dados->GetPublicacao();
				$nome_banco[$aux]=$dados->GetNome();
				$id_banco[$aux]=$dados->GetId();
				$data_banco[$aux]=$dados->GetData();
				$hora_banco[$aux]=$dados->GetHora();
				$imagem_banco[$aux]=$dados->GetImagem();
				$video_banco[$aux]=$dados->GetVideo();
				$tipo_banco[$aux]=$dados->GetTipo();


				adicionar_linha_tempo_tabela_momentos($id,$id_banco[$aux],$usuario,$nome_banco[$aux],$publicacao_banco[$aux],$imagem_banco[$aux],$data_banco[$aux],$hora_banco[$aux],$tipo_banco[$aux],$video_banco[$aux]);


				$aux++;
			}
		}
		function adicionar_linha_tempo_tabela_momentos($idamigo,$id,$usuario,$nome,$publicacao,$imagem,$data,$hora,$tipo,$video){
			$comando="insert into netwmomento$idamigo(id,usuario,nome,publicacao,imagem,data,hora,tipo,video)value('$id','$usuario','$nome','$publicacao','$imagem','$data','$hora','$tipo','$video')";
			include("functions.php");
			mysql_query($comando,$conexao);
		}
		

		function excluir_publicacao_momentos($id){

			$comando="delete from publicacao_momentos  where id='$id'";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel cadastrar");
		}

		function excluir_publicacao_momentos_amigos($id,$email){


			$comando="select * from momentos_seguidores where email='$email'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;
			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$emailamigo=$R["email_amigo"];

				$comando="select * from usuarios where usuario='$emailamigo'";
				include("functions.php");
				$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
				$aux1=0;
				while($aux1<mysql_num_rows($rs1)) {
					$R1=mysql_fetch_array($rs1);
					$idtabela=$R1["id"];

					$comando="delete  from  netwmomento$idtabela where id='$id'";
					include("functions.php");
					mysql_query($comando,$conexao)or die("impossivel enviar na tabela $idtabela");
					$aux1++; 
				}
				$aux++;

			}
		}
		function delete_linha_tempo($idamigo,$usuario){
			$comando="delete from  netwmomento$idamigo where usuario='$usuario'";
			include("functions.php");
			mysql_query($comando,$conexao);
		}
		function contador_seguidores_amigo($email){

			$comando="select count(email_amigo) from momentos_seguidores where email_amigo='$email'";
			include("functions.php");      
			$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar1");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$contador=$R["count(email_amigo)"];

				return $contador;

				$aux++;
			}
		}
		function contador_publicacao_amigo($id){

			$comando="select count(id) from netwmomento$id";
			include("functions.php");      
			$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar2");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$contador=$R["count(id)"];

				return $contador;

				$aux++;
			}
		}
		function deletar_foto($id){
			$comando="delete from  netwfoto where id='$id'";
			include("functions.php");
			mysql_query($comando,$conexao);
		}
		function update_nome($email,$nome){

			$comando="update usuarios set nome='$nome' where usuario='$email'";
			include("functions.php");      
			mysql_query($comando,$conexao)or die("impossivel cadastrar");

		}
		function update_nome_publicacao($email,$nome){

			$comando="update netwpublicacao set nome='$nome' where usuario='$email'";
			include("functions.php");      
			mysql_query($comando,$conexao)or die("impossivel cadastrar");

		}
		function update_nome_publicacao_amigos($email,$nome){


			$comando="select * from netwamigo where email='$email'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;
			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$emailamigo=$R["emailamigo"];

				$comando="select * from usuarios where usuario='$emailamigo'";
				include("functions.php");
				$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
				$aux1=0;
				while($aux1<mysql_num_rows($rs1)) {
					$R1=mysql_fetch_array($rs1);
					$idtabela=$R1["id"];

					$comando1="update netw$idtabela set nome='$nome' where usuario='$email'";


					include("functions.php");
					mysql_query($comando1,$conexao)or die("impossivel enviar na tabela $idtabela");
					$aux1++; 
				}
				$aux++;

			}
		}
		function alterar_senha_login($email,$senha){

			$comando="update usuarios set senha='$senha' where usuario='$email'";
			include("functions.php"); 
			
			mysql_query($comando,$conexao)or die("erro ao alterar a senha");
		}
		function link_desativado($email){
			$comando="update solicitacao_senha set validar='0' where usuario='$email'";
			include("functions.php");
			 
			mysql_query($comando,$conexao)or die("erro ao alterar a senha");
		}

		#################### pagina ####################################################

		function nome_pagina($email){
			$comando="select * from pagina where email='$email'";
			include("functions.php");      
			$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$nome=$R["nome"];

				return $nome;

				$aux++;
			}
		}
		function url_pagina($email){
			$comando="select * from pagina where email='$email'";
			include("functions.php");      
			$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$url=$R["url"];

				return $url;

				$aux++;
			}
		}
		function url_pagina_criacao($nome){
			$comando="select * from pagina where url='$nome'";
			include("functions.php");      
			$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$url=$R["url"];

				return $url;

				$aux++;
			}
		}

		function usuario_capa_pagina($email){

			$comando="select * from pagina where email='$email'";
			include("functions.php");      
			$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$fotocapa=$R["capa"];
				return $fotocapa;

				$aux++;
			}

		}
		function usuario_perfil_capa($email){

			$comando="select * from pagina where email='$email'";
			include("functions.php");      
			$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$foto=$R["foto"];
				return $foto;

				$aux++;
			}

		}
		function save_publicacao_pagina($email,$nome,$publicacao,$ano,$dia,$mes,$hora){
			$comando="insert into publicacao_pagina(usuario,nome,publicacao,data,hora) values('$email','$nome','$publicacao','$dia$mes$ano','$hora')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel salvar publicacao");  
		}
		function save_tbl_publicacao_pagina_amigo_id($publicacao){
			$comando="select * from publicacao_pagina where publicacao='$publicacao'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;
			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$id=$R["id"];
				return $id;
				$aux++;
			}
		}
		function save_publicacao_pagina_imagem($email,$nome,$publicacao,$imagem,$ano,$dia,$mes,$hora){
			$comando="insert into publicacao_pagina(usuario,nome,publicacao,imagem,data,hora) values('$email','$nome','$publicacao','$imagem','$dia$mes$ano','$hora')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel salvar publicacao");  
		}
		function save_tbl_publicacao_seguidores($id,$email,$usuario,$nome,$publicacao,$data,$hora){

			$comando="select * from pagina_seguidores where email='$email'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;
			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$emailamigo=$R["email_amigo"];

				$comando="select * from usuarios where usuario='$emailamigo'";
				include("functions.php");
				$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
				$aux1=0;
				while($aux1<mysql_num_rows($rs1)) {
					$R1=mysql_fetch_array($rs1);
					$idtabela=$R1["id"];

					$comando="insert into  netw$idtabela(id,usuario,nome,publicacao,data,hora) values('$id','$email','$nome','$publicacao','$data','$hora')";
					include("functions.php");
					mysql_query($comando,$conexao)or die("impossivel enviar na tabela $idtabela");
					$aux1++; 
				}
				$aux++;

			}
		}
		function save_tbl_publicacao_imagem_seguidores($id,$email,$nome,$publicacao,$imagem,$data,$hora){

			$comando="select * from pagina_seguidores where email='$email'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;

			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$emailamigo=$R["email_amigo"];

				$comando="select * from usuarios where usuario='$emailamigo'";
				include("functions.php");
				$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
				$aux1=0;
				while($aux1<mysql_num_rows($rs1)) {
					$R1=mysql_fetch_array($rs1);
					$idtabela=$R1["id"];

					$comando="insert into netw$idtabela(id,usuario,nome,publicacao,imagem,data,hora) values('$id','$email','$nome','$publicacao','$imagem','$data','$hora')";
					include("functions.php");
					mysql_query($comando,$conexao)or die("impossivel enviar na tabela $idtabela");

					$aux1++; 
				}
				$aux++;

			}
		}
		function contadorcurtidaspagina($id){
			require_once("classe/dados.class.php");
			$dados=new dados();

			$comando="select sum(contador) from curtidaspostagem_pagina where id_publicacao='$id' and tipo='1'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
			$aux2=0;
			$contador=0;
			while ($aux2<= mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$dados->SetContador($R["sum(contador)"]);
				$contador=$dados->GetContador();

				return $contador;

				$aux2++;
			}
		}
		function contadordescurtidaspagina($id){
			require_once("classe/dados.class.php");
			$dados=new dados();

			$comando="select sum(contador) from curtidaspostagem_pagina where id_publicacao='$id' and tipo='0'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
			$aux2=0;
			$contador=0;
			while ($aux2<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$dados->SetContador($R["sum(contador)"]);
				$contador=$dados->GetContador();

				return $contador;

				$aux2++;
			}
		}
		function emailcurtidapagina($email,$id){

			require_once("classe/dados.class.php");
			$dados=new dados();

			$comando="select * from curtidaspostagem_pagina where id_publicacao='$id' and email='$email' and tipo='1'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
			$aux=0;
			$contador=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$dados->SetEmail($R["email"]);
				$email=$dados->GetEmail();

				return $email;

				$aux++;
			}
		}
		function emaildescurtidapagina($email,$id){

			require_once("classe/dados.class.php");
			$dados=new dados();

			$comando="select * from curtidaspostagem_pagina where id_publicacao='$id' and email='$email' and tipo='0'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao) or die("impossivel conectar");
			$aux=0;
			$contador=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$dados->SetEmail($R["email"]);
				$email=$dados->GetEmail();

				return $email;

				$aux++;
			}
		}
		function adicionar_comentario_pagina($id,$comentario,$email){

			date_default_timezone_set('America/Sao_Paulo');
			$data = date('Y-m-d');
			$hora= date('H:i:s');
			$ano=substr($data,0,4);
			$dia=substr($data,8,9);
			$mes=substr($data,4,4);


			$comando="insert into netwcomentario_pagina(id,comentario,email,data,hora) values('$id','$comentario','$email','$dia$mes$ano','$hora')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel cadastrar");
		}
		function id_publicacao_pagina($id){
			$comando="select * from netwcomentario_pagina where id_postagem='$id'";
			include("functions.php");
			$rs1=mysql_query($comando,$conexao)or die("impossivel cadastrar");
			$aux=0;
			while($aux<mysql_num_rows($rs1)){
				$R=mysql_fetch_array($rs1);
				$id_publicacao=$R["id"];
				return $id_publicacao;
				$aux++;
			}
		}
		function delete_comentario_pagina($id){

			$comando="delete from netwcomentario_pagina where id_postagem='$id'";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel cadastrar");
		}
		function curtidaspostagem_pagina($id,$email){

			$comando="insert into curtidaspostagem_pagina(id_publicacao,tipo,email,contador) values('$id','1','$email','1')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel cadastrar");
		}
		function descurtidaspostagem_pagina($id,$email){

			$comando="insert into curtidaspostagem_pagina(id_publicacao,tipo,email,contador) values('$id','0','$email','1')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel cadastrar");
		}
		function descurtir_pagina($id,$email){

			$comando="delete from curtidaspostagem_pagina  where id_publicacao='$id' and email='$email'";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel cadastrar");
		}
		function save_publicacao_video_pagina($email,$nome,$publicacao,$ano,$dia,$mes,$hora,$texto){
			$comando="insert into publicacao_pagina(usuario,nome,video,data,hora,publicacao) values('$email','$nome','$publicacao','$dia$mes$ano','$hora','$texto')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel salvar publicacao");  
		}
		function save_tbl_publicacao_pagina_amigo_video_id($publicacao){
			$comando="select * from publicacao_pagina where video='$publicacao'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;
			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$id=$R["id"];
				return $id;
				$aux++;
			}
		}
		function save_tbl_publicacao_video_seguidores($id,$email,$nome,$publicacao,$video,$data,$hora){

			$comando="select * from pagina_seguidores where email='$email'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;

			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$emailamigo=$R["email_amigo"];

				$comando="select * from usuarios where usuario='$emailamigo'";
				include("functions.php");
				$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
				$aux1=0;
				while($aux1<mysql_num_rows($rs1)) {
					$R1=mysql_fetch_array($rs1);
					$idtabela=$R1["id"];

					$comando="insert into netw$idtabela(id,usuario,nome,publicacao,video,data,hora) values('$id','$email','$nome','$publicacao','$video','$data','$hora')";
					include("functions.php");
					mysql_query($comando,$conexao)or die("impossivel enviar na tabela $idtabela");

					$aux1++; 
				}
				$aux++;

			}
		}
		function cria_pagina($nome,$url,$email){
			$comando="insert into pagina(email,nome,url) values('$email','$nome','$url')";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel salvar publicacao");  
		}
		function update_capa_pagina($email,$foto){

			$comando="update pagina set capa='$foto' where email='$email'";
			include("functions.php");      
			mysql_query($comando,$conexao)or die("impossivel cadastrar");

		}
		function update_foto_pagina($email,$foto){

			$comando="update pagina set foto='$foto' where email='$email'";
			include("functions.php");      
			mysql_query($comando,$conexao)or die("impossivel cadastrar");

		}
		function pagina_seguidores($email,$emailamigo){
			$comando="select * from pagina_seguidores where email_amigo='$email'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao) or die("impossivel localizar");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$email1=$R["email"];
				if($email1==$emailamigo){
					return $email;
				}
				$aux++;
			}
		}
		function seguir_pagina($email,$emailamigo){

			$comandov="insert into pagina_seguidores(n,email,email_amigo) values('1','$emailamigo','$email')";
			include("functions.php");
			mysql_query($comandov,$conexao)or die("impossivel cadastrar");

		}

		function naoseguir_pagina($email,$emailamigo){

			$comandov="delete from pagina_seguidores where email='$emailamigo' and email_amigo='$email'";
			include("functions.php");
			mysql_query($comandov,$conexao)or die("impossivel cadastrar");



		}
		function adicionar_linha_tempo_pagina($id,$usuario){

			require_once("classe/publicacao.class.php");
			$dados=new publicacao();
			$comando="select * from publicacao_pagina where usuario='$usuario' order by id desc";

			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
			$aux=0;

			$publicacao_banco=array();
			$nome_banco=array();
			$id_banco=array();
			$data_banco=array();
			$hora_banco=array();
			$imagem_banco=array();
			$video_banco=array();
			$tipo_banco=array();


			while($aux<mysql_num_rows($rs)){
				$R=mysql_fetch_array($rs);

				$dados->SetPublicacao($R["publicacao"]);
				$dados->SetNome($R["nome"]);
				$dados->SetId($R["id"]);
				$dados->SetData($R["data"]);
				$dados->SetHora($R["hora"]);
				$dados->SetImagem($R["imagem"]);
				$dados->SetTipo($R["tipo"]);
				$dados->SetVideo($R["video"]);

				$publicacao_banco[$aux]=$dados->GetPublicacao();
				$nome_banco[$aux]=$dados->GetNome();
				$id_banco[$aux]=$dados->GetId();
				$data_banco[$aux]=$dados->GetData();
				$hora_banco[$aux]=$dados->GetHora();
				$imagem_banco[$aux]=$dados->GetImagem();
				$video_banco[$aux]=$dados->GetVideo();
				$tipo_banco[$aux]=$dados->GetTipo();


				adicionar_linha_tempo_tabela_pagina($id,$id_banco[$aux],$usuario,$nome_banco[$aux],$publicacao_banco[$aux],$imagem_banco[$aux],$data_banco[$aux],$hora_banco[$aux],$video_banco[$aux]);



				$aux++;
			}
		}
		function adicionar_linha_tempo_tabela_pagina($idamigo,$id,$usuario,$nome,$publicacao,$imagem,$data,$hora,$video){
			$comando="insert into netw$idamigo(id,usuario,nome,publicacao,imagem,data,hora,video)value('$id','$usuario','$nome','$publicacao','$imagem','$data','$hora','$video')";
			
			include("functions.php");
			mysql_query($comando,$conexao);
		}
		function excluir_publicacao_pagina_amigos($email,$nome){


			$comando="select * from pagina_seguidores where email_amigo='$email'";
			include("functions.php");
			$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
			$aux=0;
			while($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$emailamigo=$R["email_amigo"];

				$comando="select * from usuarios where usuario='$emailamigo'";
				include("functions.php");
				$rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
				$aux1=0;
				while($aux1<mysql_num_rows($rs1)) {
					$R1=mysql_fetch_array($rs1);
					$idtabela=$R1["id"];

					$comando2="delete  from  netw$idtabela where nome='$nome'";
					include("functions.php");
					mysql_query($comando2,$conexao)or die("impossivel enviar na tabela $idtabela");
					$aux1++; 
				}
				$aux++;

			}
		}
		function contador_seguidores_pagina($email){

			$comando="select count(email_amigo) from pagina_seguidores where email='$email'";
			include("functions.php");      
			$rs=mysql_query($comando,$conexao)or die("impossivel cadastrar1");
			$aux=0;
			while ($aux<mysql_num_rows($rs)) {
				$R=mysql_fetch_array($rs);
				$contador=$R["count(email_amigo)"];

				return $contador;

				$aux++;
			}
		}
		function delete_publicacao_pagina($id){

			$comando="delete from publicacao_pagina where id='$id'";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel cadastrar");


		}
		function delete_comentario_publicacao_pagina($id){
			$comando="delete from netwcomentario_pagina where id='$id'";
			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel cadastrar");
		}
		function adicionar_foto_pagina($usuario,$foto){
	
			$comando="insert into netwfotopagina(usuario,fotocapa)values('$usuario','$foto')";

			include("functions.php");
			mysql_query($comando,$conexao)or die("impossivel cadastrar");
		}
		function deletar_foto_pagina($id){
			$comando="delete from  netwfotopagina where id='$id'";
			include("functions.php");
			mysql_query($comando,$conexao);
		}


		?>
