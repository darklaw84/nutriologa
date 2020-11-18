<?php
include_once 'APIController.php';
$api = new APIController();
$idCita = $_POST['idCita'];

$edad = $_POST['edad'];
$talla = $_POST['talla'];
$peso = $_POST['peso'];
$brazo = $_POST['brazo'];
$pecho = $_POST['pecho'];
$cintura = $_POST['cintura'];
if(isset($_POST['ombligo']))
{
$ombligo = $_POST['ombligo'];
}
else
{
    $ombligo ="";
}
$cadera = $_POST['cadera'];
$muslo = $_POST['muslo'];
$grasa = $_POST['grasa'];
$musculo = $_POST['musculo'];
$agua = $_POST['agua'];
$huesos = $_POST['huesos'];
$Ppor = $_POST['Ppor'];

$HCpor = $_POST['HCpor'];
$Gpor = $_POST['Gpor'];
$totCalorias = $_POST['totCalorias'];

$pesoMin = $_POST['pesoMin'];
$pesoMax = $_POST['pesoMax'];
$pesoTeorico = $_POST['pesoTeorico'];
$porPesoTeorico = $_POST['porPesoTeorico'];
$imc = $_POST['imc'];





$api->actualizarCitaMedibles(
    $idCita,
    $edad,
    $talla,
    $peso,
    $brazo,
    $pecho,
    $cintura,
    $ombligo,
    $cadera,
    $muslo,
    $Ppor,
    $HCpor,
    $Gpor,
    $grasa,
    $agua,
    $musculo,
    $huesos,$totCalorias,$pesoMax,$pesoMin,$pesoTeorico,$porPesoTeorico,$imc
);
$arreglo = array("mensaje" => "exito");
echo json_encode($arreglo);
