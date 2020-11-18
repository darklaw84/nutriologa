<?php
include_once 'APIController.php';
$api = new APIController();
$estadoCivil = $_POST['estadoCivil'];

$actividadLaboral = $_POST['actividadLaboral'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$nacionalidad = $_POST['nacionalidad'];
$residencia = $_POST['residencia'];
$escolaridad = $_POST['escolaridad'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];

$telefono = $_POST['telefono'];
$metas = $_POST['metas'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$idNutriologo = $_POST['idNutriologo'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$os = $_POST['os'];
$tutor = $_POST['tutor'];

if ($tutor == "ok") {
    $tutor = true;
} else {
    $tutor = false;
}






$resultado = json_decode($api->insertarUsuario(
    $nombre,
    $apellidos,
    $edad,
    $telefono,
    $sexo,
    $idNutriologo,
    $usuario,
    $email,
    $os,
    $tutor,
    $password
));

if (isset($resultado->error)) {
    echo "error: " . $resultado->error;
} else {
    $idUsuarioNuevo = $resultado->objectId;

    $resultado = json_decode($api->insertarPaciente(
        $fechaNacimiento,
        $estadoCivil,
        $actividadLaboral,
        $nacionalidad,
        $residencia,
        $idUsuarioNuevo,
        $metas,
        $escolaridad
    ));
    echo $idUsuarioNuevo;
}
