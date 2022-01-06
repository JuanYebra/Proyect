<?php
    require_once("../config/conexion.php");
    require_once("../models/Departamento.php");
    $menu = new Menu();

    switch($_GET["op"]){

        case "select":
            $datos=$menu->get_departamento();
            if(is_array($datos)==true and count($datos)>0){
                $html="<option>Selecciona un departamento</option>";
                foreach($datos as $row)
                {
                    $html.="<option value='".$row['nombre_dep']."'>".$row ['nombre_dep']."</option>";
                }
                echo $html;
            } 
        break;

        case "listar":
            $datos=$menu->get_departamento();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["nombre_dep"];
                $sub_array[] = $row["responsable_dep"];
                $sub_array[] = $row["user_dep"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["dep_id"].');"  id="'.$row["dep_id"].'" class="btn btn-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["dep_id"].');"  id="'.$row["dep_id"].'" class="btn btn-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
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
            $datos=$menu->get_departamento_x_id($_POST["dep_id"]);
            if(is_array($datos)==true and count($datos)>0){
                $menu->delete_departamento($_POST["dep_id"]);
            } 
        break;

        case 'mostrar':
            $datos=$menu->get_departamento_x_id($_POST["dep_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $output["dep_id"] = $row["dep_id"];
                    $output["nombre_dep"] = $row["nombre_dep"];
                    $output["responsable_dep"] = $row["responsable_dep"];
                    $output["user_dep"] = $row["user_dep"];
                }
                echo json_encode($output);
            }
        break;

        case "guardaryeditar":
            if(empty($_POST["dep_id"])){       
                $menu->insert_departamento($_POST["nombre_dep"],$_POST["responsable_dep"],$_POST["user_dep"]);     
            }
            else {
                $menu->update_departamento($_POST["dep_id"],$_POST["nombre_dep"],$_POST["responsable_dep"],$_POST["user_dep"]); 
            }
        break;

    }
?>