<?php
include 'pessoa.class.php';
include 'padronizacao.class.php';
include 'validacao.class.php';

$erros = array();

if(!Validacao::validarNome($_POST['txtnome'])){
  $erros[] = "Nome invalido!";
}

if(!Validacao::validarEmail($_POST['txtemail'])){
  $erros[] = "Email invalido!";
}

if(count($erros)==0){
$p = new Pessoa();
$p->nome = Padronizacao::juntarNome(Padronizacao::padronizarNome($_POST['txtnome']),
                                    Padronizacao::padronizarNome($_POST['txtsnome']));
$p->email = 
echo $p->nome;
}else {
  foreach ($erros as $e) {
    echo "<br>".$e;
  }
}
