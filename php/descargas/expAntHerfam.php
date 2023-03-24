<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlAHF = "SELECT * FROM legajo_personal l LEFT JOIN antecedentes_heredoFamiliares ah ON l.id_legajo_personal = ah.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlAHF);

$cvs_file = "Exportación datos de Antecedentes heredofamiliares_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Vínculo familiar', '¿Vivo?', '¿Muerto?', 'Causas', 'Observaciones'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['vinculo_familiar'],
        $r['vivo'],
        $r['muerto'],
        $r['causas'],
        $r['observaciones']));      
    }    
}

mysqli_close($conexion);

?>