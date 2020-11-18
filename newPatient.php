<div class="newPatient">
  <section class="col">
    <span class="icon close closeNewPatient"></span>
    <div class="center-x">
      <div class="col-67 contentPatient">
        <div class="module modForm">
          <div class="wrap_avatarSex">
            <div class="avatar avatarDefault"></div>
          </div>
          <label>Nombre</label>
          <input type="hidden" id="idNutriologo" value="<?php echo $_SESSION['idUsuario']; ?>">
          <input type="text" id="nombre">
          <label>Apellidos</label>
          <input type="text" id="apellidos">
          <label>Teléfono Personal</label>
          <input type="number" id="telefono">
          <span class="moreInputs two_inputs noMargin">
            <span class="short2">
              <label>Edad</label>
              <input type="number" id="edad">
            </span>
            <span class="short6">
              <label>Sexo</label>
              <div class="wrap_switcher">
                <div class="switcher switcher2">
                  <input type="radio" name="gender" value="female" id="female" class="swInput swInput1" checked="">
                  <label for="female" class="swLabel swFemale"></label>
                  <input type="radio" name="gender" value="male" id="male" class="swInput swInput2">
                  <label for="male" class="swLabel swMale"></label>
                  <span class="swToggle"></span>
                </div>
              </div>
            </span>
          </span>
        </div>

        <div class="module modForm right">
          <span class="moreInputs two_inputs">
            <span class="short3">
              <label>Estado Civil</label>
              <select id="estadoCivil">
                <option value="SOLTERO">Solter@</option>
                <option value="CASADO">Casad@</option>
                <option value="DIVORCIADO">Divorciad@</option>
                <option value="VIUDO">Viud@</option>
              </select>
            </span>
            <span class="short6">
              <label>Fecha de Nacimiento</label>
              <input type="date" id="fechaNacimiento">
            </span>
          </span>
          <span class="moreInputs two_inputs">
            <span>
              <label>Escolaridad</label>
              <input type="text" id="escolaridad">
            </span>
            <span>
              <label>Actividad Laboral</label>
              <input type="text" id="actividadLaboral">
            </span>
          </span>
          <span class="moreInputs two_inputs">
            <span>
              <label>Nacionalidad</label>
              <input type="text" id="nacionalidad">
            </span>
            <span>
              <label>Residencia</label>
              <input type="text" id="residencia">
            </span>
          </span>
        </div>

        <div class="module modForm right">
          <label>E-mail</label>
          <input type="email" id="email">
        </div>

      </div>
      <div class="col-3 right">

        <div class="module modForm">
          <span class="moreInputs two_inputs">
            <span>
              <label>Tutor</label>
              <div class="switcher">
                <input type="radio" name="radioTutor" value="not" id="not" class="swInput swInput1" checked="">
                <label for="not" class="swLabel swNot"></label>
                <input type="radio" name="radioTutor" value="ok" id="ok" class="swInput swInput2">
                <label for="ok" class="swLabel swOK"></label>
                <span class="swToggle"></span>
              </div>
            </span>
            <span>
              <label>SO móvil</label>
              <div class="switcher switcher2">
                <input type="radio" name="radioOS" value="ios" id="ios" class="swInput swInput1" checked="">
                <label for="ios" class="swLabel swIOS"></label>
                <input type="radio" name="radioOS" value="android" id="android" class="swInput swInput2">
                <label for="android" class="swLabel swAndroid"></label>
                <span class="swToggle"></span>
              </div>
            </span>
          </span>
        </div>
        <div class="module modForm">
          <label>Metas</label>
          <textarea id="metas"></textarea>

        </div>
        <button id="btnGuardarPacienteNuevo" class="right">guardar</button>
      </div>
    </div>
  </section>
</div>