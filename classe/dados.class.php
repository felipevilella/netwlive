<?php
class dados{

	function __construct()
	{
		$Nome="";
		$Email="";
		$Senha="";
		$Data="";
		$Sexo="";

	}
	public function GetNome(){
		return $this->Nome;
	}
	public function SetNome($Nome){
		$this->Nome=$Nome;
	}
	public function GetCapa(){
		return $this->Capa;
	}
	public function SetCapa($Capa){
		$this->Capa=$Capa;
	}
	public function GetFoto(){
		return $this->Foto;
	}
	public function SetFoto($Foto){
		$this->Foto=$Foto;
	}
	public function GetDiretorio(){
		return $this->Diretorio;
	}
	public function SetDiretorio($Diretorio){
		$this->Diretorio=$Diretorio;
	}
	public function GetEmail(){
		return $this->Email;
	}
	public function SetEmail($Email){
		$this->Email=$Email;
	}
	public function GetSenha(){
		return $this->Senha;
	}
	public function SetSenha($Senha){
		$this->Senha=$Senha;
	}
	public function GetData(){
		return $this->Data;
	}
	public function SetData($Data){
		$this->Data=$Data;
	}
	public function GetContador(){
		return $this->Contador;
	}
	public function SetContador($Contador){
		$this->Contador=$Contador;
	}
	public function GetSexo(){
		return $this->Sexo;
	}
	public function SetSexo($Sexo){
		$this->Sexo=$Sexo;
	}
	public function GetEmail_amigo(){
		return $this->Email_amigo;
	}
	public function SetEmail_amigo($Email_amigo){
		$this->Email_amigo=$Email_amigo;
	}
	

	public function GetDia(){
		return $this->Dia;
	}
	public function SetDia($Dia){
		$this->Dia=$Dia;
	}

	public function GetHora(){
		return $this->Hora;
	}
	public function SetHora($Hora){
		$this->Hora=$Hora;
	}

	public function GetMinuto(){
		return $this->Minuto;
	}
	public function SetMinuto($Minuto){
		$this->Minuto=$Minuto;
	}
	public function GetTempo(){
		return $this->Tempo;
	}
	public function SetTempo($Tempo){
		$this->Tempo=$Tempo;
	}
	public function GetEstado(){
		return $this->Estado;
	}
	public function SetEstado($Estado){
		$this->Estado=$Estado;
	}
	public function SetConversa($Conversa){
		$this->Conversa=$Conversa;
	}
	public function GetConversa(){
		return $this->Conversa;
	}
	public function SetComentario($Comentario){
		$this->Comentario=$Comentario;
	}
	public function GetComentario(){
		return $this->Comentario;
	}
	public function SetCurtida($Curtida){
		$this->Curtida=$Curtida;
	}
	public function GetCurtida(){
		return $this->Curtida;
	}
	public function GetId(){
		return $this->Id;
	}
	public function  Setid($Id){
		$this->Id=$Id;
	}

	public function GetGenero(){
		return $this->Genero;
	}
	public function  SetGenero($Genero){
		$this->Genero=$Genero;
	}

	public function GetCidade(){
		return $this->Cidade;
	}
	public function  SetCidade($Cidade){
		$this->Cidade=$Cidade;
	}
	public function GetFormacao(){
		return $this->Formacao;
	}
	public function  SetFormacao($Formacao){
		$this->Formacao=$Formacao;
	}
	public function GetSobre(){
		return $this->Sobre;
	}
	public function  SetSobre($Sobre){
		$this->Sobre=$Sobre;
	}
	public function GetTrabalho(){
		return $this->Trabalho;
	}
	public function  SetTrabalho($Trabalho){
		$this->Trabalho=$Trabalho;
	}


} 

?>
	
