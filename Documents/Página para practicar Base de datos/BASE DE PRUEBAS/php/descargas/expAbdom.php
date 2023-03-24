<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlAbd = "SELECT * FROM legajo_personal l LEFT JOIN abdomen abd ON l.id_legajo_personal = abd.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlAbd);

$cvs_file = "Exportación datos médicos del abdomen_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Hígado', 'Intestinos', 'Anexos', 'Hérnias', 'Genito urinario', 'Miembros superiores', 'Miembros inferiores', 'Columna vertebral', 'Sistema osteoarticular', 'Sistema nervioso central', 'Sistema periférico', 'Examenes complementarios'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['higado'],
        $r['intestinos'],
        $r['anexos'],
        $r['hernias'],
        $r['genito_urinario'],
        $r['miembros_superiores'],
        $r['miembros_inferiores'],
        $r['columna_vertebral'],
        $r['sistema_osteoarticular'],
        $r['sistema_nerviono_central'],
        $r['sistema_periferico'],
        $r['examenes_complementarios']));      
    }    
}

mysqli_close($conexion);

?>