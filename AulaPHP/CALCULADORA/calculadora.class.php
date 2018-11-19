<?php
class Calculadora{

//atributos
	private $num1;
	private $num2;

	public function getNum1(){
		return $this->num1;
	}

	public function setNum1($num1){
		$this->num1 = $num1;
	}

	public function getNum2(){
		return $this->num2;
	}

	public function setNum2($num2){
		$this->num2 = $num2;
	}

	public function calcularSomar() : int{
		return $this->num1 + $this->num2;
	}

	public function calcularSubtrair() : int{
		return $this->num1 - $this->num2;
	}

	public function calcularDividir() : int{
		return $this->num1 / $this->num2;
	}

	public function calcularMultiplicar() : int{
		return $this->num1 * $this->num2;
	}

	//TESTE POR PARAMETRO
	public function verificarOp($op){
		if($op == 'somar'){
			return $this->calcularSomar();
		}else if($op == 'subtrair'){
			return $this->calcularSubtrair();
		}else if($op == 'dividir'){
			return $this->calcularDividir();
		}else if($op == 'multiplicar'){
			return $this->calcularMultiplicar();
		}else{
			return "Error!";
		}//fecha else
	}//fecha metodo

}//fecha classe
?>