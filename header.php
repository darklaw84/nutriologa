<?php
session_start();

if (!isset($_SESSION['usuario'])) {

    echo "<script>window.setTimeout(function() { window.location = 'login.php' }, 10);</script>";
} else {
    if ($_SESSION['usuario'] == "") {
        echo "<script>window.setTimeout(function() { window.location = 'login.php' }, 10);</script>";
    }
}


include_once 'APIController.php';


$api = new APIController();


$resultado = json_decode($api->consultaUsuario($_SESSION['idUsuario']));
$usuario = $resultado->results[0];

$nombre=$usuario->name;
$apellido=$usuario->lastName;

?>
<!DOCTYPE html>
<html lang="es,en-US">
  <head>
    <meta charset="utf-8">
    <title><?php echo 'unno | '; echo $title; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="NVN">
    <meta name="robots" content="index,follow">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  CSS  -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <!--[if lt IE 9]><link href='css/fonts.css' rel='stylesheet' type='text/css'><![endif]-->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.css">
    <link rel="stylesheet" type="text/css" href="css/calendarModal.css">
    <link rel="stylesheet" type="text/css" href='lib/main.css'>

    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script type="text/javascript" src="js/medibles.js"></script>
    <script type="text/javascript" src="js/datosCita.js"></script>
    <script type="text/javascript" src="js/notificaciones.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/pacientes.js"></script>
    <script type="text/javascript" src="js/citas.js"></script>
    <script type="text/javascript" src="js/chart.js"></script>
    <script type="text/javascript" src="js/nutriologo.js"></script>
    <script type="text/javascript" src="js/balances.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>

    <!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  LOADER ANIMATION  -->
    <script>
      $(window).load(function() {
       $("#loader").fadeOut("slow");
     });
    </script>

    <!---–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––  ANALYTICS  -->

  </head>
  <body ontouchstart>
    <div class="no_mobile">
      <span><h4>acceso restringido para computadora y tableta</h4></span>
    </div>
  	<div id="loader">
      <span id="loader_logo"></span>
    </div>
    <div class="wrap_header">
      <header>
        	<a href="index.php" target="_self"><div class="logo"></div></a>
        <?php
          $name_section = $_SERVER['PHP_SELF'];
          $name_array = explode('/',$name_section);
          $count = count($name_array);
          $page_name = $name_array[$count-1];
        ?>
        <div class="options">
          <a class="<?php echo ($page_name == 'index.php')?'selected':'';?>" href="index.php" target="_self"><span class="icon_home"></span></a>
          <a class="<?php echo ($page_name == 'patients.php')?'selected':'';?>" href="patients.php" target="_self"><span class="icon_patients"></span></a>
          <a class="<?php echo ($page_name == 'dates.php')?'selected':'';?>" href="dates.php" target="_self"><span class="icon_calendar"></span></a>
          <a class="<?php echo ($page_name == 'balance.php')?'selected':'';?>" href="balance.php" target="_self"><span class="icon_balance"></span></a>
          <a class="<?php echo ($page_name == 'profile.php')?'selected':'';?>" href="profile.php" target="_self"><span class="icon_profile"><?php if(isset($nombre)){ echo $nombre." ".$apellido;} ?></span></a>
          <span class="nots nots_on"></span>
        </div>
      </header>
    </div>
  </body>
</html>
