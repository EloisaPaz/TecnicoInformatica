<?php
include 'hipo.class.php';

$h = new Hipotenusa();

//Entrada de dados não é mais fixa
$h->setNumb($_POST['txtnumb']);
$h->setNumc($_POST['txtnumc']);

echo '<p>A hipotenusa: '.$h->calcularHipo().'</p';

?>