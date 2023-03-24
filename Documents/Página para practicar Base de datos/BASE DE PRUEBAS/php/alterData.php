<?php

error_reporting(1);

include("validarSesion.php");
include("conexion.php");

// Declarando variables para recibir y guardar los datos enviados desde el formulario


$tipo = $_POST['tipo'];
$column = $_POST['column'];
$nuevoDato = $_POST['nuevoDato'];
$columnId = $_POST['columnId'];
$idPK = $_POST['idPK'];

$consultaId = "SELECT $columnId FROM $tipo WHERE $columnId = '$idPK' ";

$consultaId = mysqli_query($conexion, $consultaId);

$consultaId = mysqli_fetch_array($consultaId);

if($consultaId) {

    $sql = "UPDATE $tipo set $column = '$nuevoDato' WHERE $columnId = $idPK";

    if (mysqli_query($conexion, $sql)) {

      echo "<br> ¡Datos modificados con éxito!</div>";

      echo "<br> <a href='../pages/modificarAgregar.php'>Nueva corrección</a></div>";
      echo "<br> <a href='../pages/pagPrinc.php'>Página Principal</a></div>";
      echo "<br> <a href='cerrarSesion.php'>Cerrar sesión</a></div>";
    }

    else {

        echo "<br> Error: " . $sql . "<br>" . mysqli_error($conexion);
        echo "<br> <a href='../pages/modificarAgregar.php'>Volver atrás</a></div>";

    }

  }

// Cerrar la conexión

mysqli_close($conexion);

?>