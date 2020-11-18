<?php
  $title = "Patients";
  include_once 'header.php';
  
  
include_once 'APIController.php';


$api=new APIController();


$resultado = json_decode($api->consultaPacientesNutriologo($_SESSION['idUsuario']));
$pacientes=$resultado->results;
?>
<div class="wrap_admin">
  <section class="patients col">
    <div class="btn plus btn_newPatient"></div>
    <table id="patients" class="display" style="width:100%">
        <thead>
            <tr>
            <th>Paciente</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Siguiente Cita</th>
                <th>Pagos</th>
            </tr>
        </thead>
        <tbody>
        <?php  foreach($pacientes as $pac){
          
          $resCit = json_decode($api->consultaCitasPaciente($pac->objectId, date('Y-m-d'), ""));
          if(isset($resCit->results[0]))
          {
            $fechaCita= date('d/m/Y',strtotime($resCit->results[0]->date->iso));
          }
          else{
            $fechaCita="Sin Cita";
          }
          ?>
          
          <tr id="<?php echo $pac->objectId; ?>">
              <td><?php echo $pac->name." ".$pac->lastName; ?></td>
              <td><?php echo $pac->age ?></td>
              <td><?php echo $pac->email ?></td>
              <td><?php echo $pac->phone ?></td>
             
              
              <td><?php echo $fechaCita; ?></td>
              <td class="green">●</td>
          </tr>
          <?php } ?>
           
            
        </tbody>
    </table>
  </section>
  <script>
    $(document).ready(function() {
      $('#patients').DataTable( {
        "order": [[ 0, "asc" ]],
        "dom": '<f<t>ip>',
        stateSave: true,
        "scrollY":  "calc(100vh - 220px)",
        "scrollCollapse": true,
        "pagingType": "simple",
        "language": {
          "lengthMenu": "_MENU_",
          "zeroRecords": "SIN RESULTADOS",
          "info": "página _PAGE_ — _PAGES_",
          "infoEmpty": "0",
          "infoFiltered": "/ _MAX_ registros"
        }
      });
    });
  </script>
  <?php include_once 'newPatient.php';?>
</div>
<?php include_once 'footer.php';?>
