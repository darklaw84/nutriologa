<div class="col col-7 borderR jump_controls">
  <section class="borderB contentPatient">
    <!-- if user has tutor, this content add Class = .wTutor -->
    <div class="module modInf center <?php if ($usuario->isTutor) {
                                        echo "wTutor";
                                      } ?>">
      <div class="wrap_avatarSex">

        <?php
        if (isset($usuario->avatar->url)) {
          $urlAvatar = $usuario->avatar->url;
        } else {
          $urlAvatar = "";
        }

        if ($urlAvatar == "") { ?>
          <img class="profileImage avatarDefault" width="115" height="115">
        <?php } else { ?>
          <img class="profileImage " src="<?php echo $urlAvatar ?>" alt="nutriologo" width="115" height="115">
        <?php } ?><span class="os_icon <?php if (isset($usuario->sistemaoperativo)) {
                                          echo $usuario->sistemaoperativo;
                                        } ?>"></span>
        <span class="gender_icon <?php echo $usuario->genre; ?>"></span>
        <abbr class="age"><?php echo $usuario->age ?></<abbr>
      </div>
      <span class="wrap_namePatient dots3">
        <h1 class="dots3"><?php echo $usuario->name . " " . $usuario->lastName ?></h1>
      </span>
      <span class="dots3">
        <a href=""><?php echo $usuario->phone; ?></a>
      </span>
      <span class="dots3">
        <a href=""><?php echo $usuario->email; ?></a>
      </span>
    </div>
    <!-- if user has tutor, this content add Class = .wTutor -->
    <div class="module modDis right">
      <span class="moreInputs two_inputs">
        <span class="short4">
          <label>Estado Civil</label>
          <select id="estadoCivil" disabled>
            <option <?php if (isset($paciente->estadoCivil) && $paciente->estadoCivil == "SOLTERO") {
                      echo "selected";
                    } ?> value="SOLTERO">Solter@</option>
            <option <?php if (isset($paciente->estadoCivil) && $paciente->estadoCivil == "CASADO") {
                      echo "selected";
                    } ?> value="CASADO">Casad@</option>
            <option <?php if (isset($paciente->estadoCivil) && $paciente->estadoCivil == "DIVORCIADO") {
                      echo "selected";
                    } ?> value="DIVORCIADO">Divorciad@</option>
            <option <?php if (isset($paciente->estadoCivil) && $paciente->estadoCivil == "VIUDO") {
                      echo "selected";
                    } ?> value="VIUDO">Viud@</option>
          </select>
        </span>
        <span class="short5">
          <label>Fecha de Nacimiento</label>
          <input type="text" class="datepicker hasDatepicker" disabled id="fechaNacimiento" value="<?php
                                                                                                    if (isset($paciente->fechaNacimiento)) {
                                                                                                      echo date("Y-m-d", strtotime(date($paciente->fechaNacimiento->iso)));
                                                                                                    }
                                                                                                    ?>">
        </span>
      </span>
      <span class="moreInputs two_inputs">
        <span>
          <label>Escolaridad</label>
          <input type="text" id="escolaridad" disabled value="<?php if (isset($paciente->escolaridad)) {
                                                                echo $paciente->escolaridad;
                                                              } ?>">
        </span>
        <span>
          <label>Actividad Laboral</label>
          <input type="text" id="actividadLaboral" disabled value="<?php if (isset($paciente->actividadLaboral)) {
                                                                      echo $paciente->actividadLaboral;
                                                                    } ?>">
        </span>
      </span>
      <span class="moreInputs two_inputs">
        <span>
          <label>Nacionalidad</label>
          <input type="text" id="nacionalidad" disabled value="<?php if (isset($paciente->nacionalidad)) {
                                                                  echo $paciente->nacionalidad;
                                                                } ?>">
        </span>
        <span>
          <label>Residencia</label>
          <input type="text" id="residencia" disabled value="<?php if (isset($paciente->residencia)) {
                                                                echo $paciente->residencia;
                                                              } ?>">
        </span>
      </span>
    </div>
  </section>

  <div class="w_cols borderB objectives noMargin">
    <section>
      <div class="module modForm">
        <label>Objetivos</label>
        <input type="text" id="objetivos" name="objetivos" value="<?php if (isset($paciente->objetivos)) {
                                                                    echo $paciente->objetivos;
                                                                  } ?>">
      </div>
      <script type="text/javascript" src="js/jquery.amsify.suggestags.js"></script>
      <script type="text/javascript">
        $('input[name="objetivos"]').amsifySuggestags({
          type: 'amsify'
        });
      </script>
      <div class="module modForm right">
        <label>¿Por qué?</label>
        <textarea id="porque"><?php if (isset($paciente->porque)) {
                                echo $paciente->porque;
                              } ?></textarea>
      </div>
    </section>
  </div>

  <section class="wrap_medicalInfo">
    <h2>Historial Clínico</h2>
    <div class="module modForm">
      <span class="moreInputs two_inputs">
        <span>
          <label>Enfermedades</label>
          <input type="text" id="enfermedades" value="<?php if (isset($paciente->enfermedades)) {
                                                        echo $paciente->enfermedades;
                                                      } ?>">
        </span>
        <span>
          <label>Hospitalización</label>
          <input type="text" id="hospitalizacion" value="<?php if (isset($paciente->hospitalizacion)) {
                                                            echo $paciente->hospitalizacion;
                                                          } ?>">
        </span>
      </span>
      <span class="moreInputs two_inputs">
        <span>
          <label>Herencias</label>
          <input type="text" id="herencias" value="<?php if (isset($paciente->herencias)) {
                                                      echo $paciente->herencias;
                                                    } ?>">
        </span>
        <span>
          <label>Alergías</label>
          <input type="text" id="alergias" value="<?php if (isset($paciente->alergias)) {
                                                    echo $paciente->alergias;
                                                  } ?>">
        </span>
      </span>
      <span class="moreInputs two_inputs">
        <span class="short2">
          <label>Grupo Sanguíneo</label>
          <select id="grupoSanguineo">
            <option <?php if (isset($paciente->grupoSanguineo) && $paciente->grupoSanguineo == "NEG") {
                      echo "selected";
                    } ?> value="NEG">—</option>
            <option <?php if (isset($paciente->grupoSanguineo) && $paciente->grupoSanguineo == "ONEG") {
                      echo "selected";
                    } ?> value="ONEG">O-</option>
            <option <?php if (isset($paciente->grupoSanguineo) && $paciente->grupoSanguineo == "OPOS") {
                      echo "selected";
                    } ?> value="OPOS">O+</option>
            <option <?php if (isset($paciente->grupoSanguineo) && $paciente->grupoSanguineo == "ANEG") {
                      echo "selected";
                    } ?> value="ANEG">A−</option>
            <option <?php if (isset($paciente->grupoSanguineo) && $paciente->grupoSanguineo == "APOS") {
                      echo "selected";
                    } ?> value="APOS">A+</option>
            <option <?php if (isset($paciente->grupoSanguineo) && $paciente->grupoSanguineo == "BNEG") {
                      echo "selected";
                    } ?> value="BNEG">B−</option>
            <option <?php if (isset($paciente->grupoSanguineo) && $paciente->grupoSanguineo == "BPOS") {
                      echo "selected";
                    } ?> value="BPOS">B+</option>
            <option <?php if (isset($paciente->grupoSanguineo) && $paciente->grupoSanguineo == "ABNEG") {
                      echo "selected";
                    } ?> value="ABNEG">AB−</option>
            <option <?php if (isset($paciente->grupoSanguineo) && $paciente->grupoSanguineo == "ABPOS") {
                      echo "selected";
                    } ?> value="ABPOS">AB+</option>
          </select>
        </span>
        <span>
          <label>Cirugías</label>
          <input type="text" id="cirugias" value="<?php if (isset($paciente->cirugias)) {
                                                    echo $paciente->cirugias;
                                                  } ?>">
        </span>
      </span>
      <span class="moreInputs four_inputs noMargin">
        <span>
          <label>Medicamentos/Suplementos</label>
          <input type="text" id="medicamentosSup" value="<?php if (isset($paciente->medicamentosSup)) {
                                                            echo $paciente->medicamentosSup;
                                                          } ?>">
        </span>
        <span>
          <label>Alcohol</label>
          <input type="text" id="alcohol" value="<?php if (isset($paciente->alcohol)) {
                                                    echo $paciente->alcohol;
                                                  } ?>">
        </span>
        <span>
          <label>Tabaco</label>
          <input type="text" id="tabaco" value="<?php if (isset($paciente->tabaco)) {
                                                  echo $paciente->tabaco;
                                                } ?>">
        </span>
        <span>
          <label>Drogas</label>
          <input type="text" id="drogas" value="<?php if (isset($paciente->drogas)) {
                                                  echo $paciente->drogas;
                                                } ?>">
        </span>
      </span>
    </div>
    <?php if ($usuario->genre == "female") { ?>
     

      <div class="module modForm">
        <span class="moreInputs two_inputs">
          <span class="short3">
            <label>Sexualmente activa</label>
            <select id="sexualidad" class="selectOptions">
              <option disbled <?php if (isset($paciente->sexualidad) && $paciente->sexualidad == "MENOS") {
                                echo "selected";
                              } ?> value="MENOS">—</option>
              <option <?php if (isset($paciente->sexualidad) && $paciente->sexualidad == "SI") {
                        echo "selected";
                      } ?> value="SI">sí</option>
              <option <?php if (isset($paciente->sexualidad) && $paciente->sexualidad == "NO") {
                        echo "selected";
                      } ?> value="NO">no</option>

            </select>
          </span>
          <span>
            <label>Último Papanicolaou</label>
            <input type="date" id="ultimoPapanicolao" value="<?php
                                                              if (isset($paciente->ultimoPapanicolao->iso)) {
                                                                echo date("Y-m-d", strtotime(date($paciente->ultimoPapanicolao->iso)));
                                                              }
                                                              ?>">
          </span>
        </span>
        <span class="moreInputs four_inputs noMargin">
          <span>
            <label>FUM</label>
            <input type="date" id="fum" value="<?php
                                                if (isset($paciente->fum->iso)) {
                                                  echo date("Y-m-d", strtotime(date($paciente->fum->iso)));
                                                }
                                                ?>">
          </span>
          <span>
            <label style="color:transparent">·</label>
            <select id="fumtipo" class="selectOptions">
              <option disbled <?php if (isset($paciente->fumtipo) && $paciente->fumtipo == "MENOS") {
                                echo "selected";
                              } ?> value="MENOS">—</option>
              <option <?php if (isset($paciente->fumtipo) && $paciente->fumtipo == "REGULAR") {
                        echo "selected";
                      } ?> value="REGULAR">regular</option>
              <option <?php if (isset($paciente->fumtipo) && $paciente->fumtipo == "IRREGULAR") {
                        echo "selected";
                      } ?> value="IRREGULAR">irregular</option>
            </select>
          </span>
          <span>
            <label>PMS</label>
            <select id="pms" class="selectOptions">
              <option disbled <?php if (isset($paciente->pms) && $paciente->pms == "MENOS") {
                                echo "selected";
                              } ?> value="MENOS">—</option>
              <option <?php if (isset($paciente->pms) && $paciente->pms == "ANTES") {
                        echo "selected";
                      } ?> value="ANTES">antes</option>
              <option <?php if (isset($paciente->pms) && $paciente->pms == "DURANTE") {
                        echo "selected";
                      } ?> value="DURANTE">durante</option>
              <option <?php if (isset($paciente->pms) && $paciente->pms == "DESPUES") {
                        echo "selected";
                      } ?> value="DESPUES">después</option>
            </select>
          </span>
          <span>
            <label style="color:transparent">·</label>
            <input type="text" id="apetito" placeholder="¿tu apetito cambia?" value="<?php
                                                if (isset($paciente->apetito)) {
                                                  echo $paciente->apetito;
                                                }
                                                ?>">
          </span>
        </span>
      </div>




    <?php } ?>
    <div class="module modForm col-5 noMargin">
      <label>Deporte o AF</label>
      <input type="text" id="depoaficion" value="<?php if (isset($paciente->depoaficion)) {
                                                    echo $paciente->depoaficion;
                                                  } ?>">
    </div>
  </section>

  <?php if ($usuario->isTutor) { ?>

    <section class="wrapTutor borderT modXs">
      <h2>Tutor</h2>
      <?php if (isset($usuario->nombreTutor)) { ?>
        <div class="module modInf">
          <div class="col-5">
            <span class="dots3"><?php echo $usuario->nombreTutor ?></span>
          </div>
          <div class="col-2">
            <span class="dots3">
              <a href=""><?php echo $usuario->correoTutor ?></a>
            </span>
          </div>
          <div class="col-2 right">
            <span class="dots3">
              <a href=""><?php echo $usuario->telTutor ?></a>
            </span>
          </div>
        </div>
      <?php } else { ?>

        <div class="module center">
          <h4>sin información</h4>
        </div>
      <?php } ?>
    </section>
  <?php } ?>

