<div class="col jump_controls">
  <div class="wrap_measure w_cols">
    <section class="col-3 topMeasures borderR borderB">
      <div class="center-x center">
        <div class="numGraphic">
          <h5>talla</h5>
          <span id="tallaP" class="cant"></span>
        </div>
        <div class="numGraphic">
          <h5>peso</h5>
          <span id="pesoP" class="cant"></span>
        </div>
        <div class="numGraphic">
          <h5>IMC</h5>
          <span id="imcP" class="cant"></span>
        </div>
        <span class="center-x icon more measuresModal"></span>
      </div>
    </section>

    <section class="col-7 borderB">
      <div class="wrap_mealTime center-x center noMargin">
        <span>
          <label>Desayuno</label>
          <input type="text" id="cdh_desayuno_hr" placeholder="24h" class="inputTime">
        </span>
        <span>
          <label>Colación 1</label>
          <input type="text" id="cdh_colacion1_hr" placeholder="24h" class="inputTime">
        </span>
        <span>
          <label>Comida</label>
          <input type="text" id="cdh_comida_hr" placeholder="24h" class="inputTime">
        </span>
        <span>
          <label>Colación 2</label>
          <input type="text" id="cdh_colacion2_hr" placeholder="24h" class="inputTime">
        </span>
        <span>
          <label>Cena</label>
          <input type="text" id="cdh_cena_hr" placeholder="24h" class="inputTime">
        </span>
      </div>
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
    </section>
    <section class="wrap_balanceDate borderL borderB">
      <div class="switcher switcher2 center-x center">
        <input type="radio" name="radioBalance" value="paid" id="paid" class="swInput swInput1" checked="checked">
        <label for="paid" class="swLabel swIncome"></label>
        <input type="radio" name="radioBalance" value="debt" id="debt" class="swInput swInput2">
        <label for="debt" class="swLabel swOutcome"></label>
        <span class="swToggle"></span>
      </div>
    </section>
    <section class="wrap_notsDateModal borderL borderB">
      <span class="center-x center icon notsDateModal"></span>
    </section>
  </div>

  <section class="calculus">
    <table id="calculus" class="display" style="width:100%;">
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
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cver_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cver_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cver_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cver_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cver_cen"></td>
          <td><span id="cver_rac">0</span></td>
          <td><span id="cver_ene">0</span></td>
          <td><span id="cver_pro">0</span></td>
          <td><span id="cver_gra">0</span></td>
          <td><span id="cver_hc">0</span></td>
          <td><span id="cver_chc">0</span></td>
        </tr>
        <tr>
          <td colspan="2" class="foodType tdWhite">FRUTAS</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cfru_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cfru_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cfru_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cfru_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cfru_cen"></td>
          <td><span id="cfru_rac">0</span></td>
          <td><span id="cfru_ene">0</span></td>
          <td><span id="cfru_pro">0</span></td>
          <td><span id="cfru_gra">0</span></td>
          <td><span id="cfru_hc">0</span></td>
          <td><span id="cfru_chc">0</span></td>
        </tr>
        <tr>
          <td rowspan="2" class="foodType tdWhite">CEREALES Y TUBÉRCULOS</td>
          <td class="tdWhite">Sin grasa</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="ccer_sg_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="ccer_sg_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="ccer_sg_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="ccer_sg_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="ccer_sg_cen"></td>
          <td><span id="ccer_sg_rac">0</span></td>
          <td><span id="ccer_sg_ene">0</span></td>
          <td><span id="ccer_sg_pro">0</span></td>
          <td><span id="ccer_sg_gra">0</span></td>
          <td><span id="ccer_sg_hc">0</span></td>
          <td><span id="ccer_sg_chc">0</span></td>
        </tr>
        <tr>
          <td class="tdWhite">Con grasa</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="ccer_cg_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="ccer_cg_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="ccer_cg_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="ccer_cg_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="ccer_cg_cen"></td>
          <td><span id="ccer_cg_rac">0</span></td>
          <td><span id="ccer_cg_ene">0</span></td>
          <td><span id="ccer_cg_pro">0</span></td>
          <td><span id="ccer_cg_gra">0</span></td>
          <td><span id="ccer_cg_hc">0</span></td>
          <td><span id="ccer_cg_chc">0</span></td>
        </tr>
        <tr>
          <td colspan="2" class="foodType tdWhite">LEGUMINOSAS</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cleg_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cleg_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cleg_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cleg_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cleg_cen"></td>
          <td><span id="cleg_rac">0</span></td>
          <td><span id="cleg_ene">0</span></td>
          <td><span id="cleg_pro">0</span></td>
          <td><span id="cleg_gra">0</span></td>
          <td><span id="cleg_hc">0</span></td>
          <td><span id="cleg_chc">0</span></td>
        </tr>
        <tr>
          <td rowspan="4" class="foodType tdWhite">ALIMENTOS DE ORÍGEN ANIMAL</td>
          <td class="tdWhite">MBAG</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cmbag_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cmbag_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cmbag_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cmbag_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cmbag_cen"></td>
          <td><span id="cmbag_rac">0</span></td>
          <td><span id="cmbag_ene">0</span></td>
          <td><span id="cmbag_pro">0</span></td>
          <td><span id="cmbag_gra">0</span></td>
          <td><span id="cmbag_hc">0</span></td>
          <td><span id="cmbag_chc">0</span></td>
        </tr>
        <tr>
          <td>BAG</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cbag_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cbag_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cbag_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cbag_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cbag_cen"></td>
          <td><span id="cbag_rac">0</span></td>
          <td><span id="cbag_ene">0</span></td>
          <td><span id="cbag_pro">0</span></td>
          <td><span id="cbag_gra">0</span></td>
          <td><span id="cbag_hc">0</span></td>
          <td><span id="cbag_chc">0</span></td>
        </tr>
        <tr>
          <td class="tdWhite">MAG</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cmag_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cmag_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cmag_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cmag_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cmag_cen"></td>
          <td><span id="cmag_rac">0</span></td>
          <td><span id="cmag_ene">0</span></td>
          <td><span id="cmag_pro">0</span></td>
          <td><span id="cmag_gra">0</span></td>
          <td><span id="cmag_hc">0</span></td>
          <td><span id="cmag_chc">0</span></td>
        </tr>
        <tr>
          <td>AAG</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caag_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caag_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caag_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caag_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caag_cen"></td>
          <td><span id="caag_rac">0</span></td>
          <td><span id="caag_ene">0</span></td>
          <td><span id="caag_pro">0</span></td>
          <td><span id="caag_gra">0</span></td>
          <td><span id="caag_hc">0</span></td>
          <td><span id="caag_chc">0</span></td>
        </tr>
        <tr>
          <td rowspan="4" class="foodType tdWhite">LECHE</td>
          <td class="tdWhite">Descremada</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cldes_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cldes_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cldes_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cldes_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cldes_cen"></td>
          <td><span id="cldes_rac">0</span></td>
          <td><span id="cldes_ene">0</span></td>
          <td><span id="cldes_pro">0</span></td>
          <td><span id="cldes_gra">0</span></td>
          <td><span id="cldes_hc">0</span></td>
          <td><span id="cldes_chc">0</span></td>
        </tr>
        <tr>
          <td>Semidescremada</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clsem_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clsem_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clsem_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clsem_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clsem_cen"></td>
          <td><span id="clsem_rac">0</span></td>
          <td><span id="clsem_ene">0</span></td>
          <td><span id="clsem_pro">0</span></td>
          <td><span id="clsem_gra">0</span></td>
          <td><span id="clsem_hc">0</span></td>
          <td><span id="clsem_chc">0</span></td>
        </tr>
        <tr>
          <td class="tdWhite">Entera</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clent_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clent_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clent_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clent_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clent_cen"></td>
          <td><span id="clent_rac">0</span></td>
          <td><span id="clent_ene">0</span></td>
          <td><span id="clent_pro">0</span></td>
          <td><span id="clent_gra">0</span></td>
          <td><span id="clent_hc">0</span></td>
          <td><span id="clent_chc">0</span></td>
        </tr>
        <tr>
          <td>Con azúcar</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clcaz_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clcaz_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clcaz_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clcaz_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="clcaz_cen"></td>
          <td><span id="clcaz_rac">0</span></td>
          <td><span id="clcaz_ene">0</span></td>
          <td><span id="clcaz_pro">0</span></td>
          <td><span id="clcaz_gra">0</span></td>
          <td><span id="clcaz_hc">0</span></td>
          <td><span id="clcaz_chc">0</span></td>
        </tr>
        <tr>
          <td rowspan="2" class="foodType tdWhite">ACEITES Y GRASAS</td>
          <td class="tdWhite">Sin proteína</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cag_sp_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cag_sp_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cag_sp_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cag_sp_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cag_sp_cen"></td>
          <td><span id="cag_sp_rac">0</span></td>
          <td><span id="cag_sp_ene">0</span></td>
          <td><span id="cag_sp_pro">0</span></td>
          <td><span id="cag_sp_gra">0</span></td>
          <td><span id="cag_sp_hc">0</span></td>
          <td><span id="cag_sp_chc">0</span></td>
        </tr>
        <tr>
          <td class="tdWhite">Con proteína</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cag_cp_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cag_cp_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cag_cp_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cag_cp_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cag_cp_cen"></td>
          <td><span id="cag_cp_rac">0</span></td>
          <td><span id="cag_cp_ene">0</span></td>
          <td><span id="cag_cp_pro">0</span></td>
          <td><span id="cag_cp_gra">0</span></td>
          <td><span id="cag_cp_hc">0</span></td>
          <td><span id="cag_cp_chc">0</span></td>
        </tr>
        <tr>
          <td rowspan="2" class="foodType tdWhite">AZÚCARES</td>
          <td class="tdWhite">Sin grasa</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caz_sg_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caz_sg_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caz_sg_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caz_sg_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caz_sg_cen"></td>
          <td><span id="caz_sg_rac">0</span></td>
          <td><span id="caz_sg_ene">0</span></td>
          <td><span id="caz_sg_pro">0</span></td>
          <td><span id="caz_sg_gra">0</span></td>
          <td><span id="caz_sg_hc">0</span></td>
          <td><span id="caz_sg_chc">0</span></td>
        </tr>
        <tr>
          <td>Con grasa</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caz_cg_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caz_cg_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caz_cg_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caz_cg_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="caz_cg_cen"></td>
          <td><span id="caz_cg_rac">0</span></td>
          <td><span id="caz_cg_ene">0</span></td>
          <td><span id="caz_cg_pro">0</span></td>
          <td><span id="caz_cg_gra">0</span></td>
          <td><span id="caz_cg_hc">0</span></td>
          <td><span id="caz_cg_chc">0</span></td>
        </tr>
        <tr>
          <td colspan="2" class="foodType tdWhite">BEBIDAS ALCOHÓLICAS</td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cba_des"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cba_col1"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cba_com"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cba_col2"></td>
          <td><input onkeyup="hacerCalculos()" type="number" placeholder="·" id="cba_cen"></td>
          <td><span id="cba_rac">0</span></td>
          <td><span id="cba_ene">0</span></td>
          <td><span id="cba_pro">0</span></td>
          <td><span id="cba_gra">0</span></td>
          <td><span id="cba_hc">0</span></td>
          <td><span id="cba_chc">0</span></td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="totalCalculus totalA">
          <td rowspan="2" colspan="5" class="foodType tdWhite">TOTALES</td>
          <td colspan="3" class="tdWhite">G.</td>
          <td><span id="ctotalEnergia">0</span></td>
          <td><span id="ctotalProteina">0</span></td>
          <td><span id="ctotalGrasa">0</span></td>
          <td><span id="ctotalHC">0</span></td>
          <td><span id="ctotalCHC">0</span></td>
        </tr>
        <tr class="totalCalculus totalB">
          <td colspan="3" class="tdWhite">Kcal.</td>
          <td><span id="ctotalTEnergia">0</span></td>
          <td><span id="ctotalTProteina">0</span></td>
          <td><span id="ctotalTGrasa">0</span></td>
          <td><span id="ctotalTHC">0</span></td>
          <td></td>
        </tr>
        <tr class="totalCalculus totalC">
          <td colspan="8" class="foodType tdWhite">%ADECUACIÓN</td>
          <td>0%</td>
          <td>0%</td>
          <td>0%</td>
          <td>0%</td>
          <td></td>
        </tr>
      </tfoot>
    </table>
    <script>
      $(document).ready(function() {
        $('#calculus').DataTable({
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