<?php
error_reporting(1);
include("validarSesion.php");
include("conexion.php");

// Declarando variables para recibir y guardar los datos enviados desde el formulario

$id = $_POST['idLeg'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$fechNac = $_POST['fechaNac'];
$estApr = $_POST['estApr'];
$estCiv = $_POST['estCiv'];
$hijos = $_POST['hijos'];
$grupSang = $_POST['grupSang'];
$factor = $_POST['factor'];
$esDon = $_POST['esDon'];
$ingrBVD = $_POST['ingrBVD'];
$fechDIngr = $_POST['fechDIngr'];
$gradConElQueIngr = $_POST['gradConElQueIngr'];
$jerarquiaActual = $_POST['jerarquiaActual'];
$celular = $_POST['celular'];
$fijo = $_POST['fijo'];
$email = $_POST['email'];
$drive = $_POST['drive'];

//encriptar contraseña

//$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//foto de perfil

//$fotoPerfil = "ruta/de/la/foto.jpg"; //nombre de la foto de perfil por defecto

// Evaluar si existe el usuario

$consultaId = "SELECT id_legajo_personal FROM legajo_personal WHERE id_legajo_personal = '$id' ";

$consultaId = mysqli_query($conexion, $consultaId);

$consultaId = mysqli_fetch_array($consultaId);

if(!$consultaId) {

    $sql = "INSERT INTO legajo_personal VALUES ('$id', '$apellido', '$nombre', '$dni', '$fechNac', '$estApr', '$estCiv', '$hijos', '$grupSang', '$factor', '$esDon', '$ingrBVD', '$fechDIngr', '$gradConElQueIngr', '$jerarquiaActual', '$celular', '$fijo', '$email', '$drive')";

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

