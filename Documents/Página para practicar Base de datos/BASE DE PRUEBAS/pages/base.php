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
    <title>Legajos</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark pruebasAlert">
            <div class="container-fluid">
              <span class="navbar-text"><strong>BASE DE PRUEBAS</strong></span>
            </div>
        </nav>
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

    <section>
        <div id="busqueda">
            <div class="form">
               <form method="POST" action="../php/busqbase.php">
                <h3>Buscar por legajo</h3><br>
                <label for="html">Legajo</label>
                <input type="number" name="idLegajoPersonal" required><br><br>   
                <input class="btn btn-primary" id="enviarAsc" type="submit" name="enviar" value="Enviar">
               </form>
            </div>
    </section>

    <button class="btn btn-light" type="button"><a href="../php/expPersD.php">Exportar todos los datos personales</a></button> 
    <button class="btn btn-light" type="button"><a href="../php/expAsc.php">Exportar todos los datos de ascensos</a></button> 
    <button class="btn btn-light" type="button"><a href="instructivo.html" target="_blank">Ver instructivo</a></button> 
    <hr>
    <button class="btn btn-light" type="button"><a href="../pages/exportar.php">Ver otras descargas</a></button> 
        <br><br>

        <section>
            <H2>Legajos</H2><br>
            <?php
            $consulta = "SELECT * FROM legajo_personal ORDER BY apellido";
            $datos =  mysqli_query($conexion, $consulta);
            WHILE ($fila = mysqli_fetch_array($datos)) {
            ?>

            <section class="datosExp card mat-card">
                <h3 class="text-start"><strong><?php echo $fila['apellido']?>, <?php echo $fila['nombres']?></strong></h3><br>
                <p>Legajo: <span style="color: #20b2aa;"><?php echo $fila['id_legajo_personal']?></span></p><br>
                <p>DNI: <span style="color: #20b2aa;"><?php echo $fila['dni']?></span></p><br>
                <p>Fecha de nacimiento: <span style="color: #20b2aa;"><?php echo $fila['fecha_nacimiento']?></span></p><br>
                <p>Estudios aprobados: <span style="color: #20b2aa;"><?php echo $fila['estudios_aprobados']?></span></p><br>
                <p>Estado civil: <span style="color: #20b2aa;"><?php echo $fila['estado_civil']?></span></p><br>
                <p>Hijos: <span style="color: #20b2aa;"><?php echo $fila['hijos']?></span></p><br>
                <p>Grupo sanguíneo: <span style="color: #20b2aa;"><?php echo $fila['grupo_sanguineo'] . " " .$fila['factor'] ?></span></p><br>
                <p>Es donante?: <span style="color: #20b2aa;"><?php echo $fila['es_donante']?></span></p><br>
                <p>Ingresó a BB VV de: <span style="color: #20b2aa;"><?php echo $fila['ingreso_a_bb_vv_de']?></span></p><br>
                <p>Fecha de ingreso: <span style="color: #20b2aa;"><?php echo $fila['fecha_ingreso_bb_vv']?></span></p><br>
                <p>Grado con el que ingresa: <span style="color: #20b2aa;"><?php echo $fila['grado_con_el_que_ingresa']?></span></p><br>
                <p>Jerarquía actual: <span style="color: #20b2aa;"><?php echo $fila['jerarquia_actual']?></span></p><br>
                <p>Celular: <span style="color: #20b2aa;"><?php echo $fila['celular']?></span></p><br>
                <p>Fijo: <span style="color: #20b2aa;"><?php echo $fila['fijo']?></span></p><br>
                <p>E-Mail: <span style="color: #20b2aa;"><?php echo $fila['e_mail']?></span></p><br>
                <p>Carpeta: <a href="<?php echo $fila['archivo']?>" target="_blank">Ir a Drive</a></p><br>               
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
