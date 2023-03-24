<?php

error_reporting(1);
include("../validarSesion.php");
include("../conexion.php");

$sqlFyC = "SELECT * FROM legajo_personal l LEFT JOIN funciones_y_cargos f ON l.id_legajo_personal = f.legajo_personal_id_legajo_personal ORDER BY apellido";

$query = $conexion->query($sqlFyC);

$cvs_file = "Exportación datos de Funciones y cargos_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file");

$salida1=fopen('php://output', 'w');

fputcsv($salida1, array('Legajo', 'Apellido', 'Nombre', 'Cargo o función', 'Período', 'Jurisdicción', 'Sistema u objetivo'));
  
if ($query) {
    while ($r = $query -> fetch_assoc()){
        fputcsv($salida1, array(
        $r['id_legajo_personal'],
        $r['apellido'],
        $r['nombres'],
        $r['cargo_o_funcion'],
        $r['periodo'],
        $r['jurisdiccion'],
        $r['sistema_u_objetivo']));      
    }    
}

mysqli_close($conexion);

?>