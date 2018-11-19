<?php
class Pessoa{

  private $nome;
  private $sobrenome;
  private $cpf;
  private $rg;
  private $email;
  private $telefone;

  public function __construct(){}
  public function __destruct(){}

  public function __get($a) {
    return $this->$a;
  }

  public function __set($a, $v){
    $this->$a = $v;
  }

  public function __toString(){
    return nl2br("Nome: $this->nome
                  Sobrenome: $this->sobrenome
                  CPF: $this->cpf
                  RG: $this->rg
                  Email: $this->email
                  Telefone: $this->telefone");
  }
}//fecha classe 
