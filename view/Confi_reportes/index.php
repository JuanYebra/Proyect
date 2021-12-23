<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("../MainHead/MainHead.php");?> 

        <title>Configuración de reportes</title>
        <link rel="stylesheet" href="../../public/editar.css">

    </head>
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxedv sidebar-inverse">
            <!--<aside id="side-overlay">
                <div id="side-overlay-scroll">
                    <div class="content-header content-header-fullrow">
                        <div class="content-header-section align-parent">
                            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>

                            <div class="content-header-item">
                                <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar32" src="../../public/assets/img/avatars/avatar15.jpg" alt="">
                                </a>
                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>-->

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
                <h1>Configurar reportes automáticos</h1>
            <h2>Elige cuando quieres recibir de manera automatica los reportes de asistencia</h2><br/><br/>
            <form>
              
                  <legend class="label1">Frecuencia: </legend>
                  <label class="label1">
                    <input type="radio" name="diario" value="diario"> Diario
                  </label>
                  <label>
                      <input type="radio" name="semanal" value="semanal"> Semanal
                  </label>
                  <label>
                      <input type="radio" name="quincenal" value="quincenal"> Quincenal
                  </label>
              <br/><br/>
                  <legend>Dia de la semana: </legend>
                  <label>
                      <input type="radio" name="lunes" value="lunes">  Lunes
                  </label>
                  <label>
                      <input type="radio" name="martes" value="martes"> Martes
                  </label>
                  <label>
                      <input type="radio" name="miercoles" value="miercoles"> Miercoles
                  </label>
                  <label>
                      <input type="radio" name="jueves" value="jueves"> Jueves
                  </label>
                  <label>
                      <input type="radio" name="viernes" value="viernes"> Viernes
                  </label>
                  <label>
                      <input type="radio" name="sabado" value="sdabado"> Sabado
                  </label>
                  <label>
                      <input type="radio" name="domingo" value="domingo"> Domingo
                  </label>
              
            </form><br/>

            <button type="button" class="buttonlink" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Guardar</button>

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