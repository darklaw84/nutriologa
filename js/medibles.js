$(document).ready(function () {



    $('#guardarMedibles').click(function () {

        var edad = $('#edad').val();
        var talla = $('#talla').val();
        var peso = $('#peso').val();
        var pecho = $('#pecho').val();
        var brazo = $('#brazo').val();
        var cintura = $('#cintura').val();
        var cadera = $('#cadera').val();
        var muslo = $('#muslo').val();
        var ombligo = $('#ombligo').val();
        var grasa = $('#grasa').val();
        var musculo = $('#musculo').val();
        var agua = $('#pagua').val();
        var huesos = $('#huesos').val();
        var totalCalorias = $('#totalCalorias').val();
        var Ppor = $('#Ppor').val();
        var HCpor = $('#HCpor').val();
        var Gpor = $('#Gpor').val();
        var totCalorias = $('#totCalorias').val();

        var imc = $('#imc').val();
        var pesoMin = $('#pesoMin').val();
        var pesoMax = $('#pesoMax').val();
        var pesoTeorico = $('#pesoTeorico').val();
        var porPesoTeorico = $('#porPesoTeorico').val();


        var idCita = 0;
        var slides = document.getElementsByClassName("swiper-slide");
        for (i = 0; i < slides.length; i++) {
            var slide = slides[i];
            var classs = slides[i].className;
            if (classs.includes("active")) {
                idCita = slide.childNodes.item("idCita").value;

            }
        }

        $.ajax({
            url: 'actualizarCitaMedibles.php',
            type: 'post',
            data: {
                idCita: idCita,
                edad: edad,
                talla: talla,
                peso: peso,
                pecho: pecho,
                brazo: brazo,
                cintura: cintura,
                cadera: cadera,
                muslo: muslo,
                ombligo: ombligo,
                grasa: grasa,
                musculo: musculo,
                agua: agua,
                huesos: huesos,
                totalCalorias: totalCalorias,
                Ppor: Ppor,
                HCpor: HCpor,
                Gpor: Gpor,
                pesoMin: pesoMin,
                pesoMax: pesoMax,
                pesoTeorico: pesoTeorico,
                porPesoTeorico: porPesoTeorico,
                imc: imc,
                totCalorias: totCalorias


            },
            dataType: 'json',
            success: function (response) {


                $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Medibles actualizados con éxito').end().modal({
                    fadeDuration: 200,
                    fadeDelay: 1.75
                });
                

            }

        });



    });


});