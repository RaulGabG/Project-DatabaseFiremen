<?php

error_reporting(1);

include("validarSesion.php");
include("conexion.php");

$idLegajoPersonal = $_POST['idLegajoPersonal'];

$consultaId = "SELECT * FROM legajo_personal WHERE id_legajo_personal = '$idLegajoPersonal' ";

$consultaId = mysqli_query($conexion, $consultaId);

$consultaId = mysqli_fetch_array($consultaId);

if($consultaId) {
    $sqlDom = "SELECT * FROM legajo_personal l LEFT JOIN domicilio d ON l.id_legajo_personal = d.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlAsc = "SELECT * FROM legajo_personal l LEFT JOIN ascensos a ON l.id_legajo_personal = a.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlCJe = "SELECT * FROM legajo_personal l LEFT JOIN cursos_de_jerarquia c ON l.id_legajo_personal = c.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlAAB = "SELECT * FROM legajo_personal l LEFT JOIN altas_ascensos_bajas ab ON l.id_legajo_personal = ab.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlFyC = "SELECT * FROM legajo_personal l LEFT JOIN funciones_y_cargos f ON l.id_legajo_personal = f.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlNcE = "SELECT * FROM legajo_personal l LEFT JOIN nacio_en n ON l.id_legajo_personal = n.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlExM = "SELECT * FROM legajo_personal l LEFT JOIN examen_medico e ON l.id_legajo_personal = e.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlAnP = "SELECT * FROM legajo_personal l LEFT JOIN antecedentes_personales ap ON l.id_legajo_personal = ap.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlTnA = "SELECT * FROM legajo_personal l LEFT JOIN tension_arterial t ON l.id_legajo_personal = t.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlCbS = "SELECT * FROM legajo_personal l LEFT JOIN cabeza_sentidos ca ON l.id_legajo_personal = ca.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlCue = "SELECT * FROM legajo_personal l LEFT JOIN cuello cu ON l.id_legajo_personal = cu.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlTor = "SELECT * FROM legajo_personal l LEFT JOIN torax tr ON l.id_legajo_personal = tr.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlAbd = "SELECT * FROM legajo_personal l LEFT JOIN abdomen abd ON l.id_legajo_personal = abd.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlEva = "SELECT * FROM legajo_personal l LEFT JOIN evaluacion ev ON l.id_legajo_personal = ev.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    $sqlAHF = "SELECT * FROM legajo_personal l LEFT JOIN antecedentes_heredoFamiliares ah ON l.id_legajo_personal = ah.legajo_personal_id_legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
    }
    else {
        echo "<br> <strong>¡Error: Datos incorrectos o inexitentes!<br>";
        echo "<br><strong><a href='../pages/busquedaLeg.php'>Volver atrás</a></strong><br></div>";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Base de datos bomberos</title>
</head>
<body>
    <header>
        <img id="escudo" src="../img/Bom.jpg" alt="Escudo">
        <div id="instit">
           <h1>Bomberos Voluntarios</h1>
           <br>
           <h2>Base de datos</h2>
        </div>
    </header>

    <nav class="navbar navbar-expand-xl navbar-dark bg-dark text-white">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav flex-row ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="../pages/pagPrinc.php">Inicio</a>
            </li>   
            <li class="nav-item">
                <a class="nav-link" href="../pages/cargaDeDatos.php">Cargar Legajo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/base.php">Ver Legajos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/busquedaLeg.php">Buscar Legajo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/modificarAgregar.php">Modificar datos cargados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/instructivo.html" style="color: cyan;">Instructivo</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="../pages/borrarDatos.php">Borrar datos</a>
                </li>
            <li>
                <a class="nav-link" href="cerrarSesion.php" style="color: yellow;">Cerrar Sesión</a>
            </li>
        </ul>
    </nav>
    <br>

    <section>
        <div id="busqueda2">
            <div class="form">
               <form method="POST" action="busqbase.php">
                <h3>Buscar por legajo</h3><br>
                <label for="html">Legajo</label>
                <input type="number" name="idLegajoPersonal" required><br><br>   
                <input id="enviarAsc" type="submit" name="enviar" value="Enviar">
               </form>
            </div>
    </section>
    <br>

    <section>
            <H2>Legajo</H2><br>
            <?php
            $datosDom =  mysqli_query($conexion, $sqlDom);
            WHILE ($filaD = mysqli_fetch_array($datosDom)) {
            ?>
            <h2><strong>Datos personales:</strong></h2>
            <section class="datosExp card mat-card">
                <h3><strong><?php echo $filaD['apellido']?>, <?php echo $filaD['nombres']?></strong></h3><br>
                <p>Legajo: <span style="color: #20b2aa;"><?php echo $filaD['id_legajo_personal']?></span></p><br>
                <p>DNI: <span style="color: #20b2aa;"><?php echo $filaD['dni']?></span></p><br>
                <p>Fecha de nacimiento: <span style="color: #20b2aa;"><?php echo $filaD['fecha_nacimiento']?></span></p><br>
                <p>Estudios aprobados: <span style="color: #20b2aa;"><?php echo $filaD['estudios_aprobados']?></span></p><br>
                <p>Estado civil: <span style="color: #20b2aa;"><?php echo $filaD['estado_civil']?></span></p><br>
                <p>Hijos: <span style="color: #20b2aa;"><?php echo $filaD['hijos']?></span></p><br>
                <p>Grupo sanguíneo: <span style="color: #20b2aa;"><?php echo $filaD['grupo_sanguineo'] . " " .$filaD['factor'] ?></span></p><br>
                <p>Es donante?: <span style="color: #20b2aa;"><?php echo $filaD['es_donante']?></span></p><br>
                <p>Ingresó a BB VV de: <span style="color: #20b2aa;"><?php echo $filaD['ingreso_a_bb_vv_de']?></span></p><br>
                <p>Fecha de ingreso: <span style="color: #20b2aa;"><?php echo $filaD['fecha_ingreso_bb_vv']?></span></p><br>
                <p>Grado con el que ingresa: <span style="color: #20b2aa;"><?php echo $filaD['grado_con_el_que_ingresa']?></span></p><br>
                <p>Jerarquía actual: <span style="color: #20b2aa;"><?php echo $filaD['jerarquia_actual']?></span></p><br>
                <p>Celular: <span style="color: #20b2aa;"><?php echo $filaD['celular']?></span></p><br>
                <p>Fijo: <span style="color: #20b2aa;"><?php echo $filaD['fijo']?></span></p><br>
                <p>E-Mail: <span style="color: #20b2aa;"><?php echo $filaD['e_mail']?></p></span><br>
                <p>Carpeta: <a href="<?php echo $fila['archivo']?>" target="_blank">Ir a Drive</a></p><br>
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaD['id_legajo_personal']?></span>)</p><br>
            </section>

            <h2><strong>Datos domicilio:</strong></h2>

            <section class="datosExp card mat-card">
                <p>Calle: <span style="color: #20b2aa;"><?php echo $filaD['calle']?></span></p><br>
                <p>Número: <span style="color: #20b2aa;"><?php echo $filaD['numero']?></span></p><br>
                <p>Piso/Dpto: <span style="color: #20b2aa;"><?php echo $filaD['piso_dpto']?></span></p><br>
                <p>Código postal: <span style="color: #20b2aa;"><?php echo $filaD['codigo_postal']?></span></p><br>
                <p>Ciudad: <span style="color: #20b2aa;"><?php echo $filaD['ciudad']?></span></p><br>
                <p>Provincia: <span style="color: #20b2aa;"><?php echo $filaD['provincia']?></span></p><br>
                <p>País: <span style="color: #20b2aa;"><?php echo $filaD['pais']?></span></p><br>
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaD['id_domicilio']?></span>)</p><br>
            </section>
            <?php
              }
            ?>

            <h2><strong>Datos ascensos:</strong></h2>
            <?php
            $datosAsc =  mysqli_query($conexion, $sqlAsc);
            WHILE ($filaA = mysqli_fetch_array($datosAsc)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Fecha: <span style="color: #20b2aa;"><?php echo $filaA['fecha']?></span></p><br>
                <p>Número de acta: <span style="color: #20b2aa;"><?php echo $filaA['acta_N']?></span></p><br>
                <p>Orden de Jefatura: <span style="color: #20b2aa;"><?php echo $filaA['orden_jefatura']?></span></p><br>
                <p>Asciende a: <span style="color: #20b2aa;"><?php echo $filaA['ascensos_al_grado_de']?></span></p><br>               
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaA['id_ascensos']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Cursos de Jerarquía:</strong></h2>
            <?php
            $datosCJe =  mysqli_query($conexion, $sqlCJe);
            WHILE ($filaCJ = mysqli_fetch_array($datosCJe)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Fecha: <span style="color: #20b2aa;"><?php echo $filaCJ['fecha']?></span></p><br>
                <p>Curso: <span style="color: #20b2aa;"><?php echo $filaCJ['curso']?></span></p><br>
                <p>Escuela: <span style="color: #20b2aa;"><?php echo $filaCJ['escuela']?></span></p><br>
                <p>Observaciones: <span style="color: #20b2aa;"><?php echo $filaCJ['observaciones']?></span></p><br>               
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaCJ['id_cursos_de_jerarquia']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Altas, ascensos y bajas:</strong></h2>
            <?php
            $datosAAB =  mysqli_query($conexion, $sqlAAB);
            WHILE ($filaAAB = mysqli_fetch_array($datosAAB)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Legajo: <span style="color: #20b2aa;"><?php echo $filaAAB['legajo']?></span></p><br>
                <p>Fecha: <span style="color: #20b2aa;"><?php echo $filaAAB['fecha']?></span></p><br>
                <p>Detalle: <span style="color: #20b2aa;"><?php echo $filaAAB['detalle']?></span></p><br>                
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaAAB['id_altas_ascensos_bajas']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Funciones y Cargos:</strong></h2>
            <?php
            $datosFyC =  mysqli_query($conexion, $sqlFyC);
            WHILE ($filaFyC = mysqli_fetch_array($datosFyC)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Cargo o función: <span style="color: #20b2aa;"><?php echo $filaFyC['cargo_o_funcion']?></span></p><br>
                <p>Período: <span style="color: #20b2aa;"><?php echo $filaFyC['periodo']?></span></p><br>
                <p>Jurisdicción: <span style="color: #20b2aa;"><?php echo $filaFyC['jurisdiccion']?></span></p><br>
                <p>Sistema u objetivo: <span style="color: #20b2aa;"><?php echo $filaFyC['sistema_u_objetivo']?></span></p><br>               
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaFyC['id_funciones_y_cargos']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos de lugar de nacimiento:</strong></h2>
            <?php
            $datosNcE =  mysqli_query($conexion, $sqlNcE);
            WHILE ($filaNcE = mysqli_fetch_array($datosNcE)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Ciudad: <span style="color: #20b2aa;"><?php echo $filaNcE['ciudad']?></span></p><br>
                <p>Provincia: <span style="color: #20b2aa;"><?php echo $filaNcE['provincia']?></span></p><br>
                <p>País: <span style="color: #20b2aa;"><?php echo $filaNcE['pais']?></span></p><br>                
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaNcE['id_nacio_en']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Examen médio:</strong></h2>
            <?php
            $datosExM =  mysqli_query($conexion, $sqlExM);
            WHILE ($filaExM = mysqli_fetch_array($datosExM)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Talla: <span style="color: #20b2aa;"><?php echo $filaExM['talla']?></span></p><br>
                <p>Peso: <span style="color: #20b2aa;"><?php echo $filaExM['peso']?></span></p><br>
                <p>Sexo: <span style="color: #20b2aa;"><?php echo $filaExM['sexo']?></span></p><br>
                <p>Grupo sanguíneo: <span style="color: #20b2aa;"><?php echo $filaExM['grupo_sanguineo']?></span></p><br>               
                <p>Factor: <span style="color: #20b2aa;"><?php echo $filaExM['factor']?></span></p><br>
                <p>Contextura: <span style="color: #20b2aa;"><?php echo $filaExM['contextura']?></span></p><br>
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaExM['id_examen_medico']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Antecedentes Personales:</strong></h2>
            <?php
            $datosAnP =  mysqli_query($conexion, $sqlAnP);
            WHILE ($filaAnP = mysqli_fetch_array($datosAnP)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Enfermedades: <span style="color: #20b2aa;"><?php echo $filaAnP['enfermedades']?></span></p><br>
                <p>Operaciones: <span style="color: #20b2aa;"><?php echo $filaAnP['operaciones']?></span></p><br>
                <p>Hábitos: <span style="color: #20b2aa;"><?php echo $filaAnP['habitos']?></span></p><br>
                <p>Alergias a medicamentos: <span style="color: #20b2aa;"><?php echo $filaAnP['alergias_medicamentos']?></span></p><br>               
                <p>Otras alergias: <span style="color: #20b2aa;"><?php echo $filaAnP['alergias_otras']?></span></p><br>
                <p>Identificadores físicos: <span style="color: #20b2aa;"><?php echo $filaAnP['identificadores_fisicos']?></span></p><br>
                <p>Estado dental: <span style="color: #20b2aa;"><?php echo $filaAnP['estado_dental']?></span></p><br>
                <p>Examen bucal: <span style="color: #20b2aa;"><?php echo $filaAnP['examen_bucal']?></span></p><br>
                <p>Observaciones: <span style="color: #20b2aa;"><?php echo $filaAnP['habitos']?></span></p><br>
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaAnP['id_antecedentes_personales']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Tensión arterial:</strong></h2>
            <?php
            $datosTnA =  mysqli_query($conexion, $sqlTnA);
            WHILE ($filaTnA = mysqli_fetch_array($datosTnA)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Sentado: <span style="color: #20b2aa;"><?php echo $filaTnA['sentado']?></span></p><br>
                <p>Parado: <span style="color: #20b2aa;"><?php echo $filaTnA['parado']?></span></p><br>
                <p>Acostado: <span style="color: #20b2aa;"><?php echo $filaTnA['acostado']?></span></p><br>
                <p>Pulso: <span style="color: #20b2aa;"><?php echo $filaTnA['pulso']?></span></p><br>               
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaTnA['id_tension_arterial']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Cabeza y sentidos:</strong></h2>
            <?php
            $datosCbS =  mysqli_query($conexion, $sqlCbS);
            WHILE ($filaCbS = mysqli_fetch_array($datosCbS)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Oído: <span style="color: #20b2aa;"><?php echo $filaCbS['oido']?></span></p><br>
                <p>Vista: <span style="color: #20b2aa;"><?php echo $filaCbS['vista']?></span></p><br>
                <p>Tacto: <span style="color: #20b2aa;"><?php echo $filaCbS['tacto']?></span></p><br>
                <p>Olfato: <span style="color: #20b2aa;"><?php echo $filaCbS['olfato']?></span></p><br>               
                <p>Gusto: <span style="color: #20b2aa;"><?php echo $filaCbS['gusto']?></span></p><br>
                <p>(Id de modificación: <?php echo $filaCbS['id_cabeza_sentidos']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Cuello:</strong></h2>
            <?php
            $datosCue =  mysqli_query($conexion, $sqlCue);
            WHILE ($filaCue = mysqli_fetch_array($datosCue)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Adenopatias: <span style="color: #20b2aa;"><?php echo $filaCue['adenopatias']?></span></p><br>
                <p>Latidos patológicos: <span style="color: #20b2aa;"><?php echo $filaCue['latidos_patologicos']?></span></p><br>               
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaCue['id_cuello']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Tórax:</strong></h2>
            <?php
            $datosTor =  mysqli_query($conexion, $sqlTor);
            WHILE ($filaTor = mysqli_fetch_array($datosTor)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Ruidos cardíacos: <span style="color: #20b2aa;"><?php echo $filaTor['ruidos_cardiacos']?></span></p><br>
                <p>Examen pulmonar: <span style="color: #20b2aa;"><?php echo $filaTor['examen_pulmonar']?></span></p><br>         
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaTor['id_torax']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Abdomen:</strong></h2>
            <?php
            $datosAbd =  mysqli_query($conexion, $sqlAbd);
            WHILE ($filaAbd = mysqli_fetch_array($datosAbd)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Hígado: <span style="color: #20b2aa;"><?php echo $filaAbd['higado']?></span></p><br>
                <p>Intestinos: <span style="color: #20b2aa;"><?php echo $filaAbd['intestinos']?></span></p><br>
                <p>Anexos: <span style="color: #20b2aa;"><?php echo $filaAbd['anexos']?></span></p><br>
                <p>Hernias: <span style="color: #20b2aa;"><?php echo $filaAbd['hernias']?></span></p><br>               
                <p>Génito urinario: <span style="color: #20b2aa;"><?php echo $filaAbd['genito_urinario']?></span></p><br>
                <p>Miembros superiores: <span style="color: #20b2aa;"><?php echo $filaAbd['miembros_superiores']?></span></p><br>
                <p>Miembros inferiores: <span style="color: #20b2aa;"><?php echo $filaAbd['miembros_inferiores']?></span></p><br>
                <p>Columna vertebral: <span style="color: #20b2aa;"><?php echo $filaAbd['columna_vertebral']?></span></p><br>
                <p>Sistema osteoarticular: <span style="color: #20b2aa;"><?php echo $filaAbd['Sistema_osteoarticular']?></span></p><br>
                <p>Sistema nerviono central: <span style="color: #20b2aa;"><?php echo $filaAbd['sistema_nerviono_central']?></span></p><br>
                <p>Sistema periferico: <span style="color: #20b2aa;"><?php echo $filaAbd['sistema_periferico']?></span></p><br>
                <p>Examenes complementarios: <span style="color: #20b2aa;"><?php echo $filaAbd['examenes_complementarios']?></span></p><br>
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaAbd['id_abdomen']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Evaluación:</strong></h2>
            <?php
            $datosEva =  mysqli_query($conexion, $sqlEva);
            WHILE ($filaEva = mysqli_fetch_array($datosEva)) {
            ?>

            <section class="datosExp card mat-card">
                <p>¿Es apto?: <span style="color: #20b2aa;"><?php echo $filaEva['es_apto']?></span></p><br>
                <p>Observaciones: <span style="color: #20b2aa;"><?php echo $filaEva['observaciones']?></span></p><br>                              
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaEva['id_evaluacion']?></span>)</p><br> 
            </section>
            <?php
              }              
            ?>

            <h2><strong>Datos Antecedentes heredo Familiares:</strong></h2>
            <?php
            $datosAHF =  mysqli_query($conexion, $sqlAHF);
            WHILE ($filaAHF = mysqli_fetch_array($datosAHF)) {
            ?>

            <section class="datosExp card mat-card">
                <p>Vínculo familiar: <span style="color: #20b2aa;"><?php echo $filaAHF['vinculo_familiar']?></span></p><br>
                <p>¿Está vivo?: <span style="color: #20b2aa;"><?php echo $filaAHF['vivo']?></span></p><br>
                <p>¿Está muerto?: <span style="color: #20b2aa;"><?php echo $filaAHF['muerto']?></span></p><br>
                <p>Causas: <span style="color: #20b2aa;"><?php echo $filaAHF['causas']?></span></p><br> 
                <p>Observaciones: <span style="color: #20b2aa;"><?php echo $filaAHF['observaciones']?></span></p><br>                
                <p>(Id de modificación: <span style="color: #20b2aa;"><?php echo $filaAHF['id_antecedentes_heredoFamiliares']?></span>)</p><br> 
            </section>
            <?php
              }   
              mysqli_close($conexion);           
            ?>
    </section>
    
    <hr>
    <footer class=>
        &copy; Sitio realizado por Raúl G. Guanca
        <address>
           Contact <a href="mailto:raulgguanca@gmail.com">me</a>
        </address>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
