<?php
error_reporting(1);
include("validarSesion.php");
include("conexion.php");

// Declarando variables para recibir y guardar los datos enviados desde el formulario


$date = $_POST['date'];
$actaNum = $_POST['actaNum'];
$ordJef = $_POST['ordJef'];
$ascGrado = $_POST['ascGrado'];
$idLegajoPersonal = $_POST['idLegajoPersonal'];

$consultaId = "SELECT id_legajo_personal FROM legajo_personal WHERE id_legajo_personal = '$idLegajoPersonal' ";

$consultaId = mysqli_query($conexion, $consultaId);

$consultaId = mysqli_fetch_array($consultaId);

if($consultaId) {

    $sql = "INSERT INTO ascensos(fecha, acta_N, orden_jefatura, ascensos_al_grado_de, legajo_personal_id_legajo_personal) VALUES ('$date', '$actaNum', '$ordJef', '$ascGrado', '$idLegajoPersonal')";

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