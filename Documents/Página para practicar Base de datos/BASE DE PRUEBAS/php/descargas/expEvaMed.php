<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlEva = "SELECT * FROM legajo_personal l LEFT JOIN evaluacion ev ON l.id_legajo_personal = ev.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlEva);

$cvs_file = "Exportación datos de evaluacióon médica_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', '¿Es apto?', 'Observaciones'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['es_apto'],        
        $r['observaciones']));      
    }    
}

mysqli_close($conexion);

?>