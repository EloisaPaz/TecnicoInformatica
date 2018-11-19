<?php
class Validacao{

  public static function validarNome($v){
    $exp = "/^[a-zA-Z ]{2,30}$/";
    return preg_match($exp, $v);
  }//fecha

  public static function validarSobrenome($v){
    $exp = "/^[a-zA-Z ]{2,30}$/";
    return preg_match($exp, $v);
  }//fecha

  public static function validarTelefone($v){
    $exp = "/[0-9]{8,15}$/";
    return preg_match($exp, $v);
  }//fecha

  public static function validarEmail($v){
    $exp = "/^([0-9a-zA-Z]+([_.-]?[0-9a-zA-Z]+)*@[0-9a-zA-Z]+[0-9,a-z,A-Z,.,-]*(.){1}[a-zA-Z]{2,4})+$/";
    return preg_match($exp, $v);
  }//fecha

  public static function validarDatanasc($v){
    $exp = "/^[0-9]{2}/[0-9]{2}/[0-9]{4}$/";
    return preg_match($exp,$v);
  }//fecha

}//fecha classe
 ?>
