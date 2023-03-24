<?php
error_reporting(1);
include("../php/validarSesion.php");
include("../php/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Instructivo</title>
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
                    <a class="nav-link" href="pagPrinc.php">Inicio</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="cargaDeDatos.php">Cargar Legajo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="base.php">Ver Legajos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="busquedaLeg.php">Buscar Legajo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="modificarAgregar.php">Modificar datos cargados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="instructivo.html" style="color: cyan;">Instructivo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exportar.php">Descargas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="borrarDatos.php">Borrar datos</a>
                </li>
                <li>
                    <a class="nav-link" href="../php/cerrarSesion.php" style="color: yellow;">Cerrar Sesión</a>
                </li>
            </ul>
    </nav>
    <br>

    <h2>Formatos de datos y nombres de columnas</h2><hr>

    <h6>¡Tip! ¡Los nombres de las columnas y tablas se pueden seleccionar haciendo directamente doble click encima de ellos!</h6><br>

    <h3>Legajo personal = legajo_personal</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_legajo_personal</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">apellido</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">nombres</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">dni</th>
                <th scope="row">Números</th>
            </tr>
            <tr>
                <th scope="row">fecha_nacimiento</th>
                <th scope="row">año, mes, día; separados por guión medio(AAAA-MM-DD)</th>
            </tr>
            <tr>
                <th scope="row">estudios_aprobados</th>
                <th scope="row">0 para NO, 1 para sí (Es una particularidad de las bases de datos)</th>
            </tr>
            <tr>
                <th scope="row">estado_civil</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">hijos</th>
                <th scope="row">Números</th>
            </tr>
            <tr>
                <th scope="row">grupo_sanguineo</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">factor</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">es_donante</th>
                <th scope="row">0 para NO, 1 para sí (Es una particularidad de las bases de datos)</th>
            </tr>
            <tr>
                <th scope="row">ingreso_a_bb_vv_de</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">fecha_ingreso_bb_vv</th>
                <th scope="row">año, mes, día; separados por guión medio(AAAA-MM-DD)</th>
            </tr>
            <tr>
                <th scope="row">grado_con_el_que_ingresa</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">jerarquia_actual</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">celular</th>
                <th scope="row">Números</th>
            </tr>
            <tr>
                <th scope="row">fijo</th>
                <th scope="row">Números</th>
            </tr>
            <tr>
                <th scope="row">e_mail</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">archivo</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
        </tbody>
    </table>
    
    <h3>Domicilio = domicilio</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_domicilio</th>
                <th scope="row">Números(este campo se genera de forma automática)</th>               
            </tr>
            <tr>
                <th scope="row">calle</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>            
            <tr>
                <th scope="row">numero</th>
                <th scope="row">Números</th>
            </tr>            
            <tr>
                <th scope="row">piso_dpto</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>         
            <tr>
                <th scope="row">codigo_postal</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">ciudad</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">provincia</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">pais</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Ascensos = ascensos</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_ascensos</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">fecha</th>
                <th scope="row">año, mes, día; separados por guión medio(AAAA-MM-DD)</th>
            </tr>
            <tr>
                <th scope="row">acta_N</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">orden_jefatura</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">ascensos_al_grado_de</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Cursos de jerarquía = cursos_de_jerarquia</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_cursos_de_jerarquia</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">fecha</th>
                <th scope="row">año, mes, día; separados por guión medio(AAAA-MM-DD)</th>
            </tr>
            <tr>
                <th scope="row">curso</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">escuela</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">observaciones</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Altas, ascensos y bajas = altas_ascensos_bajas</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_altas_ascensos_bajas</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">legajo</th>
                <th scope="row">Números</th>
            </tr>
            <tr>
                <th scope="row">fecha</th>
                <th scope="row">año, mes, día; separados por guión medio(AAAA-MM-DD)</th>
            </tr>
            <tr>
                <th scope="row">detalle</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Funciones y cargos = funciones_y_cargos</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_funciones_y_cargos</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">cargo_o_funcion</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">periodo</th>
                <th scope="row">año, mes, día; separados por guión medio(AAAA-MM-DD)</th>
            </tr>
            <tr>
                <th scope="row">jurisdiccion</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">sistema_u_objetivo</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Datos de nacimiento = nacio_en</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_nacio_en</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">ciudad</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">provincia</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">pais</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Examen médico = examen_medico</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_examen_medico</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">talla</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">peso</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">sexo</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">grupo_sanguineo</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">factor</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">contextura</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Antecedentes médicos personales = antecedentes_personales</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_antecedentes_personales</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">enfermedades</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">operaciones</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">habitos</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">alergias_medicamentos</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">alergias_otras</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">identificantes_fisicos</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">estado_dental</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">examen_bucal</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">observaciones</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Tensión arterial = tension_arterial</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_tension_arterial</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">sentado</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">parado</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">acostado</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">pulso</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Cabeza y sentidos = cabeza_sentidos</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_cabeza_sentidos</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">oido</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">vista</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">tacto</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">olfato</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">gusto</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Cuello = cuello</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_cuello</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">adenopatias</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">latidos_patologicos</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Tórax = torax</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_torax</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">ruidos_cardiacos</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">examen_pulmonar</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Abdomen = abdomen</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_abdomen</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">higado</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">intestinos</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">anexos</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">hernias</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">genito_urinario</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">miembros_superiores</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">miembros_inferiores</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">columna_vertebral</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">sistema_osteoarticular</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">sistema_nerviono_central</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">sistema_periferico</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">examenes_complementarios</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Evaluación = evaluacion</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_evaluacion</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">es_apto</th>
                <th scope="row">0 para NO, 1 para sí (Es una particularidad de las bases de datos)</th>
            </tr>
            <tr>
                <th scope="row">observaciones</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <h3>Antecedentes heredofamiliares = antecedentes_heredoFamiliares</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre columnas</th>
                <th scope="col">Caracteres permitidos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">id_antecedentes_heredoFamiliares</th>
                <th scope="row">Números</th>               
            </tr>
            <tr>
                <th scope="row">vinculo_familiar</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">vivo</th>
                <th scope="row">0 para NO, 1 para sí (Es una particularidad de las bases de datos)</th>
            </tr>
            <tr>
                <th scope="row">muerto</th>
                <th scope="row">0 para NO, 1 para sí (Es una particularidad de las bases de datos)</th>
            </tr>
            <tr>
                <th scope="row">causas</th>
                <th scope="row">Letras, números y síbolos (excepto comillas simples [ ' ] )</th>
            </tr>
            <tr>
                <th scope="row">observaciones</th>
                <th scope="row">año, mes, día; separados por guión medio(AAAA-MM-DD)</th>
            </tr>
            <tr>
                <th scope="row">legajo_personal_id_legajo_personal</th>
                <th scope="row">Número de legajo al que corresponde la carga</th>
            </tr>
        </tbody>
    </table>

    <hr>
    <footer>
        &copy; Sitio realizado por Raúl G. Guanca
        <address>
           Contact <a href="mailto:raulgguanca@gmail.com">me</a>
        </address>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
