<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("../MainHead/MainHead.php");?> 

        <title>Elaborar reportes</title>

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
                <h1>Elaborar reportes</h1>
            <h2>Genera reportes de asistencia.</h2><br/><br/>
            <h3>
                <i class="fa fa-calendar"></i> Elige las fechas en las que quieres generar el reporte.
            </h3>
            <h4>
                Puedes generar reportes con un maximo de 31 dias<br/><br/>
            </h4>
                <label class="labels" for="recipient-name">Desde :</label>
        		<input type="date" name="buscar_dep">
            

                <label class="labels" for="recipient-name" style="padding-left: 30px;">Hasta :</label>
        		<input type="date" name="buscar_dep" ><br/><br/>
            
                        
            <form>
              <fieldset>
                  <h4>Empleados: </h4>
                  <label class="labels">
                    <input type="radio" name="empleados" value="todos" id="check2" onchange="javascript:closecontent()"> Todos
                  </label>
                  <label class="labels">
                      <input type="radio" name="empleados" value="personalizado" id="check" onchange="javascript:showContent()"> Personalizado
                  </label>
              </fieldset><br/>

                <div id="personalizado" style="display: none;">
                    <div class="block">
                        <div class="block-content block-content-full">
                            <table id="departamento_data" class="table table-bordered table-striped table-vcenter js-dataTable-full" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <!--tamaño de la tabla -->
                                        <th></th>
                                        <th>No. empleado</th>
                                        <th>Nombre</th>
                                        <th>Apellido P</th>
                                        <th>Apellido m</th>
                                        <th>Departamento</th>
                                        <th>Horario</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

              <fieldset>
                  <h4>Crear en: </h4>
                  <label class="labels">
                      <input type="radio" name="tipo" value="excel"> Excel
                  </label>
                  <label class="labels">
                      <input type="radio" name="tipo" value="pdf"> PDF
                  </label>
              </fieldset>
            </form><br/>
            <button type="button" class="buttonlink" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onClick="location.href='reporte.php'" >Generar reporte</button>

                </div>
            </main>
            <!-- Contenido -->

        <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("../MainJs/MainJs.php");?> 

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="../../public/assets/js/plugins/select2/select2.full.min.js"></script>
        <script type="text/javascript" src="elabora.js"></script>

        <!------------ script mostrar div---------------->
        <script type="text/javascript">
            function showContent() {
                element = document.getElementById("personalizado");
                check = document.getElementById("check");
                if (check.checked) {
                    element.style.display='block';
                }
                else {
                    element.style.display='none';
                }
            }

            function closecontent(){
                element = document.getElementById("personalizado");
                check = document.getElementById("check2");
                if (check.checked) {
                    element.style.display='none';
                }
                
            }
        </script>
        <!------------fin script mostrar div---------------->
    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>