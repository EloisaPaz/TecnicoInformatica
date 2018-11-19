<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Sistema XY</title>

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
      <h1 class="jumbotron">Sistema XY</h1>
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

      <?php
      if(isset($_SESSION['privateUser'])){
        include_once "modelo/usuario.class.php";
        $u = unserialize($_SESSION['privateUser']);
        echo "<h1>";
        echo "Olá ".$u->login.", seja bem vindo!";
        echo "</h1>";
      }
      ?>
      <p>Seja bem vindo ao sistema XY! O melhor e mais completo sistema WEB que existe! #sqn</p>

      <?php
      if(isset($_SESSION['privateUser'])){


      ?>
      <form name="deslogar" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <input type="submit" name="deslogar" value="Deslogar" class="btn btn-primary">
        </div>
      </form>
      <?php
    }
      ?>

      <?php
      if(isset($_SESSION['privateUser']) && isset($_POST['deslogar'])){
        unset($_SESSION['privateUser']);
        header("location:login.php");
      }
      ?>
    </div><!-- fecha class container -->
  </body>
</html>
