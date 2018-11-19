<?php
require "conexaobanco.class.php";
class LivroDAO { //DATA ACCESS OBJECT

  private $conexao = null;

  public function __construct(){
    $this->conexao = ConexaoBanco::getInstance();
  }

  public function cadastrarLivro($liv){
    try{
      $stat = $this->conexao->prepare("insert into livro
      (idlivro, titulo, editora, autor, anolanc, genero)
      values(null,?,?,?,?,?)");
      $stat->bindValue(1, $liv->titulo);
      $stat->bindValue(2, $liv->editora);
      $stat->bindValue(3, $liv->autor);
      $stat->bindValue(4, $liv->anoLanc);
      $stat->bindValue(5, $liv->genero);
      $stat->execute();
      $this->conexao = null;
    }catch(PDOException $e){
      echo "Erro ao cadastrar! ".$e;
    }
  }//fecha cadastrarLivro

  public function buscarLivros() {
    try {
      $stat = $this->conexao->query("select * from livro");
      $array = $stat->fetchAll(PDO::FETCH_CLASS,'Livro');
      return $array;
    } catch(PDOException $e) {
      echo "Erro ao buscar livros! ".$e;
    }
  }//fecha buscarLivros

  public function deletarLivro($id) {
      try {
        $stat = $this->conexao->prepare(
          "delete from livro where idlivro = ?");
        $stat->bindValue(1, $id);
        $stat->execute();
      } catch(PDOException $e) {
        echo "Erro ao deletar! ".$e;
      }
  }
}//fecha classe
