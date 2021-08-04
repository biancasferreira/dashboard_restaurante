<?php
session_start();
include_once('conexao.php');

$nome_produto = mysqli_real_escape_string($conexao2, $_POST['nome_produto']);
$preco = mysqli_real_escape_string($conexao2, $_POST['preco']);
$quantidade = mysqli_real_escape_string($conexao2, $_POST['quantidade']);
$query = "insert into item_pedido (nome_produto,preco,quantidade)values('$nome_produto','$preco','$quantidade')"; 

$resulta = mysqli_query($conexao2, $query);

if(mysqli_insert_id($conexao2)){
    $_SESSION['msg'] = "Dados cadastrados com sucesso";
    header('Location: painel.php');
}else{
    $_SESSION['msg'] = "Error ao cadastrar dados";
    echo "Erro ao cadastrar tente novamente";
}

?>