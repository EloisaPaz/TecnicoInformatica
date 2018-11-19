<?php
class Hipotenusa{

//atributos
private $numb;
private $numc;

public function getNumb(){
 	return $this->numb;
 }

 public function setNumb($numb){
 	$this->numb = $numb;
 }

 public function getNumc(){
 	return $this->numc;
 }

 public function setNumc($numc){
 	$this->numc = $numc;
 }

 public function calcularHipo() : int{
 	return sqrt(pow($this->numb, 2)+pow($this->numc, 2));
 }
}//fecha classe
?>