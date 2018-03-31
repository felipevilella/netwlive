<?php
class senha{

	function __construct() {
		$this->senha="";
		$this->email="";
		$this->validacao="";
	}

	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getUsuario(){
		return $this->email;
	}
	public function setUsuario($email){
		$this->email = $email;
	}
	
    public function getValidacao(){
    	return $this->validacao;
    }
    public function setValidacao($validacao){
    	$this->validacao=$validacao;
    }


}