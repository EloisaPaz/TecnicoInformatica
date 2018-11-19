<?php
class Livro{

  private $idLivro;
  private $titulo;
  private $editora;
  private $autor;
  private $anoLanc;
  private $genero;

  public function __construct(){}
  public function __destruct(){}

  public function __get($a) {
    return $this->$a;
  }

  public function __set($a, $v){
    $this->$a = $v;
  }

  public function __toString(){
    return nl2br("Titulo: $this->titulo
                  Editora: $this->editora
                  Autor: $this->autor
                  Ano Lanc: $this->anoLanc
                  Genero: $this->genero");
  }
}//fecha classe 
