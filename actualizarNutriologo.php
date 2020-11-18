<?php 
include_once 'APIController.php';
$api=new APIController();
$nombre=$_POST['nombre'];
$idNutriologo=$_POST['idNutriologo'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$telOficina=$_POST['telOficina'];
$edad=$_POST['edad'];
$cedula=$_POST['cedula'];
$email=$_POST['email'];
$password=$_POST['password'];







$api->actualizarNutriologo($idNutriologo,$nombre,$apellidos,$edad,$telefono,$email,$password,$cedula,$telOficina);

echo "exito";

?>