<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("../MainHead/MainHead.php");?> 
        <!--<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">-->
        <link rel="stylesheet" href="jquery.dataTables.min.css">
        <title>Reporte</title>
    </head>
    <body class="with-side-menu">
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

              <div style="display:none; text-align: center;" id="personalizado">
              <h2>Vista previa</h2>
                    <div class="page-content">
                        <div class="container-fluid">

                            <div class="box-typical box-typical-padding">
                                <table id="reporte_data" class="table table-bordered table-striped table-vcenter js-dataTable-full" style="width:100%;">
                                    <thead>
                                        <tr>
                                        <th>No. empleado</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido P</th>
                                                        <th>Apellido m</th>
                                                        <th>Departamento</th>
                                                        <th>Horario</th>
                                        </tr>
                                    </thead>
                                    
                                </table>

                            </div>
                        </div><!--.container-fluid-->
                    </div><!--.page-content-->
                </div>
                               
              

                
            </form><br/>
            <h4>Generar reporte en: </h4>
            <div class="butonflex">
            <button type="button" class="btn buttonlink btn-rounded buttonrepo" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onClick="location.href='reporteexcel.php'" ><i class=" fa fa-file-excel-o"></i> Excel</button>
            <button type="button" class="btn buttonlink btn-rounded buttonrepo" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onClick="location.href='reportepdf.php'" ><i class="fa fa-file-pdf-o"></i> PDF</button>
            </div>

            

                </div>
            </main>
            <!-- Contenido -->

        <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("../MainJs/MainJs.php");?> 

        <script type="text/javascript" src="elabora.js"></script>


        <!-- mostrar div-->
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
        <!-- Page JS Plugins -->

        <!------------fin script mostrar div---------------->
    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>