<?php
class Padronizacao{

  public static function padronizarNome($v){
    return ucwords(strtolower($v));
  }

  public static function juntarNome($v1,$v2){
    $array = array($v1,$v2);
    return implode(" ",$array);
  }

}//fecha classe
