<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Exclusão de Livros</title>
    <meta charset="utf-8">

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
      <h1 class="jumbotron">Exclusão de livros</h1>
      <div class="row">
        <nav style="margin-bottom: 30px" class="navbar navbar-inverse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="cadastro-livros.php">Cadastro</a></li>
            <li><a href="consulta-livros.php">Consulta</a></li>
            <li><a href="filtrar-livros.php">Filtrar</a></li>
            <li class="active"><a href="excluir-livros.php">Excluir</a></li>
          </ul>
        </nav>
      </div><!-- fecha class row -->
    <form name="exclivros" action="" method="post"
          enctype="multipart/form-data">
          <div class="form-group">
            <label>Digite o código do livro
                   que deseja excluir</label>
            <input type="number" name="txtcodigo"
                   placeholder="Código" class="form-control">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-danger" name="excluir" value="Excluir">
          </div>
    </form>
    <?php
    if(isset($_POST["excluir"])) {
      include 'dao/livrodao.class.php';
      $livDAO = new LivroDAO();
      $livDAO->deletarLivro($_POST["txtcodigo"]);
      header("location:consulta-livros.php");
    }
    ?>
    </div> <!-- fecha div class container -->
  </body>
</html>
