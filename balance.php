<?php
$title = "Balance";
include_once 'header.php';


include_once 'APIController.php';
include_once 'utilerias.php';

$utilerias= new Utilerias();
$api = new APIController();


if (isset($_POST['fechaIni'])) {
  $fechaIni = $_POST['fechaIni'];
  $pos = strpos($fechaIni, "/");
  if ($pos) {
    $fechaIni = substr($fechaIni, 6, 4) . "-" . substr($fechaIni, 3, 2) . "-" . substr($fechaIni, 0, 2);
  }
} else {
  $fechaIni = date('Y-m-d', strtotime(date('Y-m-d') . ' - 7 days'));
}

if (isset($_POST['fechaFin'])) {
  $fechaFin = $_POST['fechaFin'];
  $pos = strpos($fechaFin, "/");
  if ($pos) {
    $fechaFin = substr($fechaFin, 6, 4) . "-" . substr($fechaFin, 3, 2) . "-" . substr($fechaFin, 0, 2);
  }
} else {
  $fechaFin = date('Y-m-d');
}


$fechaIniTexto =date('d',strtotime($fechaIni)).
"/".$utilerias->traerNombreMes(date('m',strtotime($fechaIni)),false).
"/".date('Y',strtotime($fechaIni));
$fechaFinTexto = date('d',strtotime($fechaFin)).
"/".$utilerias->traerNombreMes(date('m',strtotime($fechaFin)),false).
"/".date('Y',strtotime($fechaFin));





$resultado = json_decode($api->consultaBalanceNutriologo($_SESSION['idUsuario'], $fechaIni, $fechaFin));


$totalIngresos = 0;
$totalEgresos = 0;
$cantidadEgresos = 0;
$cantidadIngresos = 0;
$ingresos = array();
$egresos = array();
foreach ($resultado->results as $bal) {

  if ($bal->type == "income") {
    $totalIngresos = $totalIngresos + $bal->amount;
    $cantidadIngresos++;
    $registro_item = array(
      "monto" => $bal->amount

    );

    array_push($ingresos, $registro_item);
  } else {
    $totalEgresos = $totalEgresos + $bal->amount;
    $cantidadEgresos++;
    $registro_item = array(
      "monto" => $bal->amount

    );

    array_push($egresos, $registro_item);
  }
}

if ($cantidadEgresos >= $cantidadIngresos) {
  $numeros = $cantidadEgresos;
} else {
  $numeros = $cantidadIngresos;
}

$labels = "";
$ingresoslbl = "";
$egresoslbl = "";
$cont = 0;
for ($i = 1; $i <= $numeros+1; $i++) {
  if ($cont == 0) {
    $labels = $labels . $i;

    if(isset($egresos[$i-1]))
    {
      $egresoslbl = $egresoslbl . $egresos[$i-1]['monto']; 
    }

    if(isset($ingresos[$i-1]))
    {
      $ingresoslbl = $ingresoslbl . $ingresos[$i-1]['monto']; 
    }


  } else {
    $labels =  $labels .",". $i;

    if(isset($egresos[$i-1]))
    {
      $egresoslbl = $egresoslbl .",". $egresos[$i-1]['monto']; 
    }

    if(isset($ingresos[$i-1]))
    {
      $ingresoslbl =  $ingresoslbl .",". $ingresos[$i-1]['monto']; 
    }
  }

  $cont++;
}

$labels ="[". $labels . "]";
$ingresoslbl ="[". $ingresoslbl . "]";
$egresoslbl ="[". $egresoslbl . "]";


?>
<!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  CHART  -->


