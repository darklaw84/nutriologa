<?php

class APIController
{

    public $urlBase = "https://unno.fit/parse/classes/";
    public $urlBaseLogin = "https://unno.fit/parse/";
    public $aplicationID = "SSJ50Dg9SSeBhqGAWqCoWjizduLx1tSO8cKO9hD3";
    public $MasterKey = "nhywjrECsEa6ZT1BO0289EKPBwFJmOEDZ5AsfAE0";

    public function __construct()
    {
    }


    function CallAPI($method, $url, $data)
    {


        $url = $this->urlBase . $url;
        $curl = curl_init();

        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);

                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, $data);
        }

        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey

        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }





    function actualizarPaciente(
        $idPaciente,
        $fumtipo,
        $apetito,
        $estadoCivil,
        $actividadLaboral,
        $fechaNacimiento,
        $nacionalidad,
        $residencia,
        $enfermedades,
        $hospitalizacion,
        $herencias,
        $alergias,
        $grupoSanguineo,
        $cirugias,
        $medicamentosSup,
        $alcohol,
        $tabaco,
        $drogas,
        $fum,
        $ultimoPapanicolao,
        $sexualidad,
        $pms,
        $depoaficion,
        $metas,
        $objetivos,
        $alimentosFav,
        $alimentosNoAgradables,
        $agua,
        $aguaSaborizada,
        $refresco,
        $cafe,
        $porque,
        $vivecon,
        $quiencocina,
        $notas,
        $escolaridad,
        $dh_desayuno_hr,
        $dh_desayuno_txt,
        $dh_colacion1_hr,
        $dh_colacion1_txt,
        $dh_comida_hr,
        $dh_comida_txt,
        $dh_colacion2_hr,
        $dh_colacion2_txt,
        $dh_cena_hr,
        $dh_cena_txt,
        $despierta,
        $duerme,
        $finDeSemana,
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
    ) {


        $url = $this->urlBase . "DetallePaciente/" . $idPaciente;
        $curl = curl_init();
        $data = array(
            "estadoCivil" => $estadoCivil,
            "actividadLaboral" => $actividadLaboral,
            "fumtipo" => $fumtipo,
            "apetito" => $apetito,
            //  "fechaNacimiento"=>$fechaNacimiento,
            "nacionalidad" => $nacionalidad,
            "residencia" => $residencia,
            "enfermedades" => $enfermedades,
            "hospitalizacion" => $hospitalizacion,
            "herencias" => $herencias,
            "alergias" => $alergias,
            "grupoSanguineo" => $grupoSanguineo,
            "cirugias" => $cirugias,
            "medicamentosSup" => $medicamentosSup,
            "alcohol" => $alcohol,
            "tabaco" => $tabaco,
            "drogas" => $drogas,
            "sexualidad" => $sexualidad,
            "pms" => $pms,
            "depoaficion" => $depoaficion,
            "metas" => $metas,
            "objetivos" => $objetivos,
            "alimentosFav" => $alimentosFav,
            "alimentosNoAgradables" => $alimentosNoAgradables,
            "agua" => $agua,
            "aguaSaborizada" => $aguaSaborizada,
            "refresco" => $refresco,
            "cafe" => $cafe,
            "porque" => $porque,
            "vivecon" => $vivecon,
            "quiencocina" => $quiencocina,
            "escolaridad" => $escolaridad,

            "notas" => $notas,

            "dh_desayuno_hr" => $dh_desayuno_hr,
            "dh_desayuno_txt" => $dh_desayuno_txt,
            "dh_colacion1_hr" => $dh_colacion1_hr,
            "dh_colacion1_txt" => $dh_colacion1_txt,
            "dh_comida_hr" => $dh_comida_hr,
            "dh_comida_txt" => $dh_comida_txt,
            "dh_colacion2_hr" => $dh_colacion2_hr,
            "dh_colacion2_txt" => $dh_colacion2_txt,
            "dh_cena_hr" => $dh_cena_hr,
            "dh_cena_txt" => $dh_cena_txt,
            "despierta" => $despierta,
            "duerme" => $duerme,
            "finDeSemana" => $finDeSemana,

            "ver_des" => $ver_des,
            "ver_col1" => $ver_col1,
            "ver_com" => $ver_com,
            "ver_col2" => $ver_col2,
            "ver_cen" => $ver_cen,

            "fru_des" => $fru_des,
            "fru_col1" => $fru_col1,
            "fru_com" => $fru_com,
            "fru_col2" => $fru_col2,
            "fru_cen" => $fru_cen,


            "cer_sg_des" => $cer_sg_des,
            "cer_sg_col1" => $cer_sg_col1,
            "cer_sg_com" => $cer_sg_com,
            "cer_sg_col2" => $cer_sg_col2,
            "cer_sg_cen" => $cer_sg_cen,

            "cer_cg_des" => $cer_cg_des,
            "cer_cg_col1" => $cer_cg_col1,
            "cer_cg_com" => $cer_cg_com,
            "cer_cg_col2" => $cer_cg_col2,
            "cer_cg_cen" => $cer_cg_cen,

            "leg_des" => $leg_des,
            "leg_col1" => $leg_col1,
            "leg_com" => $leg_com,
            "leg_col2" => $leg_col2,
            "leg_cen" => $leg_cen,


            "mbag_des" => $mbag_des,
            "mbag_col1" => $mbag_col1,
            "mbag_com" => $mbag_com,
            "mbag_col2" => $mbag_col2,
            "mbag_cen" => $mbag_cen,

            "bag_des" => $bag_des,
            "bag_col1" => $bag_col1,
            "bag_com" => $bag_com,
            "bag_col2" => $bag_col2,
            "bag_cen" => $bag_cen,

            "mag_des" => $mag_des,
            "mag_col1" => $mag_col1,
            "mag_com" => $mag_com,
            "mag_col2" => $mag_col2,
            "mag_cen" => $mag_cen,

            "aag_des" => $aag_des,
            "aag_col1" => $aag_col1,
            "aag_com" => $aag_com,
            "aag_col2" => $aag_col2,
            "aag_cen" => $aag_cen,

            "ldes_des" => $ldes_des,
            "ldes_col1" => $ldes_col1,
            "ldes_com" => $ldes_com,
            "ldes_col2" => $ldes_col2,
            "ldes_cen" => $ldes_cen,

            "lsem_des" => $lsem_des,
            "lsem_col1" => $lsem_col1,
            "lsem_com" => $lsem_com,
            "lsem_col2" => $lsem_col2,
            "lsem_cen" => $lsem_cen,

            "lent_des" => $lent_des,
            "lent_col1" => $lent_col1,
            "lent_com" => $lent_com,
            "lent_col2" => $lent_col2,
            "lent_cen" => $lent_cen,

            "lcaz_des" => $lcaz_des,
            "lcaz_col1" => $lcaz_col1,
            "lcaz_com" => $lcaz_com,
            "lcaz_col2" => $lcaz_col2,
            "lcaz_cen" => $lcaz_cen,

            "az_sg_des" => $az_sg_des,
            "az_sg_col1" => $az_sg_col1,
            "az_sg_com" => $az_sg_com,
            "az_sg_col2" => $az_sg_col2,
            "az_sg_cen" => $az_sg_cen,

            "az_cg_des" => $az_cg_des,
            "az_cg_col1" => $az_cg_col1,
            "az_cg_com" => $az_cg_com,
            "az_cg_col2" => $az_cg_col2,
            "az_cg_cen" => $az_cg_cen,

            "ba_des" => $ba_des,
            "ba_col1" => $ba_col1,
            "ba_com" => $ba_com,
            "ba_col2" => $ba_col2,
            "ba_cen" => $ba_cen,

            "ag_cp_des" => $ag_cp_des,
            "ag_cp_col1" => $ag_cp_col1,
            "ag_cp_com" => $ag_cp_com,
            "ag_cp_col2" => $ag_cp_col2,
            "ag_cp_cen" => $ag_cp_cen,


            "ag_sp_des" => $ag_sp_des,
            "ag_sp_col1" => $ag_sp_col1,
            "ag_sp_com" => $ag_sp_com,
            "ag_sp_col2" => $ag_sp_col2,
            "ag_sp_cen" => $ag_sp_cen,
        );

        if ($fum != "") {
            $fum = date('Y-m-d', strtotime($fum . ' + 1 days'));
            $datetime = new DateTime($fum);

            $fecha = $datetime->format(DateTime::ATOM);
            $arregloFecha = array("__type" => "Date", "iso" => $fecha);
            $data['fum'] = $arregloFecha;
        }

        if ($ultimoPapanicolao != "") {
            $ultimoPapanicolao = date('Y-m-d', strtotime($ultimoPapanicolao . ' + 1 days'));
            $datetime = new DateTime($ultimoPapanicolao);

            $fecha = $datetime->format(DateTime::ATOM);
            $arregloFecha = array("__type" => "Date", "iso" => $fecha);
            $data['ultimoPapanicolao'] = $arregloFecha;
        }

        if ($fechaNacimiento != "") {
            $fechaNacimiento = date('Y-m-d', strtotime($fechaNacimiento . ' + 1 days'));
            $datetime = new DateTime($fechaNacimiento);

            $fecha = $datetime->format(DateTime::ATOM);
            $arregloFecha = array("__type" => "Date", "iso" => $fecha);
            $data['fechaNacimiento'] = $arregloFecha;
        }

        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }







    function actualizarCitaPaciente(
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
    ) {


        $url = $this->urlBase . "Appointment/" . $idCita;
        $curl = curl_init();
        $data = array(
            "dh_desayuno_hr" => $dh_desayuno_hr,
            "dh_colacion1_hr" => $dh_colacion1_hr,
            "dh_comida_hr" => $dh_comida_hr,
            "dh_colacion2_hr" => $dh_colacion2_hr,
            "dh_cena_hr" => $dh_cena_hr,


            "ver_des" => $ver_des,
            "ver_col1" => $ver_col1,
            "ver_com" => $ver_com,
            "ver_col2" => $ver_col2,
            "ver_cen" => $ver_cen,

            "fru_des" => $fru_des,
            "fru_col1" => $fru_col1,
            "fru_com" => $fru_com,
            "fru_col2" => $fru_col2,
            "fru_cen" => $fru_cen,


            "cer_sg_des" => $cer_sg_des,
            "cer_sg_col1" => $cer_sg_col1,
            "cer_sg_com" => $cer_sg_com,
            "cer_sg_col2" => $cer_sg_col2,
            "cer_sg_cen" => $cer_sg_cen,

            "cer_cg_des" => $cer_cg_des,
            "cer_cg_col1" => $cer_cg_col1,
            "cer_cg_com" => $cer_cg_com,
            "cer_cg_col2" => $cer_cg_col2,
            "cer_cg_cen" => $cer_cg_cen,

            "leg_des" => $leg_des,
            "leg_col1" => $leg_col1,
            "leg_com" => $leg_com,
            "leg_col2" => $leg_col2,
            "leg_cen" => $leg_cen,


            "mbag_des" => $mbag_des,
            "mbag_col1" => $mbag_col1,
            "mbag_com" => $mbag_com,
            "mbag_col2" => $mbag_col2,
            "mbag_cen" => $mbag_cen,

            "bag_des" => $bag_des,
            "bag_col1" => $bag_col1,
            "bag_com" => $bag_com,
            "bag_col2" => $bag_col2,
            "bag_cen" => $bag_cen,

            "mag_des" => $mag_des,
            "mag_col1" => $mag_col1,
            "mag_com" => $mag_com,
            "mag_col2" => $mag_col2,
            "mag_cen" => $mag_cen,

            "aag_des" => $aag_des,
            "aag_col1" => $aag_col1,
            "aag_com" => $aag_com,
            "aag_col2" => $aag_col2,
            "aag_cen" => $aag_cen,

            "ldes_des" => $ldes_des,
            "ldes_col1" => $ldes_col1,
            "ldes_com" => $ldes_com,
            "ldes_col2" => $ldes_col2,
            "ldes_cen" => $ldes_cen,

            "lsem_des" => $lsem_des,
            "lsem_col1" => $lsem_col1,
            "lsem_com" => $lsem_com,
            "lsem_col2" => $lsem_col2,
            "lsem_cen" => $lsem_cen,

            "lent_des" => $lent_des,
            "lent_col1" => $lent_col1,
            "lent_com" => $lent_com,
            "lent_col2" => $lent_col2,
            "lent_cen" => $lent_cen,

            "lcaz_des" => $lcaz_des,
            "lcaz_col1" => $lcaz_col1,
            "lcaz_com" => $lcaz_com,
            "lcaz_col2" => $lcaz_col2,
            "lcaz_cen" => $lcaz_cen,

            "az_sg_des" => $az_sg_des,
            "az_sg_col1" => $az_sg_col1,
            "az_sg_com" => $az_sg_com,
            "az_sg_col2" => $az_sg_col2,
            "az_sg_cen" => $az_sg_cen,

            "az_cg_des" => $az_cg_des,
            "az_cg_col1" => $az_cg_col1,
            "az_cg_com" => $az_cg_com,
            "az_cg_col2" => $az_cg_col2,
            "az_cg_cen" => $az_cg_cen,

            "ba_des" => $ba_des,
            "ba_col1" => $ba_col1,
            "ba_com" => $ba_com,
            "ba_col2" => $ba_col2,
            "ba_cen" => $ba_cen,

            "ag_cp_des" => $ag_cp_des,
            "ag_cp_col1" => $ag_cp_col1,
            "ag_cp_com" => $ag_cp_com,
            "ag_cp_col2" => $ag_cp_col2,
            "ag_cp_cen" => $ag_cp_cen,


            "ag_sp_des" => $ag_sp_des,
            "ag_sp_col1" => $ag_sp_col1,
            "ag_sp_com" => $ag_sp_com,
            "ag_sp_col2" => $ag_sp_col2,
            "ag_sp_cen" => $ag_sp_cen,
        );




        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }



    function actualizarCitaMedibles(
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
        $huesos,
        $totCalorias,
        $pesoMax,
        $pesoMin,
        $pesoTeorico,
        $porPesoTeorico,
        $imc
    ) {


        $url = $this->urlBase . "Appointment/" . $idCita;
        $curl = curl_init();
        $data = array(
            "edad" => $edad,
            "talla" => $talla,
            "peso" => $peso,
            "brazo" => $brazo,
            "pecho" => $pecho,
            "totCalorias" => $totCalorias,
            "cintura" => $cintura,
            "ombligo" => $ombligo,
            "cadera" => $cadera,
            "muslo" => $muslo,
            "agua" => $agua,
            "musculo" => $musculo,
            "grasa" => $grasa,
            "huesos" => $huesos,
            "porcentajeP" => $Ppor,

            "porcentajeHC" => $HCpor,

            "pesoMax" => $pesoMax,
            "pesoMin" => $pesoMin,
            "pesoTeoricoV" => $pesoTeorico,
            "pesoTeoricoP" => $porPesoTeorico,
            "imc" => $imc,

            "porcentajeG" => $Gpor
        );




        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }


    function borrarCita(
        $idCita
    ) {


        $url = $this->urlBase . "Appointment/" . $idCita;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));

        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }



    function eliminarPaciente(
        $idPaciente
    ) {


        $url = $this->urlBase . "_User/" . $idPaciente;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));

        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }



    function insertarUsuario(
        $nombre,
        $apellidos,
        $edad,
        $telefono,
        $sexo,
        $idNutriologo,
        $usuario,
        $correo,
        $os,
        $tutor,
        $password
    ) {


        $url = $this->urlBase . "_User";
        $curl = curl_init();



        $data = array(
            "lastName" => $apellidos,
            "genre" => $sexo,

            "typeUser" => "patient",
            "name" => $nombre,
            "isTutor" => $tutor,
            "sistemaoperativo" => $os,
            "nutritionistId" => $idNutriologo,
            "phone" => $telefono,
            "username" => $usuario,
            "password" => $password,
            "email" => $correo,
            "age" => $edad
        );
        $apuntador = array("__type" => "Pointer", "className" => "_User", "objectId" => $idNutriologo);
        $data['nutritionist'] = $apuntador;


        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }



    function insertarCita(
        $idNutriologo,
        $idPaciente,
        $fecha,
        $horaFin,
        $horaInicio
    ) {


        $url = $this->urlBase . "Appointment";
        $curl = curl_init();



        $data = array(
            "horaInicio" => $horaInicio,
            "horaFin" => $horaFin

        );
        $apuntador = array("__type" => "Pointer", "className" => "_User", "objectId" => $idNutriologo);
        $data['user'] = $apuntador;
        $apuntadorPac = array("__type" => "Pointer", "className" => "_User", "objectId" => $idPaciente);
        $data['patient'] = $apuntadorPac;

        if ($fecha != "") {
            $fecha = date('Y-m-d', strtotime($fecha . ' + 1 days'));
            $datetime = new DateTime($fecha);

            $fechaN = $datetime->format(DateTime::ATOM);
            $arregloFecha = array("__type" => "Date", "iso" => $fechaN);
            $data['date'] = $arregloFecha;
        }

        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }



    function insertarBalance(
        $tipo,
        $monto,
        $concepto,
        $idNutriologo
    ) {
        $url = $this->urlBase . "Balance";
        $curl = curl_init();
        $data = array(
            "type" => $tipo,
            "concept" => $concepto,
            "amount" => $monto

        );
        $apuntador = array("__type" => "Pointer", "className" => "_User", "objectId" => $idNutriologo);
        $data['nutriologoId'] = $apuntador;
        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));


        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }



    function subirFoto(
        $path
    ) {
        $url = $this->urlBaseLogin . "files/photo.jpg";
        $curl = curl_init();
        $data = array(
            "data-binary" => $path
        );
        
        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => file_get_contents($path),
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: image/jpeg",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));


        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }


    function actualizarNutriologo(
        $idNutriologo,
        $nombre,
        $apellidos,
        $edad,
        $telefono,
        $correo,
        $password,
        $cedulaProfesional,
        $telefonoOficina
    ) {

        $url = $this->urlBase . "_User/" . $idNutriologo;
        $curl = curl_init();



        $data = array(
            "lastName" => $apellidos,
            "name" => $nombre,
            "phone" => $telefono,
            "email" => $correo,
            "telefonoOficina" => $telefonoOficina,
            "cedulaProfesional" => $cedulaProfesional,
            "age" => $edad
        );

        if ($password != "") {
            $data['password'] = $password;
        }

        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }



    function actualizarFotoUsuario(
        $idUsuario,
        $nombreFoto,
        $urlFoto
    ) {

        $url = $this->urlBase . "_User/" . $idUsuario;
        $curl = curl_init();



        $data = array(
        );

        $apuntador = array("__type" => "File", "name" => $nombreFoto, "url" => $urlFoto);
        $data['avatar'] = $apuntador;

        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }





    function borrarNotificacion(
        $idNotificacion
    ) {

        $url = $this->urlBase . "Notification/" . $idNotificacion;
        $curl = curl_init();



        $data = array(
            "isRead" => true
        );


        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }




    function actualizarCita(
        $idCita,
        $fecha,
        $horaInicio,
        $horaFin
    ) {

        $url = $this->urlBase . "Appointment/" . $idCita;
        $curl = curl_init();



        $data = array(
            "horaInicio" => $horaInicio,
            "horaFin" => $horaFin
        );
        if ($fecha != "") {
            $fecha = date('Y-m-d', strtotime($fecha . ' + 1 days'));
            $datetime = new DateTime($fecha);

            $fechaN = $datetime->format(DateTime::ATOM);
            $arregloFecha = array("__type" => "Date", "iso" => $fechaN);
            $data['date'] = $arregloFecha;
        }


        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }




    function insertarPaciente(
        $fechaNacimiento,
        $estadoCivil,
        $actividadLaboral,
        $nacionalidad,
        $residencia,
        $idUsuario,
        $metas,
        $escolaridad
    ) {


        $url = $this->urlBase . "DetallePaciente";
        $curl = curl_init();



        $data = array(
            "estadoCivil" => $estadoCivil,
            "actividadLaboral" => $actividadLaboral,
            "nacionalidad" => $nacionalidad,
            "residencia" => $residencia,
            "escolaridad" => $escolaridad,
            "metas" => $metas

        );
        $apuntador = array("__type" => "Pointer", "className" => "_User", "objectId" => $idUsuario);
        $data['userId'] = $apuntador;

        $fechaNacimiento = date('Y-m-d', strtotime($fechaNacimiento . ' + 1 days'));
        $datetime = new DateTime($fechaNacimiento);
        $fecha = $datetime->format(DateTime::ATOM);
        $arregloFecha = array("__type" => "Date", "iso" => $fecha);
        $data['fechaNacimiento'] = $arregloFecha;


        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }



    function insertarNotificacion(
        $usuarioNotificacion,
        $usuarioCita,
        $usuarioNombre,
        $horario,
        $tipo
    ) {


        $url = $this->urlBase . "Notification";
        $curl = curl_init();



        $data = array(
            "schedule" => $horario,
            "isRead" => false,
            "tipo" => $tipo,
            "userName" => $usuarioNombre

        );
        $apuntadorUsuarioNot = array("__type" => "Pointer", "className" => "_User", "objectId" => $usuarioNotificacion);
        $data['user'] = $apuntadorUsuarioNot;
        $apuntadorUsuarioCita = array("__type" => "Pointer", "className" => "_User", "objectId" => $usuarioCita);
        $data['userCita'] = $apuntadorUsuarioCita;



        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }


    function insertarDetalleNutriologo(
        $telefonoOficina,
        $cedulaProfesional,
        $idUsuario
    ) {


        $url = $this->urlBase . "DetalleNutriologo";
        $curl = curl_init();



        $data = array(
            "telefonoOficina" => $telefonoOficina,
            "cedulaProfesional" => $cedulaProfesional

        );
        $apuntador = array("__type" => "Pointer", "className" => "_User", "objectId" => $idUsuario);
        $data['userId'] = $apuntador;




        $jsonenviar = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $jsonenviar,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }


    function login($usuario, $password)
    {


        $url = $this->urlBaseLogin . "login";
        $curl = curl_init();
        $data = "username=" . $usuario . "&password=" . $password . "";

        $url = sprintf("%s?%s", $url, $data);


        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }


    function logout($sessionToken)
    {


        $url = $this->urlBaseLogin . "logout";
        $curl = curl_init();



        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                'X-Parse-Application-Id: ' . $this->aplicationID,
                'XX-Parse-Session-Token: ' . $sessionToken,
                'X-Parse-Master-Key: ' . $this->MasterKey
            ),
        ));





        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
        }
        return $result;
    }


    /**
     * Obtiene las citas del rango de fechas del doctor
     *
     * @param idDoctor   id del doctor
     * @param integer $repeat How many times something interesting should happen
     * 
     * @param fechaInicial tiene que estar en formato yyyy-MM-dd
     * @param fechaFinal tiene que estar en formato yyyy-MM-dd
     * @return ObjetoJson con toda la informacion de las citas
     */
    function consultaCitasDoctor($idDoctor, $fechaInicial, $fechaFinal)
    {


        $url = $this->urlBase . "Appointment";
        $curl = curl_init();
        $datos = array();
        $apuntador = array("__type" => "Pointer", "className" => "_User", "objectId" => $idDoctor);
        $datos['user'] = $apuntador;

        $jsonenviar = json_encode($datos);
        if ($fechaInicial == "" && $fechaFinal == "") {
            $data = "where=" . $jsonenviar . "&include=patient";
        } else {

            if ($fechaFinal != "" && $fechaInicial != "") {
                $data = "where={\"date\":{\"\$gte\":{\"__type\":\"Date\",\"iso\":\"" . $fechaInicial .
                    "T00:00:00.000Z\"},\"\$lte\":{\"__type\":\"Date\",\"iso\":\"" . $fechaFinal .
                    "T23:59:59.000Z\"}},\"user\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" .
                    $idDoctor . "\"}}&include=patient&order=horaInicio";
            } else if ($fechaInicial != "") {
                $data = "where={\"date\":{\"\$gte\":{\"__type\":\"Date\",\"iso\":\"" . $fechaInicial .
                    "T00:00:00.000Z\"}},\"user\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" .
                    $idDoctor . "\"}}&include=patient&order=horaInicio";
            } else if ($fechaFinal != "") {
                $data = "where={\"date\":{\"\$lte\":{\"__type\":\"Date\",\"iso\":\"" . $fechaFinal .
                    "T23:59:59.000Z\"}},\"user\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" .
                    $idDoctor . "\"}}&include=patient&order=horaInicio";
            }
        }

        $url = sprintf("%s?%s", $url, $data);



        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        return $result;
    }





    function consultaHorariosDoctor($idDoctor)
    {


        $url = $this->urlBase . "Schedule";
        $curl = curl_init();
        $datos = array();
        $apuntador = array("__type" => "Pointer", "className" => "_User", "objectId" => $idDoctor);
        $datos['userId'] = $apuntador;

        $jsonenviar = json_encode($datos);
        $data = "where=" . $jsonenviar ;

        $url = sprintf("%s?%s", $url, $data);



        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        return $result;
    }



    function consultaNotificaciones($idDoctor)
    {


        $url = $this->urlBase . "Notification";
        $curl = curl_init();
        $datos = array();
        $apuntador = array("__type" => "Pointer", "className" => "_User", "objectId" => $idDoctor);
        $datos['user'] = $apuntador;
        $datos['isRead'] = false;

        $jsonenviar = json_encode($datos);

        $data = "where=" . $jsonenviar . "&include=patient";


        $url = sprintf("%s?%s", $url, $data);



        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        return $result;
    }



    function consultaCitasPaciente($idDoctor, $fechaInicial, $fechaFinal)
    {


        $url = $this->urlBase . "Appointment";
        $curl = curl_init();
        $datos = array();
        $apuntador = array("__type" => "Pointer", "className" => "_User", "objectId" => $idDoctor);
        $datos['patient'] = $apuntador;

        $jsonenviar = json_encode($datos);
        if ($fechaInicial == "" && $fechaFinal == "") {
            $data = "where=" . $jsonenviar . "&include=patient";
        } else {

            if ($fechaFinal != "" && $fechaInicial != "") {
                $data = "where={\"date\":{\"\$gte\":{\"__type\":\"Date\",\"iso\":\"" . $fechaInicial .
                    "T00:00:01.000Z\"},\"\$lte\":{\"__type\":\"Date\",\"iso\":\"" . $fechaFinal .
                    "T23:59:59.000Z\"}},\"patient\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" .
                    $idDoctor . "\"}}&include=patient&order=date";
            } else if ($fechaInicial != "") {
                $data = "where={\"date\":{\"\$gte\":{\"__type\":\"Date\",\"iso\":\"" . $fechaInicial .
                    "T00:00:01.000Z\"}},\"patient\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" .
                    $idDoctor . "\"}}&include=patient&order=date";
            } else if ($fechaFinal != "") {
                $data = "where={\"date\":{\"\$lte\":{\"__type\":\"Date\",\"iso\":\"" . $fechaFinal .
                    "T23:59:59.000Z\"}},\"patient\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" .
                    $idDoctor . "\"}}&include=patient&order=date";
            }
        }

        $url = sprintf("%s?%s", $url, $data);



        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        return $result;
    }


    function consultaCita($idCita)
    {


        $url = $this->urlBase . "Appointment";
        $curl = curl_init();
        $datos = array();
        
        $datos['objectId'] = $idCita;

        $jsonenviar = json_encode($datos);
       
            $data = "where=" . $jsonenviar . "&include=patient";
        

        $url = sprintf("%s?%s", $url, $data);



        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        return $result;
    }



    function consultaSesion($idUsuario)
    {


        $url = $this->urlBase . "_Session";
        $curl = curl_init();
        $datos = array();
        
        $apuntador = array("__type" => "Pointer", "className" => "_User", "objectId" => $idUsuario);
        $datos['user'] = $apuntador;

        $jsonenviar = json_encode($datos);
       
            $data = "where=" . $jsonenviar . "&order=updateAt";
        

        $url = sprintf("%s?%s", $url, $data);



        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        return $result;
    }



    function consultaBalanceNutriologo($idDoctor, $fechaInicial, $fechaFinal)
    {


        $url = $this->urlBase . "Balance";
        $curl = curl_init();
        $data = "where={\"createdAt\":{\"\$gte\":{\"__type\":\"Date\",\"iso\":\"" . $fechaInicial .
            "T00:00:01.000Z\"},\"\$lte\":{\"__type\":\"Date\",\"iso\":\"" . $fechaFinal .
            "T23:59:59.000Z\"}},\"nutriologoId\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" .
            $idDoctor . "\"}}&order=createdAt";
        $url = sprintf("%s?%s", $url, $data);
        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        return $result;
    }




    function consultaUsuario($idUsuario)
    {

        $url = $this->urlBase . "_User";
        $curl = curl_init();
        $data = "where={\"objectId\":\"" . $idUsuario . "\"}";

        $url = sprintf("%s?%s", $url, $data);


        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }

    function consultaDetalleNutriologo($idPaciente)
    {

        $url = $this->urlBase . "DetalleNutriologo";
        $curl = curl_init();
        $data = "where={\"userId\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" . $idPaciente . "\"}}";

        $url = sprintf("%s?%s", $url, $data);


        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }


    function consultaDetallePaciente($idPaciente)
    {

        $url = $this->urlBase . "DetallePaciente";
        $curl = curl_init();
        $data = "where={\"userId\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" . $idPaciente . "\"}}";

        $url = sprintf("%s?%s", $url, $data);


        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }



    function consultaPacientesNutriologo($idUsuario)
    {

        $url = $this->urlBase . "_User";
        $curl = curl_init();
        $data = "where={\"nutritionist\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" . $idUsuario . "\"}}";

        $url = sprintf("%s?%s", $url, $data);


        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }



    function consultaCalendarioNutriologo($idUsuario)
    {

        $url = $this->urlBase . "Schedule";
        $curl = curl_init();
        $data = "where={\"userId\":{\"__type\":\"Pointer\",\"className\":\"_User\",\"objectId\":\"" . $idUsuario . "\"}}";

        $url = sprintf("%s?%s", $url, $data);


        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Parse-Application-Id: ' . $this->aplicationID,
            'X-Parse-Master-Key: ' . $this->MasterKey
        ));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}
