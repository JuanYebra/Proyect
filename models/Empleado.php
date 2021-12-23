<?php
    class Menu extends Conectar {

		public function get_empleado(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM empleados ";
            $sql=$conectar->prepare($sql);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

        public function insert_empleado($no_empleado,$nombre_emp,$ape_pat,$ape_mat,$departamento,$horario){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO empleados VALUES(null,?,?,?,?,?,?)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $no_empleado);
            $sql->bindValue(2, $nombre_emp);
            $sql->bindValue(3, $ape_pat);
            $sql->bindValue(4, $ape_mat);
            $sql->bindValue(5, $departamento);
            $sql->bindValue(6, $horario);
			$sql->execute();
        }

        public function update_empleado($emp_id,$no_empleado,$nombre_emp,$ape_pat,$ape_mat,$departamento,$horario){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE empleados SET
                no_empleado=?,
                nombre_emp=?,
                ape_pat=?,
                ape_mat=?,
                departamento=?,
                horario=?
                WHERE
                emp_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $no_empleado);
            $sql->bindValue(2, $nombre_emp);
            $sql->bindValue(3, $ape_pat);
            $sql->bindValue(4, $ape_mat);
            $sql->bindValue(5, $departamento);
            $sql->bindValue(6, $horario);
            $sql->bindValue(7, $emp_id);
			$sql->execute();
        }

        public function delete_empleado($emp_id){
            $conectar= parent::conexion();
            parent::set_names();
                        //no borra en base de datos cambia el estado de 1 a cero
            //$sql="UPDATE departamento SET est=0 WHERE dep_id=?";
                    //borra en base de datos
            $sql="DELETE FROM empleados WHERE emp_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $emp_id);
			$sql->execute();
        }

        public function get_empleado_x_id($emp_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM empleados WHERE emp_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $emp_id);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

    }
?>