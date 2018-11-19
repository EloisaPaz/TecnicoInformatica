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
    <title>Alterar Livros</title>

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
      <h1 class="jumbotron">Alterar Livros</h1>
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
      //aqui vou receber o "id" e buscar no banco
      include 'modelo/livro.class.php';
      require 'dao/livrodao.class.php';
      include 'util/padronizacao.class.php';
      include 'util/validacao.class.php';

      $livDAO = new LivroDAO();

      if(isset($_GET['id'])) {

        $query = "where idlivro =".$_GET['id'];
        $array = $livDAO->filtrar($query);
        //Salvando array com objeto na SESSAO
        $_SESSION['obj'] = serialize($array);
        //Imprimir para teste!
        //var_dump($array);
      }
      ?>

      <?php
      if(isset($_SESSION['erros']) ) {
          $erros = unserialize($_SESSION['erros']);
          echo "<p>";
          foreach($erros as $e){
            echo $e."<br>";
          }//fecha foreach
          echo "</p>";
          unset($_SESSION['erros']);
      }//fecha if
      ?>
      <!-- AQUI VAI O FORMULÁRIO PARA ALTERAR !!! -->
      <form name="altlivro" action=""
            method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Titulo</label>
              <input type="text"
                     name="txttitulo"
                     placeholder="Titulo"
                     class="form-control"
                     value="<?php
                            if(isset($array)){
                              echo $array[0]->titulo;
                            }?>">
            </div>
            <div class="form-group">
              <label>Editora</label>
              <input type="text"
                     name="txteditora"
                     placeholder="Editora"
                     class="form-control"
                     value="<?php
                            if(isset($array)){
                              echo $array[0]->editora;
                            }?>">
            </div>
            <div class="form-group">
              <label>Autor</label>
              <input type="text"
                     name="txtautor"
                     placeholder="Autor"
                     class="form-control"
                     value="<?php
                            if(isset($array)){
                              echo $array[0]->autor;
                            }?>">
            </div>
            <div class="form-group">
              <label>Ano de lançamento</label>
              <input type="text"
                     name="txtanolanc"
                     placeholder="Ano de Lançamento"
                     class="form-control"
                     value="<?php
                            if(isset($array)){
                              echo $array[0]->anoLanc;
                            }?>">
            </div>
            <div class="form-group">
              <label>Genero</label>
              <select name="selgenero" class="form-control">
                <option value="Drama" <?php
                                      if(isset($array)){
                                        if($array[0]->genero == "Drama"){
                                          echo "selected='selected'";
                                        }
                                      }?>>Drama</option>

                <option value="Suspense" <?php
                                      if(isset($array)){
                                        if($array[0]->genero == "Suspense"){
                                          echo "selected='selected'";
                                        }
                                      }?>>Suspense</option>

                <option value="Terror" <?php
                                      if(isset($array)){
                                        if($array[0]->genero == "Terror"){
                                          echo "selected='selected'";
                                        }
                                      }?>>Terror</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit"
                     name="alterar"
                     value="Alterar"
                     class="btn btn-primary">
            </div>
      </form>
      <?php
      //aqui vou pegar os dados alterados e enviar para o bd
      if(isset($_POST['alterar'])){

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

          //Buscando obj da SESSAO
          $livro = unserialize($_SESSION['obj']);
          $liv->idLivro = $livro[0]->idLivro;

          $liv->titulo = $titulo;
          $liv->editora = $editora;
          $liv->autor = $autor;
          $liv->anoLanc = $anoLanc;
          $liv->genero = $genero;
          $livDAO->alterarLivro($liv);
          header("location:consulta-livros.php");
        } else {
          $_SESSION['erros'] = serialize($erros);
          header("location:alterar-livros.php");
        }
      }
      ?>
    </div><!-- fecha class container -->
  </body>
</html>
