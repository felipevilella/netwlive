<?php
class publicacao{

	function __construct(){
     $Nome="";
     $Publicacao="";
     $Id="";
     $Data="";
     $Hora="";
     $Imagem="";
     $Email_amigo="";
     $Nome_amigo="";

	}

	public  function GetNome(){
		return $this->Nome;
	}
	public function SetNome($Nome){
		$this->Nome=$Nome;
	}
	public function GetPublicacao(){
		return $this->Publicacao;
	}
	public function SetPublicacao($Publicacao){
		$this->Publicacao=$Publicacao;
	}
	public function GetId(){
		return $this->Id;
	}
	public function  Setid($Id){
		$this->Id=$Id;
	}
	public function GetData(){
		return $this->Data;
	}
	public function SetData($Data){
		$this->Data=$Data;
	}
	public function GetHora(){
		return $this->Hora;
	}
	public function SetHora($Hora){
		$this->Hora=$Hora;
	}
	public function GetImagem(){
		return $this->Imagem;
	}
	public function SetImagem($Imagem){
		$this->Imagem=$Imagem;
	}
	public function GetEmail_amigo(){
		return $this->Email_amigo;
	}
	public function SetEmail_amigo($Email_amigo){
		$this->Email_amigo=$Email_amigo;
	}
	public function GetNome_amigo(){
		return $this->Nome_amigo;
	}
	public function SetNome_amigo($Nome_amigo){
		$this->Nome_amigo=$Nome_amigo;
	}
   	public function GetTipo(){
		return $this->Tipo;
	}
	public function  SetTipo($Tipo){
		$this->Tipo=$Tipo;
	}
	public function GetVideo(){
		return $this->Video;
	}
	public function  SetVideo($Video){
		$this->Video=$Video;
	}
}


?>