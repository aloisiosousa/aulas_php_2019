
<!-- Iniciando a sessão -->
<?php
    session_start();
?>
<!-- Verificado a variável da sessão -->
<?php
    if (isset($_SESSION['logado'])):   
?>
<!-- Usando PHP e HTML juntos para uma única página -->
        <h1>Usuário Logado</h1>
        <a href="sair.php">Sair do Sistema</a>   
<?php
    else:
?>
<!-- Usando PHP e HTML juntos para uma única página -->

        <h1>Página Restrita, Tente novamente.</h1>
        <a href="form_login.php">logar no sistema</a>
<!--  Finalizando o PHP  -->
<?php
    endif;
?>