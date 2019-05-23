
<?php

    session_start();

    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] :"";
    $senha = isset($_POST['senha']) ? $_POST['senha']: "";

    if(($usuario == "admin") || ($senha == "admin")){

        $_SESSION['logado'] = true;
        header("Location: home.php");

    }else{

        $_SESSION['logado'] = false;
        header("Location: form_login.php");

    }

?>