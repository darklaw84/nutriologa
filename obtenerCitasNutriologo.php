<?php 
 include_once 'APIController.php';


 $api = new APIController();
 $idNutriologo=$_POST['idNutriologo'];
 $fecha=$_POST['fecha'];

$resultado = json_decode($api->consultaCitasDoctor($idNutriologo,$fecha,$fecha));
$citas = $resultado->results;

echo json_encode($citas);

?>