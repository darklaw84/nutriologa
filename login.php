<?php 
session_start();


include_once 'APIController.php';


$api=new APIController();






if (isset($_POST['entro'])) {

    $entro = $_POST['entro'];

    if ($entro == "1") {


        $usuario = $_POST['usuario'];

        $password = $_POST['password'];



        if (

            trim($usuario) == "" ||  trim($password) == ""
        ) {
            $mensajeEnviar = "Todos los campos son requeridos, por favor verifique";
        } else {



            $resultado = json_decode($api->login($usuario,$password));
            
            if (isset($resultado->error)) {
                $mensajeEnviar = $resultado->error;
            } else {
                
                
                $_SESSION['idUsuario'] = $resultado->objectId;
                $_SESSION['usuario'] = $resultado->username;
                $_SESSION['tipoUsuario'] = $resultado->typeUser;
                $_SESSION['nombre'] = $resultado->name;
                $_SESSION['apellido'] = $resultado->lastName;
                $_SESSION['sessionToken'] = $resultado->sessionToken;
                
                echo "<script>window.setTimeout(function() { window.location = 'index.php' }, 10);</script>";
            
            }
        }
    }
}


?>



<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title><?php echo 'unno | login' ?></title>
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

    <script type="text/javascript" src="js/prefixfree.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>


    


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <div class="row">
        <div class="col-3 ">
            &nbsp;
        </div>
        <div class="col-4 ">
            <form action="login.php" method="POST">
                <input type="hidden" name="entro" value="1">
                <div class="module modForm">
                    <h3>Datos de Acceso</h3>
                    <label>Usuario</label>
                    <input type="text" name="usuario">
                    <label>Contraseña</label>
                    <input name="password" type="password">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
        <div class="col-4 ">

        </div>
    </div>
    <?php include_once 'modals.php'; ?>
    
    <?php
    if (isset($mensajeEnviar)) {
        if ($mensajeEnviar != "") {
            echo "<script> $('#mensajeError').find('.modal-cuerpo').text('".$mensajeEnviar."').end().modal({
                fadeDuration: 200,
                fadeDelay: 1.75
            });</script>";
        }
    }


    ?>
</body>

</html>