var citasPaciente;



function cargarDatosCitas(jala) {

    var idPaciente = $('#idPacienteInfo').val();
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


function llenarDatos() {

    slides = document.getElementsByClassName("swiper-slide");
    for (i = 0; i < slides.length; i++) {
        var slide = slides[i];
        var classs = slides[i].className;
        if (classs.includes("active")) {
            var idCita = slide.childNodes.item("idCita").value;
            llenarTabla(idCita);
        }
    }
}


function llenarTabla(idCita) {
    citasPaciente.forEach(function (cita, indexHor) {
        if (cita.objectId == idCita) {
            //aqui ya tenemos la cita y tenemos que llenar todo el cagadero

            $('#cdh_desayuno_hr').val(cita.dh_desayuno_hr);

            $('#cdh_colacion1_hr').val(cita.dh_colacion1_hr);

            $('#cdh_comida_hr').val(cita.dh_comida_hr);

            $('#cdh_colacion2_hr').val(cita.dh_colacion2_hr);

            $('#cdh_cena_hr').val(cita.dh_cena_hr);

            if (cita.ver_des === "") {
                $('#cver_des').val('0');
            }
            else {

                $('#cver_des').val(cita.ver_des);
            }
            if (cita.ver_col1 === "") {
                $('#cver_col1').val('0');
            }
            else {
                $('#cver_col1').val(cita.ver_col1);
            }
            if (cita.ver_com === "") {
                $('#cver_com').val('0');
            }
            else {
                $('#cver_com').val(cita.ver_com);
            }
            if (cita.ver_col2 === "") {
                $('#cver_col2').val('0');
            }
            else {
                $('#cver_col2').val(cita.ver_col2);
            }
            if (cita.ver_cen === "") {
                $('#cver_cen').val('0');
            }
            else {
                $('#cver_cen').val(cita.ver_cen);
            }
            if (cita.fru_des === "") {
                $('#cfru_des').val('0');
            }
            else {

                $('#cfru_des').val(cita.fru_des);
            }
            if (cita.fru_col1 === "") {
                $('#cfru_col1').val('0');
            }
            else {
                $('#cfru_col1').val(cita.fru_col1);
            }
            if (cita.fru_com === "") {
                $('#cfru_com').val('0');
            }
            else {
                $('#cfru_com').val(cita.fru_com);
            }
            if (cita.fru_col2 === "") {
                $('#cfru_col2').val('0');
            }
            else {
                $('#cfru_col2').val(cita.fru_col2);
            }
            if (cita.fru_cen === "") {
                $('#cfru_cen').val('0');
            }
            else {
                $('#cfru_cen').val(cita.fru_cen);
            }
            if (cita.leg_des === "") {
                $('#cleg_des').val('0');
            }
            else {

                $('#cleg_des').val(cita.leg_des);
            }
            if (cita.leg_col1 === "") {
                $('#cleg_col1').val('0');
            }
            else {
                $('#cleg_col1').val(cita.leg_col1);
            }
            if (cita.leg_com === "") {
                $('#cleg_com').val('0');
            }
            else {
                $('#cleg_com').val(cita.leg_com);
            }
            if (cita.leg_col2 === "") {
                $('#cleg_col2').val('0');
            }
            else {
                $('#cleg_col2').val(cita.leg_col2);
            }
            if (cita.leg_cen === "") {
                $('#cleg_cen').val('0');
            }
            else {
                $('#cleg_cen').val(cita.leg_cen);
            }
            if (cita.cer_sg_des === "") {
                $('#ccer_sg_des').val('0');
            }
            else {


                $('#ccer_sg_des').val(cita.cer_sg_des);
            }
            if (cita.cer_sg_col1 === "") {
                $('#ccer_sg_col1').val('0');
            }
            else {
                $('#ccer_sg_col1').val(cita.cer_sg_col1);
            }
            if (cita.cer_sg_com === "") {
                $('#ccer_sg_com').val('0');
            }
            else {
                $('#ccer_sg_com').val(cita.cer_sg_com);
            }
            if (cita.cer_sg_col2 === "") {
                $('#ccer_sg_col2').val('0');
            }
            else {
                $('#ccer_sg_col2').val(cita.cer_sg_col2);
            }
            if (cita.cer_sg_cen === "") {
                $('#ccer_sg_cen').val('0');
            }
            else {
                $('#ccer_sg_cen').val(cita.cer_sg_cen);
            }
            if (cita.cer_cg_des === "") {
                $('#ccer_cg_des').val('0');
            }
            else {

                $('#ccer_cg_des').val(cita.cer_cg_des);
            }
            if (cita.cer_cg_col1 === "") {
                $('#ccer_cg_col1').val('0');
            }
            else {
                $('#ccer_cg_col1').val(cita.cer_cg_col1);
            }
            if (cita.cer_cg_com === "") {
                $('#ccer_cg_com').val('0');
            }
            else {
                $('#ccer_cg_com').val(cita.cer_cg_com);
            }
            if (cita.cer_cg_col2 === "") {
                $('#ccer_cg_col2').val('0');
            }
            else {
                $('#ccer_cg_col2').val(cita.cer_cg_col2);
            }
            if (cita.cer_cg_cen === "") {
                $('#ccer_cg_cen').val('0');
            }
            else {
                $('#ccer_cg_cen').val(cita.cer_cg_cen);
            }
            if (cita.cer_cg_des === "") {
                $('#ccer_cg_des').val('0');
            }
            else {

                $('#ccer_cg_des').val(cita.cer_cg_des);
            }
            if (cita.cer_cg_col1 === "") {
                $('#ccer_cg_col1').val('0');
            }
            else {
                $('#ccer_cg_col1').val(cita.cer_cg_col1);
            }
            if (cita.cer_cg_com === "") {
                $('#ccer_cg_com').val('0');
            }
            else {
                $('#ccer_cg_com').val(cita.cer_cg_com);
            }
            if (cita.cer_cg_col2 === "") {
                $('#ccer_cg_col2').val('0');
            }
            else {
                $('#ccer_cg_col2').val(cita.cer_cg_col2);
            }
            if (cita.cer_cg_cen === "") {
                $('#ccer_cg_cen').val('0');
            }
            else {
                $('#ccer_cg_cen').val(cita.cer_cg_cen);
            }
            if (cita.mbag_des === "") {
                $('#cmbag_des').val('0');
            }
            else {


                $('#cmbag_des').val(cita.mbag_des);
            }
            if (cita.mbag_col1 === "") {
                $('#cmbag_col1').val('0');
            }
            else {
                $('#cmbag_col1').val(cita.mbag_col1);
            }
            if (cita.mbag_com === "") {
                $('#cmbag_com').val('0');
            }
            else {
                $('#cmbag_com').val(cita.mbag_com);
            }
            if (cita.mbag_col2 === "") {
                $('#cmbag_col2').val('0');
            }
            else {
                $('#cmbag_col2').val(cita.mbag_col2);
            }
            if (cita.mbag_cen === "") {
                $('#cmbag_cen').val('0');
            }
            else {
                $('#cmbag_cen').val(cita.mbag_cen);
            }
            if (cita.bag_des === "") {
                $('#cbag_des').val('0');
            }
            else {


                $('#cbag_des').val(cita.bag_des);
            }
            if (cita.bag_col1 === "") {
                $('#cbag_col1').val('0');
            }
            else {
                $('#cbag_col1').val(cita.bag_col1);
            }
            if (cita.bag_com === "") {
                $('#cbag_com').val('0');
            }
            else {
                $('#cbag_com').val(cita.bag_com);
            }
            if (cita.bag_col2 === "") {
                $('#cbag_col2').val('0');
            }
            else {
                $('#cbag_col2').val(cita.bag_col2);
            }
            if (cita.bag_cen === "") {
                $('#cbag_cen').val('0');
            }
            else {
                $('#cbag_cen').val(cita.bag_cen);
            }
            if (cita.mag_des === "") {
                $('#cmag_des').val('0');
            }
            else {


                $('#cmag_des').val(cita.mag_des);
            }
            if (cita.mag_col1 === "") {
                $('#cmag_col1').val('0');
            }
            else {
                $('#cmag_col1').val(cita.mag_col1);
            }
            if (cita.mag_com === "") {
                $('#cmag_com').val('0');
            }
            else {
                $('#cmag_com').val(cita.mag_com);
            }
            if (cita.mag_col2 === "") {
                $('#cmag_col2').val('0');
            }
            else {
                $('#cmag_col2').val(cita.mag_col2);
            }
            if (cita.mag_cen === "") {
                $('#cmag_cen').val('0');
            }
            else {
                $('#cmag_cen').val(cita.mag_cen);
            }
            if (cita.aag_des === "") {
                $('#caag_des').val('0');
            }
            else {


                $('#caag_des').val(cita.aag_des);
            }
            if (cita.aag_col1 === "") {
                $('#caag_col1').val('0');
            }
            else {
                $('#caag_col1').val(cita.aag_col1);
            }
            if (cita.aag_com === "") {
                $('#caag_com').val('0');
            }
            else {
                $('#caag_com').val(cita.aag_com);
            }
            if (cita.aag_col2 === "") {
                $('#caag_col2').val('0');
            }
            else {
                $('#caag_col2').val(cita.aag_col2);
            }
            if (cita.aag_cen === "") {
                $('#caag_cen').val('0');
            }
            else {
                $('#caag_cen').val(cita.aag_cen);
            }
            if (cita.ldes_des === "") {
                $('#cldes_des').val('0');
            }
            else {


                $('#cldes_des').val(cita.ldes_des);
            }
            if (cita.ldes_col1 === "") {
                $('#cldes_col1').val('0');
            }
            else {
                $('#cldes_col1').val(cita.ldes_col1);
            }
            if (cita.ldes_com === "") {
                $('#cldes_com').val('0');
            }
            else {
                $('#cldes_com').val(cita.ldes_com);
            }
            if (cita.ldes_col2 === "") {
                $('#cldes_col2').val('0');
            }
            else {
                $('#cldes_col2').val(cita.ldes_col2);
            }
            if (cita.ldes_cen === "") {
                $('#cldes_cen').val('0');
            }
            else {
                $('#cldes_cen').val(cita.ldes_cen);
            }
            if (cita.lsem_des === "") {
                $('#clsem_des').val('0');
            }
            else {


                $('#clsem_des').val(cita.lsem_des);
            }
            if (cita.lsem_col1 === "") {
                $('#clsem_col1').val('0');
            }
            else {
                $('#clsem_col1').val(cita.lsem_col1);
            }
            if (cita.lsem_com === "") {
                $('#clsem_com').val('0');
            }
            else {
                $('#clsem_com').val(cita.lsem_com);
            }
            if (cita.lsem_col2 === "") {
                $('#clsem_col2').val('0');
            }
            else {
                $('#clsem_col2').val(cita.lsem_col2);
            }
            if (cita.lsem_cen === "") {
                $('#clsem_cen').val('0');
            }
            else {
                $('#clsem_cen').val(cita.lsem_cen);
            }
            if (cita.lent_des === "") {
                $('#clent_des').val('0');
            }
            else {


                $('#clent_des').val(cita.lent_des);
            }
            if (cita.lent_col1 === "") {
                $('#clent_col1').val('0');
            }
            else {
                $('#clent_col1').val(cita.lent_col1);
            }
            if (cita.lent_com === "") {
                $('#clent_com').val('0');
            }
            else {
                $('#clent_com').val(cita.lent_com);
            }
            if (cita.lent_col2 === "") {
                $('#clent_col2').val('0');
            }
            else {
                $('#clent_col2').val(cita.lent_col2);
            }
            if (cita.lent_cen === "") {
                $('#clent_cen').val('0');
            }
            else {
                $('#clent_cen').val(cita.lent_cen);
            }
            if (cita.lcaz_des === "") {
                $('#clcaz_des').val('0');
            }
            else {


                $('#clcaz_des').val(cita.lcaz_des);
            }
            if (cita.lcaz_col1 === "") {
                $('#clcaz_col1').val('0');
            }
            else {
                $('#clcaz_col1').val(cita.lcaz_col1);
            }
            if (cita.lcaz_com === "") {
                $('#clcaz_com').val('0');
            }
            else {
                $('#clcaz_com').val(cita.lcaz_com);
            }
            if (cita.lcaz_col2 === "") {
                $('#clcaz_col2').val('0');
            }
            else {
                $('#clcaz_col2').val(cita.lcaz_col2);
            }
            if (cita.lcaz_cen === "") {
                $('#clcaz_cen').val('0');
            }
            else {
                $('#clcaz_cen').val(cita.lcaz_cen);
            }
            if (cita.az_sg_des === "") {
                $('#caz_sg_des').val('0');
            }
            else {


                $('#caz_sg_des').val(cita.az_sg_des);
            }
            if (cita.az_sg_col1 === "") {
                $('#caz_sg_col1').val('0');
            }
            else {
                $('#caz_sg_col1').val(cita.az_sg_col1);
            }
            if (cita.az_sg_com === "") {
                $('#caz_sg_com').val('0');
            }
            else {
                $('#caz_sg_com').val(cita.az_sg_com);
            }
            if (cita.az_sg_col2 === "") {
                $('#caz_sg_col2').val('0');
            }
            else {
                $('#caz_sg_col2').val(cita.az_sg_col2);
            }
            if (cita.az_sg_cen === "") {
                $('#caz_sg_cen').val('0');
            }
            else {
                $('#caz_sg_cen').val(cita.az_sg_cen);
            }
            if (cita.az_cg_des === "") {
                $('#caz_cg_des').val('0');
            }
            else {


                $('#caz_cg_des').val(cita.az_cg_des);
            }
            if (cita.az_cg_col1 === "") {
                $('#caz_cg_col1').val('0');
            }
            else {
                $('#caz_cg_col1').val(cita.az_cg_col1);
            }
            if (cita.az_cg_com === "") {
                $('#caz_cg_com').val('0');
            }
            else {
                $('#caz_cg_com').val(cita.az_cg_com);
            }
            if (cita.az_cg_col2 === "") {
                $('#caz_cg_col2').val('0');
            }
            else {
                $('#caz_cg_col2').val(cita.az_cg_col2);
            }
            if (cita.az_cg_cen === "") {
                $('#caz_cg_cen').val('0');
            }
            else {
                $('#caz_cg_cen').val(cita.az_cg_cen);
            }
            if (cita.ba_des === "") {
                $('#cba_des').val('0');
            }
            else {



                $('#cba_des').val(cita.ba_des);
            }
            if (cita.ba_col1 === "") {
                $('#cba_col1').val('0');
            }
            else {
                $('#cba_col1').val(cita.ba_col1);
            }
            if (cita.ba_com === "") {
                $('#cba_com').val('0');
            }
            else {
                $('#cba_com').val(cita.ba_com);
            }
            if (cita.ba_col2 === "") {
                $('#cba_col2').val('0');
            }
            else {
                $('#cba_col2').val(cita.ba_col2);
            }
            if (cita.ba_cen === "") {
                $('#cba_cen').val('0');
            }
            else {
                $('#cba_cen').val(cita.ba_cen);
            }
            if (cita.ag_cp_des === "") {
                $('#cag_cp_des').val('0');
            }
            else {


                $('#cag_cp_des').val(cita.ag_cp_des);
            }
            if (cita.ag_cp_col1 === "") {
                $('#cag_cp_col1').val('0');
            }
            else {
                $('#cag_cp_col1').val(cita.ag_cp_col1);
            }
            if (cita.ag_cp_com === "") {
                $('#cag_cp_com').val('0');
            }
            else {
                $('#cag_cp_com').val(cita.ag_cp_com);
            }
            if (cita.ag_cp_col2 === "") {
                $('#cag_cp_col2').val('0');
            }
            else {
                $('#cag_cp_col2').val(cita.ag_cp_col2);
            }
            if (cita.ag_cp_cen === "") {
                $('#cag_cp_cen').val('0');
            }
            else {
                $('#cag_cp_cen').val(cita.ag_cp_cen);
            }
            if (cita.ag_sp_des === "") {
                $('#cag_sp_des').val('0');
            }
            else {


                $('#cag_sp_des').val(cita.ag_sp_des);
            }
            if (cita.ag_sp_col1 === "") {
                $('#cag_sp_col1').val('0');
            }
            else {
                $('#cag_sp_col1').val(cita.ag_sp_col1);
            }
            if (cita.ag_sp_com === "") {
                $('#cag_sp_com').val('0');
            }
            else {
                $('#cag_sp_com').val(cita.ag_sp_com);
            }
            if (cita.ag_sp_col2 === "") {
                $('#cag_sp_col2').val('0');
            }
            else {
                $('#cag_sp_col2').val(cita.ag_sp_col2);
            }
            if (cita.ag_sp_cen === "") {
                $('#cag_sp_cen').val('0');
            }
            else {
                $('#cag_sp_cen').val(cita.ag_sp_cen);
            }



            $('#edad').val(cita.edad);
            $('#talla').val(cita.talla);
            $('#peso').val(cita.peso);
            $('#pecho').val(cita.pecho);
            $('#brazo').val(cita.brazo);
            $('#cintura').val(cita.cintura);
            $('#cadera').val(cita.cadera);
            $('#muslo').val(cita.muslo);
            $('#ombligo').val(cita.ombligo);
            $('#grasa').val(cita.grasa);
            $('#musculo').val(cita.musculo);
            $('#pagua').val(cita.agua);
            $('#huesos').val(cita.huesos);
            $('#totalCalorias').val(cita.totalCalorias);
            $('#Ppor').val(cita.porcentajeP);
            $('#HCpor').val(cita.porcentajeHC);
            $('#Gpor').val(cita.porcentajeG);
            $('#totCalorias').val(cita.totCalorias);

        }
    });

    hacerCalculos();
}

$('.swiper-slide').on('classChange', function () {
    alert('clase' + this.className);
});

function hacerCalculos() {
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


    var ag_sp_des = $('#cag_sp_des').val();
    var ag_sp_col1 = $('#cag_sp_col1').val();
    var ag_sp_com = $('#cag_sp_com').val();
    var ag_sp_col2 = $('#cag_sp_col2').val();
    var ag_sp_cen = $('#cag_sp_cen').val();


    var ag_cp_des = $('#cag_cp_des').val();
    var ag_cp_col1 = $('#cag_cp_col1').val();
    var ag_cp_com = $('#cag_cp_com').val();
    var ag_cp_col2 = $('#cag_cp_col2').val();
    var ag_cp_cen = $('#cag_cp_cen').val();

    var ver_rac = parseInt(ver_cen) + parseInt(ver_col1) + parseInt(ver_col2) + parseInt(ver_com) + parseInt(ver_des);
    $('#cver_rac').text(ver_rac);
    $('#cver_ene').text(ver_rac * 25);
    $('#cver_pro').text(ver_rac * 2);
    $('#cver_gra').text('0');
    $('#cver_hc').text(ver_rac * 4);
    $('#cver_chc').text((ver_rac * .3).toFixed(2));


    var fru_rac = parseInt(fru_cen) + parseInt(fru_col1) + parseInt(fru_col2) + parseInt(fru_com) + parseInt(fru_des);
    $('#cfru_rac').text(fru_rac);
    $('#cfru_ene').text(fru_rac * 60);
    $('#cfru_pro').text('0');
    $('#cfru_gra').text('0');
    $('#cfru_hc').text(fru_rac * 15);
    $('#cfru_chc').text(fru_rac * 1);


    var cer_sg_rac = parseInt(cer_sg_cen) + parseInt(cer_sg_col1) + parseInt(cer_sg_col2) + parseInt(cer_sg_com) + parseInt(cer_sg_des);
    $('#ccer_sg_rac').text(cer_sg_rac);
    $('#ccer_sg_ene').text(cer_sg_rac * 70);
    $('#ccer_sg_pro').text(cer_sg_rac * 2);
    $('#ccer_sg_gra').text('0');
    $('#ccer_sg_hc').text(cer_sg_rac * 15);
    $('#ccer_sg_chc').text(cer_sg_rac * 1);


    var cer_cg_rac = parseInt(cer_cg_cen) + parseInt(cer_cg_col1) + parseInt(cer_cg_col2) + parseInt(cer_cg_com) + parseInt(cer_cg_des);
    $('#ccer_cg_rac').text(cer_cg_rac);
    $('#ccer_cg_ene').text(cer_cg_rac * 115);
    $('#ccer_cg_pro').text(cer_cg_rac * 2);
    $('#ccer_cg_gra').text(cer_cg_rac * 5);
    $('#ccer_cg_hc').text(cer_cg_rac * 15);
    $('#ccer_cg_chc').text(cer_cg_rac * 1);


    var leg_rac = parseInt(leg_cen) + parseInt(leg_col1) + parseInt(leg_col2) + parseInt(leg_com) + parseInt(leg_des);
    $('#cleg_rac').text(leg_rac);
    $('#cleg_ene').text(leg_rac * 120);
    $('#cleg_pro').text(leg_rac * 8);
    $('#cleg_gra').text(leg_rac * 1);
    $('#cleg_hc').text(leg_rac * 20);
    $('#cleg_chc').text((leg_rac * 1.3).toFixed(2));

    var mbag_rac = parseInt(mbag_cen) + parseInt(mbag_col1) + parseInt(mbag_col2) + parseInt(mbag_com) + parseInt(mbag_des);
    $('#cmbag_rac').text(mbag_rac);
    $('#cmbag_ene').text(mbag_rac * 40);
    $('#cmbag_pro').text(mbag_rac * 7);
    $('#cmbag_gra').text(mbag_rac * 1);
    $('#cmbag_hc').text('0');
    $('#cmbag_chc').text('0');

    var bag_rac = parseInt(bag_cen) + parseInt(bag_col1) + parseInt(bag_col2) + parseInt(bag_com) + parseInt(bag_des);
    $('#cbag_rac').text(bag_rac);
    $('#cbag_ene').text(bag_rac * 55);
    $('#cbag_pro').text(bag_rac * 7);
    $('#cbag_gra').text(bag_rac * 3);
    $('#cbag_hc').text('0');
    $('#cbag_chc').text('0');

    var mag_rac = parseInt(mag_cen) + parseInt(mag_col1) + parseInt(mag_col2) + parseInt(mag_com) + parseInt(mag_des);
    $('#cmag_rac').text(mag_rac);
    $('#cmag_ene').text(mag_rac * 75);
    $('#cmag_pro').text(mag_rac * 7);
    $('#cmag_gra').text(mag_rac * 5);
    $('#cmag_hc').text('0');
    $('#cmag_chc').text('0');

    var aag_rac = parseInt(aag_cen) + parseInt(aag_col1) + parseInt(aag_col2) + parseInt(aag_com) + parseInt(aag_des);
    $('#caag_rac').text(aag_rac);
    $('#caag_ene').text(aag_rac * 100);
    $('#caag_pro').text(aag_rac * 7);
    $('#caag_gra').text(aag_rac * 8);
    $('#caag_hc').text('0');
    $('#caag_chc').text('0');

    var ldes_rac = parseInt(ldes_cen) + parseInt(ldes_col1) + parseInt(ldes_col2) + parseInt(ldes_com) + parseInt(ldes_des);
    $('#cldes_rac').text(ldes_rac);
    $('#cldes_ene').text(ldes_rac * 95);
    $('#cldes_pro').text(ldes_rac * 9);
    $('#cldes_gra').text(ldes_rac * 2);
    $('#cldes_hc').text(ldes_rac * 12);
    $('#cldes_chc').text((ldes_rac * .8).toFixed(2));

    var lsem_rac = parseInt(lsem_cen) + parseInt(lsem_col1) + parseInt(lsem_col2) + parseInt(lsem_com) + parseInt(lsem_des);
    $('#clsem_rac').text(lsem_rac);
    $('#clsem_ene').text(lsem_rac * 110);
    $('#clsem_pro').text(lsem_rac * 9);
    $('#clsem_gra').text(lsem_rac * 4);
    $('#clsem_hc').text(lsem_rac * 12);
    $('#clsem_chc').text((lsem_rac * .8).toFixed(2));

    var lent_rac = parseInt(lent_cen) + parseInt(lent_col1) + parseInt(lent_col2) + parseInt(lent_com) + parseInt(lent_des);
    $('#clent_rac').text(lent_rac);
    $('#clent_ene').text(lent_rac * 150);
    $('#clent_pro').text(lent_rac * 9);
    $('#clent_gra').text(lent_rac * 8);
    $('#clent_hc').text(lent_rac * 12);
    $('#clent_chc').text((lent_rac * .8).toFixed(2));

    var lcaz_rac = parseInt(lcaz_cen) + parseInt(lcaz_col1) + parseInt(lcaz_col2) + parseInt(lcaz_com) + parseInt(lcaz_des);
    $('#clcaz_rac').text(lcaz_rac);
    $('#clcaz_ene').text(lcaz_rac * 200);
    $('#clcaz_pro').text(lcaz_rac * 8);
    $('#clcaz_gra').text(lcaz_rac * 5);
    $('#clcaz_hc').text(lcaz_rac * 30);
    $('#clcaz_chc').text((lcaz_rac * 2).toFixed(2));

    var az_sg_rac = parseInt(az_sg_cen) + parseInt(az_sg_col1) + parseInt(az_sg_col2) + parseInt(az_sg_com) + parseInt(az_sg_des);
    $('#caz_sg_rac').text(az_sg_rac);
    $('#caz_sg_ene').text(az_sg_rac * 40);
    $('#caz_sg_pro').text('0');
    $('#caz_sg_gra').text('0');
    $('#caz_sg_hc').text(az_sg_rac * 10);
    $('#caz_sg_chc').text((az_sg_rac * .7).toFixed(2));

    var az_cg_rac = parseInt(az_cg_cen) + parseInt(az_cg_col1) + parseInt(az_cg_col2) + parseInt(az_cg_com) + parseInt(az_cg_des);
    $('#caz_cg_rac').text(az_cg_rac);
    $('#caz_cg_ene').text(az_cg_rac * 85);
    $('#caz_cg_pro').text('0');
    $('#caz_cg_gra').text(az_cg_rac * 5);
    $('#caz_cg_hc').text(az_cg_rac * 10);
    $('#caz_cg_chc').text((az_cg_rac * .7).toFixed(2));

    var ba_rac = parseInt(ba_cen) + parseInt(ba_col1) + parseInt(ba_col2) + parseInt(ba_com) + parseInt(ba_des);
    $('#cba_rac').text(ba_rac);
    $('#cba_ene').text(ba_rac * 140);
    $('#cba_pro').text('0');
    $('#cba_gra').text('0');
    $('#cba_hc').text(ba_rac * 20);
    $('#cba_chc').text((ba_rac * 1.3).toFixed(2));


    var ag_cp_rac = parseInt(ag_cp_cen) + parseInt(ag_cp_col1) + parseInt(ag_cp_col2) + parseInt(ag_cp_com) + parseInt(ag_cp_des);
    $('#cag_cp_rac').text(ag_cp_rac);
    $('#cag_cp_ene').text(ag_cp_rac * 70);
    $('#cag_cp_pro').text(ag_cp_rac * 3);
    $('#cag_cp_gra').text(ag_cp_rac * 5);
    $('#cag_cp_hc').text(ag_cp_rac * 3);
    $('#cag_cp_chc').text((ag_cp_rac * .2).toFixed(2));


    var ag_sp_rac = parseInt(ag_sp_cen) + parseInt(ag_sp_col1) + parseInt(ag_sp_col2) + parseInt(ag_sp_com) + parseInt(ag_sp_des);
    $('#cag_sp_rac').text(ag_sp_rac);
    $('#cag_sp_ene').text(ag_sp_rac * 45);
    $('#cag_sp_pro').text('0');
    $('#cag_sp_gra').text(ag_sp_rac * 5);
    $('#cag_sp_hc').text('0');
    $('#cag_sp_chc').text('0');


    var totalEnergia = ver_rac * 25 + fru_rac * 60 + cer_sg_rac * 70
        + cer_cg_rac * 115 + leg_rac * 120 + mbag_rac * 40 +
        bag_rac * 55 + mag_rac * 75 + aag_rac * 100 + ldes_rac * 95
        + lsem_rac * 110 + lent_rac * 150 + lcaz_rac * 200
        + az_sg_rac * 40 + az_cg_rac * 85 + ba_rac * 140 + ag_cp_rac * 70 + ag_sp_rac * 45;

    $('#ctotalEnergia').text(totalEnergia);

    var totalProteina = ver_rac * 2 + cer_sg_rac * 2 + cer_cg_rac * 2
        + leg_rac * 8 + mbag_rac * 7 +
        bag_rac * 7 + mag_rac * 7 + aag_rac * 7 + ldes_rac * 9
        + lsem_rac * 9 + ag_cp_rac * 3 +
        lent_rac * 9 + lcaz_rac * 8;

    $('#ctotalProteina').text(totalProteina);

    var totalGrasa = cer_cg_rac * 5 + leg_rac * 1 + mbag_rac * 1 +
        bag_rac * 3 + mag_rac * 5 + aag_rac * 8 + ldes_rac * 2 + lsem_rac * 4 +
        lent_rac * 8 + lcaz_rac * 5 + az_cg_rac * 5 + ag_cp_rac * 5 + ag_sp_rac * 5;

    $('#ctotalGrasa').text(totalGrasa);

    var totalHC = ver_rac * 4 + fru_rac * 15 + cer_sg_rac * 15
        + cer_cg_rac * 15 + leg_rac * 20 +
        ldes_rac * 12 + lsem_rac * 12 +
        lent_rac * 12 + lcaz_rac * 30 + az_sg_rac * 10
        + az_cg_rac * 10 + ba_rac * 20 + ag_cp_rac * 3;

    $('#ctotalHC').text(totalHC);

    var totalCHC = ver_rac * .3 + fru_rac * 1 + cer_sg_rac * 1
        + cer_cg_rac * 1 + leg_rac * 1.3 + ldes_rac * .8
        + lsem_rac * .8 + lent_rac * .8 + lcaz_rac * 2
        + az_sg_rac * .7 + az_cg_rac * .7 + ba_rac * 1.3 + ag_cp_rac * .2;

    $('#ctotalCHC').text(totalCHC.toFixed(2));

    var totalTProteina = totalProteina * 4;
    var totalTGrasa = totalGrasa * 9;
    var totalTHC = totalHC * 4;
    var totalTEnergia = totalTProteina + totalTGrasa + totalTHC;
    $('#ctotalTEnergia').text(totalTEnergia);
    $('#ctotalTProteina').text(totalTProteina);
    $('#ctotalTGrasa').text(totalTGrasa);
    $('#ctotalTHC').text(totalTHC);

    calculosMedibles();


}

function calculosMedibles() {
    var edad = $('#edad').val();
    var talla = $('#talla').val();
    var peso = $('#peso').val();

    var Ppor = $('#Ppor').val();
    var HCpor = $('#HCpor').val();
    var Gpor = $('#Gpor').val();
    var totCalorias = $('#totCalorias').val();
    var selAF = $('#selAF').val();



    var sumPorcentaje = parseFloat(Ppor) + parseFloat(HCpor) + parseFloat(Gpor);

    var sumaCalorias = pCal + hcCal + gCal;


    var tallaCuadrada = 0;
    var imc = 0;
    var pesoMinimo = 0;
    var pesoMaximo = 0;
    var pesoTeorico = 0;
    var porPesoTeorico = 0;
    var GEB = 0;
    var GET = 0;

    var pCal = 0;
    var pgra = 0;
    var hcCal = 0;
    var hcgra = 0;
    var gCal = 0;
    var ggra = 0;

    if (talla != "" && peso != "") {
        tallaCuadrada = parseFloat(talla) * parseFloat(talla);
        imc = parseFloat(peso) / tallaCuadrada;


        pesoMinimo = tallaCuadrada * 19;
        pesoMaximo = tallaCuadrada * 24;
        pesoTeorico = (pesoMinimo + pesoMaximo) / 2;
        porPesoTeorico = parseFloat(peso) / pesoTeorico;
        GEB = (665 + (9.56 * parseFloat(peso) + (1.85 * (talla * 100)) - (4.68 * parseFloat(edad))));
        GET = GEB / parseFloat(selAF);

        pCal = parseFloat(totCalorias) * parseFloat(Ppor);
        pgra = pCal / 4;
        hcCal = parseFloat(totCalorias) * parseFloat(HCpor);
        hcgra = hcCal / 4;
        gCal = parseFloat(totCalorias) * parseFloat(Gpor);
        ggra = gCal / 9;


        sumPorcentaje = parseFloat(Ppor) + parseFloat(HCpor) + parseFloat(Gpor);

        sumaCalorias = pCal + hcCal + gCal;
    }

    $('#imc').val(imc.toFixed(2));

    $('#pesoMin').val(pesoMinimo.toFixed(2));
    $('#pesoMax').val(pesoMaximo.toFixed(2));
    $('#pesoTeorico').val(pesoTeorico.toFixed(2));
    $('#porPesoTeorico').val(porPesoTeorico.toFixed(2));
    $('#geb').val(GEB.toFixed(2));
    $('#get').val(GET.toFixed(2));
    $('#Pcal').val(pCal);
    $('#Pga').val(pgra);
    $('#HCcal').val(hcCal);
    $('#HCga').val(hcgra);
    $('#Gcal').val(gCal);
    $('#Gga').val(ggra);
    $('#Tcal').val(sumaCalorias);
    $('#Tpor').val(sumPorcentaje);


    $('#tallaP').text(talla);
    $('#pesoP').text(peso);
    $('#imcP').text(imc.toFixed(2));
}





function hacerCalculosUnico() {
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

    var ver_rac = parseInt(ver_cen) + parseInt(ver_col1) + parseInt(ver_col2) + parseInt(ver_com) + parseInt(ver_des);
    $('#ver_rac').text(ver_rac);
    $('#ver_ene').text(ver_rac * 25);
    $('#ver_pro').text(ver_rac * 2);
    $('#ver_gra').text('0');
    $('#ver_hc').text(ver_rac * 4);
    $('#ver_chc').text(ver_rac * .3);


    var fru_rac = parseInt(fru_cen) + parseInt(fru_col1) + parseInt(fru_col2) + parseInt(fru_com) + parseInt(fru_des);
    $('#fru_rac').text(fru_rac);
    $('#fru_ene').text(fru_rac * 60);
    $('#fru_pro').text('0');
    $('#fru_gra').text('0');
    $('#fru_hc').text(fru_rac * 15);
    $('#fru_chc').text(fru_rac * 1);


    var cer_sg_rac = parseInt(cer_sg_cen) + parseInt(cer_sg_col1) + parseInt(cer_sg_col2) + parseInt(cer_sg_com) + parseInt(cer_sg_des);
    $('#cer_sg_rac').text(cer_sg_rac);
    $('#cer_sg_ene').text(cer_sg_rac * 70);
    $('#cer_sg_pro').text(cer_sg_rac * 2);
    $('#cer_sg_gra').text('0');
    $('#cer_sg_hc').text(cer_sg_rac * 15);
    $('#cer_sg_chc').text(cer_sg_rac * 1);


    var cer_cg_rac = parseInt(cer_cg_cen) + parseInt(cer_cg_col1) + parseInt(cer_cg_col2) + parseInt(cer_cg_com) + parseInt(cer_cg_des);
    $('#cer_cg_rac').text(cer_cg_rac);
    $('#cer_cg_ene').text(cer_cg_rac * 115);
    $('#cer_cg_pro').text(cer_cg_rac * 2);
    $('#cer_cg_gra').text(cer_cg_rac * 5);
    $('#cer_cg_hc').text(cer_cg_rac * 15);
    $('#cer_cg_chc').text(cer_cg_rac * 1);


    var leg_rac = parseInt(leg_cen) + parseInt(leg_col1) + parseInt(leg_col2) + parseInt(leg_com) + parseInt(leg_des);
    $('#leg_rac').text(leg_rac);
    $('#leg_ene').text(leg_rac * 120);
    $('#leg_pro').text(leg_rac * 8);
    $('#leg_gra').text(leg_rac * 1);
    $('#leg_hc').text(leg_rac * 20);
    $('#leg_chc').text(leg_rac * 1.3);

    var mbag_rac = parseInt(mbag_cen) + parseInt(mbag_col1) + parseInt(mbag_col2) + parseInt(mbag_com) + parseInt(mbag_des);
    $('#mbag_rac').text(mbag_rac);
    $('#mbag_ene').text(mbag_rac * 40);
    $('#mbag_pro').text(mbag_rac * 7);
    $('#mbag_gra').text(mbag_rac * 1);
    $('#mbag_hc').text('0');
    $('#mbag_chc').text('0');

    var bag_rac = parseInt(bag_cen) + parseInt(bag_col1) + parseInt(bag_col2) + parseInt(bag_com) + parseInt(bag_des);
    $('#bag_rac').text(bag_rac);
    $('#bag_ene').text(bag_rac * 55);
    $('#bag_pro').text(bag_rac * 7);
    $('#bag_gra').text(bag_rac * 3);
    $('#bag_hc').text('0');
    $('#bag_chc').text('0');

    var mag_rac = parseInt(mag_cen) + parseInt(mag_col1) + parseInt(mag_col2) + parseInt(mag_com) + parseInt(mag_des);
    $('#mag_rac').text(mag_rac);
    $('#mag_ene').text(mag_rac * 75);
    $('#mag_pro').text(mag_rac * 7);
    $('#mag_gra').text(mag_rac * 5);
    $('#mag_hc').text('0');
    $('#mag_chc').text('0');

    var aag_rac = parseInt(aag_cen) + parseInt(aag_col1) + parseInt(aag_col2) + parseInt(aag_com) + parseInt(aag_des);
    $('#aag_rac').text(aag_rac);
    $('#aag_ene').text(aag_rac * 100);
    $('#aag_pro').text(aag_rac * 7);
    $('#aag_gra').text(aag_rac * 8);
    $('#aag_hc').text('0');
    $('#aag_chc').text('0');

    var ldes_rac = parseInt(ldes_cen) + parseInt(ldes_col1) + parseInt(ldes_col2) + parseInt(ldes_com) + parseInt(ldes_des);
    $('#ldes_rac').text(ldes_rac);
    $('#ldes_ene').text(ldes_rac * 95);
    $('#ldes_pro').text(ldes_rac * 9);
    $('#ldes_gra').text(ldes_rac * 2);
    $('#ldes_hc').text(ldes_rac * 12);
    $('#ldes_chc').text(ldes_rac * .8);

    var lsem_rac = parseInt(lsem_cen) + parseInt(lsem_col1) + parseInt(lsem_col2) + parseInt(lsem_com) + parseInt(lsem_des);
    $('#lsem_rac').text(lsem_rac);
    $('#lsem_ene').text(lsem_rac * 110);
    $('#lsem_pro').text(lsem_rac * 9);
    $('#lsem_gra').text(lsem_rac * 4);
    $('#lsem_hc').text(lsem_rac * 12);
    $('#lsem_chc').text(lsem_rac * .8);

    var lent_rac = parseInt(lent_cen) + parseInt(lent_col1) + parseInt(lent_col2) + parseInt(lent_com) + parseInt(lent_des);
    $('#lent_rac').text(lent_rac);
    $('#lent_ene').text(lent_rac * 150);
    $('#lent_pro').text(lent_rac * 9);
    $('#lent_gra').text(lent_rac * 8);
    $('#lent_hc').text(lent_rac * 12);
    $('#lent_chc').text(lent_rac * .8);

    var lcaz_rac = parseInt(lcaz_cen) + parseInt(lcaz_col1) + parseInt(lcaz_col2) + parseInt(lcaz_com) + parseInt(lcaz_des);
    $('#lcaz_rac').text(lcaz_rac);
    $('#lcaz_ene').text(lcaz_rac * 200);
    $('#lcaz_pro').text(lcaz_rac * 8);
    $('#lcaz_gra').text(lcaz_rac * 5);
    $('#lcaz_hc').text(lcaz_rac * 30);
    $('#lcaz_chc').text(lcaz_rac * 2);

    var az_sg_rac = parseInt(az_sg_cen) + parseInt(az_sg_col1) + parseInt(az_sg_col2) + parseInt(az_sg_com) + parseInt(az_sg_des);
    $('#az_sg_rac').text(az_sg_rac);
    $('#az_sg_ene').text(az_sg_rac * 40);
    $('#az_sg_pro').text('0');
    $('#az_sg_gra').text('0');
    $('#az_sg_hc').text(az_sg_rac * 10);
    $('#az_sg_chc').text(az_sg_rac * .7);

    var az_cg_rac = parseInt(az_cg_cen) + parseInt(az_cg_col1) + parseInt(az_cg_col2) + parseInt(az_cg_com) + parseInt(az_cg_des);
    $('#az_cg_rac').text(az_cg_rac);
    $('#az_cg_ene').text(az_cg_rac * 85);
    $('#az_cg_pro').text('0');
    $('#az_cg_gra').text(az_cg_rac * 5);
    $('#az_cg_hc').text(az_cg_rac * 10);
    $('#az_cg_chc').text(az_cg_rac * .7);

    var ba_rac = parseInt(ba_cen) + parseInt(ba_col1) + parseInt(ba_col2) + parseInt(ba_com) + parseInt(ba_des);
    $('#ba_rac').text(ba_rac);
    $('#ba_ene').text(ba_rac * 140);
    $('#ba_pro').text('0');
    $('#ba_gra').text('0');
    $('#ba_hc').text(ba_rac * 20);
    $('#ba_chc').text(ba_rac * 1.3);


    var ag_cp_rac = parseInt(ag_cp_cen) + parseInt(ag_cp_col1) + parseInt(ag_cp_col2) + parseInt(ag_cp_com) + parseInt(ag_cp_des);
    $('#ag_cp_rac').text(ag_cp_rac);
    $('#ag_cp_ene').text(ag_cp_rac * 70);
    $('#ag_cp_pro').text(ag_cp_rac * 3);
    $('#ag_cp_gra').text(ag_cp_rac * 5);
    $('#ag_cp_hc').text(ag_cp_rac * 3);
    $('#ag_cp_chc').text(ag_cp_rac * .2);


    var ag_sp_rac = parseInt(ag_sp_cen) + parseInt(ag_sp_col1) + parseInt(ag_sp_col2) + parseInt(ag_sp_com) + parseInt(ag_sp_des);
    $('#ag_sp_rac').text(ag_sp_rac);
    $('#ag_sp_ene').text(ag_sp_rac * 45);
    $('#ag_sp_pro').text('0');
    $('#ag_sp_gra').text(ag_sp_rac * 5);
    $('#ag_sp_hc').text('0');
    $('#ag_sp_chc').text('0');


    var totalEnergia = ver_rac * 25 + fru_rac * 60 + cer_sg_rac * 70
        + cer_cg_rac * 115 + leg_rac * 120 + mbag_rac * 40 +
        bag_rac * 55 + mag_rac * 75 + aag_rac * 100 + ldes_rac * 95
        + lsem_rac * 110 + lent_rac * 150 + lcaz_rac * 200
        + az_sg_rac * 40 + az_cg_rac * 85 + ba_rac * 140 + ag_cp_rac * 70 + ag_sp_rac * 45;

    $('#totalEnergia').text(totalEnergia);

    var totalProteina = ver_rac * 2 + cer_sg_rac * 2 + cer_cg_rac * 2
        + leg_rac * 8 + mbag_rac * 7 +
        bag_rac * 7 + mag_rac * 7 + aag_rac * 7 + ldes_rac * 9
        + lsem_rac * 9 + ag_cp_rac * 3 +
        lent_rac * 9 + lcaz_rac * 8;

    $('#totalProteina').text(totalProteina);

    var totalGrasa = cer_cg_rac * 5 + leg_rac * 1 + mbag_rac * 1 +
        bag_rac * 3 + mag_rac * 5 + aag_rac * 8 + ldes_rac * 2 + lsem_rac * 4 +
        lent_rac * 8 + lcaz_rac * 5 + az_cg_rac * 5 + ag_cp_rac * 5 + ag_sp_rac * 5;

    $('#totalGrasa').text(totalGrasa);

    var totalHC = ver_rac * 4 + fru_rac * 15 + cer_sg_rac * 15
        + cer_cg_rac * 15 + leg_rac * 20 +
        ldes_rac * 12 + lsem_rac * 12 +
        lent_rac * 12 + lcaz_rac * 30 + az_sg_rac * 10
        + az_cg_rac * 10 + ba_rac * 20 + ag_cp_rac * 3;

    $('#totalHC').text(totalHC);

    var totalCHC = ver_rac * .3 + fru_rac * 1 + cer_sg_rac * 1
        + cer_cg_rac * 1 + leg_rac * 1.3 + ldes_rac * .8
        + lsem_rac * .8 + lent_rac * .8 + lcaz_rac * 2
        + az_sg_rac * .7 + az_cg_rac * .7 + ba_rac * 1.3 + ag_cp_rac * .2;

    $('#totalCHC').text(totalCHC);

    var totalTProteina = totalProteina * 4;
    var totalTGrasa = totalGrasa * 9;
    var totalTHC = totalHC * 4;
    var totalTEnergia = totalTProteina + totalTGrasa + totalTHC;
    $('#totalTEnergia').text(totalTEnergia);
    $('#totalTProteina').text(totalTProteina);
    $('#totalTGrasa').text(totalTGrasa);
    $('#totalTHC').text(totalTHC);


}