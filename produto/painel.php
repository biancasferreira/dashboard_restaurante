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
            <li><a href="teste.php">Cadastro</a></li>
            <li><a href="index_user.php">Login usuário</a></li>
            <li><a href="dashboard_produto.php">Produtos</a></li>
            <li><a href="logout.php">Logout</a></li>
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
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($tabela = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                    <th scope="row"><?php echo $tabela['codigo']?></th>
                    <td><?php echo $tabela['nome_produto']?></td>
                    <td><?php echo $tabela['preco']?></td>
                    <td><?php echo $tabela['quantidade']?></td>
                    <td>
                    <form action="alterar.php" method="POST" style="display:inline;">
                    <input type="hidden" name="codigo" value="<?php echo $tabela['codigo']?>" >
                        <button class="btn btn-warning" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </button>             
                    </form>

                    <form action="deletar.php" method="POST" style="display:inline;">
                        <input type="hidden" name="codigo" value="<?php echo $tabela['codigo']?>">

                        <button class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                        </button>
                    </form>
                    </td>
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
