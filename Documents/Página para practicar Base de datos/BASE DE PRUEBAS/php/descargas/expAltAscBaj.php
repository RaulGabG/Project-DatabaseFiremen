<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlAAB = "SELECT * FROM legajo_personal l LEFT JOIN altas_ascensos_bajas ab ON l.id_legajo_personal = ab.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlAAB);

$cvs_file = "Exportación datos Altas, ascencsos y bajas_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Fecha', 'Detalle'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['fecha'],
        $r['detalle']));      
    }    
}

mysqli_close($conexion);

?>