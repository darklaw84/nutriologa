<?php
$title = "Dashboard";
include_once 'header.php';
include_once 'APIController.php';


$api = new APIController();


$resultado = json_decode($api->consultaCitasDoctor($_SESSION['idUsuario'], date('Y-m-d'), date('Y-m-d')));
$citas = $resultado->results;





$resultado = json_decode($api->consultaCitasDoctor($_SESSION['idUsuario'], date("Y-m-d", strtotime('monday this week')), date("Y-m-d", strtotime('sunday this week'))));
$citasSemana = $resultado->results;

$resultado = json_decode($api->consultaPacientesNutriologo($_SESSION['idUsuario']));
$pacientes = $resultado->results;


$resultado = json_decode($api->consultaBalanceNutriologo($_SESSION['idUsuario'], date('Y-m-d'), date('Y-m-d')));
$balances = $resultado->results;

$montoTotalDia = 0;
$ingresos=0;
foreach ($balances as $bala) {
  if ($bala->type == "income") {
    $montoTotalDia = $montoTotalDia + $bala->amount;
    $ingresos=$ingresos+$bala->amount;
  } else {
    $montoTotalDia = $montoTotalDia - $bala->amount;
  }
}




$hayProximaCita = false;


$hoy = date('Y-m-d');
$hora = date('H:i');
$fechaRecorriendo = date('Y-m-d');
$seguirEntrando = true;
$cont = 0;

while ($seguirEntrando) {

  $cont++;
  
  $resultado = json_decode($api->consultaCitasDoctor($_SESSION['idUsuario'], $fechaRecorriendo, $fechaRecorriendo));
  $citasDia = $resultado->results;
  if ($cont > 5) {
    $seguirEntrando = false;
  } else {
    $fechaRecorriendo = date('Y-m-d', strtotime($fechaRecorriendo . ' +1 day'));
  }
  foreach ($citasDia as $ci) {

    $fechaCita = date("Y-m-d", strtotime(date($ci->date->iso)));
    $horaCita = $ci->horaInicio;
    $horaFinCita = $ci->horaFin;
    $citaId = $ci->objectId;
    if (isset($ci->patient)) {
      $personaCita = $ci->patient->name . " " . $ci->patient->lastName;
      $pacienteCitaId = $ci->patient->objectId;
      if (isset($ci->patient->avatar->url)) {
        $urlAvatarPC = $ci->patient->avatar->url;
      } else {
        $urlAvatarPC = "";
      }
    } else {
      $personaCita = "";
      $pacienteCitaId = "";
    }
    if ($fechaCita == date('Y-m-d')) {
      if (strtotime($hora) <= strtotime($horaCita)) {
        $hayProximaCita = true;
        $seguirEntrando = false;

        break;
      }
    }
    else{
      $hayProximaCita = true;
      $seguirEntrando = false;

      break;
    }
  }
}

