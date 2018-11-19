<?php
class Cliente{

  private $nome;
  private $sobrenome;
  private $telefone;
  private $email;
  private $endereco;
  private $complemento;
  private $cep;
  private $bairro;
  private $cidade;
  private $estado;
  private $rg;
  private $cpf;
  private $datanasc;
  private $salario;

  public function __construct(){}
  public function __destruct(){}

  public function __get($a){
    return $this->$a;
  }

  public function __set($a, $v){
    $this->$a = $v;
  }

  public function __toString(){
    return nl2br("Nome $this->nome
                  Sobrenome $this->sobrenome
                  Telefone $this->telefone
                  Email $this->email
                  Endereço $this->endereco
                  Complemento $this->complemento
                  CEP $this->cep
                  Bairro $this->bairro
                  Cidade $this->cidade
                  Estado $this->estado
                  RG $this->rg
                  CPF $this->cpf
                  Data de nascimento $this->datanasc
                  Salario $this->salario");
  }
}//fecha classe
 ?>
