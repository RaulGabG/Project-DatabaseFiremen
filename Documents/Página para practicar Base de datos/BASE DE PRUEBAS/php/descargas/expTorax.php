<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlTor = "SELECT * FROM legajo_personal l LEFT JOIN torax tr ON l.id_legajo_personal = tr.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlTor);

$cvs_file = "Exportación datos médicos de tórax_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'ruidos_cardiacos', 'examen_pulmonar'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['ruidos_cardiacos'],
        $r['examen_pulmonar']));      
    }    
}

mysqli_close($conexion);

?>