<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlCue = "SELECT * FROM legajo_personal l LEFT JOIN cuello cu ON l.id_legajo_personal = cu.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlCue);

$cvs_file = "Exportación datos médicos de cuello_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Enfermedades', 'Adenopatias', 'Latidos Patológicos'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['adenopatias'],
        $r['latidos_patologicos']));      
    }    
}

mysqli_close($conexion);

?>