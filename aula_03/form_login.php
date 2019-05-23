<?php

    include_once 'includes/header.inc.php';
?>

    <div class="container bg-light" style="height: 60px;" >
            
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Aula de PHP 2019 - Bootstrap</h1>
                </div>
               
            </div>
    </div>
  
   <div class="container border border-secondary rounded-lg px-md-5 p-2 estrutura"  style="height: 300px; width: 400px;">
   
            <form name="form_login" method="post" action="logado.php" >
     

                <label class="d-flex justify-content-center">Login do usuário</label>

                <div class="form-group">
                    <label for="usuario">Usuário</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário">
                </div>

                <div class="form-group ">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="senha">
                </div>
            
                    <input class="btn btn-secondary" type="submit" value="Entrar">
                    <input class="btn btn-secondary" type="button" onclick="location.href='index.php'" value="Visitantes">
                                   
             </form>
    </div>

   

    <?php

        include_once 'includes/footer.inc.php';
    ?>