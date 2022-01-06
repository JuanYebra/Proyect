<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){
    if($_SESSION["rol_id"]==2){
        header("Location:".Conectar::ruta()."view/Home/");
    }else{

         
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("../MainHead/MainHead.php");?> 

        <title>Home</title>

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
                    <h1>Administrador</h1>
                    <h1>Agrega solo a usuarios autorizados</h1>
                    <h2>En esta sección puedes definir el rol de cada usuario ya sea administrador o usuario simple</h2>
                    <button type="button" class="buttonlink" id="btnnuevo" >+ Agregar usuario</button>
                </article><br/><br/><br/>                                       
                    <div class="block">
                        <div class="block-content block-content-full">
                            <table id="usuario_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <!--tamaño de la tabla -->
                                        <th style="width: auto;">Nombre </th>
                                        <th style="width: auto;">Apellido p. </th>
                                        <th style="width: auto;">Apellido m. </th>
                                        <th style="width: auto;">Correo </th>
                                        <th style="width: auto;">Password </th>
                                        <th style="width: auto;">Creación </th>
                                        <th style="width: auto;">Rol </th>    
                                        <th class="text-center" style="width: 5%;"></th>
                                        <th class="text-center" style="width: 5%;"></th>                                    
                                      
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>               
                </div>
            </main>
            <!-- Contenido -->

    <!-------------------modal ingreso ------------->
    <div id="modalcrud" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form method="post" id="menu_form">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="titulo_crud">Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="usu_id" name="usu_id">

                            <div class="form-group row">
                                <label class="col-12" for="usu_nom">Nombre(s)</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="usu_nom" name="usu_nom" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="usu_ape">Apellido paterno</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="usu_ape" name="usu_ape" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="usu_ape_mat">Apellido materno</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="usu_ape_mat" name="usu_ape_mat" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="usu_correo">Correo</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="usu_correo" name="usu_correo" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="usu_pass">Contraseña</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="usu_pass" name="usu_pass" placeholder="" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12" for="fech_crea">Fecha de creacion</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="fech_crea" name="fech_crea" placeholder="" >
                                </div>
                            </div>





                            <div class="form-group row">
                                <label class="col-12" for="rol_id">rol</label>
                                <div class="col-md-12"> 
                               <select name="rol_id" id="rol_id" class="form-control" >
                               </select>
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
    </div>
    <!---------------------finmodal----------------->

            <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("../MainJs/MainJs.php");?> 
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="../../public/assets/js/plugins/select2/select2.full.min.js"></script>
        <script type="text/javascript" src="usuarios.js"></script>

    </body>
</html>
<?php
} 
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>