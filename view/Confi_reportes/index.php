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
              
                  <h4>Frecuencia: </h4>
                  <fieldset >

                  <label class="labels">
                    <input type="radio" name="frecuencia" value="1"> Diario
                </label>
                  <label class="labels">
                      <input type="radio" name="frecuencia" value="2"> Semanal
                  </label>
                  <label class="labels">
                      <input type="radio" name="frecuencia" value="3"> Quincenal
                  </label>
                  </fieldset>

              <br/><br/>
              <fieldset>
                  <h4>Dia de la semana: </h4>
                  <label class="labels">
                      <input type="radio" name="dia" value="lunes" >  Lunes
                  </label>
                  <label class="labels">
                      <input type="radio" name="dia" value="martes"> Martes
                  </label>
                  <label class="labels">
                      <input type="radio" name="dia" value="miercoles"> Miercoles
                  </label>
                  <label class="labels">
                      <input type="radio" name="dia" value="jueves"> Jueves
                  </label>
                  <label class="labels">
                      <input type="radio" name="dia" value="viernes"> Viernes
                  </label>
                  <label class="labels">
                      <input type="radio" name="dia" value="sdabado"> Sabado
                  </label>
                  <label class="labels">
                      <input type="radio" name="dia" value="domingo"> Domingo
                  </label>
              </fieldset>

              
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