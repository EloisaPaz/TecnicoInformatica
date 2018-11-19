<?php
include 'pessoa.class.php'; 

$p = new Pessoa();
$p->setNome("Zé");
$p->setIdade(50);

echo "<p>Nome: ".$p->getNome().
	 "<br>Idade: ".$p->getIdade().
	 "<br>Idade meses: ".$p->calcularIdadeMeses()."</p>";

?>