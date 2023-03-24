<?php
error_reporting(1);
include("validarSesion.php");
include("conexion.php");

// Declarando variables para recibir y guardar los datos enviados desde el formulario

$calle = $_POST['calle'];
$numero = $_POST['numero'];
$pisoDpto = $_POST['pisoDpto'];
$codigoPostal = $_POST['codigoPostal'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$pais = $_POST['pais'];
$idLegajoPersonal = $_POST['idLegajoPersonal'];


//encriptar contraseña

//$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//foto de perfil

//$fotoPerfil = "ruta/de/la/foto.jpg"; //nombre de la foto de perfil por defecto

// Evaluar si existe el usuario

$consultaId = "SELECT id_legajo_personal FROM legajo_personal WHERE id_legajo_personal = '$idLegajoPersonal' ";

$consultaId = mysqli_query($conexion, $consultaId);

$consultaId = mysqli_fetch_array($consultaId);

if($consultaId) {

    $sql = "INSERT INTO domicilio(calle, numero, piso_dpto, codigo_postal, ciudad, provincia, pais, legajo_personal_id_legajo_personal) VALUES ('$calle', '$numero', '$pisoDpto', '$codigoPostal', '$ciudad', '$provincia', '$pais', '$idLegajoPersonal')";

    if (mysqli_query($conexion, $sql)) {

      echo "<br> ¡Datos cargados con éxito!</div>";

      echo "<br> <a href='../pages/cargaDeDatos.php'>Nueva carga</a></div>";
      echo "<br> <a href='../pages/pagPrinc.php'>Página Principal</a></div>";
      echo "<br> <a href='cerrarSesion.php'>Cerrar sesión</a></div>";
    }

    else {

        echo "<br> Error: " . $sql . "<br>" . mysqli_error($conexion);
        echo "<br> <a href='../pages/cargaDeDatos.php'>Volver atrás</a></div>";

    }

  }

// Cerrar la conexión

mysqli_close($conexion);

?>