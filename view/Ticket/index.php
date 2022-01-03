<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("../MainHead/MainHead.php");?> 

        <title>Levantar ticket</title>
  
    </head>
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxedv sidebar-inverse">
        

            <nav id="sidebar">
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <?php require_once("../MainSidebar/MainSidebar.php");?> 
                        
                        <?php require_once("../MainMenu/MainMenu.php");?> 
                    </div>

                </div>
            </nav>

            <?php require_once("../MainHeader/MainHeader.php");?> 

            <!--Contenido -->


            <main id="main-container">
                <div class="content sep">
                <article>
                    <h1>Levantar ticket</h1>
                    <h2>Envianos cualquier duda o requerimiento que tengas, lo atenderemos en el menor tiempo posible.</h2><br/><br/>
                </article>
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Aqui agrega tus comentarios</h3>
                        </div>
                        <!---------------------summernote---------------------------------------->
                    <?php require_once("../summernote/index.php");?>
                        <!----------------------fin summernote----------------------------------->
                    </div>
                </div>
            </div><br/>
            <div>
            <button type="button" class="buttonlink" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Enviar ticket</button>
            </div>
                </div>
            </main>
            
            <!-- Contenido -->

        <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("../MainJs/MainJs.php");?> 

    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>