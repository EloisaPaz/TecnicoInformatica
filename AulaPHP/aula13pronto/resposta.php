<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Resposta</title>

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
      <h1 class="jumbotron">Resposta</h1>
      <div class="row">
        <nav style="margin-bottom: 30px" class="navbar navbar-inverse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="cadastro-livros.php">Cadastro</a></li>
            <li><a href="consulta-livros.php">Consulta</a></li>
            <li><a href="excluir-livros.php">Excluir</a></li>
          </ul>
        </nav>
      </div><!-- fecha class row -->
    <?php
    if(isset($_SESSION['msg']) &&
       isset($_SESSION['liv'])) {
         include 'modelo/livro.class.php';

         $liv = unserialize($_SESSION['liv']);
         echo "<p>";
          echo $_SESSION['msg'];
          echo "<br>Dados cadastrados: ".$liv;
         echo "</p>";
         unset($_SESSION['msg']);
         unset($_SESSION['liv']);
       }
    ?>
  </body>
</html>
