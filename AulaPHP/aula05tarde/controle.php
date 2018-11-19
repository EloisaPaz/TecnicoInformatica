<?php
include 'pessoa.class.php';

$p = new Pessoa();

$p->nome = $_POST["txtnome"];
$p->email = $_POST["txtemail"];
$p->idade = $_POST["txtidade"];

echo $p;

?>