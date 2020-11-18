<?php
include_once 'APIController.php';
$api = new APIController();
$idCita = $_POST['idCita'];

$dh_desayuno_hr = $_POST['dh_desayuno_hr'];
$dh_colacion1_hr = $_POST['dh_colacion1_hr'];
$dh_comida_hr = $_POST['dh_comida_hr'];
$dh_colacion2_hr = $_POST['dh_colacion2_hr'];
$dh_cena_hr = $_POST['dh_cena_hr'];

$ver_des = $_POST['ver_des'];
$ver_col1 = $_POST['ver_col1'];
$ver_com = $_POST['ver_com'];
$ver_col2 = $_POST['ver_col2'];
$ver_cen = $_POST['ver_cen'];

$fru_des = $_POST['fru_des'];
$fru_col1 = $_POST['fru_col1'];
$fru_com = $_POST['fru_com'];
$fru_col2 = $_POST['fru_col2'];
$fru_cen = $_POST['fru_cen'];

$cer_sg_des = $_POST['cer_sg_des'];
$cer_sg_col1 = $_POST['cer_sg_col1'];
$cer_sg_com = $_POST['cer_sg_com'];
$cer_sg_col2 = $_POST['cer_sg_col2'];
$cer_sg_cen = $_POST['cer_sg_cen'];

$cer_cg_des = $_POST['cer_cg_des'];
$cer_cg_col1 = $_POST['cer_cg_col1'];
$cer_cg_com = $_POST['cer_cg_com'];
$cer_cg_col2 = $_POST['cer_cg_col2'];
$cer_cg_cen = $_POST['cer_cg_cen'];

$leg_des = $_POST['leg_des'];
$leg_col1 = $_POST['leg_col1'];
$leg_com = $_POST['leg_com'];
$leg_col2 = $_POST['leg_col2'];
$leg_cen = $_POST['leg_cen'];

$mbag_des = $_POST['mbag_des'];
$mbag_col1 = $_POST['mbag_col1'];
$mbag_com = $_POST['mbag_com'];
$mbag_col2 = $_POST['mbag_col2'];
$mbag_cen = $_POST['mbag_cen'];

$bag_des = $_POST['bag_des'];
$bag_col1 = $_POST['bag_col1'];
$bag_com = $_POST['bag_com'];
$bag_col2 = $_POST['bag_col2'];
$bag_cen = $_POST['bag_cen'];

$mag_des = $_POST['mag_des'];
$mag_col1 = $_POST['mag_col1'];
$mag_com = $_POST['mag_com'];
$mag_col2 = $_POST['mag_col2'];
$mag_cen = $_POST['mag_cen'];

$aag_des = $_POST['aag_des'];
$aag_col1 = $_POST['aag_col1'];
$aag_com = $_POST['aag_com'];
$aag_col2 = $_POST['aag_col2'];
$aag_cen = $_POST['aag_cen'];

$ldes_des = $_POST['ldes_des'];
$ldes_col1 = $_POST['ldes_col1'];
$ldes_com = $_POST['ldes_com'];
$ldes_col2 = $_POST['ldes_col2'];
$ldes_cen = $_POST['ldes_cen'];

$lsem_des = $_POST['lsem_des'];
$lsem_col1 = $_POST['lsem_col1'];
$lsem_com = $_POST['lsem_com'];
$lsem_col2 = $_POST['lsem_col2'];
$lsem_cen = $_POST['lsem_cen'];

$lent_des = $_POST['lent_des'];
$lent_col1 = $_POST['lent_col1'];
$lent_com = $_POST['lent_com'];
$lent_col2 = $_POST['lent_col2'];
$lent_cen = $_POST['lent_cen'];

$lcaz_des = $_POST['lcaz_des'];
$lcaz_col1 = $_POST['lcaz_col1'];
$lcaz_com = $_POST['lcaz_com'];
$lcaz_col2 = $_POST['lcaz_col2'];
$lcaz_cen = $_POST['lcaz_cen'];

