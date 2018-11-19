<?php

class Pessoa{

	//Atributos
	private $nome;
	private $idade;

	public function Pessoa(){

	}

	public function getNome(){
		return $this->nome;

	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getIdade(){
		return $this->idade;

	}

	public function setIdade($idade){
		$this->idade = $idade;
	}


	public function calcularIdadeMeses(){
		return $this->idade * 12;
	}
}//fecha classe

?>