<?php

include_once "includes/header.inc.php";

?>


<header>
    <div class="container bg-light" style="height: 60px;" >
        
            <div class="row">
                <div class="col-sm-10 text-center">
                    <h1>Aula de PHP 2019 - Bootstrap</h1>
                </div>
                <div class="col-sm-2 text-center">


                    Oi, <?php echo $usuario; ?>


                </div>
            </div>
    </div>

    <div class="container">
        <div class="row">
            <nav class="container" style="background-color:silver">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form_login.php">SAIR</a>
                    </li>
                </ul>           
            </nav>  
        </div>
    </div>
</header> 

        <section class="container">
            <div class="row text-center">
                <article class="col-6">
                        <h1>Teste1</h1>

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
                </article>
            </div>
        </section>
    </div>
</div>

 <?php

        include_once 'includes/footer.inc.php';
    ?>
