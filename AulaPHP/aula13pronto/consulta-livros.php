<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <title>Consulta de livros</title>

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
      <h1 class="jumbotron">Consulta de livros</h1>
      <div class="row">
        <nav style="margin-bottom: 30px" class="navbar navbar-inverse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="cadastro-livros.php">Cadastro</a></li>
            <li class="active"><a href="consulta-livros.php">Consulta</a></li>
            <li><a href="excluir-livros.php">Excluir</a></li>
          </ul>
        </nav>
      </div><!-- fecha class row -->
    <?php
      include 'dao/livrodao.class.php';
      include 'modelo/livro.class.php';
      $livDAO = new LivroDAO();
      $livro = $livDAO->buscarLivros();
      if(count($livro) != 0){
    ?>
    <div class="table-responsive">
    <table class="table table-striped table-bordered
                  table-hover table-condensed">
      <thead>
        <tr>
          <th>Código</th>
          <th>Título</th>
          <th>Editora</th>
          <th>Autor</th>
          <th>Ano Lançamento</th>
          <th>Gênero</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Código</th>
          <th>Título</th>
          <th>Editora</th>
          <th>Autor</th>
          <th>Ano Lançamento</th>
          <th>Gênero</th>
        </tr>
      </tfoot>
      <tbody>
    <?php
    foreach($livro as $liv){
      echo "<tr>";
        echo "<td>$liv->idLivro</td>";
        echo "<td>$liv->titulo</td>";
        echo "<td>$liv->editora</td>";
        echo "<td>$liv->autor</td>";
        echo "<td>$liv->anoLanc</td>";
        echo "<td>$liv->genero</td>";
      echo "</tr>";
    }
    ?>
      </tbody>
    </table>
    </div>
    <?php
    } else {
      echo "Sem dados!";
    }
    ?>
  </div> <!-- fecha div class container -->
  </body>
</html>
