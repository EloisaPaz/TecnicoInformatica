<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap +
     JQuery (necessário para os plugins de Javascript do Bootstrap) -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS padrão da página -->
    <link href="css/estilo.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <h1 class="jumbotron">Cadastro</h1>
      <div class="row">
        <nav style="margin-bottom: 30px" class="navbar navbar-inverse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="cadastro-livros.php">Cadastro</a></li>
            <li><a href="consulta-livros.php">Consulta</a></li>
            <li><a href="excluir-livros.php">Excluir</a></li>
          </ul>
        </nav>
      </div><!-- fecha class row -->
    <?php
    if(isset($_SESSION['erros'])){
        $erros = unserialize($_SESSION['erros']);
        echo "<p>";
        foreach($erros as $e){
          echo "<br>".$e;
        }
        echo "</p>";
        unset($_SESSION['erros']);
    }
    ?>
    <form name="cadlivro" action=""
          method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="txttitulo"
                   placeholder="Titulo" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" name="txteditora"
                   placeholder="Editora" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" name="txtautor"
                   placeholder="Autor" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" name="txtanolanc"
                   placeholder="Ano de Lançamento" class="form-control">
          </div>
          <div class="form-group">
            <label>Genero</label>
            <select name="selgenero" class="form-control">
              <option value="Drama">Drama</option>
              <option value="Suspense">Suspense</option>
              <option value="Terror">Terror</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="cadastrar"
                   value="Cadastrar" class="btn btn-primary">
          </div>
    </form>
    <?php
    if(isset($_POST['cadastrar'])){
      include 'modelo/livro.class.php';
      require 'dao/livrodao.class.php';
      include 'util/padronizacao.class.php';
      include 'util/validacao.class.php';

      $titulo = Padronizacao::padronizarNome($_POST['txttitulo']);
      $editora = Padronizacao::padronizarNome($_POST['txteditora']);
      $autor = Padronizacao::padronizarNome($_POST['txtautor']);
      $anoLanc = $_POST['txtanolanc'];
      $genero = $_POST['selgenero'];

      $erros = array();

      if(!Validacao::validarTitulo($titulo)){
        $erros[] = "Titulo invalido";
      }
      if(!Validacao::validarEditora($editora)){
        $erros[] = "Editora invalida";
      }
      if(!Validacao::validarAutor($autor)){
        $erros[] = "Autor invalido";
      }
      if(!Validacao::validarAno($anoLanc)){
        $erros[] = "Ano de lançamento invalido";
      }
      if(!Validacao::validarGenero($genero)){
        $erros[] = "Genero invalido";
      }

      if(count($erros) == 0){
        $liv = new Livro();
        $liv->titulo = $titulo;
        $liv->editora = $editora;
        $liv->autor = $autor;
        $liv->anoLanc = $anoLanc;
        $liv->genero = $genero;
        $livDAO = new LivroDAO();
        $livDAO->cadastrarLivro($liv);
        $_SESSION['msg'] = "Livro cadastrado com sucesso!";
        $_SESSION['liv'] = serialize($liv);
        header("location:resposta.php");
      }else{
        $_SESSION['erros'] = serialize($erros);
        header("location:cadastro-livros.php");
          //só para teste
          /*foreach($erros as $e){
            echo "<br>".$e;
          }*/
      }
    }//fecha if isset($_POST['cadastrar'])
    ?>
    </div> <!-- fecha div class container -->
  </body>
</html>
