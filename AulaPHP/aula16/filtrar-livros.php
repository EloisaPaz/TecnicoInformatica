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
    <meta charset="utf-8">
    <title>Filtrar Livros</title>

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
      <h1 class="jumbotron">Filtrar Livros</h1>
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
      if(isset($_SESSION["erro"])){
        echo "<p>".$_SESSION["erro"]."</p>";
        unset($_SESSION["erro"]);
      }
      ?>
      <form name="filtlivros" action="" method="post">
        <div class="form-group">
          <input type="text" name="txtpesq" placeholder="Pesquisa"
            class="form-control">
        </div>
        <div class="radio">
          <label><input type="radio" name="rdfiltro"
                  value="idlivro">Código do Livro</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="rdfiltro"
                 value="titulo">Título do Livro</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="rdfiltro"
                 value="editora">Editora</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="rdfiltro"
                 value="autor">Autor</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="rdfiltro"
                 value="anolanc">Ano de Lançamento</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="rdfiltro"
                 value="genero">Gênero</label>
        </div>
        <div class="form-group">
          <input type="submit" name="cadastrar"
                 value="Cadastrar" class="btn btn-primary">
        </div>
      </form>
      <?php
      if(isset($_SESSION["livros"])){
        include_once "modelo/livro.class.php";
        $livro = unserialize($_SESSION["livros"]);
        if(count($livro) != 0 ){
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
        }else{
          echo "Não há livros cadastrados!";
        }
        unset($_SESSION["livros"]);
      }
      ?>

      <?php
      if(isset($_POST["cadastrar"])){
        if(isset($_POST["rdfiltro"])){
          $pesq = $_POST['txtpesq'];
          $filtro = $_POST['rdfiltro'];

          $query = "";

          if($filtro == "idlivro"){
            $query = "where idlivro = ".$pesq;
          }else if($filtro == "titulo"){
            $query = "where titulo like '%".$pesq."%'";
          }else if($filtro == "editora"){
            $query = "where editora like '%".$pesq."%'";
          }else if($filtro == "autor"){
            $query = "where autor like '%".$pesq."%'";
          }else if($filtro == "anolanc"){
            $query = "where anolanc like '%".$pesq."%'";
          }else if($filtro == "genero"){
            $query = "where genero like '%".$pesq."%'";
          }

          include "dao/livrodao.class.php";
          include_once "modelo/livro.class.php";
          $livDAO = new LivroDAO();
          $array = $livDAO->filtrar($query);
          //só para teste
          //var_dump($array);
          //SÓ DEPOIS QUE TESTAR PASSAR SESSION
          $_SESSION['livros'] = serialize($array);
          header("location:filtrar-livros.php");

        } else {

          $_SESSION['erro'] = "Selecione uma opção!";
          header("location:filtrar-livros.php");
        }
      }
      ?>
    </div><!-- fecha class container -->
  </body>
</html>
