<?php
include_once 'APIController.php';
$api = new APIController();


$idCitaEliminar = $_POST['idCitaEliminar'];

$resultado=json_decode($api->consultaCita($idCitaEliminar));
$cita=$resultado->results[0];

$resultado = json_decode($api->borrarCita(
    $idCitaEliminar
));

$resultado = json_decode($api->insertarNotificacion(
    $cita->patient->objectId,
    $cita->patient->objectId,
    $cita->patient->name,
    $cita->horaInicio." - ".$cita->horaFin,
    "eli"
    
));

echo "exito";


