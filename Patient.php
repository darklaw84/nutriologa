<?php
$title = "Profile";
include_once 'header.php';


include_once 'APIController.php';


$api = new APIController();

if (isset($_GET['idPaciente'])) {
  $idPaciente = $_GET['idPaciente'];
}
if (isset($_POST['idPaciente'])) {
  $idPaciente = $_POST['idPaciente'];
}


$resUsuario = json_decode($api->consultaUsuario($idPaciente));
$usuario = $resUsuario->results[0];

$resPac = json_decode($api->consultaDetallePaciente($idPaciente));
if(count($resPac->results)>0)
{
$paciente = $resPac->results[0];
}
else
{
  $resPac = json_decode($api->insertarPaciente("","","","","",$idPaciente,"",""));
  $resPac = json_decode($api->consultaDetallePaciente($idPaciente));
  $paciente = $resPac->results[0];
  
}

$hayProximaCita = false;

$resCit = json_decode($api->consultaCitasPaciente($idPaciente, date('Y-m-d'), ""));
if (count($resCit->results) > 0) {
  $citasSiguientes = $resCit->results;
  $hoy = date('Y-m-d');
  $hora = date('H:i');

  foreach ($citasSiguientes as $ci) {

    $fechaCita = date("Y-m-d", strtotime(date($ci->date->iso)));
    $horaCita = $ci->horaInicio;
    $horaFinCita = $ci->horaFin;
    $citaId = $ci->objectId;
    if (isset($ci->patient)) {
      $personaCita = $ci->patient->name . " " . $ci->patient->lastName;
    } else {
      $personaCita = "";
    }
    if ($fechaCita == $hoy) {
      if (strtotime($hora) <= strtotime($horaCita)) {
        $hayProximaCita = true;

        break;
      }
    } else if ($fechaCita > $hoy) {
      $hayProximaCita = true;

      break;
    }
  }
}



$resCit = json_decode($api->consultaCitasPaciente($idPaciente, "", ""));
if (count($resCit->results) > 0) {
  $citasPaciente = $resCit->results;
} else {
  $citasPaciente = array();
}
?>
<input type="hidden" id="tabActual" >
<div class="headerPatient">
  <header>
    <div class="options3">
      <!--- TABLINKS -->
      <span class="tablinks dataP1" onclick="openType(event, 'dataPatient')" id="defaultOpen"></span>
      <span class="tablinks dataP2" onclick="openType(event, 'data2Patient')"></span>
      <span class="tablinks dataP3" onclick="openType(event, 'data3Patient')"></span>
      <!--- TABLINKS -->
    </div>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <div class="wrap_dateDisplay">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php

          $citasReverse = array_reverse($citasPaciente);
          foreach ($citasReverse as $cit) {
            $dayofweek = date('w', strtotime(date("Y-m-d", strtotime(date($cit->date->iso)))));
            $dia = "";
            switch ($dayofweek) {
              case 0:
                $dia = "Domingo";
                break;
              case 1:
                $dia = "Lunes";
                break;
              case 2:
                $dia = "Martes";
                break;
              case 3:
                $dia = "Miércoles";
                break;
              case 4:
                $dia = "Jueves";
                break;
              case 5:
                $dia = "Viernes";
                break;
              case 6:
                $dia = "Sábado";
                break;
            }
          ?>
            <div class="swiper-slide"><input type="hidden" id="idCita" value="<?php echo $cit->objectId; ?>"><?php echo $dia . " " . date("Y-m-d", strtotime(date($cit->date->iso))); ?></div>

          <?php } ?>
          <input type="hidden" id="fechaPrimeraCita" value="<?php if (count($citasReverse) > 0) {
                                                              echo date("Y-m-d", strtotime(date($citasReverse[0]->date->iso)));
                                                            } ?>">
        </div>
      </div>
      <div class="swiper-button-next" ></div>
      <div class="swiper-button-prev" ></div>
      <script>
        var swiper = new Swiper('.swiper-container', {
          slidesPerView: 1,
          spaceBetween: 20,
          centeredSlides: true,
          pagination: false,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      swiper.on('slideChangeTransitionEnd', function() { llenarDatos(); });
      </script>
    </div>
    <span class="back2Patients"></span>
  </header>
</div>

<div class="wrap_admin col">
  <!--- TABCONTENT -->
  <div id="dataPatient" class="tabcontent dataPatient">
    <?php include_once 'patientInfo.php'; ?>
  </div>
  <div id="data2Patient" class="tabcontent data2Patient">
    <?php include_once 'patientDiet.php'; ?>
  </div>
  <div id="data3Patient" class="tabcontent data3Patient">
    <?php include_once 'patientMeasure.php'; ?>
  </div>
  <!--- TABCONTENT -->
  <script>
    document.getElementById("defaultOpen").click();
  </script>
  <div class="wrap_controls">
    <button id="btnGuardarPaciente" class="center center-x">GUARDAR</button>
  </div>
</div>

<?php include_once 'footer.php'; ?>