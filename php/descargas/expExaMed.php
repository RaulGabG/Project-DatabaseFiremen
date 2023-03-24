<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlExM = "SELECT * FROM legajo_personal l LEFT JOIN examen_medico e ON l.id_legajo_personal = e.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlExM);

$cvs_file = "Exportación datos de Examen médico_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Talla', 'Peso', 'Sexo', 'Grupo sanguíneo', 'Factor', 'Contextura'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['talla'],
        $r['peso'],
        $r['sexo'],
        $r['grupo_sanguineo'],
        $r['factor'],
        $r['contextura']));      
    }    
}

mysqli_close($conexion);

?>