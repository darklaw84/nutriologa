<?php
include_once 'APIController.php';
$api = new APIController();


$usuario = $_POST['usuario'];



$resultado = json_decode($api->consultaNotificaciones($usuario
));

$notificaciones = $resultado->results;

foreach($notificaciones as $not)
{
    $api->borrarNotificacion($not->objectId);
}

echo json_encode('{"mensaje":"exito"}');


