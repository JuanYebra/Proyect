<?php
    require_once("../config/conexion.php");
    require_once("../models/Horario.php");
    $menu = new Menu();

    switch($_GET["op"]){

        case "select":
            $datos=$menu->get_horario();
            if(is_array($datos)==true and count($datos)>0){
                $html="<option>Selecciona un horario</option>";
                foreach($datos as $row)
                {
                    $html.="<option value='".$row['nombre']."'>".$row ['nombre']."</option>";
                }
                echo $html;
            } 
        break;

        case "listar":
            $datos=$menu->get_horario();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = '<button type="button" onClick="editar('.$row["id"].');"  id="'.$row["id"].'" class="btn btn-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["id"].');"  id="'.$row["id"].'" class="btn btn-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                $sub_array[] = $row["nombre"];
                $sub_array[] = $row["dias"];
                $sub_array[] = $row["horas"];
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
            $datos=$menu->get_horario_x_id($_POST["id"]);
            if(is_array($datos)==true and count($datos)>0){
                $menu->delete_horario($_POST["id"]);
            } 
        break;

        case 'mostrar':
            $datos=$menu->get_horario_x_id($_POST["id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $output["id"] = $row["id"];
                    $output["nombre"] = $row["nombre"];
                    $output["dias"] = $row["dias"];
                    $output["horas"] = $row["horas"];
                }
                echo json_encode($output);
            }
        break;

        case "guardaryeditar":
            if(empty($_POST["id"])){       
                $menu->insert_horario($_POST["nombre"],$_POST["dias"],$_POST["horas"]);     
            }
            else {
                $menu->update_horario($_POST["id"],$_POST["nombre"],$_POST["dias"],$_POST["horas"]); 
            }
        break;

    }
?>