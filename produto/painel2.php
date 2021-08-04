<?php
 
   include_once('conexao.php');
    include('autentica_user.php');
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
    <title>Painel pedidos</title>
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
            <li><a href="dashboard_produto.php">Produtos</a></li>
            <li><a href="index.php">Login ADM</a></li>
            <li><a href="logout_user.php">Logout</a></li>
          </ul>
        </nav>
    </header>

    <br>
    <br>
    <br>
    <br>


    
        <div class="container">
            <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" id="filtro-nome">
            </form>
            </nav>
            <table class="table table-bordered table-dark" id="lista">
                <thead>
                    <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <!-- <th scope="col">Ações</th> -->
                    </tr>
                </thead>
                <tbody>
                <?php while ($tabela = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                    <th scope="row"><?php echo $tabela['codigo']?></th>
                    <td><?php echo $tabela['nome_produto']?></td>
                    <td><?php echo $tabela['preco']?></td>
                    <td><?php echo $tabela['quantidade']?></td>
                    <!-- <td>
                    <form action="alterar.php" method="POST" style="display:inline;">
                    <input type="hidden" name="codigo" value="" >
                        <button class="btn btn-warning" >Alterar</button>             
                    </form>

                    <form action="deletar.php" method="POST" style="display:inline;">
                        <input type="hidden" name="codigo" value="<">

                        <button class="btn btn-danger">
                        deletar
                        </button>
                    </form>
                    </td> -->
                    </tr>
                <?php } ?>
                </tbody>
         </table>

        

    </div>

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
