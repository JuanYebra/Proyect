<?php
    require_once("config/conexion.php");
    if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
        require_once("models/Usuario.php");
        $usuario = new Usuario();
        $usuario->login();
    }
?>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title> Formulario de Acceso </title>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/login.css">
        <link href="public/bootstrap.min.css" rel="stylesheet" >
	    <link rel="stylesheet" href="public/editar.css">
        <style type="text/css">
        </style>

        <script type="text/javascript">

        </script>

    </head>

    <body>

        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="12" r="9" />
  <circle cx="12" cy="10" r="3" />
  <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
</svg><br/>
                        Bienvenido
                    </div>
                    <?php
                    if (isset($_GET["m"])) {
                        ?>                             
                             <!-- alerta ----------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
							<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
							<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
							</symbol>
							<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
							<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
							</symbol>
							<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
							<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
							</symbol>
							</svg>
							<div class="alert alert-danger d-flex align-items-center alert" role="alert">
							    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
							        <div>
                                        El usuario o la contraseña son incorrectos. 
							        </div>
							<!-------------------------->
							</div>
                                
                        <?php
                    }
                    ?>
                    <!--<form id="login_form" action="login/loginProceso.php" method="post" >-->
                    <form action="" method="post" id="loginnum1">

                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo">

                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">

                                            <div class="form-group">
                                        <input type="hidden" name="enviar" class="form-control" value="si">
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                            <i class="si si-login mr-10"></i> Iniciar Sesión 
                                        </button>
                    </form>
                    <div class="pie-form">
                        <a href="#**">¿Perdiste tu contraseña?</a>
                    </div>
                    <div class="by">
                        <p>by Dostop</p>
                    </div>
                </div>

            </div>
        </div>   
    </body>
</html>
