<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>

<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("../MainHead/MainHead.php");?> 

        <title>Departamentos</title>

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

<!------------------------------- Contenido -------------------------->
<main id="main-container">
                <div class="content sep">
      <article>
                <h1>Listado de empleados</h1>
                <h2>Aquí podrás agregar, editar o eliminar a tus empleados.</h2><br/><br/>
                
                <button type="button" class="buttonlink" id="btnnuevo">+ Agregar empleado</button>
            </article><br/><br/><br/>



      <div class="block">
                        <div class="block-content block-content-full">
                            <table id="empleado_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <!--tamaño de la tabla -->
                                        
                                        <th style="width: auto;">no. empleado </th>
                                        <th style="width: auto;">Nombre </th>
                                        <th style="width: auto;">apellido paterno </th>
                                        <th style="width: auto;">apellido materno </th>
                                        <th style="width: auto;">departamento </th>
                                        <th class="d-none d-sm-table-cell" style="width: auto;">horario</th>
                                        <th class="text-center" style="width: 5%;"></th>
                                        <th class="text-center" style="width: 5%;"></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>    
            </main>
<!------------------------------- Contenido -------------------------->


<!--------------modal ingreso---------------------------------------->
<div id="modalcrud"  class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <input type="hidden" id="emp_id" name="emp_id">
                            <div class="form-group row">
                                <label class="col-12" for="no_empleado">Numero de empleado</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="no_empleado" name="no_empleado" placeholder="" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12" for="nombre_emp">Nombre(s)</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="nombre_emp" name="nombre_emp" placeholder="" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12" for="ape_pat">Apllido paterno</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="ape_pat" name="ape_pat" placeholder="" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12" for="ape_mat">Apellido materno</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="ape_mat" name="ape_mat" placeholder="" required>
                                </div>
                            </div>

                            <!----------------------------------------------------------------------------------
                            <div class="form-group row">
                                <label class="col-12" for="ape_mat">RFC</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="ape_mat" name="ape_mat" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="ape_mat">E-mail</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="ape_mat" name="ape_mat" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="ape_mat">E-mail opcional</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="ape_mat" name="ape_mat" placeholder="" required>
                                </div>
                            </div>
                            --------------------------------------------------------------------------------->

                            <div class="form-group row">
                                <label class="col-12" for="horario">Departamento</label>
                                <div class="col-md-12"> 
                               <select name="departamento" id="departamento" class="form-control" required>
                               </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12" for="horario">Horario</label>
                                <div class="col-md-12"> 
                               <select name="horario" id="horario" class="form-control" required>
                               </select>
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
<!--------------Fin del modal---------------------------------------->

        <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("../MainJs/MainJs.php");?> 

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="../../public/assets/js/plugins/select2/select2.full.min.js"></script>
        <script type="text/javascript" src="Empleado.js"></script>

    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>