<?php   
    session_start();
    include('conexao/conexao.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header('Location: login/index_user.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "select user_id, usuario_norm from usuario_normal where usuario_norm = '{$usuario}' and senha_norm = '{$senha}'";

    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['user'] = $usuario;
        header('Location: produto/painel2.php');
        exit();
    } else{
        $_SESSION['nao_autenticadoo'] = true;
        header('Location: login/index_user.php');
        exit();
    }
?>
 

