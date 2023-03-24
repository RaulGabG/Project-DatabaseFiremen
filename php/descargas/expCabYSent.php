<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlCbS = "SELECT * FROM legajo_personal l LEFT JOIN cabeza_sentidos ca ON l.id_legajo_personal = ca.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlCbS);

$cvs_file = "Exportación datos médicos de Cabeza y sentidos_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Oído', 'Vista', 'Tacto', 'Olfato', 'Gusto'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['oido'],
        $r['vista'],
        $r['tacto'],
        $r['olfato'],          
        $r['gusto']));      
    }    
}

mysqli_close($conexion);

?>