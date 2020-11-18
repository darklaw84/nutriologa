<?php
$title = "Dates";
include_once 'header.php';

include_once 'APIController.php';


$api = new APIController();

function obtenerDia($dia)
{
  if($dia=="Lu")
  {
   return 1; 
  }
  if($dia=="Ma")
  {
   return 2; 
  }
  if($dia=="Mi")
  {
   return 3; 
  }
  if($dia=="Ju")
  {
   return 4; 
  }
  if($dia=="Vi")
  {
   return 5; 
  }
  if($dia=="Sa")
  {
   return 6; 
  }
  if($dia=="Do")
  {
   return 0; 
  }
}


$resultado = json_decode($api->consultaCitasDoctor($_SESSION['idUsuario'], "", ""));
$citas = $resultado->results;



$resultado = json_decode($api->consultaHorariosDoctor($_SESSION['idUsuario']));
$horarios = $resultado->results;
?>

<div class="wrap_admin fullCalendar">
  <section class="col">
    <script src="lib/main.js"></script>
    <script>
      var eventos = [];

      <?php
      $cont = 0;

      foreach ($citas as $cita) {

        if (isset($cita->patient)) {
          $titulo = $cita->patient->name . " " . $cita->patient->lastName;
          $idPaciente = $cita->patient->objectId;
          $start = date("Y-m-d", strtotime(date($cita->date->iso))) . "T" . $cita->horaInicio . ":00";
          $end = date("Y-m-d", strtotime(date($cita->date->iso))) . "T" . $cita->horaFin . ":00";

          echo "var cita" . $cont . " = {
  title: '" . $titulo . "',
  start: '" . $start . "',
  url: 'Patient.php?idPaciente=" . $idPaciente . "',
  end: '" . $end . "'
};

eventos.push(cita" . $cont . ");";
          $cont++;
        }
      } ?>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {


          headerToolbar: {
            left: 'timeGridDay,timeGridWeek,dayGridMonth',
            center: 'title',
            right: 'today,prev,next',
          },
          views: {
            dayGrid: {
              dayHeaderFormat: {
                weekday: 'narrow'
              },
              titleFormat: {
                month: 'long',
                year: 'numeric'
              }
            },
            week: {
              dayHeaderFormat: {
                weekday: 'narrow',
                day: '2-digit'
              },
              titleFormat: {
                day: '2-digit',
                month: 'short',
                year: 'numeric'
              }
            },
            day: {
              dayHeaderFormat: {
                weekday: 'long'
              },
              titleFormat: {
                day: '2-digit',
                month: 'short',
                year: 'numeric'
              }
            }
          },
          initialView: 'timeGridWeek',
          locale: 'es',
          firstDay: 0,
          //height: 'parent',
          aspectRatio: 2.1,
          handleWindowResize: true,
          showNonCurrentDates: true,
          allDaySlot: false, // events all day
          datesAboveResources: true,
          stickyHeaderDates: true,
          titleRangeSeparator: ' — ',
          defaultRangeSeparator: ' — ',
          buttonText: {
            today: 'HOY',
            month: 'X',
            week: 'X',
            day: 'X',
          },
          eventDisplay: 'auto',
          eventTimeFormat: {
            hour: 'numeric',
            minute: '2-digit',
            meridiem: 'lowercase'
          },
          dayMaxEvents: 2, // allow "more" link when too many events
          eventLimitText: "MÁS",
          moreLinkClick: 'day',
          dayPopoverFormat: {
            month: 'short',
            day: '2-digit',
            year: 'numeric'
          },
          nowIndicator: true,
          weekNumbers: true,
          weekNumberCalculation: 'ISO',
          weekText: 'S',
          navLinks: true, // can click day/week names to navigate views
          businessHours: [ // specify an array instead
            <?php foreach($horarios as $hor)
            {
              $dias="";
              $cont=0;
                foreach($hor->weekDays as $dia)
                {
                  $numero =obtenerDia($dia);
                 
                  if($cont==0)
                  {
                    $dias=$numero;
                  }
                  else
                  {
                    $dias=$dias.",".$numero;
                  }
                  $cont++;
                    
                }
               echo "{ daysOfWeek:[".$dias."],startTime:'".$hor->firstHour."',endTime:'".$hor->lastHour."'},"; 
            } 
            ?>
            
          ], // display business hours
          editable: false,
          selectable: false,
          events: eventos
        });
        calendar.render();
      });
    </script>
    <div id="calendar-container">
      <div id="calendar"></div>
    </div>
  </section>
</div>

<?php include_once 'footer.php'; ?>