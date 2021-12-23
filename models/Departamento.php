<?php
    class Menu extends Conectar {

		public function get_departamento(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM departamento WHERE est=1;";
            $sql=$conectar->prepare($sql);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

        public function insert_departamento($nombre_dep,$responsable_dep,$user_dep){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO departamento VALUES(null,?,?,?,1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $nombre_dep);
            $sql->bindValue(2, $responsable_dep);
            $sql->bindValue(3, $user_dep);
			$sql->execute();
        }

        public function update_departamento($dep_id,$nombre_dep,$responsable_dep,$user_dep){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE departamento SET
                nombre_dep=?,
                responsable_dep=?,
                user_dep=?
                WHERE
                dep_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $nombre_dep);
            $sql->bindValue(2, $responsable_dep);
            $sql->bindValue(3, $user_dep);
            $sql->bindValue(4, $dep_id);
			$sql->execute();
        }

        public function delete_departamento($dep_id){
            $conectar= parent::conexion();
            parent::set_names();
                        //no borra en base de datos cambia el estado de 1 a cero
            $sql="UPDATE departamento SET est=0 WHERE dep_id=?";
                    //borra en base de datos
            //$sql="DELETE FROM tm_menu WHERE men_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $dep_id);
			$sql->execute();
        }

        public function get_departamento_x_id($dep_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM departamento WHERE dep_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $dep_id);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

    }
?>