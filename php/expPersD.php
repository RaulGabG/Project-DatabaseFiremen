<?php

error_reporting(1);
include("validarSesion.php");
include("conexion.php");

$sqlDom = "SELECT * FROM legajo_personal l LEFT JOIN domicilio d ON l.id_legajo_personal = d.legajo_personal_id_legajo_personal ORDER BY apellido";

$query1 = $conexion->query($sqlDom);

$cvs_file1 = "Exportación datos personales_".date("Y-m-d") . ".csv";

header("Content-Type: text/csv; charset=latin1");

header("Content-Disposition: attachment; filename=$cvs_file1");

$salida=fopen('php://output', 'w');

fputcsv($salida, array('Legajo', 'Apellido', 'Nombre', 'DNI', 'Fecha de Nacimiento', 'Estudios aprobados', 'Estado Civil', 'Hijos', 'Grupo Sanguíneo', 'Factor', 'Es donante', 'Ingreso a BB VV de', 'Fecha de ingreso a BB VV', 'Grado con el que ingresa', 'Jerarquía Actual', 'Celular', 'Fijo', 'E-mail', 'Carpeta Drive'));

if ($query1) {  
    while ($r1 = $query1 -> fetch_assoc()){
        fputcsv($salida, array(
        $r1['id_legajo_personal'],
        $r1['apellido'],
        $r1['nombres'],
        $r1['dni'],
        $r1['fecha_nacimiento'],
        $r1['estudios_aprobados'],
        $r1['estado_civil'],
        $r1['hijos'],
        $r1['grupo_sanguineo'],
        $r1['factor'],
        $r1['es_donante'],
        $r1['ingreso_a_bb_vv_de'],
        $r1['fecha_ingreso_bb_vv'],
        $r1['grado_con_el_que_ingresa'],
        $r1['jerarquia_actual'],
        $r1['celular'],
        $r1['fijo'],
        $r1['e_mail'],
        $r1['archivo']));
    }    
}


mysqli_close($conexion);

?>