?>
<input type="hidden" id="idNutriologo" value="<?php echo $_SESSION['idUsuario'] ?>">
<div class="wrap_admin dashboard">
  <div class="col col-33 borderR">
    <section>
      <?php if ($hayProximaCita) { ?>
        <div class="module modAx nextDate" id="nextDate">
          <div class="wrap_nextDate">
            <h5>PRÓXIMA CITA</h5>
            <div class="avatar avatarDefault" style="display:<?php if ($urlAvatarPC == "") {
                                                                echo "block";
                                                              } else {
                                                                echo "none";
                                                              } ?>"></div>


            <img id="imagenBuena" style="display:<?php if ($urlAvatarPC == "") {
                                                    echo "none";
                                                  } else {
                                                    echo "block";
                                                  } ?>" class="avatar avatarDefault" src="<?php echo $urlAvatarPC ?>" alt="nutriologo" width="115" height="115">

            <span class="dots3">
              <h1 class="dots3"><?php echo $personaCita; ?></h1>
            </span>
            <span>
              <p><?php echo date('d/m/Y', strtotime($fechaCita)); ?></p>
              <input type="hidden" id="pacienteCitaId" value="<?php echo $pacienteCitaId ?>">
              <input type="hidden" id="nombrePacienteCita" value="<?php echo $personaCita ?>">
            </span>
            <span class="time_nextDate"><img src="images/icons/icon-hour.svg"><?php echo $horaCita . " - " . $horaFinCita;  ?></span>
          </div>
          <div onclick="miFuncionActualizaCitaGeneral('<?php echo $citaId ?>');" class="btn reDate"></div>
          <div onclick="miFuncionActualizaCitaEliminar('<?php echo $citaId ?>');" class="btn deleteDate"></div>
        </div>
      <?php } else { ?>
        <div class="module module_message">
          <div class="center-x center">
            <h5>PRÓXIMA CITA</h5>
            <h4>no existen citas</h4>
          </div>
          <div class="btn plus newDate"></div>
        </div>

      <?php } ?>
    </section>

    <section class="borderT">
      <div class="module modInf incomesToday center">
        <h3>Ingresos del día</h3>
        <span>
          <p>Cantidad total del <?php echo date('d/m/Y') ?><br>con <?php echo count($citas); ?> citas registradas:</p>
        </span>
        <span class="cant">$<?php echo number_format($montoTotalDia, 2, '.', ','); ?></span>
        <span><a href="balance.php">VER TODOS</a></span>
      </div>
    </section>
  </div>

  <div class="col col-7 right">
    <section class="col-33 numGraphic center borderR">
      <h5>citas de hoy</h5>
      <span class="cant"><?php echo count($citas); ?></span>
    </section>
    <section class="col-33 numGraphic center borderR">
      <h5>citas de semana</h5>
      <span class="cant"><?php echo count($citasSemana); ?></span>
    </section>
    <section class="col-33 numGraphic center">
      <h5>pacientes</h5>
      <span class="cant"><?php echo count($pacientes); ?></span>
    </section>

    <section class="list_dateToday borderT">
      <h2>Citas de hoy</h2>
      <input type="hidden" id="idCitaEliminar">
      <?php if (count($citas) == 0) { ?>
        <div class="center-x center">
          <h4>no existen citas</h4>
          <a href="dates.php">VER AGENDA</a>
        </div>
      <?php } else { ?>
        <div>
          
          <ul class="timeline">
            <?php
            $count = 0;
            foreach ($citas as $cita) {
              if (isset($cita->patient->avatar->url)) {
                $urlAvatarPacientes = $cita->patient->avatar->url;
              } else {
                $urlAvatarPacientes = "";
              }

            ?>
              <li class="timelineItem firstDate">
                <span class="timelineMark"></span>
                <div class="timelineContent">
                  <a href="Patient.php?idPaciente=<?php echo $cita->patient->objectId ?>">
                    <div class="col-6">
                      <span class="timelineKind"><?php if ($count == 0) {
                                                    echo "primera cita";
                                                  } else {
                                                    echo "seguimiento";
                                                  } ?></span>
                      <h4 class="timelineDate"><?php echo $cita->horaInicio . " - " . $cita->horaFin; ?></h4>
                      <div class="timelinePatient">
                        <div class="avatar avatarDefault" style="display:<?php if ($urlAvatarPacientes == "") {
                                                                            echo "block";
                                                                          } else {
                                                                            echo "none";
                                                                          } ?>"></div>


                        <img id="imagenBuena" style="display:<?php if ($urlAvatarPacientes == "") {
                                                                echo "none";
                                                              } else {
                                                                echo "block";
                                                              } ?>" class="avatar avatarDefault" src="<?php echo $urlAvatarPacientes ?>" alt="nutriologo" width="20px" height="20px">

                        <h1 class="dots3"><?php if (isset($cita->patient)) {
                                            echo $cita->patient->name . " " . $cita->patient->lastName;
                                          } ?></h1>
                      </div>
                    </div>
                  </a>
                  <div class="col-2">
                    <label>Teléfono</label>
                    <a href="tel:" class="dots3"><?php if (isset($cita->patient)) {
                                                    echo $cita->patient->phone;
                                                  } ?></a>
                  </div>
                  <div class="col-2">
                    <span onclick="miFuncionActualizaCitaEliminar('<?php echo $cita->objectId ?>');" class="icon deleteDate btnSecond"></span>
                  </div>
                </div>
              </li>
            <?php $count++;
            } ?>
          </ul>
        </div>
      <?php } ?>
      <!-- if there's dates today -->
    </section>
  </div>
</div>
<?php include_once 'footer.php'; ?>