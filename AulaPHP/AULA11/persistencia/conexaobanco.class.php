<?php
class ConexaoBanco extends PDO{

private static $instance = null;

public function __construct($dsn,$user,$pass){
  //construtor da classe PDO
  parent::__construct($dsn,$user,$pass);
}

public static function getInstance(){
  if(!isset(self::$instance)){
    try{
      /*Cria e retorna uma nova conexão*/
      self::$instance = new ConexaoBanco("mysql:dbname=livraria;host=localhost","root","");
    }catch(PDOExcption $e){
      echo "Erro ao cadastrar!".$e;
    }
    return self::$instance;
  }//fecha if
}//fecha metodo

}//fecha classe
