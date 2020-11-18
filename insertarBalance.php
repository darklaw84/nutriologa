<?php
session_start();
include_once 'APIController.php';
$api = new APIController();
$tipo = $_POST['tipo'];
$monto = $_POST['monto'];
$concepto = $_POST['concepto'];
$idNutriologo = $_SESSION['idUsuario'];





$resultado = json_decode($api->insertarBalance(
    $tipo,
    floatval($monto),
    $concepto,
    $idNutriologo
));



echo '{"exito":true}';


