<?php
class Pessoa{

private $nome;

public function __construct(){}
public function __destruct(){}

public function __get($a){
  return $this->$a;
}

public function __set($a,$v){
  $this->$a = $v;
}

}//fecha classe
