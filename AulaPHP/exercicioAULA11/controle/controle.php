<?php
include '../modelo/pessoa.class.php';
require '../dao/pessoadao.class.php';
include '../util/validacao.class.php';

$pes = new Pessoa();

$pes->nome = $_POST['txtnome'];
$pes->sobrenome = $_POST['txtsnome'];
$pes->cpf = $_POST['txtcpf'];
$pes->rg = $_POST['txtrg'];
$pes->email = $_POST['txtemail'];
$pes->telefone = $_POST['txttelefone'];

$pesDAO = new PessoaDAO();
$pesDAO->cadastrarPessoa($pes);

echo "Pessoa cadastrada com sucesso!";
echo $pes;
