<?php
require "../persistencia/conexaobanco.class.php";
class LivroDAO{ //Data Acess Objetct

  private $conexao = null;

  public function __construct(){
    $this->conexao = ConexaoBanco::getInstance();
  }

  public function cadastrarLivro($liv){
    try{
      $stat = $this->conexao->prepare("insert into livro(idLivro, titulo, editora, autor, anolanc, genero)values(null,?,?,?,?,?)");
      $stat->bindValue(1, $liv->titulo);
      $stat->bindValue(2, $liv->editora);
      $stat->bindValue(3, $liv->autor);
      $stat->bindValue(4, $liv->anoLanc);
      $stat->bindValue(5, $liv->genero);
      $stat->execute();
      $stat->conexao = null;
    }catch(PDOExcption $e){
      echo "Erro ao cadastrar!".$e;
    }
  }//fecha cadastrarLivro
}//fecha classe
