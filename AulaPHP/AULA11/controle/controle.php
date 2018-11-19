<?php
include '../modelo/livro.class.php';
require '../dao/livrodao.class.php';

$liv = new Livro();

$liv->titulo = $_POST['txttitulo'];
$liv->editora = $_POST['txteditora'];
$liv->autor = $_POST['txtautor'];
$liv->anoLanc = $_POST['txtanolanc'];
$liv->genero = $_POST['selgenero'];

$livDAO = new LivroDAO();
$livDAO->cadastrarLivro($liv);

echo "Livro cadastrado com sucesso!";
echo $liv;
