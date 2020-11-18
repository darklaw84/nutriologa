<div class="wrap_dietDiary">
  <div class="col col-3 borderR jump_controls">
    <section class="wrap_usualDiet borderB">
      <h2>Dieta Habitual</h2>
      <div class="accordion">Desayuno</div>
      <div class="panel">
        <div class="module modForm noMargin">
          <input type="text" id="dh_desayuno_hr" placeholder="24h" class="inputTime short3" value="<?php
                                                                                                    if (isset($paciente->dh_desayuno_hr)) {
                                                                                                      echo $paciente->dh_desayuno_hr;
                                                                                                    }
                                                                                                    ?>">
          <textarea id="dh_desayuno_txt" placeholder="Ingresa"><?php
                                                                if (isset($paciente->dh_desayuno_txt)) {
                                                                  echo $paciente->dh_desayuno_txt;
                                                                }
                                                                ?></textarea>
        </div>
      </div>
      <div class="accordion collation1_accordion">Colación 1</div>
      <div class="panel">
        <div class="module modForm noMargin">
          <input type="text" id="dh_colacion1_hr" placeholder="24h" class="inputTime short3" value="<?php
                                                                                                    if (isset($paciente->dh_colacion1_hr)) {
                                                                                                      echo $paciente->dh_colacion1_hr;
                                                                                                    }
                                                                                                    ?>">
          <textarea id="dh_colacion1_txt" placeholder="Ingresa"><?php
                                                                if (isset($paciente->dh_colacion1_txt)) {
                                                                  echo $paciente->dh_colacion1_txt;
                                                                }
                                                                ?></textarea>
        </div>
      </div>
      <div class="accordion meal_accordion">Comida</div>
      <div class="panel">
        <div class="module modForm noMargin">
          <input type="text" id="dh_comida_hr" placeholder="24h" class="inputTime short3" value="<?php
                                                                                                  if (isset($paciente->dh_comida_hr)) {
                                                                                                    echo $paciente->dh_comida_hr;
                                                                                                  }
                                                                                                  ?>">
          <textarea id="dh_comida_txt" placeholder="Ingresa"><?php
                                                              if (isset($paciente->dh_comida_txt)) {
                                                                echo $paciente->dh_comida_txt;
                                                              }
                                                              ?></textarea>
        </div>
      </div>
      <div class="accordion collation2_accordion">Colación 2</div>
      <div class="panel">
        <div class="module modForm noMargin">
          <input type="text" id="dh_colacion2_hr" placeholder="24h" class="inputTime short3" value="<?php
                                                                                                    if (isset($paciente->dh_colacion2_hr)) {
                                                                                                      echo $paciente->dh_colacion2_hr;
                                                                                                    }
                                                                                                    ?>">
          <textarea id="dh_colacion2_txt" placeholder="Ingresa"><?php
                                                                if (isset($paciente->dh_colacion2_txt)) {
                                                                  echo $paciente->dh_colacion2_txt;
                                                                }
                                                                ?></textarea>
        </div>
      </div>
      <div class="accordion dinner_accordion">Cena</div>
      <div class="panel">
        <div class="module modForm noMargin">
          <input type="text" id="dh_cena_hr" placeholder="24h" class="inputTime short3" value="<?php
                                                                                                if (isset($paciente->dh_cena_hr)) {
                                                                                                  echo $paciente->dh_cena_hr;
                                                                                                }
                                                                                                ?>">
          <textarea id="dh_cena_txt" placeholder="Ingresa"><?php
                                                            if (isset($paciente->dh_cena_txt)) {
                                                              echo $paciente->dh_cena_txt;
                                                            }
                                                            ?></textarea>
        </div>
      </div>
    </section>

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("accOpen");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }
    </script>

    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.timeentry.js"></script>
    <script>
      $(function() {
        $('.inputTime').timeEntry({
          show24Hours: true,
          spinnerSize: 0
        });
      });
    </script>
    <section class="borderB">
      <div class="module modForm">
        <span class="moreInputs two_inputs noMargin">
          <span>
            <label>Despierta</label>
            <input type="text" id="despierta" placeholder="24h" class="inputTime" value="<?php
                                                                                          if (isset($paciente->despierta)) {
                                                                                            echo $paciente->despierta;
                                                                                          }
                                                                                          ?>">
          </span>
          <span>
            <label>Duerme</label>
            <input type="text" placeholder="24h" id="duerme" class="inputTime" value="<?php
                                                                                      if (isset($paciente->duerme)) {
                                                                                        echo $paciente->duerme;
                                                                                      }
                                                                                      ?>">
          </span>
        </span>
      </div>
    </section>
    <section>
      <div class="module modForm noMargin">
        <label>¿Alimentación distinta en fines de<br>semana?</label>
        <input type="text" id="finDeSemana" value="<?php
                                                    if (isset($paciente->finDeSemana)) {
                                                      echo $paciente->finDeSemana;
                                                    }
                                                    ?>">
      </div>
    </section>
  </div>

  <div class="col col-7w borderR jump_controls right">
    <section class="dietDiary">
      <table id="dietDiary" class="display">
        <thead>
          <tr>
            <th colspan="2"></th>
            <th>Desayuno</th>
            <th>Colación 1</th>
            <th>Comida</th>
            <th>Colación 2</th>
            <th>Cena</th>
            <th>Raciones</th>
            <th>Energía</th>
            <th>Proteína</th>
            <th>Grasas</th>
            <th>HC</th>
            <th>Conteo HC</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="2" class="foodType tdWhite">VERDURAS</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ver_des" value="<?php
                                                                                                        if (isset($paciente->ver_des) && $paciente->ver_des != "") {

                                                                                                          echo $paciente->ver_des;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ver_col1" value="<?php
                                                                                                          if (isset($paciente->ver_col1) && $paciente->ver_col1 != "") {
                                                                                                            echo $paciente->ver_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ver_com" value="<?php
                                                                                                        if (isset($paciente->ver_com) && $paciente->ver_com != "") {
                                                                                                          echo $paciente->ver_com;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ver_col2" value="<?php
                                                                                                          if (isset($paciente->ver_col2) && $paciente->ver_col2 != "") {
                                                                                                            echo $paciente->ver_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ver_cen" value="<?php
                                                                                                        if (isset($paciente->ver_cen) && $paciente->ver_cen != "") {
                                                                                                          echo $paciente->ver_cen;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><span id="ver_rac">0</span></td>
            <td><span id="ver_ene">0</span></td>
            <td><span id="ver_pro">0</span></td>
            <td><span id="ver_gra">0</span></td>
            <td><span id="ver_hc">0</span></td>
            <td><span id="ver_chc">0</span></td>
          </tr>
          <tr>
            <td colspan="2" class="foodType tdWhite">FRUTAS</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="fru_des" value="<?php
                                                                                                        if (isset($paciente->fru_des) && $paciente->fru_des != "") {
                                                                                                          echo $paciente->fru_des;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="fru_col1" value="<?php
                                                                                                          if (isset($paciente->fru_col1) && $paciente->fru_col1 != "") {
                                                                                                            echo $paciente->fru_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="fru_com" value="<?php
                                                                                                        if (isset($paciente->fru_com) && $paciente->fru_com != "") {
                                                                                                          echo $paciente->fru_com;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="fru_col2" value="<?php
                                                                                                          if (isset($paciente->fru_col2) && $paciente->fru_col2 != "") {
                                                                                                            echo $paciente->fru_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="fru_cen" value="<?php
                                                                                                        if (isset($paciente->fru_cen) && $paciente->fru_cen != "") {
                                                                                                          echo $paciente->fru_cen;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><span id="fru_rac">0</span></td>
            <td><span id="fru_ene">0</span></td>
            <td><span id="fru_pro">0</span></td>
            <td><span id="fru_gra">0</span></td>
            <td><span id="fru_hc">0</span></td>
            <td><span id="fru_chc">0</span></td>
          </tr>
          <tr>
            <td rowspan="2" class="foodType tdWhite">CEREALES Y TUBÉRCULOS</td>
            <td class="tdWhite">Sin grasa</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="cer_sg_des" value="<?php
                                                                                                            if (isset($paciente->cer_sg_des) && $paciente->cer_sg_des != "") {
                                                                                                              echo $paciente->cer_sg_des;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="cer_sg_col1" value="<?php
                                                                                                            if (isset($paciente->cer_sg_col1) && $paciente->cer_sg_col1 != "") {
                                                                                                              echo $paciente->cer_sg_col1;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="cer_sg_com" value="<?php
                                                                                                            if (isset($paciente->cer_sg_com) && $paciente->cer_sg_com != "") {
                                                                                                              echo $paciente->cer_sg_com;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="cer_sg_col2" value="<?php
                                                                                                            if (isset($paciente->cer_sg_col2) && $paciente->cer_sg_col2 != "") {
                                                                                                              echo $paciente->cer_sg_col2;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="cer_sg_cen" value="<?php
                                                                                                            if (isset($paciente->cer_sg_cen) && $paciente->cer_sg_cen != "") {
                                                                                                              echo $paciente->cer_sg_cen;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><span id="cer_sg_rac">0</span></td>
            <td><span id="cer_sg_ene">0</span></td>
            <td><span id="cer_sg_pro">0</span></td>
            <td><span id="cer_sg_gra">0</span></td>
            <td><span id="cer_sg_hc">0</span></td>
            <td><span id="cer_sg_chc">0</span></td>
          </tr>
          <tr>
            <td class="tdWhite">Con grasa</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="cer_cg_des" value="<?php
                                                                                                            if (isset($paciente->cer_cg_des) && $paciente->cer_cg_des != "") {
                                                                                                              echo $paciente->cer_cg_des;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="cer_cg_col1" value="<?php
                                                                                                            if (isset($paciente->cer_cg_col1) && $paciente->cer_cg_col1 != "") {
                                                                                                              echo $paciente->cer_cg_col1;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="cer_cg_com" value="<?php
                                                                                                            if (isset($paciente->cer_cg_com) && $paciente->cer_cg_com != "") {
                                                                                                              echo $paciente->cer_cg_com;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="cer_cg_col2" value="<?php
                                                                                                            if (isset($paciente->cer_cg_col2) && $paciente->cer_cg_col2 != "") {
                                                                                                              echo $paciente->cer_cg_col2;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="cer_cg_cen" value="<?php
                                                                                                            if (isset($paciente->cer_cg_cen) && $paciente->cer_cg_cen != "") {
                                                                                                              echo $paciente->cer_cg_cen;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><span id="cer_cg_rac">0</span></td>
            <td><span id="cer_cg_ene">0</span></td>
            <td><span id="cer_cg_pro">0</span></td>
            <td><span id="cer_cg_gra">0</span></td>
            <td><span id="cer_cg_hc">0</span></td>
            <td><span id="cer_cg_chc">0</span></td>
          </tr>
          <tr>
            <td colspan="2" class="foodType tdWhite">LEGUMINOSAS</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="leg_des" value="<?php
                                                                                                        if (isset($paciente->leg_des) && $paciente->leg_des != "") {
                                                                                                          echo $paciente->leg_des;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="leg_col1" value="<?php
                                                                                                          if (isset($paciente->leg_col1) && $paciente->leg_col1 != "") {
                                                                                                            echo $paciente->leg_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="leg_com" value="<?php
                                                                                                        if (isset($paciente->leg_com) && $paciente->leg_com != "") {
                                                                                                          echo $paciente->leg_com;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="leg_col2" value="<?php
                                                                                                          if (isset($paciente->leg_col2) && $paciente->leg_col2 != "") {
                                                                                                            echo $paciente->leg_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="leg_cen" value="<?php
                                                                                                        if (isset($paciente->leg_cen) && $paciente->leg_cen != "") {
                                                                                                          echo $paciente->leg_cen;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><span id="leg_rac">0</span></td>
            <td><span id="leg_ene">0</span></td>
            <td><span id="leg_pro">0</span></td>
            <td><span id="leg_gra">0</span></td>
            <td><span id="leg_hc">0</span></td>
            <td><span id="leg_chc">0</span></td>
          </tr>
          <tr>
            <td rowspan="4" class="foodType tdWhite">ALIMENTOS DE ORÍGEN ANIMAL</td>
            <td class="tdWhite">MBAG</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="mbag_des" value="<?php
                                                                                                          if (isset($paciente->mbag_des) && $paciente->mbag_des != "") {
                                                                                                            echo $paciente->mbag_des;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="mbag_col1" value="<?php
                                                                                                          if (isset($paciente->mbag_col1) && $paciente->mbag_col1 != "") {
                                                                                                            echo $paciente->mbag_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="mbag_com" value="<?php
                                                                                                          if (isset($paciente->mbag_com) && $paciente->mbag_com != "") {
                                                                                                            echo $paciente->mbag_com;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="mbag_col2" value="<?php
                                                                                                          if (isset($paciente->mbag_col2) && $paciente->mbag_col2 != "") {
                                                                                                            echo $paciente->mbag_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="mbag_cen" value="<?php
                                                                                                          if (isset($paciente->mbag_cen) && $paciente->mbag_cen != "") {
                                                                                                            echo $paciente->mbag_cen;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><span id="mbag_rac">0</span></td>
            <td><span id="mbag_ene">0</span></td>
            <td><span id="mbag_pro">0</span></td>
            <td><span id="mbag_gra">0</span></td>
            <td><span id="mbag_hc">0</span></td>
            <td><span id="mbag_chc">0</span></td>
          </tr>
          <tr>
            <td>BAG</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="bag_des" value="<?php
                                                                                                        if (isset($paciente->bag_des) && $paciente->bag_des != "") {
                                                                                                          echo $paciente->bag_des;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="bag_col1" value="<?php
                                                                                                          if (isset($paciente->bag_col1) && $paciente->bag_col1 != "") {
                                                                                                            echo $paciente->bag_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="bag_com" value="<?php
                                                                                                        if (isset($paciente->bag_com) && $paciente->bag_com != "") {
                                                                                                          echo $paciente->bag_com;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="bag_col2" value="<?php
                                                                                                          if (isset($paciente->bag_col2) && $paciente->bag_col2 != "") {
                                                                                                            echo $paciente->bag_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="bag_cen" value="<?php
                                                                                                        if (isset($paciente->bag_cen) && $paciente->bag_cen != "") {
                                                                                                          echo $paciente->bag_cen;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><span id="bag_rac">0</span></td>
            <td><span id="bag_ene">0</span></td>
            <td><span id="bag_pro">0</span></td>
            <td><span id="bag_gra">0</span></td>
            <td><span id="bag_hc">0</span></td>
            <td><span id="bag_chc">0</span></td>
          </tr>
          <tr>
            <td class="tdWhite">MAG</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="mag_des" value="<?php
                                                                                                        if (isset($paciente->mag_des) && $paciente->mag_des != "") {
                                                                                                          echo $paciente->mag_des;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="mag_col1" value="<?php
                                                                                                          if (isset($paciente->mag_col1) && $paciente->mag_col1 != "") {
                                                                                                            echo $paciente->mag_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="mag_com" value="<?php
                                                                                                        if (isset($paciente->mag_com) && $paciente->mag_com != "") {
                                                                                                          echo $paciente->mag_com;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="mag_col2" value="<?php
                                                                                                          if (isset($paciente->mag_col2) && $paciente->mag_col2 != "") {
                                                                                                            echo $paciente->mag_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="mag_cen" value="<?php
                                                                                                        if (isset($paciente->mag_cen) && $paciente->mag_cen != "") {
                                                                                                          echo $paciente->mag_cen;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><span id="mag_rac">0</span></td>
            <td><span id="mag_ene">0</span></td>
            <td><span id="mag_pro">0</span></td>
            <td><span id="mag_gra">0</span></td>
            <td><span id="mag_hc">0</span></td>
            <td><span id="mag_chc">0</span></td>
          </tr>
          <tr>
            <td>AAG</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="aag_des" value="<?php
                                                                                                        if (isset($paciente->aag_des) && $paciente->aag_des != "") {
                                                                                                          echo $paciente->aag_des;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="aag_col1" value="<?php
                                                                                                          if (isset($paciente->aag_col1) && $paciente->aag_col1 != "") {
                                                                                                            echo $paciente->aag_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="aag_com" value="<?php
                                                                                                        if (isset($paciente->aag_com) && $paciente->aag_com != "") {
                                                                                                          echo $paciente->aag_com;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="aag_col2" value="<?php
                                                                                                          if (isset($paciente->aag_col2) && $paciente->aag_col2 != "") {
                                                                                                            echo $paciente->aag_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="aag_cen" value="<?php
                                                                                                        if (isset($paciente->aag_cen) && $paciente->aag_cen != "") {
                                                                                                          echo $paciente->aag_cen;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><span id="aag_rac">0</span></td>
            <td><span id="aag_ene">0</span></td>
            <td><span id="aag_pro">0</span></td>
            <td><span id="aag_gra">0</span></td>
            <td><span id="aag_hc">0</span></td>
            <td><span id="aag_chc">0</span></td>
          </tr>
          <tr>
            <td rowspan="4" class="foodType tdWhite">LECHE</td>
            <td class="tdWhite">Descremada</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ldes_des" value="<?php
                                                                                                          if (isset($paciente->ldes_des) && $paciente->ldes_des != "") {
                                                                                                            echo $paciente->ldes_des;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ldes_col1" value="<?php
                                                                                                          if (isset($paciente->ldes_col1) && $paciente->ldes_col1 != "") {
                                                                                                            echo $paciente->ldes_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ldes_com" value="<?php
                                                                                                          if (isset($paciente->ldes_com) && $paciente->ldes_com != "") {
                                                                                                            echo $paciente->ldes_com;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ldes_col2" value="<?php
                                                                                                          if (isset($paciente->ldes_col2) && $paciente->ldes_col2 != "") {
                                                                                                            echo $paciente->ldes_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ldes_cen" value="<?php
                                                                                                          if (isset($paciente->ldes_cen) && $paciente->ldes_cen != "") {
                                                                                                            echo $paciente->ldes_cen;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><span id="ldes_rac">0</span></td>
            <td><span id="ldes_ene">0</span></td>
            <td><span id="ldes_pro">0</span></td>
            <td><span id="ldes_gra">0</span></td>
            <td><span id="ldes_hc">0</span></td>
            <td><span id="ldes_chc">0</span></td>
          </tr>
          <tr>
            <td>Semidescremada</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lsem_des" value="<?php
                                                                                                          if (isset($paciente->lsem_des) && $paciente->lsem_des != "") {
                                                                                                            echo $paciente->lsem_des;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lsem_col1" value="<?php
                                                                                                          if (isset($paciente->lsem_col1) && $paciente->lsem_col1 != "") {
                                                                                                            echo $paciente->lsem_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lsem_com" value="<?php
                                                                                                          if (isset($paciente->lsem_com) && $paciente->lsem_com != "") {
                                                                                                            echo $paciente->lsem_com;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lsem_col2" value="<?php
                                                                                                          if (isset($paciente->lsem_col2) && $paciente->lsem_col2 != "") {
                                                                                                            echo $paciente->lsem_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lsem_cen" value="<?php
                                                                                                          if (isset($paciente->lsem_cen) && $paciente->lsem_cen != "") {
                                                                                                            echo $paciente->lsem_cen;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><span id="lsem_rac">0</span></td>
            <td><span id="lsem_ene">0</span></td>
            <td><span id="lsem_pro">0</span></td>
            <td><span id="lsem_gra">0</span></td>
            <td><span id="lsem_hc">0</span></td>
            <td><span id="lsem_chc">0</span></td>
          </tr>
          <tr>
            <td class="tdWhite">Entera</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lent_des" value="<?php
                                                                                                          if (isset($paciente->lent_des) && $paciente->lent_des != "") {
                                                                                                            echo $paciente->lent_des;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lent_col1" value="<?php
                                                                                                          if (isset($paciente->lent_col1) && $paciente->lent_col1 != "") {
                                                                                                            echo $paciente->lent_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lent_com" value="<?php
                                                                                                          if (isset($paciente->lent_com) && $paciente->lent_com != "") {
                                                                                                            echo $paciente->lent_com;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lent_col2" value="<?php
                                                                                                          if (isset($paciente->lent_col2) && $paciente->lent_col2 != "") {
                                                                                                            echo $paciente->lent_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lent_cen" value="<?php
                                                                                                          if (isset($paciente->lent_cen) && $paciente->lent_cen != "") {
                                                                                                            echo $paciente->lent_cen;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><span id="lent_rac">0</span></td>
            <td><span id="lent_ene">0</span></td>
            <td><span id="lent_pro">0</span></td>
            <td><span id="lent_gra">0</span></td>
            <td><span id="lent_hc">0</span></td>
            <td><span id="lent_chc">0</span></td>
          </tr>
          <tr>
            <td>Con azúcar</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lcaz_des" value="<?php
                                                                                                          if (isset($paciente->lcaz_des) && $paciente->lcaz_des != "") {
                                                                                                            echo $paciente->lcaz_des;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lcaz_col1" value="<?php
                                                                                                          if (isset($paciente->lcaz_col1) && $paciente->lcaz_col1 != "") {
                                                                                                            echo $paciente->lcaz_col1;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lcaz_com" value="<?php
                                                                                                          if (isset($paciente->lcaz_com) && $paciente->lcaz_com != "") {
                                                                                                            echo $paciente->lcaz_com;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lcaz_col2" value="<?php
                                                                                                          if (isset($paciente->lcaz_col2) && $paciente->lcaz_col2 != "") {
                                                                                                            echo $paciente->lcaz_col2;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="lcaz_cen" value="<?php
                                                                                                          if (isset($paciente->lcaz_cen) && $paciente->lcaz_cen != "") {
                                                                                                            echo $paciente->lcaz_cen;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><span id="lcaz_rac">0</span></td>
            <td><span id="lcaz_ene">0</span></td>
            <td><span id="lcaz_pro">0</span></td>
            <td><span id="lcaz_gra">0</span></td>
            <td><span id="lcaz_hc">0</span></td>
            <td><span id="lcaz_chc">0</span></td>
          </tr>
          <tr>
            <td rowspan="2" class="foodType tdWhite">ACEITES Y GRASAS</td>
            <td class="tdWhite">Con proteína</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ag_sp_des" value="<?php
                                                                                                          if (isset($paciente->ag_sp_des) && $paciente->ag_sp_des != "") {
                                                                                                            echo $paciente->ag_sp_des;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ag_sp_col1" value="<?php
                                                                                                            if (isset($paciente->ag_sp_col1) && $paciente->ag_sp_col1 != "") {
                                                                                                              echo $paciente->ag_sp_col1;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ag_sp_com" value="<?php
                                                                                                          if (isset($paciente->ag_sp_com) && $paciente->ag_sp_com != "") {
                                                                                                            echo $paciente->ag_sp_com;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ag_sp_col2" value="<?php
                                                                                                            if (isset($paciente->ag_sp_col2) && $paciente->ag_sp_col2 != "") {
                                                                                                              echo $paciente->ag_sp_col2;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ag_sp_cen" value="<?php
                                                                                                          if (isset($paciente->ag_sp_cen) && $paciente->ag_sp_cen != "") {
                                                                                                            echo $paciente->ag_sp_cen;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><span id="ag_sp_rac">0</span></td>
            <td><span id="ag_sp_ene">0</span></td>
            <td><span id="ag_sp_pro">0</span></td>
            <td><span id="ag_sp_gra">0</span></td>
            <td><span id="ag_sp_hc">0</span></td>
            <td><span id="ag_sp_chc">0</span></td>
          </tr>
          <tr>
            <td class="tdWhite">Sin proteína</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ag_cp_des" value="<?php
                                                                                                          if (isset($paciente->ag_cp_des) && $paciente->ag_cp_des != "") {
                                                                                                            echo $paciente->ag_cp_des;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ag_cp_col1" value="<?php
                                                                                                            if (isset($paciente->ag_cp_col1) && $paciente->ag_cp_col1 != "") {
                                                                                                              echo $paciente->ag_cp_col1;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ag_cp_com" value="<?php
                                                                                                          if (isset($paciente->ag_cp_com) && $paciente->ag_cp_com != "") {
                                                                                                            echo $paciente->ag_cp_com;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ag_cp_col2" value="<?php
                                                                                                            if (isset($paciente->ag_cp_col2) && $paciente->ag_cp_col2 != "") {
                                                                                                              echo $paciente->ag_cp_col2;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ag_cp_cen" value="<?php
                                                                                                          if (isset($paciente->ag_cp_cen) && $paciente->ag_cp_cen != "") {
                                                                                                            echo $paciente->ag_cp_cen;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><span id="ag_cp_rac">0</span></td>
            <td><span id="ag_cp_ene">0</span></td>
            <td><span id="ag_cp_pro">0</span></td>
            <td><span id="ag_cp_gra">0</span></td>
            <td><span id="ag_cp_hc">0</span></td>
            <td><span id="ag_cp_chc">0</span></td>
          </tr>
          <tr>
            <td rowspan="2" class="foodType tdWhite">AZÚCARES</td>
            <td class="tdWhite">Sin grasa</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="az_sg_des" value="<?php
                                                                                                          if (isset($paciente->az_sg_des) && $paciente->az_sg_des != "") {
                                                                                                            echo $paciente->az_sg_des;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="az_sg_col1" value="<?php
                                                                                                            if (isset($paciente->az_sg_col1) && $paciente->az_sg_col1 != "") {
                                                                                                              echo $paciente->az_sg_col1;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="az_sg_com" value="<?php
                                                                                                          if (isset($paciente->az_sg_com) && $paciente->az_sg_com != "") {
                                                                                                            echo $paciente->az_sg_com;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="az_sg_col2" value="<?php
                                                                                                            if (isset($paciente->az_sg_col2) && $paciente->az_sg_col2 != "") {
                                                                                                              echo $paciente->az_sg_col2;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="az_sg_cen" value="<?php
                                                                                                          if (isset($paciente->az_sg_cen) && $paciente->az_sg_cen != "") {
                                                                                                            echo $paciente->az_sg_cen;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><span id="az_sg_rac">0</span></td>
            <td><span id="az_sg_ene">0</span></td>
            <td><span id="az_sg_pro">0</span></td>
            <td><span id="az_sg_gra">0</span></td>
            <td><span id="az_sg_hc">0</span></td>
            <td><span id="az_sg_chc">0</span></td>
          </tr>
          <tr>
            <td>Con grasa</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="az_cg_des" value="<?php
                                                                                                          if (isset($paciente->az_cg_des) && $paciente->az_cg_des != "") {
                                                                                                            echo $paciente->az_cg_des;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="az_cg_col1" value="<?php
                                                                                                            if (isset($paciente->az_cg_col1) && $paciente->az_cg_col1 != "") {
                                                                                                              echo $paciente->az_cg_col1;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="az_cg_com" value="<?php
                                                                                                          if (isset($paciente->az_cg_com) && $paciente->az_cg_com != "") {
                                                                                                            echo $paciente->az_cg_com;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="az_cg_col2" value="<?php
                                                                                                            if (isset($paciente->az_cg_col2) && $paciente->az_cg_col2 != "") {
                                                                                                              echo $paciente->az_cg_col2;
                                                                                                            } else {
                                                                                                              echo "0";
                                                                                                            }
                                                                                                            ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="az_cg_cen" value="<?php
                                                                                                          if (isset($paciente->az_cg_cen) && $paciente->az_cg_cen != "") {
                                                                                                            echo $paciente->az_cg_cen;
                                                                                                          } else {
                                                                                                            echo "0";
                                                                                                          }
                                                                                                          ?>"></td>
            <td><span id="az_cg_rac">0</span></td>
            <td><span id="az_cg_ene">0</span></td>
            <td><span id="az_cg_pro">0</span></td>
            <td><span id="az_cg_gra">0</span></td>
            <td><span id="az_cg_hc">0</span></td>
            <td><span id="az_cg_chc">0</span></td>
          </tr>
          <tr>
            <td colspan="2" class="foodType tdWhite">BEBIDAS ALCOHÓLICAS</td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ba_des" value="<?php
                                                                                                        if (isset($paciente->ba_des) && $paciente->ba_des != "") {
                                                                                                          echo $paciente->ba_des;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ba_col1" value="<?php
                                                                                                        if (isset($paciente->ba_col1) && $paciente->ba_col1 != "") {
                                                                                                          echo $paciente->ba_col1;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ba_com" value="<?php
                                                                                                        if (isset($paciente->ba_com) && $paciente->ba_com != "") {
                                                                                                          echo $paciente->ba_com;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ba_col2" value="<?php
                                                                                                        if (isset($paciente->ba_col2) && $paciente->ba_col2 != "") {
                                                                                                          echo $paciente->ba_col2;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><input type="number" onkeyup="hacerCalculosUnico()" placeholder="·" id="ba_cen" value="<?php
                                                                                                        if (isset($paciente->ba_cen) && $paciente->ba_cen != "") {
                                                                                                          echo $paciente->ba_cen;
                                                                                                        } else {
                                                                                                          echo "0";
                                                                                                        }
                                                                                                        ?>"></td>
            <td><span id="ba_rac">0</span></td>
            <td><span id="ba_ene">0</span></td>
            <td><span id="ba_pro">0</span></td>
            <td><span id="ba_gra">0</span></td>
            <td><span id="ba_hc">0</span></td>
            <td><span id="ba_chc">0</span></td>
          </tr>
        </tbody>
        <tfoot>
          <tr class="totalCalculus totalA">
            <td rowspan="2" colspan="5" class="foodType tdWhite">TOTALES</td>
            <td colspan="3" class="tdWhite">G.</td>
            <td><span id="totalEnergia">0</span></td>
            <td><span id="totalProteina">0</span></td>
            <td><span id="totalGrasa">0</span></td>
            <td><span id="totalHC">0</span></td>
            <td><span id="totalCHC">0</span></td>
          </tr>
          <tr class="totalCalculus totalB">
            <td colspan="3" class="tdWhite">Kcal.</td>
            <td><span id="totalTEnergia">0</span></td>
            <td><span id="totalTProteina">0</span></td>
            <td><span id="totalTGrasa">0</span></td>
            <td><span id="totalTHC">0</span></td>
            <td></td>
          </tr>
        </tfoot>
      </table>
      <script>
        $(document).ready(function() {
          $('#dietDiary').DataTable({
            "ordering": false,
            "searchable": false,
            "paging": "false",
            stateSave: false,
            "scrollX": true,
          });
        });
      </script>
    </section>
  </div>
</div>