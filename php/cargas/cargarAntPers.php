<?php
error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$enfer = $_POST['enfer'];
$operac = $_POST['operac'];
$habit = $_POST['habit'];
$alergMed = $_POST['alergMed'];
$alergOtrs = $_POST['alergOtrs'];
$identFisic = $_POST['identFisic'];
$estDent = $_POST['estDent'];
$examBuc = $_POST['examBuc'];
$observ = $_POST['observ'];
$idLegajoPersonal = $_POST['idLegajoPersonal'];

$consultaId = "SELECT id_legajo_personal FROM legajo_personal WHERE id_legajo_personal = '$idLegajoPersonal' ";

$consultaId = mysqli_query($conexion, $consultaId);

$consultaId = mysqli_fetch_array($consultaId);

if($consultaId) {

    $sql = "INSERT INTO antecedentes_personales(enfermedades, operaciones, habitos, alerigias_medicamentos, alergias_otras, identificantes_fisicos, estado_dental, examen_bucal, observaciones, legajo_personal_id_legajo_personal) VALUES ('$enfer', '$operac', '$habit', '$alergMed','$alergOtrs','$identFisic','$estDent','$examBuc','$observ', '$idLegajoPersonal')";

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