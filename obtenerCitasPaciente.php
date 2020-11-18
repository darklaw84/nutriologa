<?php 
 include_once 'APIController.php';


 $api = new APIController();
 $idPaciente=$_POST['idPaciente'];

$resultado = json_decode($api->consultaCitasPaciente($idPaciente,"",""));
$citas = $resultado->results;

echo json_encode($citas);

?>