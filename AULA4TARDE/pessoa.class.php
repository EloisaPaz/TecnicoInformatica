<?php
class Pessoa{

//atributos 
	private $nome;
	private $sexo;

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}

	//TESTES NO ATRIBUTO
	public function verificarSexo(){
		if($this->sexo == "Masculino"){
			return "É homem!";
		}elseif ($this->sexo == "Feminino"){
			return "É mulher!";
		}else{
			return "É no one!";
		}//fecha else
	}//fecha metodo

	//TESTE POR PARAMETRO
	public function verificarOp($op){
		if($op == 1){
			return "Você escolheu 1!";
		}else if($op == 2){
			return "Você escolheu 2!";
		}else{
			return "Error!";
		}//fecha else
	}//fecha metodo

}//fecha classe
?>