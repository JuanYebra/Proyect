<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <!--todos los estilos necesarios-->
     <?php require_once("../MainHead/MainHead.php");?>

        <title>CRUD | Mesa de Partes</title>

    </head>
    <body>
        
    <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed  sidebar-inverse">

            <!-- menu desplegable-->
            <nav id="sidebar">
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <!--superior con foto y nombre de usuario -->
                        <?php require_once("../MainSidebar/MainSidebar.php");?> 
                        <!-- links a otras pestañas-->
                        <?php require_once("../MainMenu/MainMenu.php");?> 
                    

                </div>
            </nav>
                <!--parte supoerior-->
            <?php require_once("../MainHeader/MainHeader.php");?> 

            <!--Contenido -->
            <main id="main-container">
                <div class="content">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title h3test">Listado de Menu <small>Mesa de Partes</small></h3>
                            <button type="button" class="btn btn-alt-primary" id="btnnuevo">
                                Nuevo <i class="fa fa-newspaper-o ml-5"></i>
                            </button>
                        </div>
                        <div class="block-content block-content-full">
                            <table id="menu_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <!--tamaño de la tabla -->
                                        <th style="width: 10%;">Ruta</th>
                                        <th style="width: 15%;">Icon</th>
                                        <th class="d-none d-sm-table-cell" style="width: 20%;">Nom</th>
                                        <th class="text-center" style="width: 10%;"></th>
                                        <th class="text-center" style="width: 10%;"></th>
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
                            <h5 class="modal-title" id="titulo_crud">CRUD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="men_id" name="men_id">
                            <div class="form-group row">
                                <label class="col-12" for="men_ruta">Ruta</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="men_ruta" name="men_ruta" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="men_icon">Icon</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="men_icon" name="men_icon" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="men_nom">Nom</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="men_nom" name="men_nom" placeholder="" required>
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
                <!-- parte inferior-->
            <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>
  
        <?php require_once("../MainJs/MainJs.php");?> 
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="../../public/assets/js/plugins/select2/select2.full.min.js"></script>
        <script type="text/javascript" src="CRUDMenu.js"></script>

    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>