create database netwlive;
	use netwlive;


	create table usuarios(
		id int(10) unsigned not null auto_increment primary key,
		nome varchar(45),
		usuario varchar(45) not null unique  ,
		senha varchar(12),
		data varchar(45),
		sexo varchar(1),
		foto varchar(100),
		estado varchar(1),
		fotocapa varchar(100),
		status_de_relacionamento varchar(30),
		pasta varchar(100),
		horario varchar(40),
		dia varchar(40),
		formacao varchar(40)
		);


	create table netwfoto(
		id int(10) unsigned not null auto_increment primary key,
		nome varchar(999),
		usuario varchar(45) not null,
		foto varchar(100));

	create table momentos(
		id int not null primary key auto_increment,
		nome varchar(150),
		email varchar(150));

	create table momentos_seguidores(
		id int not null primary key auto_increment,
		n int,
		email varchar(150),
		email_amigo varchar(150));
	create table publicacao_momentos(
		id int not null primary key auto_increment,
		usuario varchar(45)not null,
		nome varchar(60) ,
		publicacao varchar(1300),
		imagem varchar(1000),
		video varchar(2000),
		tipo int,
		data varchar(40),
		hora varchar(40),
		curtidas int);



	create table netwfotoperfil(
		usuario varchar(45) not null,
		fotocapa varchar(100));

	create table netwpublicacao(
		id int not null primary key auto_increment,
		usuario varchar(45)not null,
		nome varchar(60) ,
		publicacao varchar(600),
		imagem varchar(9999),
		data varchar(40),
		hora varchar(40),
		emailamigo varchar(40),
		nomeamigo varchar(40),
		curtidas int);


	create table netwcomentario(
		id_postagem int primary key auto_increment,
		id int,
		comentario varchar(6000),
		curtidas int,
		data varchar(40),
		hora varchar(40),
		email varchar(40));

	create table solicitacao(
		id int primary key not null auto_increment,
		email varchar(80),
		emailamigo varchar(80),
		n int);

	create table netwamigo(
		id int primary key not null auto_increment,
		email varchar(80),
		cont varchar(40),
		emailamigo varchar(80));


	create table netwchat(
		id int primary key not null auto_increment,
		email varchar(80),
		conversa varchar(25535),
		emailamigo varchar(80),
		horario varchar(100),
		data varchar(200));

	create table notechat(
		id int primary key auto_increment,
		email varchar(80),
		conversa varchar(25535),
		emailamigo varchar(80),
		nome varchar(80),
		cont int);

	create table sobre(
		id int primary key auto_increment,
		email varchar(40),
		cidade varchar(40),
		formacao varchar(40),
		Genero varchar(50),
		sobre varchar(9999),
		trabalho varchar(40));


	create table curtidaspostagem(
		id int primary key auto_increment,
		id_publicacao varchar(40),
		tipo varchar(40),
		contador int,
		email varchar(40));


	create table curtidascomentario(
		id int primary key auto_increment,
		email varchar(40));

	create table netwnotificacao(
		id int not null auto_increment primary key,
		contador int,
		nome varchar(80),
		texto varchar(100),
		emailamigo varchar(80),
		email varchar(80),
		id_postagem varchar(40));

	create table netwnotificacaoc(
		id int not null auto_increment primary key,
		contador int,
		nome varchar(80),
		texto varchar(90),
		email varchar(80),
		foto varchar(100),
		emailamigo varchar(80),
		id_postagem varchar(40));


	create table solicitacao_senha(
		id int not null primary key auto_increment,
		url varchar(1000),
		cont int,
		validar int,
		usuario varchar(100),
		criptografia varchar(100));

