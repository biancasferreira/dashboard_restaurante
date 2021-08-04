<?php
session_start();
include_once('conexao.php');

$nome_usuario = mysqli_real_escape_string($conexao2, $_POST['nome_usuario']);
$login = mysqli_real_escape_string($conexao2, $_POST['login']);
$senha = mysqli_real_escape_string($conexao2, $_POST['senha']);
$query = "insert into item_pedido (nome_usuario,login,senha)values('$nome_usuario','$login','$senha')"; 

$resulta = mysqli_query($conexao2, $query);

if(mysqli_insert_id($conexao2)){
    $_SESSION['msg'] = "Cadastro realizado com sucesso";
    header('Location: painel2.php');
}else{
    $_SESSION['msg'] = "Error ao se cadastrar ";
    echo "Erro ao cadastrar tente novamente";
}

?>