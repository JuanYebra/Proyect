<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("../MainHead/MainHead.php");?> 

        <title>Lista de asistencia</title>

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
                        <h1>Listado de asistencia</h1><br/><br/><br/>

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
                                        <th>Entrada</th>
                                        <th>Salida</th>

                                        
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    </article>
                </div>
            </main>
            <!-- Contenido -->

        <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("../MainJs/MainJs.php");?> 

        <script type="text/javascript" src="lista.js"></script>


    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>