<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = ReporteAsistencia.xls");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){
    class Menu extends Conectar {
      public function get_departamento(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM empleados;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
          }
        }
?>
    <table >
        <thead>
          <tr>                  
            <th scope="col">NO.empleado</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido p.</th>
            <th scope="col">Departamento</th>
            <th scope="col">Horario</th>


          </tr>
        </thead>
        <tbody>
          <?php
          $menu = new Menu();
              $datos=$menu->get_departamento();
                      $data= Array();
                      foreach($datos as $row){

                        ?>
                        <tr>
                          <td> <?php echo $row["no_empleado"];?> </td> 
                          <td> <?php echo $row["nombre_emp"];?> </td> 
                           <td> <?php echo $row["ape_mat"];?> </td>
                           <td> <?php echo $row["departamento"];?> </td>
                          <td> <?php echo $row["horario"];?> </td>

                        </tr>
                      
          <?php
              }
          ?>
        </tbody>
    </table>
</div>

   
 </body>
</html>

<?php
} else {
  header("Location:".Conectar::ruta()."index.php");
}
?>