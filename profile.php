<?php
$title = "Profile";
include_once 'header.php';


include_once 'APIController.php';


$api = new APIController();


if (isset($_POST['subirFoto'])) {


  $path = $_FILES["userImageUpload"]["tmp_name"];

  $resultado = json_decode($api->subirFoto(
    $path
  ));

  $asociado = json_decode($api->actualizarFotoUsuario($_SESSION['idUsuario'], $resultado->name, $resultado->url));
}


$resultado = json_decode($api->consultaSesion($_SESSION['idUsuario']));
$resultados = $resultado->results;

if (isset($resultados[count($resultados) - 2])) {
  $sesion = $resultados[count($resultados) - 2];
  $ultimaSesion = date('d/m/Y H:i:s', strtotime($sesion->updatedAt));
}


$resUsuario = json_decode($api->consultaUsuario($_SESSION['idUsuario']));
$usuario = $resUsuario->results[0];
if (isset($usuario->avatar->url)) {
  $urlAvatar = $usuario->avatar->url;
} else {
  $urlAvatar = "";
}





/*
$resPac = json_decode($api->consultaDetalleNutriologo($_SESSION['idUsuario']));
if (count($resPac->results) == 0) {
  $api->insertarDetalleNutriologo("", "", $_SESSION['idUsuario']);
  $resPac = json_decode($api->consultaDetalleNutriologo($_SESSION['idUsuario']));
  $paciente = $resPac->results[0];
} else {
  $paciente = $resPac->results[0];
}
*/
?>
<script type="text/javascript" src="js/avatar.js"></script>

<div class="wrap_admin profile">
  <section class="col col-7 borderR">
    <div class="contentPatient center-x">
      <div class="module modForm ">
        <div class="wrap_profileImg">
          <div class="profile-container">

            <span id="userImage" style="display:<?php if ($urlAvatar == "") {
                                                  echo "block";
                                                } else {
                                                  echo "none";
                                                } ?>" class="profileImage avatarDefault" onclick="loadProfileClicks('#userImage', '#userImageUpload');"></span>

            <img id="imagenBuena" style="display:<?php if ($urlAvatar == "") {
                                                    echo "none";
                                                  } else {
                                                    echo "block";
                                                  } ?>" class="avatar avatarDefault" src="<?php echo $urlAvatar ?>" alt="nutriologo" width="115" height="115">

          </div>
          <form id="formImagen" method="post" enctype="multipart/form-data" action="profile.php">
            <input type="hidden" name="subirFoto" value="1">
            <input type="file" name="userImageUpload" id="userImageUpload" class="btn imageUpload plus" accept="image/*">
          </form>
        </div>
        <label>Nombre</label>
        <input type="hidden" id="idNutriologo" value="<?php echo $_SESSION['idUsuario'] ?>">
        <input type="text" id="nombre" value="<?php if (isset($usuario->name)) {
                                                echo $usuario->name;
                                              } ?>">
        <label>Apellidos</label>
        <input class="noMargin" type="text" id="apellidos" value="<?php if (isset($usuario->lastName)) {
                                                                    echo $usuario->lastName;
                                                                  } ?>">

      </div>

      <div class="module modForm dataAccount right">
        <label>Teléfono Personal</label>

        <input type="number" id="telefono" value="<?php if (isset($usuario->phone)) {
                                                    echo $usuario->phone;
                                                  } ?>">

        <label>Teléfono de Oficina</label>
        <input type="number" id="telOficina" value="<?php if (isset($usuario->telefonoOficina)) {
                                                      echo $usuario->telefonoOficina;
                                                    } ?>">

        <span class="moreInputs two_inputs noMargin">
          <span class="short2">
            <label>Edad</label>
            <input type="number" id="edad" value="<?php if (isset($usuario->age)) {
                                                    echo $usuario->age;
                                                  } ?>">
          </span>
          <span class="short7">
            <label>Cédula Profesional</label>
            <input type="text" id="cedula" value="<?php if (isset($usuario->cedulaProfesional)) {
                                                    echo $usuario->cedulaProfesional;
                                                  } ?>">
          </span>
        </span>
      </div>

      <div class="module modForm dataAccount right">
        <label>E-mail</label>
        <input type="email" id="email" value="<?php if (isset($usuario->email)) {
                                                echo $usuario->email;
                                              } ?>">
        <label>Contraseña</label>
        <input type="password" id="password">
      </div>
      <button id="btnGuardarNutriologo">guardar</button>
    </div>
  </section>


  <div class="col col-33 right">
    <section class="center">
      <p>Último ingreso:<br><?php echo $ultimaSesion; ?></p>
    </section>
    <section class="profile_settings borderT">
      <ul>
        <li><a target="_blank" href="http://nvn.mx/soporte" class="exampleA">SOPORTE Y AYUDA</a></li>
        <li><a target="_blank" href="http://unno.fit/legal">TÉRMINOS</a></li>
        <li><a href="logout.php">CERRAR SESIÓN</a></li>
      </ul>
    </section>
    <section class="deleteAccount borderT">
      <div class="module">
        <a>ELIMINAR CUENTA</a>
      </div>
    </section>
  </div>
</div>

<?php include_once 'footer.php'; ?>