<?php
class ConexaoBanco extends PDO {

  private static $instance = null;

  public function __construct($dsn,$user,$pass){
    //Construtor da classe pai PDO
    parent::__construct($dsn, $user, $pass);
  }

  public static function getInstance(){
    if(!isset(self::$instance)){
      try {
        /* Cria e retorna uma nova conexão. */
        self::$instance = new ConexaoBanco("mysql:dbname=livraria;host=localhost","root","");
      } catch(PDOException $e) {
        echo "Erro ao conectar! ".$e;
      }
      return self::$instance;
    }//fecha if
  }//fecha metodo
}//fecha classe
//PERSISTENCIA
