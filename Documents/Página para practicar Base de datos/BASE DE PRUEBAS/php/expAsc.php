<?php

error_reporting(1);
include("validarSesion.php");
include("conexion.php");

$sqlAsc = "SELECT * FROM legajo_personal l LEFT JOIN ascensos a ON l.id_legajo_personal = a.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlAsc);

$cvs_file = "Exportación datos ascensos_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Fecha', 'Número de acta', 'Orden de Jefatura', 'Asciende a'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['fecha'],
        $r['acta_N'],
        $r['orden_jefatura'],
        $r['ascensos_al_grado_de']));      
    }    
}

mysqli_close($conexion);

?>