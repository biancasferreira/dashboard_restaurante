<?php
    define('HOST', '127.0.0.1');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('DB', 'usuario');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');

    define('HOST2', '127.0.0.1');
    define('USUARIO2', 'root');
    define('SENHA2', '');
    define('DB2', 'restaurante');

    $conexao2 = mysqli_connect(HOST2, USUARIO2, SENHA2, DB2) or die ('Não foi possivel conectar');

    
?>