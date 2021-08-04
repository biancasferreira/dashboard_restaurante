<?php
include_once("conexao.php");
session_start();

$codigo = mysqli_real_escape_string($conexao, $_POST['codigo']);
$nome_produto = mysqli_real_escape_string($conexao, $_POST['nome_produto']);
$preco = mysqli_real_escape_string($conexao, $_POST['preco']);
$quantidade = mysqli_real_escape_string($conexao, $_POST['quantidade']);

$query = "update item_pedido set nome_produto = '$nome_produto', preco = '$preco', quantidade = '$quantidade'  where codigo = '$codigo'";



$resultado = mysqli_query($conexao, $query);
if($codigo == ""){
    header('Location: painel.php');
}

if($resultado){
    header('Location: painel.php');
}else{
    $_SESSION['mensagem'] = "ERRO AO CADASTRAR DADOS";
    header('Location: alterar.php');
}

?>