<div class="wrap_admin balance">
  <div class="col col-5 borderR">
    <form id="formFechas" method="POST" action="balance.php">
      <div class="w_cols wrap_range">
        <section class="col-5 borderR">
          <input name="fechaIni"  id="fechaIni" type="text" class="datepicker" value="<?php echo $fechaIni ?>" placeholder="inicio">
        </section>
        <section class="col-5">
          <input name="fechaFin" id="fechaFin" type="text" class="datepicker" value="<?php echo $fechaFin ?>" placeholder="fin">
        </section>
      </div>
    </form>
    <section class="borderT">
      <h2>Análisis</h2>
      <div class="module modInf graph">
        <canvas id="myChart" style="width:100%; height:400px"></canvas>
        <script>
          var ctx = document.getElementById('myChart').getContext('2d');
          var incomes = 'rgba(68, 211, 98,1)';
          var outcomes = 'rgba(250, 102, 102,1)';
          var myChart = new Chart(ctx, {
            responsive: true,
            maintainAspectRatio: true,
            type: 'line',
            defaultFontSize: 10,
            defaultFontFamily: "'Lato', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
            data: {
              labels: <?php echo $labels ?>,
              datasets: [{
                  data: <?php echo $ingresoslbl ?>,
                  backgroundColor: ['rgba(68, 211, 98,0.2)'],
                  borderColor: incomes,
                },
                {
                  data: <?php echo $egresoslbl ?>,
                  backgroundColor: ['rgba(250, 102, 102,0.2)'],
                  borderColor: outcomes,
                }
              ]
            },
            options: {
              elements: {
                line: {
                  borderWidth: 1,
                  tension: 0.4
                },
                point: {
                  hitRadius: 9,
                  backgroundColor: 'rgba(255,255,255,0)',
                  hoverBorderWidth: 2
                }
              },
              legend: {
                display: false,
              },
              tooltips: {
                mode: 'index',
                backgroundColor: '#52636d',
                titleFontColor: 'rgba(255,255,255,0.8)',
                xPadding: 8,
                yPadding: 8,
                caretSize: 8,
                multiKeyBackground: 'rgba(255,255,255,0)',
                bodySpacing: 5,
                titleFontFamily: "'ClarikaGeo', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                titleFontSize: 14,
                titleMarginBottom: 10,
                bodyFontFamily: "'Lato', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif"
              },
              scales: {
                yAxes: [{
                  gridLines: {
                    color: '#EFEFEF',
                    zeroLineWidth: 1,
                    zeroLineColor: '#52636d',
                    offsetGridLines: false
                  },
                  ticks: {
                    fontColor: '#a8aaaa',
                    fontSize: 11,
                    drawOnChartArea: false,
                    drawTicks: false,
                    fontFamily: "'Lato', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif"
                  }
                }],
                xAxes: [{
                  gridLines: {
                    color: '#EFEFEF',
                    zeroLineWidth: 4,
                    zeroLineColor: '#52636d',
                    borderDash: [4, 8],
                    offsetGridLines: false
                  },
                  ticks: {
                    fontColor: '#a8aaaa',
                    fontSize: 10,
                    drawOnChartArea: false,
                    drawTicks: false,
                    fontFamily: "'Lato', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                    padding: 8
                  }
                }],
              }
            }
          });
        </script>
      </div>
    </section>
  </div>

  <div class="col col-5 right in_out">
    <section class="balanceAcot center">
      <p>Balance total:<br><span id="fechasBalance"><?php echo $fechaIniTexto . " - " . $fechaFinTexto; ?></span> </p>
    </section>
    <section>
      <div class="module modAx incomes tablinks" onclick="openType(event, 'Income')" id="defaultOpen">
        <div class="center-x center">
          <h5>ingresos</h5>
          <span id="totalIngresos" class="cant">$<?php echo number_format($totalIngresos, 2, '.', ','); ?></span>
        </div>
      </div>
      <div class="module modAx outcomes right tablinks" onclick="openType(event, 'Outcome')">
        <div class="center-x center">
          <h5>egresos</h5>
          <span id="totalEgresos" class="cant">$<?php echo number_format($totalEgresos, 2, '.', ','); ?></span>
        </div>
      </div>
      <div id="Income" class="tabcontent module in_table">
        <table id="tablaIngresos">
          <tbody id="tbodyIngresos">
          <?php foreach ($resultado->results as $bal) {
            if ($bal->type == "income") {
          ?>
              <tr>
                <td><?php echo $bal->concept ?></td>
                <td><?php echo number_format($bal->amount, 2, '.', ','); ?></td>
              </tr>
          <?php }
          } ?>
          </tbody>
        </table>
      </div>
      <div id="Outcome" class="tabcontent module out_table">
        <table id="tablaEgresos">
          <tbody id="tbodyEgresos">
          <?php foreach ($resultado->results as $bal) {
            if ($bal->type == "outcome") {
          ?>
              <tr>
                <td><?php echo $bal->concept ?></td>
                <td><?php echo number_format($bal->amount, 2, '.', ','); ?></td>
              </tr>
          <?php }
          } ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  <div class="btn newBalance center-x center plus"></div>
</div>

<script>
  document.getElementById("defaultOpen").click();
</script>

<?php include_once 'footer.php'; ?>