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
    <title>Descargas</title>
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
    <br>

    <h3>Descargas destacadas:</h3><br>    
    
    <button class="btn btn-light" type="button"><a href="../php/expPersD.php">Exportar todos los datos personales</a></button> 
    <button class="btn btn-light" type="button"><a href="../php/expAsc.php">Exportar todos los datos de ascensos</a></button> 
    <button class="btn btn-light" type="button"><a href="instructivo.html" target="_blank">Ver instructivo</a></button> 
    <hr>
    <h3>Todas las descargas:</h3><br>
    
    <button type="button" class="btn"><a href="../php/descargas/expCursJer.php">Cursos de jerarquía</a></button>
    <button type="button" class="btn"><a href="../php/descargas/expAltAscBaj.php">Altas, Ascensos y bajas</a></button>
    <button type="button" class="btn"><a href="../php/descargas/expFuncYCarg.php">Funciones y cargos</a></button>
    <button type="button" class="btn"><a href="../php/descargas/expNacioEn.php">Datos de nacimiento</a></button><br><hr>
    <button type="button" class="btn"><a href="../php/descargas/expExaMed.php">Datos de Examen médico</a></button><br>
    <button type="button" class="btn"><a href="../php/descargas/expAntcPers.php">Antecedentes médicos personales</a></button>
    <button type="button" class="btn"><a href="../php/descargas/expTensArt.php">Datos de Tensión arterial</a></button>
    <button type="button" class="btn"><a href="../php/descargas/expCabYSent.php">Datos médicos de Cabeza y Sentidos</a></button>
    <button type="button" class="btn"><a href="../php/descargas/expCuello.php">Datos médicos de cuello</a></button>
    <button type="button" class="btn"><a href="../php/descargas/expTorax.php">Datos médicos de Tórax</a></button>
    <button type="button" class="btn"><a href="../php/descargas/expAbdom.php">Datos médicos del Abdomen</a></button>
    <button type="button" class="btn"><a href="../php/descargas/expEvaMed.php">Datos de evaluación médica</a></button>
    <button type="button" class="btn"><a href="../php/descargas/expAntHerfam.php">Antecedentes heredofamiliares</a></button>

    <br><br>

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
