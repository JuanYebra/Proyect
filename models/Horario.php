<?php
    class Menu extends Conectar {
        

		public function get_horario(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM horario WHERE est=1;";
            $sql=$conectar->prepare($sql);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

        public function insert_horario($nombre,$dias,$horas){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO horario VALUES(null,?,?,?,1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $nombre);
            $sql->bindValue(2, $dias);
            $sql->bindValue(3, $horas);
			$sql->execute();
        }

        public function update_horario($id,$nombre,$dias,$horas){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE horario SET
                nombre=?,
                dias=?,
                horas=?
                WHERE
                id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $nombre);
            $sql->bindValue(2, $dias);
            $sql->bindValue(3, $horas);
            $sql->bindValue(4, $id);
			$sql->execute();
        }

        public function delete_horario($id){
            $conectar= parent::conexion();
            parent::set_names();
                        //no borra en base de datos cambia el estado de 1 a cero
            $sql="UPDATE horario SET est=0 WHERE id=?";
                    //borra en base de datos
            //$sql="DELETE FROM tm_menu WHERE men_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
			$sql->execute();
        }

        public function get_horario_x_id($id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM horario WHERE id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

    }
?>