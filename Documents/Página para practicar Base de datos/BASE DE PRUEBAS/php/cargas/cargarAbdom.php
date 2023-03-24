<?php
error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$higado = $_POST['higado'];
$intest = $_POST['intest'];
$anexos = $_POST['anexos'];
$hernias = $_POST['hernias'];
$genitUr = $_POST['genitUr'];
$miembSup = $_POST['miembSup'];
$miembInf = $_POST['miembInf'];
$columVert = $_POST['columVert'];
$sistOstArt = $_POST['sistOstArt'];
$sistNerCent = $_POST['sistNerCent'];
$sistPer = $_POST['sistPer'];
$examComp = $_POST['examComp'];
$idLegajoPersonal = $_POST['idLegajoPersonal'];

$consultaId = "SELECT id_legajo_personal FROM legajo_personal WHERE id_legajo_personal = '$idLegajoPersonal' ";

$consultaId = mysqli_query($conexion, $consultaId);

$consultaId = mysqli_fetch_array($consultaId);

if($consultaId) {

    $sql = "INSERT INTO abdomen(higado, intestinos, anexos, hernias, genito_urinario, miembros_superiores, miembros_inferiores, columna_vertebral, sistema_osteoarticular, sistema_nerviono_central, sistema_periferico, examenes_complementarios, legajo_personal_id_legajo_personal) VALUES ('$higado', '$intest', '$anexos', '$hernias', '$genitUr', '$miembSup', '$miembInf', '$columVert', '$sistOstArt', '$sistNerCent', '$sistPer', '$examComp', '$idLegajoPersonal')";

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