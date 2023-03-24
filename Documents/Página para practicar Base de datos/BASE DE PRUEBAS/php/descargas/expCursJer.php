<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlCJe = "SELECT * FROM legajo_personal l LEFT JOIN cursos_de_jerarquia c ON l.id_legajo_personal = c.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlCJe);

$cvs_file = "Exportación datos Cursos de jerarquía_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Fecha', 'Curso', 'Escuela', 'Observaciones'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['fecha'],
        $r['curso'],
        $r['escuela'],
        $r['observaciones']));      
    }    
}

mysqli_close($conexion);

?>