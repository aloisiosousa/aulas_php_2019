<?php 
    session_start(); 
    if(isset($_SESSION['logado'])):
?>

<?php

    include_once "includes/header.inc.php";
    include_once "includes/menu.inc.php";
   
?>
        <section class="container">
            <div class="row text-center">
                <article class="col-6">
                <h1>Formulário de Acesso</h1>

                <div class="container bg-danger align-content-sm-center">
                    <div class="row">
                        <div class="col-sm"> 
                            <form name=form action="home.php" method="post">
                                <div class="form-group ">
                                    <label>Telefone</label>
                                    <input type="text" class="form-control" placeholder="Telefone" id="telefone" name="telefone" >
                                    <input class="btn btn-primary" type="submit" value="Enviar">
                                </div>
                             </form>
                         </div>
                    </div>
                 </div>

         </article>
                    
        
                <article class="col-6">
                    <h1>InfoSousa 2019</h1>
                    <div class="container bg-danger align-content-sm-center">
                        <div class="row">
                            <div class="col-sm"> 
                                
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
</div>


<?php

    include_once 'includes/footer.inc.php';
?>

<!-- Parte para configurar a saida da página -->

<?php

    else:

        header("Location: visitante.php");

    endif;
?>
