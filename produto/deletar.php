<?php
    include('conexao.php');

    $codigo = mysqli_real_escape_string($conexao2, $_POST['codigo']);

    $query = "delete from item_pedido where codigo = '$codigo' ";

    $resultado = mysqli_query($conexao2, $query);

    if($resultado){
        header('Location: painel.php');
    }else{
        header('Location: painel.php');
    }
