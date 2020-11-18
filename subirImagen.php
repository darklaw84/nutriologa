<?php
session_start();
include_once 'APIController.php';
$api = new APIController();


$path=$_POST['path'];
$idUsuario=$_SESSION['idUsr'];





$resultado = json_decode($api->subirFoto(
    $path
));

$asociado=json_decode($api->actualizarFotoUsuario($idUsuario,$resultado->name,$resultado->url));




echo json_encode($resultado);


