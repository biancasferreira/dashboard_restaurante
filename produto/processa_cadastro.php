<?php
include('verifica_login.php');
session_start();
include_once('conexao.php');

$produto = mysqli_real_escape_string($conexao, $_POST['produto']);
$tipo = mysqli_real_escape_string($conexao, $_POST['tipo']);
$marca = mysqli_real_escape_string($conexao, $_POST['marca']);
$preco = mysqli_real_escape_string($conexao, $_POST['preco']);
$estoque = mysqli_real_escape_string($conexao, $_POST['estoque']);
$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
$validade = mysqli_real_escape_string($conexao, $_POST['validade']);
$foto = mysqli_real_escape_string($conexao, $_POST['foto']);
$user = mysqli_real_escape_string($conexao, $_SESSION['usuario']);
$query = "insert into produto (produto,tipo,marca,preco,estoque,descricao,validade,foto,usuario,usuarioatual)values('$produto','$tipo','$marca','$preco','$estoque','$descricao', '$validade','$foto','$user','$user')"; 

$result = mysqli_query($conexao, $query);

if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "Dados cadastrados com sucesso";
    header('Location: cadastro.php');
}else{
    $_SESSION['msg'] = "Error ao cadastrar dados";
    echo "Erro ao cadastrar tente novamente";
}

?>