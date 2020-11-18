<div id="measuresModal" class="modal">
  <h3>Medibles</h3>
  <section class="col-33">
    <span class="moreInputs three_inputs">
      <span class="left">
        <label>Edad</label>
        <input id="edad" onkeyup="calculosMedibles()" type="number">
      </span>
     
      <span>
        <label>Talla</label>
        <input onkeyup="calculosMedibles()" id="talla" type="number">
      </span>
      <span>
        <label>Peso</label>
        <input onkeyup="calculosMedibles()" id="peso" type="number">
      </span>
	    </span>
	   <span class="moreInputs wrapIMC">
      <span>
        <label>IMC</label>
        <input id="imc" type="number">
      </span>
    </span>
    <span class="moreInputs two_inputs">
      <span>
        <label>Peso Min.</label>
        <input id="pesoMin" type="number">
      </span>
      <span>
        <label>Peso Máx.</label>
        <input id="pesoMax" type="number">
      </span>
    </span>
    <span class="moreInputs two_inputs">
      <span>
        <label>Peso Teórico</label>
        <input id="pesoTeorico" type="number">
      </span>
      <span>
        <label>%Peso Teórico</label>
        <input id="porPesoTeorico" type="number">
      </span>
    </span>
    <span class="moreInputs two_inputs">
      <span>
        <label>GEB</label>
        <input id="geb" type="number">
      </span>
      <span>
        <label>GET</label>
        <input id="get" type="number">
      </span>
    </span>
    <span>
      <label>AF</label>
      <select name="selAF"  onChange="calculosMedibles();" id ="selAF" >
        <option value="1.3">Muy Ligera</option>
        <option value="1.5">Ligera</option>
        <option value="1.6">Moderada</option>
        <option value="1.9">Pesada</option>
        <option value="2.2">Excepcional</option>
      </select>
    </span>
  </section>

  <section class="col-33">
    <span class="moreInputs three_inputs">
      <span>
        <label>Pecho</label>
        <input id="pecho" type="number">
      </span>
      <span>
        <label>Brazo</label>
        <input id="brazo" type="number">
      </span>
      <span>
        <label>Cintura</label>
        <input id="cintura" type="number">
      </span>
    </span>
    <span class="moreInputs three_inputs">
      <span>
        <label>Cadera</label>
        <input id="cadera" type="number">
      </span>
      <span>
        <label>Muslo</label>
        <input id="muslo" type="number">
      </span>
      <?php if($usuario->genre=="female"){ ?>
      <span>
        <label>Ombligo</label>
        <input id="ombligo" type="number">
      </span>
      <?php } ?>
    </span>
     
    <span class="moreInputs two_inputs m64">
      <span>
        <label>%Grasa</label>
        <input id="grasa" type="number">
      </span>
      <span>
        <label>%Músculo</label>
        <input id="musculo" type="number">
      </span>
    </span>
    <span class="moreInputs two_inputs">
      <span>
        <label>%Agua</label>
        <input id="pagua" type="number">
      </span>
      <span>
        <label>Huesos</label>
        <input id="huesos" type="number">
      </span>
    </span>
  </section>

  <section class="col-33">
    <div class="kcal">
      <span>
        <label>Total Kcal.</label>
        <input id="totCalorias" onkeyup="calculosMedibles()" type="number">
      </span>
      <table>
        <thead>
          <tr>
            <th></th>
            <th>Kcal.</th>
            <th>%</th>
            <th>G.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>P</td>
            <td><input id="Pcal" type="number"></td>
            <td><input id="Ppor" onkeyup="calculosMedibles()" type="number"></td>
            <td><input id="Pga" type="number"></td>
          </tr>
          <tr>
            <td>HC</td>
            <td><input id="HCcal" type="number"></td>
            <td><input id="HCpor" onkeyup="calculosMedibles()" type="number"></td>
            <td><input id="HCga" type="number"></td>
          </tr>
          <tr>
            <td>G</td>
            <td><input id="Gcal" type="number"></td>
            <td><input id="Gpor" onkeyup="calculosMedibles()" type="number"></td>
            <td><input id="Gga" type="number"></td>
          </tr>
          <tr>
            <td>T</td>
            <td><input id="Tcal" type="number"></td>
            <td><input id="Tpor" type="number"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <div class="ax_modal">
    <button id="guardarMedibles">guardar</button>
  </div>
