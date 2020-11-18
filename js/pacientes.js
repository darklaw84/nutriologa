$(document).ready(function () {

    //lenarDatosModal

    $('#btnGuardarPaciente').click(function () {

        var tabActual = $('#tabActual').val();
        var idCita;
        if (tabActual === "data3Patient") {
            slides = document.getElementsByClassName("swiper-slide");
            for (i = 0; i < slides.length; i++) {
                var slide = slides[i];
                var classs = slides[i].className;
                if (classs.includes("active")) {
                    idCita = slide.childNodes.item("idCita").value;

                }
            }


            //ya tenemos el id de la cita 
            var dh_desayuno_hr = $('#cdh_desayuno_hr').val();
            var dh_colacion1_hr = $('#cdh_colacion1_hr').val();
            var dh_comida_hr = $('#cdh_comida_hr').val();
            var dh_colacion2_hr = $('#cdh_colacion2_hr').val();
            var dh_cena_hr = $('#cdh_cena_hr').val();
            
            
            var ver_des = $('#cver_des').val();
            var ver_col1 = $('#cver_col1').val();
            var ver_com = $('#cver_com').val();
            var ver_col2 = $('#cver_col2').val();
            var ver_cen = $('#cver_cen').val();

            var fru_des = $('#cfru_des').val();
            var fru_col1 = $('#cfru_col1').val();
            var fru_com = $('#cfru_com').val();
            var fru_col2 = $('#cfru_col2').val();
            var fru_cen = $('#cfru_cen').val();

            var cer_sg_des = $('#ccer_sg_des').val();
            var cer_sg_col1 = $('#ccer_sg_col1').val();
            var cer_sg_com = $('#ccer_sg_com').val();
            var cer_sg_col2 = $('#ccer_sg_col2').val();
            var cer_sg_cen = $('#ccer_sg_cen').val();

            var cer_cg_des = $('#ccer_cg_des').val();
            var cer_cg_col1 = $('#ccer_cg_col1').val();
            var cer_cg_com = $('#ccer_cg_com').val();
            var cer_cg_col2 = $('#ccer_cg_col2').val();
            var cer_cg_cen = $('#ccer_cg_cen').val();

            var leg_des = $('#cleg_des').val();
            var leg_col1 = $('#cleg_col1').val();
            var leg_com = $('#cleg_com').val();
            var leg_col2 = $('#cleg_col2').val();
            var leg_cen = $('#cleg_cen').val();


            var mbag_des = $('#cmbag_des').val();
            var mbag_col1 = $('#cmbag_col1').val();
            var mbag_com = $('#cmbag_com').val();
            var mbag_col2 = $('#cmbag_col2').val();
            var mbag_cen = $('#cmbag_cen').val();

            var bag_des = $('#cbag_des').val();
            var bag_col1 = $('#cbag_col1').val();
            var bag_com = $('#cbag_com').val();
            var bag_col2 = $('#cbag_col2').val();
            var bag_cen = $('#cbag_cen').val();


            var mag_des = $('#cmag_des').val();
            var mag_col1 = $('#cmag_col1').val();
            var mag_com = $('#cmag_com').val();
            var mag_col2 = $('#cmag_col2').val();
            var mag_cen = $('#cmag_cen').val();


            var aag_des = $('#caag_des').val();
            var aag_col1 = $('#caag_col1').val();
            var aag_com = $('#caag_com').val();
            var aag_col2 = $('#caag_col2').val();
            var aag_cen = $('#caag_cen').val();


            var ldes_des = $('#cldes_des').val();
            var ldes_col1 = $('#cldes_col1').val();
            var ldes_com = $('#cldes_com').val();
            var ldes_col2 = $('#cldes_col2').val();
            var ldes_cen = $('#cldes_cen').val();

            var lsem_des = $('#clsem_des').val();
            var lsem_col1 = $('#clsem_col1').val();
            var lsem_com = $('#clsem_com').val();
            var lsem_col2 = $('#clsem_col2').val();
            var lsem_cen = $('#clsem_cen').val();


            var lent_des = $('#clent_des').val();
            var lent_col1 = $('#clent_col1').val();
            var lent_com = $('#clent_com').val();
            var lent_col2 = $('#clent_col2').val();
            var lent_cen = $('#clent_cen').val();


            var lcaz_des = $('#clcaz_des').val();
            var lcaz_col1 = $('#clcaz_col1').val();
            var lcaz_com = $('#clcaz_com').val();
            var lcaz_col2 = $('#clcaz_col2').val();
            var lcaz_cen = $('#clcaz_cen').val();


            var az_sg_des = $('#caz_sg_des').val();
            var az_sg_col1 = $('#caz_sg_col1').val();
            var az_sg_com = $('#caz_sg_com').val();
            var az_sg_col2 = $('#caz_sg_col2').val();
            var az_sg_cen = $('#caz_sg_cen').val();


            var az_cg_des = $('#caz_cg_des').val();
            var az_cg_col1 = $('#caz_cg_col1').val();
            var az_cg_com = $('#caz_cg_com').val();
            var az_cg_col2 = $('#caz_cg_col2').val();
            var az_cg_cen = $('#caz_cg_cen').val();

            var ba_des = $('#cba_des').val();
            var ba_col1 = $('#cba_col1').val();
            var ba_com = $('#cba_com').val();
            var ba_col2 = $('#cba_col2').val();
            var ba_cen = $('#cba_cen').val();


            var ag_cp_des = $('#cag_cp_des').val();
            var ag_cp_col1 = $('#cag_cp_col1').val();
            var ag_cp_com = $('#cag_cp_com').val();
            var ag_cp_col2 = $('#cag_cp_col2').val();
            var ag_cp_cen = $('#cag_cp_cen').val();


            var ag_sp_des = $('#cag_sp_des').val();
            var ag_sp_col1 = $('#cag_sp_col1').val();
            var ag_sp_com = $('#cag_sp_com').val();
            var ag_sp_col2 = $('#cag_sp_col2').val();
            var ag_sp_cen = $('#cag_sp_cen').val();


            $.ajax({
                url: 'actualizarCitaPaciente.php',
                type: 'post',
                data: {
                    idCita: idCita,
                    dh_desayuno_hr: dh_desayuno_hr,
                    dh_colacion1_hr: dh_colacion1_hr,
                    dh_comida_hr: dh_comida_hr,
                    dh_colacion2_hr: dh_colacion2_hr,
                    dh_cena_hr: dh_cena_hr,
                    ver_des: ver_des,
                    ver_col1: ver_col1,
                    ver_com: ver_com,
                    ver_col2: ver_col2,
                    ver_cen: ver_cen,
                    fru_des: fru_des,
                    fru_col1: fru_col1,
                    fru_com: fru_com,
                    fru_col2: fru_col2,
                    fru_cen: fru_cen,
                    cer_sg_des: cer_sg_des,
                    cer_sg_col1: cer_sg_col1,
                    cer_sg_com: cer_sg_com,
                    cer_sg_col2: cer_sg_col2,
                    cer_sg_cen: cer_sg_cen,
                    cer_cg_des: cer_cg_des,
                    cer_cg_col1: cer_cg_col1,
                    cer_cg_com: cer_cg_com,
                    cer_cg_col2: cer_cg_col2,
                    cer_cg_cen: cer_cg_cen,
                    leg_des: leg_des,
                    leg_col1: leg_col1,
                    leg_com: leg_com,
                    leg_col2: leg_col2,
                    leg_cen: leg_cen,
                    mbag_des: mbag_des,
                    mbag_col1: mbag_col1,
                    mbag_com: mbag_com,
                    mbag_col2: mbag_col2,
                    mbag_cen: mbag_cen,
                    bag_des: bag_des,
                    bag_col1: bag_col1,
                    bag_com: bag_com,
                    bag_col2: bag_col2,
                    bag_cen: bag_cen,
                    mag_des: mag_des,
                    mag_col1: mag_col1,
                    mag_com: mag_com,
                    mag_col2: mag_col2,
                    mag_cen: mag_cen,
                    aag_des: aag_des,
                    aag_col1: aag_col1,
                    aag_com: aag_com,
                    aag_col2: aag_col2,
                    aag_cen: aag_cen,
                    ldes_des: ldes_des,
                    ldes_col1: ldes_col1,
                    ldes_com: ldes_com,
                    ldes_col2: ldes_col2,
                    ldes_cen: ldes_cen,
                    lsem_des: lsem_des,
                    lsem_col1: lsem_col1,
                    lsem_com: lsem_com,
                    lsem_col2: lsem_col2,
                    lsem_cen: lsem_cen,
                    lent_des: lent_des,
                    lent_col1: lent_col1,
                    lent_com: lent_com,
                    lent_col2: lent_col2,
                    lent_cen: lent_cen,
                    lcaz_des: lcaz_des,
                    lcaz_col1: lcaz_col1,
                    lcaz_com: lcaz_com,
                    lcaz_col2: lcaz_col2,
                    lcaz_cen: lcaz_cen,
                    az_sg_des: az_sg_des,
                    az_sg_col1: az_sg_col1,
                    az_sg_com: az_sg_com,
                    az_sg_col2: az_sg_col2,
                    az_sg_cen: az_sg_cen,
                    az_cg_des: az_cg_des,
                    az_cg_col1: az_cg_col1,
                    az_cg_com: az_cg_com,
                    az_cg_col2: az_cg_col2,
                    az_cg_cen: az_cg_cen,
                    ba_des: ba_des,
                    ba_col1: ba_col1,
                    ba_com: ba_com,
                    ba_col2: ba_col2,
                    ba_cen: ba_cen,

                    ag_sp_des: ag_sp_des,
                    ag_sp_col1: ag_sp_col1,
                    ag_sp_com: ag_sp_com,
                    ag_sp_col2: ag_sp_col2,
                    ag_sp_cen: ag_sp_cen,
                    ag_cp_des: ag_cp_des,
                    ag_cp_col1: ag_cp_col1,
                    ag_cp_com: ag_cp_com,
                    ag_cp_col2: ag_cp_col2,
                    ag_cp_cen: ag_cp_cen




                },
                dataType: 'json',
                success: function (response) {


                    $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Información actualizada con éxito').end().modal({
                        fadeDuration: 200,
                        fadeDelay: 1.75
                    });

                   

                },
                error: function (request, status, error) {
                    if (request.responseText === "exito") {
                        $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Información actualizado con éxito').end().modal({
                            fadeDuration: 200,
                            fadeDelay: 1.75
                        });

                        var idPaciente =$('#idPacienteInfo').val();
                        $.ajax({
                            url: 'obtenerCitasPaciente.php',
                            type: 'post',
                            data: {
                                idPaciente: idPaciente
                    
                            },
                            dataType: 'json',
                            success: function (datos) {
                                citasPaciente = datos;
                                llenarDatos();
                    
                            }
                        });

                    }
                }
            });


        }
        else {
            var estadoCivil = $('#estadoCivil').val();
            var idPaciente = $('#idDetallePaciente').val();
            var actividadLaboral = $('#actividadLaboral').val();
            var fechaNacimiento = $('#fechaNacimiento').val();
            var nacionalidad = $('#nacionalidad').val();
            var residencia = $('#residencia').val();
            var enfermedades = $('#enfermedades').val();
            var hospitalizacion = $('#hospitalizacion').val();
            var herencias = $('#herencias').val();
            var alergias = $('#alergias').val();
            var grupoSanguineo = $('#grupoSanguineo').val();
            var cirugias = $('#cirugias').val();
            var medicamentosSup = $('#medicamentosSup').val();
            var alcohol = $('#alcohol').val();
            var tabaco = $('#tabaco').val();
            var drogas = $('#drogas').val();
            var fum = $('#fum').val();
            var fumtipo = $('#fumtipo').val();
            var apetito = $('#apetito').val();
            var ultimoPapanicolao = $('#ultimoPapanicolao').val();
            var sexualidad = $('#sexualidad').val();
            var pms = $('#pms').val();
            var depoaficion = $('#depoaficion').val();
            var metas = $('#metas').val();
            var objetivos = $('#objetivos').val();
            var alimentosFav = $('#alimentosFav').val();
            var alimentosNoAgradables = $('#alimentosNoAgradables').val();
            var agua = $('#agua').val();
            var aguaSaborizada = $('#aguaSaborizada').val();
            var refresco = $('#refresco').val();
            var cafe = $('#cafe').val();
            var porque = $('#porque').val();
            var vivecon = $('#vivecon').val();
            var quiencocina = $('#quiencocina').val();
            var notas = $('#notas').val();
            var escolaridad = $('#escolaridad').val();

            var dh_desayuno_hr = $('#dh_desayuno_hr').val();
            var dh_desayuno_txt = $('#dh_desayuno_txt').val();
            var dh_colacion1_hr = $('#dh_colacion1_hr').val();
            var dh_colacion1_txt = $('#dh_colacion1_txt').val();
            var dh_comida_hr = $('#dh_comida_hr').val();
            var dh_comida_txt = $('#dh_comida_txt').val();
            var dh_colacion2_hr = $('#dh_colacion2_hr').val();
            var dh_colacion2_txt = $('#dh_colacion2_txt').val();
            var dh_cena_hr = $('#dh_cena_hr').val();
            var dh_cena_txt = $('#dh_cena_txt').val();

            var despierta = $('#despierta').val();
            var duerme = $('#duerme').val();
            var finDeSemana = $('#finDeSemana').val();

            var ver_des = $('#ver_des').val();
            var ver_col1 = $('#ver_col1').val();
            var ver_com = $('#ver_com').val();
            var ver_col2 = $('#ver_col2').val();
            var ver_cen = $('#ver_cen').val();

            var fru_des = $('#fru_des').val();
            var fru_col1 = $('#fru_col1').val();
            var fru_com = $('#fru_com').val();
            var fru_col2 = $('#fru_col2').val();
            var fru_cen = $('#fru_cen').val();

            var cer_sg_des = $('#cer_sg_des').val();
            var cer_sg_col1 = $('#cer_sg_col1').val();
            var cer_sg_com = $('#cer_sg_com').val();
            var cer_sg_col2 = $('#cer_sg_col2').val();
            var cer_sg_cen = $('#cer_sg_cen').val();

            var cer_cg_des = $('#cer_cg_des').val();
            var cer_cg_col1 = $('#cer_cg_col1').val();
            var cer_cg_com = $('#cer_cg_com').val();
            var cer_cg_col2 = $('#cer_cg_col2').val();
            var cer_cg_cen = $('#cer_cg_cen').val();

            var leg_des = $('#leg_des').val();
            var leg_col1 = $('#leg_col1').val();
            var leg_com = $('#leg_com').val();
            var leg_col2 = $('#leg_col2').val();
            var leg_cen = $('#leg_cen').val();


            var mbag_des = $('#mbag_des').val();
            var mbag_col1 = $('#mbag_col1').val();
            var mbag_com = $('#mbag_com').val();
            var mbag_col2 = $('#mbag_col2').val();
            var mbag_cen = $('#mbag_cen').val();

            var bag_des = $('#bag_des').val();
            var bag_col1 = $('#bag_col1').val();
            var bag_com = $('#bag_com').val();
            var bag_col2 = $('#bag_col2').val();
            var bag_cen = $('#bag_cen').val();


            var mag_des = $('#mag_des').val();
            var mag_col1 = $('#mag_col1').val();
            var mag_com = $('#mag_com').val();
            var mag_col2 = $('#mag_col2').val();
            var mag_cen = $('#mag_cen').val();


            var aag_des = $('#aag_des').val();
            var aag_col1 = $('#aag_col1').val();
            var aag_com = $('#aag_com').val();
            var aag_col2 = $('#aag_col2').val();
            var aag_cen = $('#aag_cen').val();


            var ldes_des = $('#ldes_des').val();
            var ldes_col1 = $('#ldes_col1').val();
            var ldes_com = $('#ldes_com').val();
            var ldes_col2 = $('#ldes_col2').val();
            var ldes_cen = $('#ldes_cen').val();

            var lsem_des = $('#lsem_des').val();
            var lsem_col1 = $('#lsem_col1').val();
            var lsem_com = $('#lsem_com').val();
            var lsem_col2 = $('#lsem_col2').val();
            var lsem_cen = $('#lsem_cen').val();


            var lent_des = $('#lent_des').val();
            var lent_col1 = $('#lent_col1').val();
            var lent_com = $('#lent_com').val();
            var lent_col2 = $('#lent_col2').val();
            var lent_cen = $('#lent_cen').val();


            var lcaz_des = $('#lcaz_des').val();
            var lcaz_col1 = $('#lcaz_col1').val();
            var lcaz_com = $('#lcaz_com').val();
            var lcaz_col2 = $('#lcaz_col2').val();
            var lcaz_cen = $('#lcaz_cen').val();


            var az_sg_des = $('#az_sg_des').val();
            var az_sg_col1 = $('#az_sg_col1').val();
            var az_sg_com = $('#az_sg_com').val();
            var az_sg_col2 = $('#az_sg_col2').val();
            var az_sg_cen = $('#az_sg_cen').val();


            var az_cg_des = $('#az_cg_des').val();
            var az_cg_col1 = $('#az_cg_col1').val();
            var az_cg_com = $('#az_cg_com').val();
            var az_cg_col2 = $('#az_cg_col2').val();
            var az_cg_cen = $('#az_cg_cen').val();

            var ba_des = $('#ba_des').val();
            var ba_col1 = $('#ba_col1').val();
            var ba_com = $('#ba_com').val();
            var ba_col2 = $('#ba_col2').val();
            var ba_cen = $('#ba_cen').val();


            var ag_sp_des = $('#ag_sp_des').val();
            var ag_sp_col1 = $('#ag_sp_col1').val();
            var ag_sp_com = $('#ag_sp_com').val();
            var ag_sp_col2 = $('#ag_sp_col2').val();
            var ag_sp_cen = $('#ag_sp_cen').val();


            var ag_cp_des = $('#ag_cp_des').val();
            var ag_cp_col1 = $('#ag_cp_col1').val();
            var ag_cp_com = $('#ag_cp_com').val();
            var ag_cp_col2 = $('#ag_cp_col2').val();
            var ag_cp_cen = $('#ag_cp_cen').val();




            $.ajax({
                url: 'actualizarPaciente.php',
                type: 'post',
                data: {
                    estadoCivil: estadoCivil,
                    idPaciente: idPaciente,
                    actividadLaboral: actividadLaboral,
                    fumtipo: fumtipo,
                    apetito: apetito,
                    fechaNacimiento: fechaNacimiento,
                    nacionalidad: nacionalidad,
                    residencia: residencia,
                    enfermedades: enfermedades,
                    hospitalizacion: hospitalizacion,
                    herencias: herencias,
                    alergias: alergias,
                    escolaridad: escolaridad,
                    grupoSanguineo: grupoSanguineo,
                    cirugias: cirugias,
                    medicamentosSup: medicamentosSup,
                    alcohol: alcohol,
                    tabaco: tabaco,
                    drogas: drogas,
                    fum: fum,
                    ultimoPapanicolao: ultimoPapanicolao,
                    sexualidad: sexualidad,
                    pms: pms,
                    depoaficion: depoaficion,
                    metas: metas,
                    objetivos: objetivos,
                    alimentosFav: alimentosFav,
                    alimentosNoAgradables: alimentosNoAgradables,
                    agua: agua,
                    aguaSaborizada: aguaSaborizada,
                    refresco: refresco,
                    cafe: cafe,
                    vivecon: vivecon,
                    quiencocina: quiencocina,
                    notas: notas,
                    porque: porque,
                    dh_desayuno_hr: dh_desayuno_hr,
                    dh_desayuno_txt: dh_desayuno_txt,
                    dh_colacion1_hr: dh_colacion1_hr,
                    dh_colacion1_txt: dh_colacion1_txt,
                    dh_comida_hr: dh_comida_hr,
                    dh_comida_txt: dh_comida_txt,
                    dh_colacion2_hr: dh_colacion2_hr,
                    dh_colacion2_txt: dh_colacion2_txt,
                    dh_cena_hr: dh_cena_hr,
                    dh_cena_txt: dh_cena_txt,
                    despierta: despierta,
                    duerme: duerme,
                    finDeSemana: finDeSemana,
                    ver_des: ver_des,
                    ver_col1: ver_col1,
                    ver_com: ver_com,
                    ver_col2: ver_col2,
                    ver_cen: ver_cen,
                    fru_des: fru_des,
                    fru_col1: fru_col1,
                    fru_com: fru_com,
                    fru_col2: fru_col2,
                    fru_cen: fru_cen,
                    cer_sg_des: cer_sg_des,
                    cer_sg_col1: cer_sg_col1,
                    cer_sg_com: cer_sg_com,
                    cer_sg_col2: cer_sg_col2,
                    cer_sg_cen: cer_sg_cen,
                    cer_cg_des: cer_cg_des,
                    cer_cg_col1: cer_cg_col1,
                    cer_cg_com: cer_cg_com,
                    cer_cg_col2: cer_cg_col2,
                    cer_cg_cen: cer_cg_cen,
                    leg_des: leg_des,
                    leg_col1: leg_col1,
                    leg_com: leg_com,
                    leg_col2: leg_col2,
                    leg_cen: leg_cen,
                    mbag_des: mbag_des,
                    mbag_col1: mbag_col1,
                    mbag_com: mbag_com,
                    mbag_col2: mbag_col2,
                    mbag_cen: mbag_cen,
                    bag_des: bag_des,
                    bag_col1: bag_col1,
                    bag_com: bag_com,
                    bag_col2: bag_col2,
                    bag_cen: bag_cen,
                    mag_des: mag_des,
                    mag_col1: mag_col1,
                    mag_com: mag_com,
                    mag_col2: mag_col2,
                    mag_cen: mag_cen,
                    aag_des: aag_des,
                    aag_col1: aag_col1,
                    aag_com: aag_com,
                    aag_col2: aag_col2,
                    aag_cen: aag_cen,
                    ldes_des: ldes_des,
                    ldes_col1: ldes_col1,
                    ldes_com: ldes_com,
                    ldes_col2: ldes_col2,
                    ldes_cen: ldes_cen,
                    lsem_des: lsem_des,
                    lsem_col1: lsem_col1,
                    lsem_com: lsem_com,
                    lsem_col2: lsem_col2,
                    lsem_cen: lsem_cen,
                    lent_des: lent_des,
                    lent_col1: lent_col1,
                    lent_com: lent_com,
                    lent_col2: lent_col2,
                    lent_cen: lent_cen,
                    lcaz_des: lcaz_des,
                    lcaz_col1: lcaz_col1,
                    lcaz_com: lcaz_com,
                    lcaz_col2: lcaz_col2,
                    lcaz_cen: lcaz_cen,
                    az_sg_des: az_sg_des,
                    az_sg_col1: az_sg_col1,
                    az_sg_com: az_sg_com,
                    az_sg_col2: az_sg_col2,
                    az_sg_cen: az_sg_cen,
                    az_cg_des: az_cg_des,
                    az_cg_col1: az_cg_col1,
                    az_cg_com: az_cg_com,
                    az_cg_col2: az_cg_col2,
                    az_cg_cen: az_cg_cen,
                    ba_des: ba_des,
                    ba_col1: ba_col1,
                    ba_com: ba_com,
                    ba_col2: ba_col2,
                    ba_cen: ba_cen,

                    ag_sp_des: ag_sp_des,
                    ag_sp_col1: ag_sp_col1,
                    ag_sp_com: ag_sp_com,
                    ag_sp_col2: ag_sp_col2,
                    ag_sp_cen: ag_sp_cen,


                    ag_cp_des: ag_cp_des,
                    ag_cp_col1: ag_cp_col1,
                    ag_cp_com: ag_cp_com,
                    ag_cp_col2: ag_cp_col2,
                    ag_cp_cen: ag_cp_cen




                },
                dataType: 'json',
                success: function (response) {


                    $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Paciente actualizado con éxito').end().modal({
                        fadeDuration: 200,
                        fadeDelay: 1.75
                    });

                },
                error: function (request, status, error) {
                    if (request.responseText === "exito") {
                        $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Paciente actualizado con éxito').end().modal({
                            fadeDuration: 200,
                            fadeDelay: 1.75
                        });
                    }
                }
            });
        }

    });





    $('#btnGuardarPacienteNuevo').click(function () {

        var estadoCivil = $('#estadoCivil').val();
        
        var nombre = $('#nombre').val();
        var apellidos = $('#apellidos').val();
        var telefono = $('#telefono').val();
        var edad = $('#edad').val();
        var actividadLaboral = $('#actividadLaboral').val();
        var fechaNacimiento = $('#fechaNacimiento').val();
        var nacionalidad = $('#nacionalidad').val();
        var escolaridad = $('#escolaridad').val();
        var residencia = $('#residencia').val();
        var email = $('#email').val();
        var usuario = email
        var password = "123456789";
        var metas = $('#metas').val();
        var idNutriologo = $('#idNutriologo').val();
        var sexo = "male";
        var female = 0;
        var tutor=$("input[name=radioTutor]:checked").val();
        var os=$("input[name=radioOS]:checked").val();
        

        if ($('#female').prop("checked") == true) {
            female = 1;
            sexo = "female";
        }
        var male = 0;
        if ($('#male').prop("checked") == true) {
            male = 1;
            sexo = "male";
        }
        if (!isEmail(email)) {
            $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Ingrese un email válido').end().modal({
                fadeDuration: 200,
                fadeDelay: 1.75
            });
        }
        else {

            if (usuario === "" || password === "" || nombre === "" || apellidos === "" || email === "" || fechaNacimiento === "" || edad === "") {
                $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Los campos usuario, password, nombre, apellidos, email, fecha de Nacimiento y edad son obligatorios').end().modal({
                    fadeDuration: 200,
                    fadeDelay: 1.75
                });
            }
            else {

                $.ajax({
                    url: 'ingresarPaciente.php',
                    type: 'post',
                    data: {
                        estadoCivil: estadoCivil,
                        idNutriologo: idNutriologo,
                        os: os,
                        tutor: tutor,
                        actividadLaboral: actividadLaboral,
                        fechaNacimiento: fechaNacimiento,
                        nacionalidad: nacionalidad,
                        escolaridad: escolaridad,
                        residencia: residencia,
                        sexo: sexo,
                        nombre: nombre,
                        apellidos: apellidos,
                        telefono: telefono,
                        usuario: usuario,
                        password: password,
                        metas: metas,
                        email: email,
                        edad: edad


                    },
                    dataType: 'json',
                    success: function (response) {


                        $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Paciente actualizado con éxito').end().modal({
                            fadeDuration: 200,
                            fadeDelay: 1.75
                        });

                    },
                    error: function (request, status, error) {
                        if (request.responseText != "") {
                            if (request.responseText.includes("error")) {
                                $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text(request.responseText).end().modal({
                                    fadeDuration: 200,
                                    fadeDelay: 1.75
                                });
                            }
                            else {
                                window.location = "Patient.php?idPaciente=" + request.responseText;
                            }
                        }
                        else {
                            $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Ocurrió un problema creando al paciente, intente de nuevo').end().modal({
                                fadeDuration: 200,
                                fadeDelay: 1.75
                            });
                        }
                    }
                });
            }
        }

    });



});


function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}