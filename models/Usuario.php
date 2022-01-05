<?php
    class Usuario extends Conectar {
        
        public function login(){
			$conectar=parent::Conexion();
			parent::set_names();
			if(isset($_POST["enviar"])){
				
				$password = $_POST["password"];
				$correo = $_POST["correo"];

				if(empty($correo) and empty($password)){
					header("Location:".Conectar::ruta()."index.php?m=2");
					exit();
				}
			else {
				//$sql= "select * from usuario where usu_correo=? and usu_pass=? and est=1";

				$sql= "select * from usuario LEFT JOIN roles on usuario.rol_id = roles.id_rol where usu_correo=? and usu_pass=? and est=1";
				$sql=$conectar->prepare($sql);
				$sql->bindValue(1, $correo);
				$sql->bindValue(2, $password);
				$sql->execute();
				$resultado = $sql->fetch();
					if(is_array($resultado) and count($resultado)>0){
						$_SESSION["usu_id"] = $resultado["usu_id"];
                        $_SESSION["usu_nom"] = $resultado["usu_nom"];
                        $_SESSION["usu_ape"] = $resultado["usu_ape"];
						$_SESSION["usu_correo"] = $resultado["usu_correo"];
						$_SESSION["rol_id"] = $resultado["rol_id"];
						$_SESSION["usu_pass"] = $resultado["usu_pass"];
						$_SESSION["nombre_rol"] = $resultado["nombre_rol"];


	

						header("Location:".Conectar::ruta()."view/Home/");
						exit(); 
					} else {
						header("Location:".Conectar::ruta()."index.php?m=1");
						exit();
					} 
				}
			}
		}

		/*public function insert_usuario($usu_nom,$usu_ape,$usu_correo,$usu_pass){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO usuario values (NULL,?,?,?,?,NULL, NULL, NULL, '1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_nom);
            $sql->bindValue(2,$usu_ape);
			$sql->bindValue(3,$usu_correo);
			$sql->bindValue(4,$usu_pass);
            $sql->execute();
		}*/
		
		public function get_correo_usuario($usu_correo){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM usuario WHERE usu_correo=? AND est=1;";
            $sql=$conectar->prepare($sql);
			$sql->bindValue(1,$usu_correo);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

		public function get_usuario(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM usuario WHERE est=1;";
			//$sql="SELECT * FROM usuario LEFT JOIN roles on usuario.rol_id = roles.id_rol WHERE est=1;";
            $sql=$conectar->prepare($sql);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

		public function insert_usuario($usu_nom,$usu_ape,$usu_ape_mat,$usu_correo,$usu_pass,$fech_crea,$rol_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO usuario VALUES(null,?,?,?,?,?,?,?,1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_nom);
            $sql->bindValue(2, $usu_ape);
            $sql->bindValue(3, $usu_ape_mat);
			$sql->bindValue(4, $usu_correo);
            $sql->bindValue(5, $usu_pass);
            $sql->bindValue(6, $fech_crea);
            $sql->bindValue(7, $rol_id);
			$sql->execute();
        }

        public function update_usuario($usu_id,$usu_nom,$usu_ape,$usu_ape_mat,$usu_correo,$usu_pass,$fech_crea,$rol_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="UPDATE usuario SET
                usu_nom=?,
                usu_ape=?,
                usu_ape_mat=?
				usu_correo=?
                usu_pass=?
                fech_crea=?
                rol_id=?
                WHERE
                usu_id=?";
            $sql=$conectar->prepare($sql);
			$sql->bindValue(1, $usu_nom);
            $sql->bindValue(2, $usu_ape);
            $sql->bindValue(3, $usu_ape_mat);
			$sql->bindValue(4, $usu_correo);
            $sql->bindValue(5, $usu_pass);
            $sql->bindValue(6, $fech_crea);
            $sql->bindValue(7, $rol_id);
            $sql->bindValue(8, $usu_id);
			$sql->execute();
        }

        public function delete_usuario($usu_id){
            $conectar= parent::conexion();
            parent::set_names();
                        //no borra en base de datos cambia el estado de 1 a cero
            $sql="UPDATE usuario SET est=0 WHERE usu_id=?";
                    //borra en base de datos
            //$sql="DELETE FROM tm_menu WHERE men_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
			$sql->execute();
        }

        public function get_usuario_x_id($usu_id){
			$conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM usuario WHERE usu_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_id);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }
    }
?>