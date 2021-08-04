<?php 
    session_start();
    if(!$_SESSION['user']){
        header('Location: index_user.php');
        exit();
    }
?>
