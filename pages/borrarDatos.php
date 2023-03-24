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
    <title>Borrar Datos</title>
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

    <div id="borrar">
        <div class="form">
          <form method="POST" action="../php/borrarDatoEspec.php">
          <h3>Borrar datos (!)</h3><br>
          <button class="btn btn-light" type="button"><a href="instructivo.html" target="_blank">Ver instructivo</a></button>
          <button class="btn btn-light" type="button"><a href="formatos.php" target="_blank">Formatos para cargar</a></button><br><br>
          <h5><strong>¡Esta acción borra todo lo ingresado en el id!</strong> (Solo usar en caso de error para para modificar)</h5><br>
          <label for="html">Nombre de la tabla</label>
          <input type="text" name="tipo1" placeholder="legajo_personal/domicilio/ascensos" required><br><br>
          <label for="html">Columna del Id de referencia</label>
          <input type="text" name="columnId" placeholder="id_legajo_personal/id_domicilio/id_ascensos" required><br><br>
          <label for="html">Numero de Id</label>
          <input type="number" name="idPK" required><br><br>      
          <input class="btn btn-warning" id="enviarDel" type="submit" name="enviar" value="Enviar">
          </form>
        </div>       
    </div>

    <hr>

    <h2>Borrar legajo <strong><u>completo</u></strong> de la base de datos <strong>(!)</strong></h2><br>
    <h4><strong>¡Esta acción no se puede deshacer!</strong> (Todos los datos serán borrados)</h4>
    <button class="btn btn-light" type="button"><a href="instructivo.html" target="_blank">Ver instructivo</a></button> 
    <button class="btn btn-light" type="button"><a href="formatos.php" target="_blank">Formatos para cargar</a></button><br><br>
    <br><hr>
    
    
    <div id="borrar">
        <div class="form">
          <form method="POST" action="../php/delDatos.php">
          <h3>Legajo a borrar:</h3><br>
          <label for="html">Legajo</label>
          <input type="number" name="idLegajoPersonal" required><br><br>   
          <input class="btn btn-danger" id="enviarDel" type="submit" name="enviar" value="Enviar">
          </form>
        </div>       
    </div>
    
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
