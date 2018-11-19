<?php

include 'baskhara.php';

$b = new Bhaskara();


//entrada de dados não é mais fixa
$b->setA($_POST['txta']);
$b->setB($_POST['txtb']);
$b->setC($_POST['txtc']);

$valor=$b->calcularX1();
$formato = "X1 :  %.2f";
printf($formato,$valor);

$valor=$b->calcularX2();
$formato = " X2 :  %.2f";
printf($formato,$valor);


?>
