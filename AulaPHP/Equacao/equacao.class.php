<?php
class Equacao{

//atributos
private $numa;
private $numb;
private $numc;


public function getNuma(){
 	return $this->numa;
 }

 public function setNuma($numa){
 	$this->numa = $numa;
 }

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


public function calcularDelta() : int{
	return ($this->numb*$this->numb)-((4*$this->numa)*$this->numc);
}

 public function calcularx1() : float{
 	return ($this->numb + sqrt ($this->calcularDelta())) / (2 * $this->numa);
 }

  public function calcularx2() : float{
 	return ($this->numb + sqrt ($this->calcularDelta())) / (2 * $this->numa);
 }
}//fecha classe
?>