<?php
class Validacao{

  public static function validarNome($v){
    $exp = '/^[a-zA-Z ]{2,30}$/';
    return preg_match($exp,$v);
  }

  public static function validarEmail($v){
    return filter_var($v, FILTER_VALIDATE_EMAIL);
  }

}//fecha classe
