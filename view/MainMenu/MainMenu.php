<?php
    require_once("../../config/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="content-side content-side-full" >
    <ul class="nav-main">
     
        <li> 
            <p class="pmenu"> <i class="fa fa-home"></i> Empresa</p> 
            <a href="../Dato_empresa/">Datos de la Empresa</a>
            <a href="../Ticket/">Levantar ticket</a>
            <a href="../Departamentos/">Departamentos</a>
            <?php if($_SESSION["rol_id"]==1){ ?>
                <a href="../Horarios/">Horarios</a>
                <a href="../Usuarios/">Usuarios</a> <br/>
            <?php } elseif ($_SESSION["rol_id"]==2) { ?>
                <a href="../Horarios/">Horarios</a> <br/>
            <?php } ?>

                <!-- fa-vcard    fa-vcard-o  fa fa-folder-open   -->
            <p class="pmenu"> <i class="fa fa-vcard"></i> Empleados</p>
            <a href="../Lista_empleados/">Lista de empleados</a>
            <a href="../Lista_asistencia/">Lista de asistencia</a><br/>

            <p class="pmenu"> <i class="fa fa-calendar-check-o"></i>  Reportes
            </p>
            <a href="../Confi_reportes/">Configurar reportes automaticos</a>
            <a href="../Elabora_reportes/">Elaborar reportes</a><br/>

            <p class="pmenu"> <i class="fa fa-handshake-o"></i> Ayuda
            </p>
            <a href="../Videos/">Videos</a>
        </li>

    </ul>
</div>
</body>
</html>






