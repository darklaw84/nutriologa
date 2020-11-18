<?php
include_once 'APIController.php';
$api = new APIController();
$fecha = $_POST['fecha'];

$idNutriologo = $_POST['idNutriologo'];
$idPaciente = $_POST['idPaciente'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFin'];



$resultado = json_decode($api->insertarCita(
    $idNutriologo,
    $idPaciente,
    $fecha,
    $horaFin,
    $horaInicio
));

echo "exito";


