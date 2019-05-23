<?php

    session_start();

    $login = isset($_POST['login']) ? $_POST['login']: "" ;
    $senha = isset($_POST['senha']) ? $_POST['senha']: "" ;

    if ($login == "admin" and $senha == "123456"){
        // Criando a variável de sessão
        $_SESSION['logado'] = true;
        header("Location: restrito.php");
    }else{

        header("Location: form_login.php");
    }

?>