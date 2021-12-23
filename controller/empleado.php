<?php
    require_once("../config/conexion.php");
    require_once("../models/Empleado.php");
    $menu = new Menu();

    switch($_GET["op"]){

        case "listar":
            $datos=$menu->get_empleado();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = '<button type="button" onClick="editar('.$row["emp_id"].');"  id="'.$row["emp_id"].'" class="btn btn-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["emp_id"].');"  id="'.$row["emp_id"].'" class="btn btn-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                $sub_array[] = $row["no_empleado"];
                $sub_array[] = $row["nombre_emp"];
                $sub_array[] = $row["ape_pat"];
                $sub_array[] = $row["ape_mat"];
                $sub_array[] = $row["departamento"];
                $sub_array[] = $row["horario"];
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
            $datos=$menu->get_empleado_x_id($_POST["emp_id"]);
            if(is_array($datos)==true and count($datos)>0){
                $menu->delete_empleado($_POST["emp_id"]);
            } 
        break;

        case 'mostrar':
            $datos=$menu->get_empleado_x_id($_POST["emp_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $output["emp_id"] = $row["emp_id"];
                    $output["no_empleado"] = $row["no_empleado"];
                    $output["nombre_emp"] = $row["nombre_emp"];
                    $output["ape_pat"] = $row["ape_pat"];
                    $output["ape_mat"] = $row["ape_mat"];
                    $output["departamento"] = $row["departamento"];
                    $output["horario"] = $row["horario"];

                }
                echo json_encode($output);
            }
        break;

        case "guardaryeditar":
            if(empty($_POST["emp_id"])){       
                $menu->insert_empleado($_POST["no_empleado"],$_POST["nombre_emp"],$_POST["ape_pat"],$_POST["ape_mat"],$_POST["departamento"],$_POST["horario"]);     
            }
            else {
                $menu->update_empleado($_POST["emp_id"],$_POST["no_empleado"],$_POST["nombre_emp"],$_POST["ape_pat"],$_POST["ape_mat"],$_POST["departamento"],$_POST["horario"]); 
            }
        break;

    }
?>