$az_sg_des = $_POST['az_sg_des'];
$az_sg_col1 = $_POST['az_sg_col1'];
$az_sg_com = $_POST['az_sg_com'];
$az_sg_col2 = $_POST['az_sg_col2'];
$az_sg_cen = $_POST['az_sg_cen'];

$az_cg_des = $_POST['az_cg_des'];
$az_cg_col1 = $_POST['az_cg_col1'];
$az_cg_com = $_POST['az_cg_com'];
$az_cg_col2 = $_POST['az_cg_col2'];
$az_cg_cen = $_POST['az_cg_cen'];

$ba_des = $_POST['ba_des'];
$ba_col1 = $_POST['ba_col1'];
$ba_com = $_POST['ba_com'];
$ba_col2 = $_POST['ba_col2'];
$ba_cen = $_POST['ba_cen'];



$ag_sp_des = $_POST['ag_sp_des'];
$ag_sp_col1 = $_POST['ag_sp_col1'];
$ag_sp_com = $_POST['ag_sp_com'];
$ag_sp_col2 = $_POST['ag_sp_col2'];
$ag_sp_cen = $_POST['ag_sp_cen'];




$ag_cp_des = $_POST['ag_cp_des'];
$ag_cp_col1 = $_POST['ag_cp_col1'];
$ag_cp_com = $_POST['ag_cp_com'];
$ag_cp_col2 = $_POST['ag_cp_col2'];
$ag_cp_cen = $_POST['ag_cp_cen'];




$api->actualizarCitaPaciente(
    $idCita,

    $dh_desayuno_hr,

    $dh_colacion1_hr,
    $dh_comida_hr,
    $dh_colacion2_hr,
    $dh_cena_hr,

    $ver_des,
    $ver_col1,
    $ver_com,
    $ver_col2,
    $ver_cen,

    $fru_des,
    $fru_col1,
    $fru_com,
    $fru_col2,
    $fru_cen,

    $cer_sg_des,
    $cer_sg_col1,
    $cer_sg_com,
    $cer_sg_col2,
    $cer_sg_cen,

    $cer_cg_des,
    $cer_cg_col1,
    $cer_cg_com,
    $cer_cg_col2,
    $cer_cg_cen,

    $leg_des,
    $leg_col1,
    $leg_com,
    $leg_col2,
    $leg_cen,

    $mbag_des,
    $mbag_col1,
    $mbag_com,
    $mbag_col2,
    $mbag_cen,

    $bag_des,
    $bag_col1,
    $bag_com,
    $bag_col2,
    $bag_cen,

    $mag_des,
    $mag_col1,
    $mag_com,
    $mag_col2,
    $mag_cen,

    $aag_des,
    $aag_col1,
    $aag_com,
    $aag_col2,
    $aag_cen,

    $ldes_des,
    $ldes_col1,
    $ldes_com,
    $ldes_col2,
    $ldes_cen,

    $lsem_des,
    $lsem_col1,
    $lsem_com,
    $lsem_col2,
    $lsem_cen,


    $lent_des,
    $lent_col1,
    $lent_com,
    $lent_col2,
    $lent_cen,

    $lcaz_des,
    $lcaz_col1,
    $lcaz_com,
    $lcaz_col2,
    $lcaz_cen,

    $az_sg_des,
    $az_sg_col1,
    $az_sg_com,
    $az_sg_col2,
    $az_sg_cen,

    $az_cg_des,
    $az_cg_col1,
    $az_cg_com,
    $az_cg_col2,
    $az_cg_cen,

    $ba_des,
    $ba_col1,
    $ba_com,
    $ba_col2,
    $ba_cen,

    $ag_sp_des,
    $ag_sp_col1,
    $ag_sp_com,
    $ag_sp_col2,
    $ag_sp_cen,

    $ag_cp_des,
    $ag_cp_col1,
    $ag_cp_com,
    $ag_cp_col2,
    $ag_cp_cen

);

echo "exito";
