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
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
              <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg>
            Elige las fechas en las que quieres generar el reporte.<br/>
            Puedes generar reportes con un maximo de 31 dias<br/><br/>

                <label for="recipient-name">Desde :</label>
        		<input type="date" name="buscar_dep">
            

                <label for="recipient-name"style="padding-left: 30px;">Hasta :</label>
        		<input type="date" name="buscar_dep" ><br/><br/>
            
                        
            <form>
              <fieldset>
                  <legend>Empleados: </legend>
                  <label>
                    <input type="radio" name="empleados" value="todos" id="check2" onchange="javascript:closecontent()"> Todos
                  </label>
                  <label>
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
                  <legend>Crear en: </legend>
                  <label>
                      <input type="radio" name="tipo" value="excel"> Excel
                  </label>
                  <label>
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