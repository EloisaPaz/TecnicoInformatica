<?php
class Validacao{

  public static function validarTitulo($v){
    $exp = "/^[a-zA-Z ]{2,200}$/";
    return preg_match($exp, $v);
  }

  public static function validarEditora($v){
    $exp = "/^[a-zA-Z ]{2,100}$/";
    return preg_match($exp, $v);
  }

  public static function validarAutor($v){
    $exp = "/^[a-zA-Z ]{2,100}$/";
    return preg_match($exp, $v);
  }

  public static function validarAno($v){
    $exp = "/^[0-9]{2,4}$/";
    return preg_match($exp, $v);
  }

  public static function validarGenero($v){
    $exp = "/^(Suspense|Terror|Drama)$/";
    return preg_match($exp, $v);
  }
}//fecha classe
