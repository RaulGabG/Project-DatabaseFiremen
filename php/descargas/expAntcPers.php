<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlAnP = "SELECT * FROM legajo_personal l LEFT JOIN antecedentes_personales ap ON l.id_legajo_personal = ap.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlAnP);

$cvs_file = "Exportación datos de Antecedentes médicos personales_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Enfermedades', 'Operaciones', 'Hábitos', 'Alergias a medicamentos', 'Otras alergias', 'Identificantes físicos', 'Estado dental', 'Examen bucal', 'Observaciones'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['enfermedades'],
        $r['operaciones'],
        $r['habitos'],
        $r['alergias_medicamentos'],
        $r['alergias_otras'],
        $r['identificantes_fisicos'],
        $r['estado_dental'],
        $r['examen_bucal'],
        $r['observaciones']));      
    }    
}

mysqli_close($conexion);

?>