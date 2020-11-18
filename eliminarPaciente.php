<?php
include_once 'APIController.php';
$api = new APIController();


$idPaciente = $_POST['idPaciente'];



$resultado = json_decode($api->eliminarPaciente(
    $idPaciente
));



echo '{"exito":true}';


