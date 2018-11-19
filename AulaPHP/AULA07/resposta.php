<!DOCTYPE html>
<hmtl lang="pt-br">
<head>
  <title>Resposta de Cliente</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <h1 class="jumbotron bg bg-info">Resposta de Cliente</h1>
  <?php
  if(isset($_GET['nome']) && isset($_GET['telefone'])){
    echo '<p>Nome: '.$_GET['nome'].
         '<br>Telefone: '.$_GET['telefone'].'</p>';
  }elseif (isset($_GET['msg'])) {
    echo '<p>'.$_GET['msg'].'</p>';
  }
   ?>
</div>
</body>
</html>
