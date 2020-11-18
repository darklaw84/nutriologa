
var calendario;
var citas;
var horariosDelDiaEstablecidos;
var miFuncionCambiaFecha = null;
var miFuncionCambiarHorario = null;
var miFuncionActualizaCitaEliminar = null;
var miFuncionActualizaCitaEliminarPaciente = null;
var miFuncionCrearCitaPaciente = null;
var miFuncionActualizaCitaPaciente = null;
var miFuncionActualizaCitaGeneral = null;
var fechaSeleccionada;
var pacienteSeleccionado;
var nombrePaciente;
var nutriologoSesion;
var horarioSeleccionado;
var idCitaActualizar;
var accion;
$(document).ready(function () {

    $('#btnEliminarCita').click(function () {
        var idCitaEliminar = $('#idCitaEliminar').val();
        $.ajax({
            url: 'eliminarCita.php',
            type: 'post',
            data: {
                idCitaEliminar: idCitaEliminar

            },
            dataType: 'json',
            success: function (datos) {

                if (datos === "exito") {
                    $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Cita eliminada con éxito').end().modal({
                        fadeDuration: 200,
                        fadeDelay: 1.75
                    });
                    window.location = 'index.php';
                }



            }, error: function (request, status, error) {
                if (request.responseText === "exito") {
                    $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Cita eliminada con éxito').end().modal({
                        fadeDuration: 200,
                        fadeDelay: 1.75
                    });
                    window.location = 'index.php';
                }
            }
        });
    });


    $('#btnEliminarCitaPaciente').click(function () {
        var idCitaEliminar = $('#idCitaEliminar').val();
        var idPacienteInfo = $('#idPacienteInfo').val();
        $.ajax({
            url: 'eliminarCita.php',
            type: 'post',
            data: {
                idCitaEliminar: idCitaEliminar

            },
            dataType: 'json',
            success: function (datos) {

                if (datos === "exito") {
                    $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Cita eliminada con éxito').end().modal({
                        fadeDuration: 200,
                        fadeDelay: 1.75
                    });
                    window.location = 'Patient.php?idPaciente=' + idPacienteInfo;
                }



            }, error: function (request, status, error) {
                if (request.responseText === "exito") {
                    $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Cita eliminada con éxito').end().modal({
                        fadeDuration: 200,
                        fadeDelay: 1.75
                    });
                    window.location = 'Patient.php?idPaciente=' + idPacienteInfo;
                }
            }
        });
    });


    $('#btnConfirmaCitaActualiza').click(function () {



        if (typeof horarioSeleccionado == 'undefined' || horarioSeleccionado == null) {
            $('#mensajeErrorDentroAct').text('Debe seleccionar un horario para la cita');
        }
        else {

            var horaFinal = horarioSeleccionado + 1;
            var horaInicio = horarioSeleccionado;
            if (horaFinal < 10) {
                horaFinal = "0" + horaFinal;
            }
            if (horaInicio < 10) {
                horaInicio = "0" + horaInicio;
            }


            var d = new Date();

            var month = d.getMonth() + 1;
            var day = d.getDate();

            var output = d.getFullYear() + '-' +
                (month < 10 ? '0' : '') + month + '-' +
                (day < 10 ? '0' : '') + day;

            var esCorrectoHorario = true;

            if (fechaSeleccionada == output) {
                var horaActual = d.getHours();
                if (horaInicio <= horaActual) {
                    esCorrectoHorario = false;
                }
            }


            if (esCorrectoHorario) {

                if (accion === "crear") {

                    var idNutriologo = $('#idNutriologo').val();

                    $.ajax({
                        url: 'insertarCita.php',
                        type: 'post',
                        data: {
                            idNutriologo: idNutriologo,
                            fecha: fechaSeleccionada,
                            horaInicio: horaInicio + ":00",
                            horaFin: horaFinal + ":00",
                            idPaciente: pacienteSeleccionado

                        },
                        dataType: 'json',
                        success: function (datos) {

                            if (datos === "exito") {
                                $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Cita creada con éxito').end().modal({
                                    fadeDuration: 200,
                                    fadeDelay: 1.75
                                });
                                window.location = 'Patient.php?idPaciente=' + pacienteSeleccionado;
                            }



                        }, error: function (request, status, error) {
                            if (request.responseText === "exito") {
                                $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Cita creada con éxito').end().modal({
                                    fadeDuration: 200,
                                    fadeDelay: 1.75
                                });
                                window.location = 'Patient.php?idPaciente=' + pacienteSeleccionado;
                            }
                        }
                    });
                }
                else {
                    $.ajax({
                        url: 'actualizarCita.php',
                        type: 'post',
                        data: {
                            idCita: idCitaActualizar,
                            fecha: fechaSeleccionada,
                            pacienteSeleccionado: pacienteSeleccionado,
                            nutriologoSesion: nutriologoSesion,
                            nombrePaciente: nombrePaciente,
                            horaInicio: horaInicio + ":00",
                            horaFin: horaFinal + ":00"

                        },
                        dataType: 'json',
                        success: function (datos) {

                            if (datos === "exito") {
                                $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Cita actualizada con éxito').end().modal({
                                    fadeDuration: 200,
                                    fadeDelay: 1.75
                                });
                                if (accion === "actualizarGeneral") {
                                    window.location = 'index.php';
                                }
                                else {
                                    window.location = 'Patient.php?idPaciente=' + pacienteSeleccionado;
                                }
                            }



                        }, error: function (request, status, error) {
                            if (request.responseText === "exito") {
                                $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Cita actualizada con éxito').end().modal({
                                    fadeDuration: 200,
                                    fadeDelay: 1.75
                                });
                                if (accion === "actualizarGeneral") {
                                    window.location = 'index.php';
                                }
                                else {
                                    window.location = 'Patient.php?idPaciente=' + pacienteSeleccionado;
                                }
                            }
                        }
                    });
                }
            }
            else {
                $('#mensajeErrorDentroAct').text('El horario no es correcto para el día de hoy');
            }

        }
    });






    $('#btnConfirmarNuevaCita').click(function () {

        var idNutriologo = $('#idNutriologo').val();

        if (typeof horarioSeleccionado == 'undefined' || horarioSeleccionado == null) {
            $('#mensajeErrorDentro').text('Debe seleccionar un horario para la cita');
        }
        else {
            if (typeof pacienteSeleccionado == 'undefined' || pacienteSeleccionado == null) {
                $('#mensajeErrorDentro').text('Debe seleccionar un paciente para la cita');
            }
            else {
                var horaFinal = horarioSeleccionado + 1;
                var horaInicio = horarioSeleccionado;
                if (horaFinal < 10) {
                    horaFinal = "0" + horaFinal;
                }
                if (horaInicio < 10) {
                    horaInicio = "0" + horaInicio;
                }

                $.ajax({
                    url: 'insertarCita.php',
                    type: 'post',
                    data: {
                        idNutriologo: idNutriologo,
                        fecha: fechaSeleccionada,
                        horaInicio: horaInicio + ":00",
                        horaFin: horaFinal + ":00",
                        idPaciente: pacienteSeleccionado

                    },
                    dataType: 'json',
                    success: function (datos) {

                        if (datos === "exito") {
                            $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Cita creada con éxito').end().modal({
                                fadeDuration: 200,
                                fadeDelay: 1.75
                            });
                            window.location = 'index.php';
                        }



                    }, error: function (request, status, error) {
                        if (request.responseText === "exito") {
                            $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Cita creada con éxito').end().modal({
                                fadeDuration: 200,
                                fadeDelay: 1.75
                            });
                            window.location = 'index.php';
                        }
                    }
                });
            }
        }
    });


    $('.newDate').click(function () {

        irPorDatos();



        $('#newDate').modal({
            fadeDuration: 200,
            fadeDelay: 1.75
        });
    });

    function actualizarTextoCita() {
        if (typeof horarioSeleccionado == 'undefined' || horarioSeleccionado == null) {
            $('#fechaNuevaCita').text(fechaSeleccionada);
            $('#fechaNuevaCitaActualiza').text(fechaSeleccionada);
        }
        else {
            var horaFinal = horarioSeleccionado + 1;
            var horaInicio = horarioSeleccionado;
            if (horaFinal < 10) {
                horaFinal = "0" + horaFinal;
            }
            if (horaInicio < 10) {
                horaInicio = "0" + horaInicio;
            }
            $('#fechaNuevaCita').text(fechaSeleccionada + " de " + horaInicio + ":00 a " + horaFinal + ":00");
            $('#fechaNuevaCitaActualiza').text(fechaSeleccionada + " de " + horaInicio + ":00 a " + horaFinal + ":00");
            $('#fechaNuevaCitaNueva').text(fechaSeleccionada + " de " + horaInicio + ":00 a " + horaFinal + ":00");
        }
    }


    function cambiarFecha(fecha) {
        var idNutriologo = $('#idNutriologo').val();
        horarioSeleccionado = null;
        fechaSeleccionada = fecha;
        $.ajax({
            url: 'obtenerCitasNutriologo.php',
            type: 'post',
            data: {
                idNutriologo: idNutriologo,
                fecha: fecha

            },
            dataType: 'json',
            success: function (datos) {


                citas = datos;

                llenarDisponibles(fecha);

            }, error: function (request, status, error) {
                if (request.responseText === "exito") {
                    $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Nutriologo actualizado con éxito').end().modal({
                        fadeDuration: 200,
                        fadeDelay: 1.75
                    });
                }
            }
        });



    }



    function llenarDisponibles(fecha) {
        horariosDelDiaEstablecidos = [];
        //lo primero que hay que hacer es saber que dia de la semana es con la fecha
        var fechaD = obtenerFechaDeString(fecha);
        var diaN = fechaD.getDay();
        var diaS = obtenerDiaS(diaN);
        //luego tenemos que buscar en el arreglo de clendario 
        calendario.forEach(function (cal, index) {
            var dias = cal.weekDays;
            dias.forEach(function (dia, indexday) {
                var dias = cal.weekDays;
                if (dia === diaS) {
                    //si encontramos el dia, tenemos que agregar los horarios
                    var inicio = cal.firstHour;
                    var final = cal.lastHour;


                    var horaInicial = inicio.substring(0, 2);
                    var horaFinal = final.substring(0, 2);
                    for (i = horaInicial; i < horaFinal; i++) {
                        horaInicio = i;
                        horaFin = parseInt(i) + 1;
                        var horarioEstablecido = {
                            inicio: horaInicio, final: horaFin,
                            horario: horaInicio + ":00 - " + horaFin + ":00"
                        }

                        horariosDelDiaEstablecidos.push(horarioEstablecido);
                    }


                }

            });
        });

        //aqui ya tenemos los horarios, ahora hay que reviar si no hay citas en esos horarios
        citas.forEach(function (cita, indexCit) {

            var horaInicioCita = parseInt(cita.horaInicio.substring(0, 2));
            horariosDelDiaEstablecidos.forEach(function (horario, indexHor) {
                var horaInicioHorario = horario.inicio;
                if (horaInicioCita == horaInicioHorario) {
                    horariosDelDiaEstablecidos.splice(indexHor, 1);
                }
            });
        });

        //ya aqui solo tenemos el arreglo con los horarios disponibles

        var divHorariosDisponibles = $('#horariosDisponibles');
        var horariosDisponiblesActualiza = $('#horariosDisponiblesActualiza');
        var horariosDisponiblesNueva = $('#horariosDisponiblesNueva');
        divHorariosDisponibles.empty();
        horariosDisponiblesActualiza.empty();
        horariosDisponiblesNueva.empty();
        horariosDelDiaEstablecidos.forEach(function (horario, indexHor) {
            divHorariosDisponibles.append('<div><input type="radio" onclick="miFuncionCambiarHorario(' + horario.inicio + ')" id="hora' + horario.inicio + '" name="timeReDate" value="time1a"><label for="hora' + horario.inicio + '"><span>' + horario.horario + '</span></label></div>');
            horariosDisponiblesActualiza.append('<div><input type="radio" onclick="miFuncionCambiarHorario(' + horario.inicio + ')" id="time' + horario.inicio + '" name="timeReDate2" value="time5"><label for="time' + horario.inicio + '"><span>' + horario.horario + '</span></label></div>');
            horariosDisponiblesNueva.append('<div><input type="radio" onclick="miFuncionCambiarHorario(' + horario.inicio + ')" id="time' + horario.inicio + '" name="timeReDate2" value="time5"><label for="time' + horario.inicio + '"><span>' + horario.horario + '</span></label></div>');
        });

        actualizarTextoCita();
    }

    function obtenerDiaS(diaN) {
        switch (diaN) {
            case 0: return "Do";
            case 1: return "Lu";
            case 2: return "Ma";
            case 3: return "Mi";
            case 4: return "Ju";
            case 5: return "Vi";
            case 6: return "Sa";

        }
    }

    function obtenerFechaDeString(fecha) {
        var from = fecha.split("-")
        var f = new Date(from[0], from[1] - 1, from[2])
        return f;
    }


    function getCurrentDate() {
        var d = new Date();

        var month = d.getMonth() + 1;
        var day = d.getDate();

        var output = d.getFullYear() + '-' +
            (month < 10 ? '0' : '') + month + '-' +
            (day < 10 ? '0' : '') + day;

        return output;
    }


    $("#selectPatients").on("click", "td", function() {
        var id = $(this).data('id');
        pacienteSeleccionado = id;
        var pacienteNombre = $('#TR' + id).children('td[data-target=targetPaciente]').text();
        $('#pacienteNuevaCita').text(pacienteNombre);
      });

    

    function cambiarHorario(hora) {
        horarioSeleccionado = hora;
        actualizarTextoCita();
    }

    function actualizarCitaEliminar(id) {

        $('#idCitaEliminar').val(id);
        $('#deleteDate').modal({
            fadeDuration: 200,
            fadeDelay: 1.75
        });
    }


    function actualizarCitaEliminarPaciente(id) {

        $('#idCitaEliminar').val(id);
        $('#deleteDatePaciente').modal({
            fadeDuration: 200,
            fadeDelay: 1.75
        });
    }


    function actualizarCitaPaciente(id) {
        idCitaActualizar = id;
        pacienteSeleccionado = $('#idPacienteInfo').val();
        nombrePaciente = $('#nombrePacienteInfo').val();
        irPorDatos();
        accion = "actualizarPaciente";

        $('#reDate').modal({
            fadeDuration: 200,
            fadeDelay: 1.75
        });
    }

    function actualizarCitaGeneral(id) {
        idCitaActualizar = id;
        pacienteSeleccionado = $('#pacienteCitaId').val();
        nutriologoSesion = $('#idNutriologo').val();
        nombrePaciente = $('#nombrePacienteCita').val();


        irPorDatos();
        accion = "actualizarGeneral";

        $('#reDate').modal({
            fadeDuration: 200,
            fadeDelay: 1.75
        });
    }


    function crearCitaPaciente(idPaciente) {
        pacienteSeleccionado = idPaciente;

        irPorDatos();
        accion = "crear";

        $('#reDate').modal({
            fadeDuration: 200,
            fadeDelay: 1.75
        });

    }


    function irPorDatos() {
        var idNutriologo = $('#idNutriologo').val();
        nutriologoSesion = idNutriologo;
        var fecha = getCurrentDate();
        fechaSeleccionada = fecha;

        $.ajax({
            url: 'obtenerCalendario.php',
            type: 'post',
            data: {
                idNutriologo: idNutriologo

            },
            dataType: 'json',
            success: function (datos) {


                calendario = datos;

                $.ajax({
                    url: 'obtenerCitasNutriologo.php',
                    type: 'post',
                    data: {
                        idNutriologo: idNutriologo,
                        fecha: fecha

                    },
                    dataType: 'json',
                    success: function (datos) {


                        citas = datos;

                        llenarDisponibles(fecha);

                    }, error: function (request, status, error) {
                        if (request.responseText === "exito") {
                            $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Nutriologo actualizado con éxito').end().modal({
                                fadeDuration: 200,
                                fadeDelay: 1.75
                            });
                        }
                    }
                });


            }, error: function (request, status, error) {
                if (request.responseText === "exito") {
                    $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Nutriologo actualizado con éxito').end().modal({
                        fadeDuration: 200,
                        fadeDelay: 1.75
                    });
                }
            }
        });

    }

    miFuncionCambiarHorario = cambiarHorario;
    miFuncionCambiaFecha = cambiarFecha;
    miFuncionActualizaCitaEliminar = actualizarCitaEliminar;
    miFuncionActualizaCitaEliminarPaciente = actualizarCitaEliminarPaciente;
    miFuncionActualizaCitaPaciente = actualizarCitaPaciente;
    miFuncionActualizaCitaGeneral = actualizarCitaGeneral;
    miFuncionCrearCitaPaciente = crearCitaPaciente;

});




