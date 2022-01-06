<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("../MainHead/MainHead.php");?> 

        <title>Horarios</title>
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
                    <article>
                        <h1>Horarios</h1>
                        <h2> En esta sección puedes crear horarios para después asignarlos a tus empleados.</h2><br/><br/>
                        <button type="button" class="buttonlink" id="btnnuevo" >+ Agregar horario</button>
                    </article><br/><br/><br/>

                    
                   
                    <div class="block">
                        <div class="block-content block-content-full">
                            <table id="horario_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <!--tamaño de la tabla -->
                                        
                                        <th style="width: auto;">Nombre </th>
                                        <th style="width: auto;">Dias </th>
                                        <th class="d-none d-sm-table-cell" style="width: auto;">Horas </th>
                                        <th class="text-center" style="width: 5%;"></th>
                                        <th class="text-center" style="width: 5%;"></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>    



                  
                </div>
            </main>
            <!-- Contenido -->

<!--modal ingreso -->
<div id="modalcrud" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form method="post" id="menu_form">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="titulo_crud">Horario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id" name="id">
                            <div class="form-group row">
                                <label class="col-12" for="nombre">Nombre</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="dias">Dias</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="dias" name="dias" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="horas">Horas</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="horas" name="horas" placeholder="" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="action" id="#" value="add" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>





        <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("../MainJs/MainJs.php");?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="../../public/assets/js/plugins/select2/select2.full.min.js"></script>
        <script type="text/javascript" src="Horario.js"></script> 

    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>