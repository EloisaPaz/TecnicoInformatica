<?php
include 'cliente.class.php';
include 'validacao.class.php';

if(Validacao::validarNome($_POST['txtnome']) && Validacao::validarTelefone($_POST['txttelefone'])){
  $c = new Cliente();
  $c->nome = $_POST['txtnome'];
  $c->telefone = $_POST['txttelefone'];
  //echo $c;//só pra testes
  header("location:resposta.php?nome=$c->nome&telefone=$c->telefone");
}else {
    //echo "Dados invalidos!";//só pra testes
    header("location:resposta.php?msg=Dados invalidos");
}
 ?>