</div>



<script type="text/javascript">
  $(document).ready(function() {
    $('.measuresModal').click(function() {
      $('#measuresModal').modal({
        fadeDuration: 200,
        fadeDelay: 1.75
      });
    });
  });
</script>
<!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  NOTES 4 DATE  -->
<div id="notsDateModal" class="modal">
  <h3>anotaciones</h3>
  <textarea placeholder="Comentarios extra de la cita"></textarea>
  <div class="ax_modal">
    <button>añadir</button>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.notsDateModal').click(function() {
      $('#notsDateModal').modal({
        fadeDuration: 200,
        fadeDelay: 1.75
      });
    });
  });
</script>
<!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  DELETE ACCOUNT  -->
<div id="deleteAccount" class="modal">
  <h3>Eliminar cuenta</h3>
  <p>¿Estás seguro de eliminar tu cuenta?,<br>esta acción no se podrá deshacer</p>
  <div class="ax_modal">
    <button>aceptar</button>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.deleteAccount').click(function() {
      $('#deleteAccount').modal({
        fadeDuration: 200,
        fadeDelay: 1.75
      });
    });
  });
</script>
<!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  DELETE PATIENT  -->
<div id="deletePatient" class="modal">
  <h3>Eliminar paciente</h3>
  <p>¿Estás seguro de eliminar este paciente?,<br>esta acción no se podrá deshacer</p>
  <div class="ax_modal">
    <button id="btnEliminarPaciente">aceptar</button>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.deletePatient').click(function() {
      $('#deletePatient').modal({
        fadeDuration: 200,
        fadeDelay: 1.75
      });
    });
  });
</script>
<!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  DELETE DATE  -->
<div id="deleteDate" class="modal">
  <h3>Eliminar cita</h3>
  <p>¿Estás seguro de eliminar esta cita?,<br>esta acción no se podrá deshacer</p>
  <div class="ax_modal">
    <button id="btnEliminarCita">aceptar</button>
  </div>
</div>


<div id="deleteDatePaciente" class="modal">
  <h3>Eliminar cita</h3>
  <p>¿Estás seguro de eliminar esta cita?,<br>esta acción no se podrá deshacer</p>
  <div class="ax_modal">
    <button id="btnEliminarCitaPaciente">aceptar</button>
  </div>
</div>


<!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  NEW BALANCE  -->
<div id="newBalance" class="modal">
  <h3>Nuevo</h3>
  <span>
    <label>Concepto</label>
    <input type="text" id="txtConcepto">
    <label>Cantidad</label>
    <input type="number" id="txtCantidad" class="short3" />
  </span>
  <label class="center">Tipo</label>
  <div class="switcher switcher2">
    <input type="radio" name="radioBalance" value="income" id="income" class="swInput swInput1" checked="checked">
    <label for="income" class="swLabel swIncome"></label>
    <input type="radio" name="radioBalance" value="outcome" id="outcome" class="swInput swInput2">
    <label for="outcome" class="swLabel swOutcome"></label>
    <span class="swToggle"></span>
  </div>
  <div class="ax_modal">
    <button id="btnAgregarConcepto">agregar</button>
  </div>
</div>



<div id="mensajeError" style="background-color: #000000;" class="modal">
  <h3 style="color:#FFFFFF">Mensaje</h3>
  <span>
    <div class="modal-cuerpo" style="color:#FFFFFF">

    </div>

  </span>

</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.newBalance').click(function() {
      $('#newBalance').modal({
        fadeDuration: 200,
        fadeDelay: 1.75
      });
    });
  });
</script>

