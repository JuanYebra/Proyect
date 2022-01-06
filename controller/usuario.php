<?php
    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");
    $menu = new Menu();

    switch($_GET["op"]){

        case "guardar":
            $datos = $usuario->get_correo_usuario($_POST["usu_correo"]);
            if($_POST["usu_pass1"] == $_POST["usu_pass2"]){
                if(is_array($datos)==true and count($datos)==0){
                    $usuario->insert_usuario($_POST["usu_nom"],$_POST["usu_ape"],$_POST["usu_correo"],$_POST["usu_pass1"]);
                }else{
                    echo "correo";
                } 
            }else{
                echo "pass";
            }
        break;


        case "correo":
            $datos = $usuario->get_correo_usuario($_POST["usu_correo"]);
            echo json_encode( $datos);
        break;


        case "select":
            $datos=$menu->get_rol();
            if(is_array($datos)==true and count($datos)>0){
                $html="<option>Selecciona el tipo de usuario</option>";
                foreach($datos as $row)
                {
                    $html.="<option value='".$row['rol_id']."'>".$row ['nombre_rol']."</option>";
                }
                echo $html;
            } 
        break;

            //mostrar datos en la tabla
        case "listar":
            $datos=$menu->get_usuario();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["usu_nom"];
                $sub_array[] = $row["usu_ape"];
                $sub_array[] = $row["usu_ape_mat"];
                $sub_array[] = $row["usu_correo"];
                $sub_array[] = $row["usu_pass"];
                $sub_array[] = $row["fech_crea"];
                //$sub_array[] = $row["rol_id"];
                $sub_array[] = $row["nombre_rol"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["usu_id"].');"  id="'.$row["usu_id"].'" class="btn btn-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["usu_id"].');"  id="'.$row["usu_id"].'" class="btn btn-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                

               $data[] = $sub_array;
            }
        
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;


        case "activarydesactivar":
            $datos=$menu->get_usuario_x_id($_POST["usu_id"]);
            if(is_array($datos)==true and count($datos)>0){
                $menu->delete_usuario($_POST["usu_id"]);
            } 
        break;

            //mostrar datos a editar
        case 'mostrar':
            $datos=$menu->get_usuario_x_id($_POST["usu_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $output["usu_id"] = $row["usu_id"];
                    $output["usu_nom"] = $row["usu_nom"];
                    $output["usu_ape"] = $row["usu_ape"];
                    $output["usu_ape_mat"] = $row["usu_ape_mat"];
                    $output["usu_correo"] = $row["usu_correo"];
                    $output["usu_pass"] = $row["usu_pass"];
                    $output["fech_crea"] = $row["fech_crea"];
                    $output["rol_id"] = $row["rol_id"];
                    //$output["nombre_rol"] = $row["nombre_rol"];


                }
                echo json_encode($output);
            }
        break;


        case "guardaryeditar":
            if(empty($_POST["usu_id"])){       
                $menu->insert_usuario($_POST["usu_nom"],$_POST["usu_ape"],$_POST["usu_ape_mat"],$_POST["usu_correo"],$_POST["usu_pass"],$_POST["fech_crea"],$_POST["rol_id"]);     
            }
            else {
                $menu->update_usuario($_POST["usu_id"],$_POST["usu_nom"],$_POST["usu_ape"],$_POST["usu_ape_mat"],$_POST["usu_correo"],$_POST["usu_pass"],$_POST["fech_crea"],$_POST["rol_id"]); 
            }
        break;

    }

?>