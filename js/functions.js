// TABS
var primeraVez = false;

function openType(evt, typeName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(typeName).style.display = "block";
  evt.currentTarget.className += " active";
  $('#tabActual').val(typeName);
  if (typeName === "data3Patient") {
    if (!primeraVez) {
      
      cargarDatosCitas('hola');
      primeraVez = true;
    }
  }

  if (typeName === "data2Patient") {
    
      
    hacerCalculosUnico();
    
  }
}

// 3DOTS TOOLTIP

// INPUT CALENDAR, SELECT, NUMBER
$(function () {
  $(".datepicker").datepicker({
    monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    dayNamesMin: ["S", "L", "M", "X", "J", "V", "S"],
    firstDay: 0,
  });
  $(".selectOptions").selectmenu();
  $(".spinner").spinner();
});


// SHOW-HIDE
$(document).ready(function () {
  // IN-OUTCOMES
  $('.incomes .hideTab').click(function () {
    $('.in_table').fadeToggle(200);
    $('.in_out .incomes').toggleClass('active');
    $('.active .hideTab').toggleClass('active');
  });
  $('.outcomes .hideTab').click(function () {
    $('.out_table').fadeToggle(200);
    $('.outcomes').removeClass('active');
  });
  // SECTION NOTIFICATIONS
  $('.nots_on').click(function () {
    $('.nots_section, .overlay').toggleClass('open');
    $('.wrap_nots').fadeToggle(200);
    $('body').css({ 'overflow': 'hidden', });
  });
  $('.overlay, .nots_section .hide').click(function () {
    $('.nots_section, .overlay').toggleClass('open');
    $('.wrap_nots').fadeToggle(50);
    $('body').css({ 'overflow': 'auto', });
  });
  // FOOTER RS
  $('.rights').click(function () {
    $('.wrap_rs').toggleClass('shown');
  });
  // NEW PATIENT
  $('.btn_newPatient').click(function () {
    $('.patients').fadeToggle(150);
    $('.newPatient').fadeToggle(450);
  });
  // NEW PATIENT – BACK 2 LIST
  $('.closeNewPatient').click(function () {
    $('.newPatient').fadeToggle(150);
    $('.patients').fadeToggle(450);
  });
  // PROFILE PATIENT WOMAN – FROM LIST PATIENTS
  $('#patients tbody tr').click(function () {
    var trObtenido = $(this);
    var idPaciente = trObtenido.attr('id');
    window.location = "Patient.php?idPaciente=" + idPaciente;
  });
  // PROFILE PATIENT WOMAN – FROM DASHBOARD
  $('.wrap_nextDate').click(function () {
    var idPaciente=$('#pacienteCitaId').val();
    window.location = "Patient.php?idPaciente="+idPaciente;
  });
  // PROFILE PATIENT MEN – FROM DASHBOARD (LIST TODAY-DATES)
  $('#ejMale .col-6').click(function () {
    window.location = "Patient2.php";
  });
  // PROFILE PATIENT / MEASURE – SHOW MENU SWIPER-DATES
  $('.headerPatient .options3 .tablinks').click(function () {
    if ($('.dataP3').hasClass('active')) {
      $('.wrap_dateDisplay').addClass("showed");
    } else {
      $('.wrap_dateDisplay').removeClass("showed");
    }
  });
  // PROFILE PATIENT – BACK 2 LIST
  $('.back2Patients').click(function () {
    window.location = "patients.php";
  });
  // NOTIFICATIONS CLEAR 1BY1


  $('#btnEliminarPaciente').click(function () {
    var idPaciente=$('#idPacienteInfo').val();

    $.ajax({
      url: 'eliminarPaciente.php',
      type: 'post',
      data: {
        idPaciente: idPaciente
      },
      dataType: 'json',
      success: function (response) {


          $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Paciente eliminado con éxito').end().modal({
              fadeDuration: 200,
              fadeDelay: 1.75
          });

          window.location='patients.php';

      }
  });
  });
 
});