<!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  RE-DATE  -->
<div id="reDate" class="modal">
  <div id="calendarDate"></div>
  <h5 class="center">horarios disponibles</h5>
  <div class="wrap_calTime">
    <!--- MENSAJE NO TIME AVAILABLE --
    <div class="message">
      <h4>sin espacio disponible</h4>
    </div>
    <!-- MENSAJE NO TIME AVAILABLE -->
    <!--- SWIPER WITH SCHEDULE -->
    <div id="horariosDisponiblesActualiza" class="sw custom-radios reDateRadios scroll" data-simplebar>

    </div>
    <!--- SWIPER WITH SCHEDULE -->
  </div>
  <div class="confirmation">
  <p id="mensajeErrorDentroAct" style="color:#FF0000"></p>
    <p>Nueva agenda:</p>
    <p id="fechaNuevaCitaActualiza" class="time_nextDate"><img src="images/icons/icon-hour.svg"></p>
  </div>
  <div class="ax_modal">
    <button id="btnConfirmaCitaActualiza">confirmar</button>
  </div>
</div>







<script type="text/javascript">
  $(document).ready(function() {
    $(' .newDate4Client').click(function() {
      $('#reDate').modal({
        fadeDuration: 200,
        fadeDelay: 1.75
      });
    });
  });
</script>

<!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  NEWDATE  -->
<div id="newDate" class="modal">
  <div class="col-5">
    <!--- TABLINKS -->
    <div class="tabs">
      <span class="tablinks user borderR" onclick="openType(event, 'newDatePatients')" id="defaultOpen"></span>
      <!-- <span class="tablinks userNew" onclick="openType(event, 'newDateNewPatient')"></span>-->
    </div>
    <!--- TABLINKS -->
    <!--- TABCONTENT -->
    <div id="newDatePatients" class="tabcontent">
      <table id="selectPatients" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Paciente</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (isset($pacientes)) {
            foreach ($pacientes as $pac) {
          ?>
           <tr id="TR<?php echo $pac->objectId ?>">
                <td data-target="targetPaciente" data-role="seleccionarPaciente" data-id="<?php echo $pac->objectId ?>"><?php echo $pac->name . " " . $pac->lastName ?></td>
              </tr>
          <?php
            }
          }

          ?>


        </tbody>
      </table>

    </div>
    <div id="newDateNewPatient" class="tabcontent">
      <h2>Primera cita</h2>
      <p>Los datos serán guardados temporalmente<br>para uso de Primera cita</p>
      <label>Nombre completo</label>
      <input type="text">
      <label>Teléfono Personal</label>
      <span class="moreInputs two_inputs">
        <span class="short2">
          <input type="number" placeholder="ext.">
        </span>
        <span class="short7">
          <input type="number">
        </span>
      </span>
    </div>
    <!--- TABCONTENT -->
    <script>
      document.getElementById("defaultOpen").click();
    </script>
  </div>
  <div class="col-5">
    <div id="calendarDate2"></div>
    <h5 class="center">horarios disponibles</h5>
    <div class="wrap_calTime">
      <!--- MENSAJE NO TIME AVAILABLE --
      <div class="message">
        <h4>sin espacio disponible</h4>
      </div>
      <!-- MENSAJE NO TIME AVAILABLE -->
      <!--- SWIPER WITH SCHEDULE -->
      <div id="horariosDisponibles" class="sw custom-radios reDateRadios scroll">

      </div>
      <!--- SWIPER WITH SCHEDULE -->
    </div>
  </div>
  <div class="confirmation">
  <p id="mensajeErrorDentro" style="color:#FF0000"></p>
    <p>La cita se agendará:</p>
    <p id="pacienteNuevaCita" class="time_nextDate"></p>
    <p id="fechaNuevaCita" class="time_nextDate"><img src="images/icons/icon-hour.svg"></p>
  </div>
  <div class="ax_modal">
    <button id="btnConfirmarNuevaCita">confirmar</button>
  </div>
</div>



<!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  TABLE NEWDATE  -->
<script>
  $(document).ready(function() {
    $('#selectPatients').DataTable({
      "order": [
        [0, "asc"]
      ],
      "dom": '<f<t>>',
      "paging": false,
      stateSave: false,
      "scrollY": "260px",
      "scrollCollapse": true,
      "language": {
        "zeroRecords": "SIN RESULTADOS",
      }
    });
  });
</script>

<!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  MODAL CALENDAR  -->
<script type="text/javascript" src="js/calendar.js"></script>
<script>
  $(document).ready(function() {
    $("#calendarDate").MEC();
    $("#calendarDate2").MEC();
  });
</script>

<script type="text/javascript" src="js/jquery.modal.min.js"></script>