</div>

<input type="hidden" id="idCitaEliminar">

<input type="hidden" id="idPacienteInfo" value="<?php echo $usuario->objectId ?>">
<input type="hidden" id="idDetallePaciente" value="<?php echo $paciente->objectId ?>">
<input type="hidden" id="nombrePacienteInfo" value="<?php echo $usuario->name ?>">
<input type="hidden" id="idNutriologo" value="<?php echo $_SESSION['idUsuario'] ?>">
<div class="col col-33 jump_controls right">
  <section class="borderB">
    <!-- if there's next date -->
    <?php if ($hayProximaCita) { ?>
      <div class="module modInf nextDate center">
        <h5>PRÓXIMA CITA</h5>
        <span>
          <p><?php echo $fechaCita; ?></p>
        </span>
        <span class="time_nextDate"><img src="images/icons/icon-hour.svg"><?php echo $horaCita . " - " . $horaFinCita;  ?></span>
        <div onclick="miFuncionActualizaCitaPaciente('<?php echo $citaId ?>');" class="btn reDate"></div>
        <div onclick="miFuncionActualizaCitaEliminarPaciente('<?php echo $citaId ?>');" class="btn deleteDate"></div>

      </div>
    <?php } else { ?>
      <div class="module module_message">
        <div class="center-x center">
          <h5>PRÓXIMA CITA</h5>
          <h4>no existen citas</h4>
        </div>
        <div onclick="miFuncionCrearCitaPaciente('<?php echo $usuario->objectId ?>');" class="btn plus"></div>
      </div>
    <?php } ?>
  </section>

  <section class="borderB">
    <div class="module modInf goals center">
      <span class="goals_icon"></span>
      <input type="text"  id="metas" value="<?php if (isset($paciente->metas)) {
                                                      echo $paciente->metas;
                                                    } ?>">
    </div>
  </section>

  <section class="wrap_medicalInfo">
    <h2>Alimentario</h2>
    <div class="module modForm">
      <span class="moreInputs two_inputs noMargin">
        <span>
          <label>Vive con</label>
          <input type="text" id="vivecon" value="<?php if (isset($paciente->vivecon)) {
                                                    echo $paciente->vivecon;
                                                  } ?>">
        </span>
        <span>
          <label>¿Quién cocina?</label>
          <input type="text" id="quiencocina" value="<?php if (isset($paciente->quiencocina)) {
                                                        echo $paciente->quiencocina;
                                                      } ?>">
        </span>
      </span>
    </div>
    <div class="module modForm">
      <label>Alimentos favoritos</label>
      <input type="text" id="alimentosFav" value="<?php if (isset($paciente->alimentosFav)) {
                                                    echo $paciente->alimentosFav;
                                                  } ?>">
      <label>Alimentos no agradables</label>
      <input type="text" id="alimentosNoAgradables" value="<?php if (isset($paciente->alimentosNoAgradables)) {
                                                              echo $paciente->alimentosNoAgradables;
                                                            } ?>">
      <span class="moreInputs two_inputs">
        <span>
          <label>Agua</label>
          <input type="text" id="agua" value="<?php if (isset($paciente->agua)) {
                                                echo $paciente->agua;
                                              } ?>">
        </span>
        <span>
          <label>Agua saborizada</label>
          <input type="text" id="aguaSaborizada" value="<?php if (isset($paciente->aguaSaborizada)) {
                                                          echo $paciente->aguaSaborizada;
                                                        } ?>">
        </span>
      </span>
      <span class="moreInputs two_inputs noMargin">
        <span>
          <label>Refresco</label>
          <input type="text" id="refresco" value="<?php if (isset($paciente->refresco)) {
                                                    echo $paciente->refresco;
                                                  } ?>">
        </span>
        <span>
          <label>Café</label>
          <input type="text" id="cafe" value="<?php if (isset($paciente->cafe)) {
                                                echo $paciente->cafe;
                                              } ?>">

          <input type="hidden" id="idPaciente" value="<?php if (isset($paciente->objectId)) {
                                                        echo $paciente->objectId;
                                                      } ?>">
        </span>
      </span>
    </div>
  </section>

  <section class="borderT">
    <div class="module modForm">
      <label>Notas sobre el paciente</label>
      <textarea id="notas"><?php if (isset($paciente->notas)) {
                              echo $paciente->notas;
                            } ?></textarea>
    </div>
  </section>

  <section class="borderT">
    <div class="module">
      <h5 class="center deletePatient">ELIMINAR PACIENTE</h5>
    </div>
  </section>
</div>

<?php include_once 'modals.php'; ?>