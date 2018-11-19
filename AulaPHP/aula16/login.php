<?php
session_start();
if(!isset($_SESSION['privateUser'])){
  $_SESSION['msg'] = "Voce precisa estar
      logado para acessar este conteudo!";

  header("location:resposta.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap +
     JQuery (necessário para os plugins de Java do Bootstrap) -->
    <script type="text/java" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/java" src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS padrão da página -->
    <link href="css/estilo.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <h1 class="jumbotron">Login</h1>
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
      //FALTA CODIGO
      if(isset($_SESSION['msg'])){
        echo "<p>";
        echo $_SESSION['msg'];
        echo "</p>";
        unset($_SESSION['msg']);
      }
      ?>
      <form name="login" action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" name="txtlogin" placeholder="Login" class="form-control">
          </div>

          <div class="form-group">
            <input type="password" name="txtsenha" placeholder="Senha" class="form-control">
          </div>

          <div class="form-group">
            <label>Tipo</label>
            <select name="seltipo" class="form-control">
              <option value="Adm">Adm</option>
              <option value="Chinelo">Chinelo</option>
            </select>
          </div>

          <div class="form-group">
            <input type="submit" name="entrar" value="Entrar" class="btn btn-primary">
          </div>
      </form>

      <?php
      if(isset($_POST['entrar'])) {

        include 'modelo/usuario.class.php';
        include 'dao/usuariodao.class.php';
        include 'util/seguranca.class.php';

        $u = new Usuario();
        $u->login = $_POST['txtlogin'];
        $u->senha = Seguranca::criptografar($_POST['txtsenha']);
        $u->tipo = $_POST['seltipo'];
        echo $u; //para teste

        //vou pesquisar no banco
        $uDAO = new UsuarioDAO();
        $usuario = $uDAO->verificarUsuario($u);
        //para teste! se voltar usuário ele encontrou
        var_dump($usuario);

        //fazer um if para verificar se deu erro ou não!
        if($usuario && !is_null($usuario)){
          //enviar usuario para qualquer página que desejar
          $_SESSION['privateUser'] = serialize($u);
          header("location:index.php");
        }else{
          //dar erro no próprio login
          $_SESSION['msg'] = "Dado(s) invalido(s)";
          header("location:login.php");
        }//fecha else
      }
      ?>
    </div> <!-- fecha div class container -->
  </body>
</html>
