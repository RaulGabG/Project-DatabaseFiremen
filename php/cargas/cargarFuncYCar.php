<?php
error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$cargOFun = $_POST['cargOFun'];
$date = $_POST['date'];
$jurisd = $_POST['jurisd'];
$sistUOb = $_POST['sistUOb'];
$idLegajoPersonal = $_POST['idLegajoPersonal'];

$consultaId = "SELECT id_legajo_personal FROM legajo_personal WHERE id_legajo_personal = '$idLegajoPersonal' ";

$consultaId = mysqli_query($conexion, $consultaId);

$consultaId = mysqli_fetch_array($consultaId);

if($consultaId) {

    $sql = "INSERT INTO funciones_y_cargos(cargo_o_funcion, periodo, jurisdiccion, sistema_u_objetivo, legajo_personal_id_legajo_personal) VALUES ('$cargOFun', '$date', '$jurisd', '$sistUOb', '$idLegajoPersonal')";

    if (mysqli_query($conexion, $sql)) {

      echo "<br> ¡Datos cargados con éxito!</div>";

      echo "<br> <a href='../../pages/cargaDeDatos.php'>Nueva carga</a></div>";
      echo "<br> <a href='../../pages/pagPrinc.php'>Página Principal</a></div>";
      echo "<br> <a href='cerrarSesion.php'>Cerrar sesión</a></div>";
    }

    else {
        echo "<br> Error: " . $sql . "<br>" . mysqli_error($conexion);
        echo "<br> <a href='../../pages/cargaDeDatos.php'>Volver atrás</a></div>";
    }
  }

// Cerrar la conexión

mysqli_close($conexion);

?>