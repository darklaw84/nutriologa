<?php
include_once 'APIController.php';
$api = new APIController();
$fecha = $_POST['fecha'];
$horaInicio = $_POST['horaInicio'];
$horaFin = $_POST['horaFin'];
$idCita = $_POST['idCita'];
$pacienteSeleccionado = $_POST['pacienteSeleccionado'];
$nutriologoSesion = $_POST['nutriologoSesion'];
$nombrePaciente = $_POST['nombrePaciente'];





$resultado = json_decode($api->actualizarCita(
    $idCita,
    $fecha,
    $horaInicio,
    $horaFin
));

$resultado = json_decode($api->insertarNotificacion(
    $pacienteSeleccionado,
    $pacienteSeleccionado,
    $nombrePaciente,
    $horaInicio." - ".$horaFin,
    "act"
    
));



echo "exito";


