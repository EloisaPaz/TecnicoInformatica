<?php
require "../persistencia/conexaobanco.class.php";
class PessoaDAO{

  private $conexao = null;

  public function __construct(){
    $this->conexao = ConexaoBanco::getInstance();
  }

  public function cadastrarPessoa($pes){
    try{
      $stat = $this->conexao->prepare("insert into pessoa(idPessoa, nome, sobrenome, cpf, rg, email, telefone)values(null,?,?,?,?,?,?)");
      $stat->bindValue(1, $pes->nome);
      $stat->bindValue(2, $pes->sobrenome);
      $stat->bindValue(3, $pes->cpf);
      $stat->bindValue(4, $pes->rg);
      $stat->bindValue(5, $pes->email);
      $stat->bindValue(6, $pes->telefone);
      $stat->execute();
      $stat->conexao = null;
    }catch(PDOExcption $e){
      echo "Erro ao cadastrar!".$e;
    }
  }//fecha cadastrarPessoa
}//fecha classe
