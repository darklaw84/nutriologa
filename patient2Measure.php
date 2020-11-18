<div class="col jump_controls">
  <div class="wrap_measure w_cols">
    <section class="col-3 topMeasures borderR borderB">
      <h5 class="center-x center measuresModal">INGRESAR MEDIBLES</h5>
    </section>

    <section class="col-7 borderB">
      <div class="wrap_mealTime center-x center noMargin">
        <span>
          <label>Desayuno</label>
          <input type="text" placeholder="24h" class="inputTime">
        </span>
        <span>
          <label>Colación 1</label>
          <input type="text" placeholder="24h" class="inputTime">
        </span>
        <span>
          <label>Comida</label>
          <input type="text" placeholder="24h" class="inputTime">
        </span>
        <span>
          <label>Colación 2</label>
          <input type="text" placeholder="24h" class="inputTime">
        </span>
        <span>
          <label>Cena</label>
          <input type="text" placeholder="24h" class="inputTime">
        </span>
      </div>
      <script src="js/jquery.plugin.js"></script>
      <script src="js/jquery.timeentry.js"></script>
      <script>
        $(function () {
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
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td colspan="2" class="foodType tdWhite">FRUTAS</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td rowspan="2" class="foodType tdWhite">CEREALES Y TUBÉRCULOS</td>
          <td class="tdWhite">Sin grasa</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td class="tdWhite">Con grasa</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td colspan="2" class="foodType tdWhite">LEGUMINOSAS</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td rowspan="4" class="foodType tdWhite">ALIMENTOS DE ORÍGEN ANIMAL</td>
          <td class="tdWhite">MBAG</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td>BAG</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td class="tdWhite">MAG</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td>AAG</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td rowspan="4" class="foodType tdWhite">LECHE</td>
          <td class="tdWhite">Descremada</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td>Semidescremada</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td class="tdWhite">Entera</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td>Con azúcar</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td rowspan="2" class="foodType tdWhite">AZÚCARES</td>
          <td class="tdWhite">Sin grasa</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td>Con grasa</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td colspan="2" class="foodType tdWhite">BEBIDAS ALCOHÓLICAS</td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td><input type="number" placeholder="·"></td>
          <td>·</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="totalCalculus totalA">
          <td rowspan="2" colspan="5" class="foodType tdWhite">TOTALES</td>
          <td colspan="3" class="tdWhite" style="background: white !important">G.</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
        </tr>
        <tr class="totalCalculus totalB">
          <td colspan="3" class="tdWhite" style="background: white !important">Kcal.</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td></td>
        </tr>
        <tr class="totalCalculus totalC">
          <td colspan="8" class="foodType tdWhite" style="background: white !important">%ADECUACIÓN</td>
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
        $('#calculus').DataTable( {
          "ordering": false,
          "searchable": false,
          "paging": "false",
          stateSave: false,
          "scrollX":  true,
        });
      });
    </script>
  </section>
</div>
