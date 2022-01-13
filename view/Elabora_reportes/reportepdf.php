<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
*{
  font-family:'helvetica neue', helvetica, arial, sans-serif;
}
  .tabla{
    width:100%; 
    text-align:center;
    font-family:'helvetica neue', helvetica, arial, sans-serif;
    
  }

  .titulotab{
    background-color: #0b2b3a;
    color: white;

  }

  .body{
    text-align:center;
  }

  table,td {
	border: 1px solid black;
}
</style>

<body >
<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){
    class Menu extends Conectar {
      public function get_departamento(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT * FROM empleados ORDER BY departamento;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(); 
          }
        }
?>
   <img src="../../public/img/logo.png" width="200" height="100"> 
   
  <br>
<div class="body">
    <h1>Reporte de asistencia </h1>
    <table  class="tabla">
        <thead>
          <tr class="titulotab">                  
            <th scope="col">No.empleado</th>
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

$html=ob_get_clean();
//echo $html;

 
require_once ("../../public/library/dompdf/autoload.inc.php");

use Dompdf\Dompdf; //para incluir el namespace de la librería
 
$dompdf = new Dompdf(); //crear el objeto de la clase Dompdf
       
// Componer el HTML
//$html11 = $html; //el html que necesites en formato texto, puedes incluirlo desde una vista de tu MVC
        
// Añadir el HTML a dompdf
$dompdf->loadHtml($html);
        
//Establecer el tamaño de hoja en DOMPDF
$dompdf->setPaper('A4', 'portrait');
 
// Renderizar el PDF
$dompdf->render();
 
// Forzar descarga del PDF
$dompdf->stream("mypdf.pdf", [ "Attachment" => false]);
?>  
