<?php

include_once 'APIController.php';
$api = new APIController();






$notificaciones = json_decode($api->consultaNotificaciones(
  $_SESSION['idUsuario']
))->results;



?>

<div class="overlay"></div>
<input type="hidden" id="idUserNoti" value="<?php echo $_SESSION['idUsuario'] ?>">
<div class="nots_section">
  <section>
    <div class="title">
      <h2>Notificaciones</h2>
    </div>
  </section>

  <section class="wrap_nots modXs modList">
    <!-- LISTADO DE NOTIFICACIONES -->
    <?php
    if (count($notificaciones) > 0) {
      $conta = 0;
      foreach ($notificaciones as $not) {
        $conta++;
        if($not->tipo=="eli")
        {
          $icono ="deleteDate";
        }
        else
        {
          $icono ="reDate";
        }
        
    ?>
        <div id="module<?php echo $conta; ?>" onclick="window.location='Patient.php?idPaciente=<?php echo $not->userCita->objectId ?>'" class="module modAx">

        <span class="icon <?php echo $icono; ?>"> </span> <span class="dots3"><?php echo $not->userName . " " . $not->schedule ?></span>

        </div>

        <!--  <div class="module modAx">
      <span class="icon deleteDate"></span>
      <span class="dots3">Name Last</span>
      <span class="icon close"></span>
    </div>
  <div class="module modAx">
      <span class="icon reDate"></span>
      <span class="dots3">notificación</span>
      <span class="icon close"></span>
    </div>
-->

        <!-- LISTADO DE NOTIFICACIONES -->
    <?php }
    }
    ?>
    <button  style="display:<?php if (count($notificaciones) > 0) {
                                                        echo "block";
                                                      } else {
                                                        echo "none";
                                                      } ?>" id="btnBorrarTodas">borrar todas</button>


    <h4 id="mensajeSinNotificaciones" style="display:<?php if (count($notificaciones) > 0) {
                                                        echo "none";
                                                      } else {
                                                        echo "block";
                                                      } ?>" class="nots_message center-x center">sin<br>notificaciones<br>por mostrar</h4>

  </section>
</div>