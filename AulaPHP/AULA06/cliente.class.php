<?php
class Cliente{
  private $nome;
  private $sobrenome;

  //métodos acessores
	public function __construct(){}
	public function __destruct(){}

    public function __get($a){
  		return $this->$a;
  	}

  	public function __set($a, $v){
  		$this->$a = $v;
  	}

  	public function __toString(){
  		return nl2br("Nome: $this->nome
  		              Sobrenome: $this->sobrenome");
  	}
}//fecha classe
 ?>
