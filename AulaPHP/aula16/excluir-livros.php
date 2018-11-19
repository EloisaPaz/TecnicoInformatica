<?php
session_start();
if(!isset($_SESSION['privateUser'])){
  $_SESSION['msg'] = "Voce precisa estar
      logado para acessar este conteudo!";

  header("location:resposta.php");
}else{
  include_once "modelo/usuario.class.php";
  $u = unserialize($_SESSION['privateUser']);
  if($u->tipo != "Adm"){
    $_SESSION['msg'] = "O seu usuário
    não tem privilégios para acessar
    essa página!";
    header("location:resposta.php");
  }
}
?>
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
     <li class="active"><a href="index.php">Home</a></li>
     <?php
     if(isset($_SESSION['privateUser'])){
         include_once "modelo/usuario.class.php";
         $u = unserialize($_SESSION['privateUser']);
         if($u->tipo == "Chinelo"){
     ?>
     <li><a href="cadastro-livros.php">Cadastro</a></li>
     <?php
         }else if($u->tipo == "Adm"){
     ?>
     <li><a href="cadastro-livros.php">Cadastro</a></li>
     <li><a href="consulta-livros.php">Consulta</a></li>
     <li><a href="filtrar-livros.php">Filtrar</a></li>
     <li><a href="excluir-livros.php">Excluir</a></li>
     <?php
         }
     }
     ?>
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
