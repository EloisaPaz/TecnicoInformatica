<?php
include 'equacao.class.php';

$e = new Equacao();

//Entrada de dados não é mais fixa
$e->setNuma($_POST['txtnuma']);
$e->setNumb($_POST['txtnumb']);
$e->setNumc($_POST['txtnumc']);

echo '<p>x1: '.$e->calcularx1().
	 '<p>x2: '.$e->calcularx2().'</p>';

?>