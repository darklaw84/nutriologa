<?php

session_start();

$_SESSION['idUsuario']="";
$_SESSION['usuario']="";

include_once 'APIController.php';


$api=new APIController();


$api->logout($_SESSION['sessionToken']);


echo "<script>window.setTimeout(function() { window.location = 'http://www.unno.fit' }, 10);</script>";


?>
