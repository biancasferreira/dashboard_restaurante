<?php
 
   include_once('conexao.php');
    include('verifica_login.php');
    $select = 'select * from item_pedido';

    $resultado = mysqli_query($conexao2, $select);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="icon.png">
      <title>Fazer pedido</title>
      <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

  </head>
  <body>
  <header class="header">
        <a href="#" class="logo">Restaurante</a>
        <nav>
          <ul>
            <li><a href="teste.php">Cadastro</a></li>
            <li><a href="index_user.php">Login usuário</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
    </header>

    <br>
    <br>
    <br>
    <br>
  
    <div class="container">
      <form method="POST" action="cadastrar.php">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nome produto</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do produto" name="nome_produto">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Quantidade</label>
          <select class="form-control" id="exampleFormControlSelect1" name="quantidade">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Preço</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="$$$" name="preco">
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-justify" >Enviar</button>

      </form>
      <br>
      <!-- <a href="painel.php" class="btn btn-primary">ver todos pedidos</a> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
  </body>
</html>
