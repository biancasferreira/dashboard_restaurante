<?php
include('verifica_login.php');
include_once('conexao.php');

$select = 'select * from item_pedido order by codigo desc';

$resultado = mysqli_query($conexao2,$select);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.png">
    <title>Painel pedidos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">


</head>
<body>
<header class="header">
        <h1 class="h1 text-light">Restaurante</h1>
        <nav>
          <ul>
            <li><a href="index.php">Login ADM</a></li>
            <li><a href="index_user.php">Login usuário</a></li>
            <li><a href="painel2.php">Visualizar</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
    </header>

    <br>
    <br>
    <br>
    <br>

    
    <div class="row">
<?php while($dados = mysqli_fetch_assoc($resultado)){?>
<div class="card" style="width: 18rem;height: 200px; margin-left:100px; margin-top: 10px; ">
  <div class="card-header">
    <h5 class="card-title" ><?php echo $dados['nome_produto'] ?></h5>
  </div>

  <div class="card-body " style="display:flex">
    <a style="justify-content:flex-end; display:flex; align-items:flex-end"><?php echo $dados['quantidade'] ?></a> 
    <a style="flex-grow:10;justify-content:flex-end; display:flex; align-items:flex-end">R$<?php echo $dados['preco'] ?></a>
   
    <!-- <button class="btn btn-primary" style="margin-left: 60%">Comprar</button> -->
  </div>
</div>
<?php } ?>
</div>
 
<script>
        //para nomes
        var filtro = document.getElementById('filtro-nome');
       
        var tabela = document.getElementById('lista');
        filtro.onkeyup = function() {
            var nomeFiltro = filtro.value;
            for (var i = 1; i < tabela.rows.length; i++) {
                var conteudoCelula = tabela.rows[i].cells[0].innerText;
                var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
                tabela.rows[i].style.display = corresponde ? '' : 'none';
            }
        };
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
</body>
</html>