<?php
include 'cliente.class.php';

$c = new Cliente();

$c->nome = $_POST["txtnome"];
$c->sobrenome = $_POST["txtsobrenome"];

echo $c->__toString();
$c->__destruct();
 ?>
