<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlTnA = "SELECT * FROM legajo_personal l LEFT JOIN tension_arterial t ON l.id_legajo_personal = t.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlTnA);

$cvs_file = "Exportación datos Médicos de tensión arterial_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Sentado', 'Parado', 'Acostado', 'Pulso'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['sentado'],
        $r['parado'],
        $r['acostado'],
        $r['pulso']));      
    }    
}

mysqli_close($conexion);

?>