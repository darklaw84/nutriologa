<?php

session_start();
include_once 'APIController.php';
$api = new APIController();
include_once 'utilerias.php';

$utilerias= new Utilerias();
$fechaIni = $_POST['fechaIni'];
$fechaFin = $_POST['fechaFin'];



if (isset($_POST['fechaIni'])) {
    $fechaIni = $_POST['fechaIni'];
    $pos = strpos($fechaIni, "/");
    if ($pos) {
      $fechaIni = substr($fechaIni, 6, 4) . "-" .substr($fechaIni, 0, 2) . "-" .  substr($fechaIni, 3, 2);
    }
  } else {
    $fechaIni = date('Y-m-d', strtotime(date('Y-m-d') . ' - 7 days'));
  }
  
  if (isset($_POST['fechaFin'])) {
    $fechaFin = $_POST['fechaFin'];
    $pos = strpos($fechaFin, "/");
    if ($pos) {
      $fechaFin = substr($fechaFin, 6, 4) . "-" .  substr($fechaFin, 0, 2) . "-" .substr($fechaFin, 3, 2);
    }
  } else {
    $fechaFin = date('Y-m-d');
  }


  $fechaIniTexto =date('d',strtotime($fechaIni)).
  "/".$utilerias->traerNombreMes(date('m',strtotime($fechaIni)),false).
  "/".date('Y',strtotime($fechaIni));
  $fechaFinTexto = date('d',strtotime($fechaFin)).
  "/".$utilerias->traerNombreMes(date('m',strtotime($fechaFin)),false).
  "/".date('Y',strtotime($fechaFin));


$resultado = json_decode($api->consultaBalanceNutriologo($_SESSION['idUsuario'], $fechaIni, $fechaFin));

$resultado->fechaIniTexto=$fechaIniTexto;
$resultado->fechaFinTexto=$fechaFinTexto;


echo json_encode($resultado);


