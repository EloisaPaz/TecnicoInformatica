<?php
include 'pessoa.class.php';

$p = new Pessoa();

$p->setNome($_POST['txtnome']);
$p->setSexo($_POST['rdsexo']);

echo '<p>Nome: '.$p->getNome()
	 .'<br>Sexo: '.$p->getSexo()
	 .'<br>Verificação de sexo: '.$p->verificarSexo().'</p>';

echo '<h1>'.$p->verificarOp($_POST['rdop']).'</h1>';
?>