<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlNcE = "SELECT * FROM legajo_personal l LEFT JOIN nacio_en n ON l.id_legajo_personal = n.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlNcE);

$cvs_file = "Exportación datos de Lugar de nacimiento_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Ciudad', 'Provincia', 'País'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['ciudad'],
        $r['provincia'],        
        $r['pais']));      
    }    
}

mysqli_close($conexion);

?>