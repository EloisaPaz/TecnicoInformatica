<?php
include 'calculadora.class.php';

$c = new Calculadora();

$c->setNum1($_POST['txtnum1']);
$c->setNum2($_POST['txtnum2']);

echo '<p>Resultado: '.$c->verificarOp($_POST['rdop']).'</p>';
?>