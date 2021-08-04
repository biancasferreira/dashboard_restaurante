<?php

    include_once('conexao.php');

    $codigo = $_POST['codigo'];


    $query = "select * from item_pedido where codigo = $codigo";

    $resultado = mysqli_query($conexao2,$query);


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

</head>
<body>
<header class="header">
        <a href="#" class="logo">CADASTRO USUARIO</a>
        <nav>
          <ul>
            <li><a href="index.php">Login</a></li>
            <li><a href="painel2.php">Login Administrador</a></li>
            <li><a href="cad.php">Cadastro</a></li>
          </ul>
        </nav>
    </header>
<div class="container">
<?php while ($tabela = mysqli_fetch_assoc($resultado)) { ?>
  <form method="POST" action="processa_user.php">
    <div class="form-group">
      <label for="exampleFormControlInput1">Nome produto</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do produto" name="nome_produto" value="<?php echo $tabela['nome_produto']?>">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Nome</label>
      <!-- <select class="form-control" id="exampleFormControlSelect1" name="quantidade" value="<?php echo $tabela['quantidade']?>">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select> -->
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="quantidade" value="<?php echo $tabela['quantidade']?>">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Preço</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="preco" value="<?php echo $tabela['preco']?>">
    </div>
    <br>
    <input type="hidden" name="codigo" value="<?php echo$tabela['codigo']?>">
    <button type="submit" class="btn btn-primary" >Enviar</button>

  </form>
  <?php } ?>
  <br>
  <a href="painel.php" class="btn btn-primary">ver todos pedidos</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
</body>
</html>
