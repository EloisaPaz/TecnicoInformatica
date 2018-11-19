<?php
class Validacao{

  public static function validarNome($v){
    $exp = '/^[a-zA-Z ]{2,30}$/';
    return preg_match($exp,$v);
  }

  public static function validarSobrenome($v){
    $exp = '/^[a-zA-Z ]{2,30}$/';
    return preg_match($exp,$v);
  }

  public static function validarCpf($v){
    $exp = '/^[0-9]{11}$/';
    return preg_match($exp,$v);
  }

  public static function validarRg($v){
    $exp = '/^[0-9]{8}$/';
    return preg_match($exp,$v);
  }

  public static function validarEmail($v){
    return filter_var($v, FILTER_VALIDATE_EMAIL);
  }

  public static function validarTelefone($v){
    $exp = '/^[0-9]{8,15}$/';
    return preg_match($exp,$v);
  }

}//fecha classe
