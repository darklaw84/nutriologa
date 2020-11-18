<?php 
 include_once 'APIController.php';


 $api = new APIController();
 $idNutriologo=$_POST['idNutriologo'];

$resultado = json_decode($api->consultaCalendarioNutriologo($idNutriologo));
$calendario = $resultado->results;

echo json_encode($calendario);

?>