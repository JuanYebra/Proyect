<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php require_once("../MainHead/MainHead.php");?> 

        <title>Datos de la empresa</title>

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
                        </div>
                    </div>
                </div>
            </aside>
  -->
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
                        <h1>Datos de empresa</h1>
                        <h2> Estos datos serán usados para tu facturación</h2><br/><br/>
                       
                        <div class="centrado"><!--formulario-->

                        
                    
                        <div style="height: auto; width: 800px;">
                           
                           <form class="row g-3">
                           <div class="col-12">
                               <label for="nombre" class="form-label">Nombre / Razón social</label>
                               <input type="text" class="form-control" id="nombre" >
                           </div>
                           <div class="col-12">
                               <label for="rfc" class="form-label">RFC</label>
                               <input type="text" class="form-control" id="rfc" >
                           </div>
                           <div class="col-12">
                               <label for="email" class="form-label">E-mail</label>
                               <input type="text" class="form-control" id="email" >
                           </div>
                           <div class="col-12">
                               <label for="email2" class="form-label">E-mail opcional</label>
                               <input type="text" class="form-control" id="email2" >
                           </div>
                           <div class="col-12">
                               <label for="usofact" class="form-label">Uso de la factura</label>
                               <input type="text" class="form-control" id="usofact" >
                           </div>
                           
                           </form> 
                           
                           <br/><br/>

             
                            <div>
                                <label>
                                 <input class="form-check-input" type="checkbox" id="check" onchange="javascript:showContent()"> Agregar datos opcionales
                                </label>
                            </div>     
                   </div>
                 <br/><br/> 


        <div id="adicionales" style="height: auto; width: 800px; display: none;">
                           
                <form class="row g-3">
                <div class="col-12">
                    <label for="usofact" class="form-label">Calle</label>
                    <input type="text" class="form-control" id="usofact" >
                </div>

                <div class="col-md-4">
                    <label for="N_ext" class="form-label">No. exterior</label>
                    <input type="email" class="form-control" id="N_ext">
                </div>
                <div class="col-md-4">
                    <label for="N_int" class="form-label">No. interior</label>
                    <input type="password" class="form-control" id="N_int">
                </div>
                <div class="col-md-4">
                    <label for="cp" class="form-label">C.P</label>
                    <input type="password" class="form-control" id="cp">
                </div>

                <div class="col-12">
                    <label for="colonia" class="form-label">Colonia</label>
                    <input type="text" class="form-control" id="colonia" >
                </div>

                <div class="col-12">
                    <label for="localidad" class="form-label">Localidad</label>
                    <input type="text" class="form-control" id="localidad" >
                </div>

                <div class="col-12">
                    <label for="municipio" class="form-label">Municipio</label>
                    <input type="text" class="form-control" id="municipio" >
                </div>

                <div class="col-12">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estado" >
                </div>

                <div class="col-12">
                    <label for="pais" class="form-label">Pais</label>
                    <input type="text" class="form-control" id="pais" >
                </div>               
                </form>            

        </div>

        </div><!--fin formulario-->     
              
        

                </div>
            </main>
            <!-- Contenido -->

        <?php require_once("../MainFooter/MainFooter.php");?> 

        </div>

        <?php require_once("../MainJs/MainJs.php");?> 

        <script type="text/javascript">
    function showContent() {
        element = document.getElementById("adicionales");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
    

    </body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>