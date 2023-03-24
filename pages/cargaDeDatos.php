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
    <title>Carga de datos</title>
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

    <h2 class="subt">Cargar legajo a la base de datos:</h2>
    <button class="btn btn-light" type="button"><a href="instructivo.html" target="_blank">Ver instructivo</a></button>
    <button class="btn btn-light" type="button"><a href="formatos.php" target="_blank">Formatos para cargar</a></button><br><br>
    <br><br>

    <section>
    <div id="legajoPersonal">
         <form method="POST" action="../php/cargarLegajo.php">
          <h3>Legajo</h3><br>
          <label for="html">Legajo</label>
          <input type="number" name="idLeg" required><br><br>
          <label for="html">Apellido</label>
          <input type="text" name="apellido" required><br><br>
          <label for="html">Nombre</label>
          <input type="text" name="nombre" required><br><br>
          <label for="html">DNI</label>
          <input type="number" name="dni" required><br><br>
          <label for="html">Fecha de nacimiento</label>
          <input type="text" name="fechaNac" placeholder="AAAA-MM-DD" required><br><br>
          <label for="html">¿Estudios aprobados?</label>
          <input type="number" name="estApr" placeholder="0 para no, 1 para sí" required><br><br>
          <label for="html">Estado civil</label>
          <input type="text" name="estCiv" required><br><br>
          <label for="html">Hijos</label>
          <input type="number" name="hijos" required><br><br>
          <label for="html">Grupo Sanguíneo</label>
          <input type="text" name="grupSang" required><br><br>
          <label for="html">Factor</label>
          <input type="text" name="factor" required><br><br>
          <label for="html">¿Es donante?</label>
          <input type="number" name="esDon" placeholder="0 para no, 1 para sí" required><br><br>
          <label for="html">Ingresó a BV de:</label>
          <input type="text" name="ingrBVD" placeholder="Nombre Institución" required><br><br>
          <label for="html">Fecha de ingreso</label>
          <input type="text" name="fechDIngr" placeholder="AAAA-MM-DD" required><br><br>
          <label for="html">Grado con el que ingresa</label>
          <input type="text" name="gradConElQueIngr" required><br><br>
          <label for="html">Jerarquía Actual</label>
          <input type="text" name="jerarquiaActual" required><br><br>
          <label for="html">Celular</label>
          <input type="text" name="celular" required><br><br>
          <label for="html">Fijo</label>
          <input type="text" name="fijo" required><br><br>
          <label for="html">E-mail</label>
          <input type="text" name="email" required><br><br>
          <label for="html">Carpeta de Drive</label>
          <input type="text" name="drive" placeholder="si no tiene: null" required><br><br>
          <input class="btn btn-primary" id="btnEnv" type="submit" name="enviar" value="Enviar">
         </form>
    </div>
    </section>

    <h2 class="subt">Cargar domicilio a la base de datos:</h2>

    <section>   
       <div id="domicilio">
         <div class="form">
          <form method="POST" action="../php/cargarDomicilio.php">
             <h3>Datos domicilio</h3><br>
             <label for="html">Calle</label>
             <input type="text" name="calle" required><br><br>
             <label for="html">Número</label>
             <input type="number" name="numero" required><br><br>
             <label for="html">Piso/Dpto</label>
             <input type="text" name="pisoDpto" required><br><br>
             <label for="html">Código Postal</label>
             <input type="number" name="codigoPostal" required><br><br>
             <label for="html">Ciudad</label>
             <input type="text" name="ciudad" required><br><br>
             <label for="html">Provincia</label>
             <input type="text" name="provincia" required><br><br>
             <label for="html">País</label>
             <input type="text" name="pais" required><br><br>
             <label for="html">Legajo</label>
             <input type="number" name="idLegajoPersonal" required><br><br>
             <input class="btn btn-primary" id="enviarDom" type="submit" name="enviar" value="Enviar">
          </form>
         </div>        
       </div>
    </section>
    
    <h2 class="subt">Cargar ascensos a la base de datos:</h2>

    <section>
    <div id="ascensos">
        <div class="form">
           <form method="POST" action="../php/cargarAscensos.php">
            <h3>Ascensos</h3><br>
            <label for="html">Fecha</label>
            <input type="text" name="date" placeholder="AAAA-MM-DD" required><br><br>
            <label for="html">Número de Acta</label>
            <input type="text" name="actaNum" required><br><br>
            <label for="html">Órden Jefatura N°</label>
            <input type="text" name="ordJef" required><br><br>
            <label for="html">Ascenso al grado de</label>
            <input type="text" name="ascGrado" required><br><br>
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarAsc" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar Cursos de Jerarquía</h2>

    <section>
        <div id="cursosJer">
            <div class="form">
               <form method="POST" action="../php/cargas/cargarCursDeJerar.php">
                <h3>Cursos de Jerarquía</h3><br>
                <label for="html">Fecha</label>
                <input type="text" name="date" placeholder="AAAA-MM-DD" required><br><br>
                <label for="html">Curso</label>
                <input type="text" name="curso" required><br><br>
                <label for="html">Escuela</label>
                <input type="text" name="escuela" required><br><br>
                <label for="html">Observaciones</label>
                <input type="textarea" name="observ" required><br><br>
                <label for="html">Legajo</label>
                <input type="number" name="idLegajoPersonal" required><br><br>   
                <input class="btn btn-primary" id="enviarCursJer" type="submit" name="enviar" value="Enviar">
               </form>
            </div>
    </section>

    <h2 class="subt">Cargar Atas, Ascensos y bajas:</h2>

    <section>
    <div id="altasAscBajas">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarAltasAscBaj.php">
            <h3>Altas, ascensos y bajas</h3><br>
            <label for="html">Legajo</label>
            <input type="number" name="legajo" required><br><br>
            <label for="html">Fecha</label>
            <input type="text" name="date" placeholder="AAAA-MM-DD" required><br><br>
            <label for="html">Detalle</label>
            <input type="textarea" name="detalle" required><br><br>
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarAAB" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar Funciones y cargos:</h2>

    <section>
    <div id="funcionesYCargos">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarFuncYCar.php">
            <h3>Funciones y cargos</h3><br>
            <label for="html">Cargo o función</label>
            <input type="text" name="cargOFun" required><br><br>
            <label for="html">Período</label>
            <input type="text" name="date" placeholder="AAAA-MM-DD" required><br><br>
            <label for="html">Jurisdicción</label>
            <input type="text" name="jurisd" required><br><br>
            <label for="html">Sistema u objetivo</label>
            <input type="text" name="sistUOb" required><br><br>
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarFuncYC" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar Datos de nacimiento:</h2>

    <section>
    <div id="nacioEn">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarNacioEn.php">
            <h3>Nacio en</h3><br>
            <label for="html">Ciudad</label>
            <input type="text" name="ciudad" required><br><br>
            <label for="html">Provincia</label>
            <input type="text" name="provinc" required><br><br>
            <label for="html">País</label>
            <input type="text" name="pais" required><br><br>
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarNacEn" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar examen médico:</h2>

    <section>
    <div id="exaMend">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarExamenMed.php">
            <h3>Examen médico</h3><br>
            <label for="html">Talla</label>
            <input type="text" name="talla" required><br><br>
            <label for="html">Peso</label>
            <input type="text" name="peso" required><br><br>
            <label for="html">Sexo</label>
            <input type="text" name="sexo" required><br><br>
            <label for="html">Grupo sanguíneo</label>
            <input type="text" name="grupoSang" required><br><br>
            <label for="html">Factor</label>
            <input type="text" name="factor" required><br><br>
            <label for="html">Contextura</label>
            <input type="text" name="contextura" required><br><br>
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarExaMed" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar antecedentes personales:</h2>

    <section>
    <div id="antecPers">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarAntPers.php">
            <h3>Antecedentes personales</h3><br>
            <label for="html">Enfermedades</label>
            <input type="text" name="enfer" required><br><br>
            <label for="html">Operaciones</label>
            <input type="text" name="operac" required><br><br>
            <label for="html">Hábitos</label>
            <input type="text" name="habit" required><br><br>
            <label for="html">Alergias a medicamentos</label>
            <input type="text" name="alergMed" required><br><br>
            <label for="html">Otras Alergias</label>
            <input type="text" name="alergOtrs" required><br><br>
            <label for="html">Indentificantes Físicos</label>
            <input type="text" name="identFisic" required><br><br>
            <label for="html">Estado dental</label>
            <input type="text" name="estDent" required><br><br>
            <label for="html">Examen bucal</label>
            <input type="text" name="examBuc" required><br><br>
            <label for="html">Observaciones</label>
            <input type="textarea" name="observ" required><br><br>
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarAntPers" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar datos de tensión arterial:</h2>

    <section>
    <div id="tensArt">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarTensArt.php">
            <h3>Tensión arterial</h3><br>
            <label for="html">Sentado</label>
            <input type="text" name="sentado" required><br><br>
            <label for="html">Parado</label>
            <input type="text" name="parado" required><br><br>
            <label for="html">acostado</label>
            <input type="text" name="acostado" required><br><br>
            <label for="html">Pulso</label>
            <input type="text" name="pulso" required><br><br>
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarTensArt" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar datos de Cabeza y sentidos:</h2>

    <section>
    <div id="cabSent">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarCabSent.php">
            <h3>Cabeza y sentidos</h3><br>            
            <label for="html">Oído</label>
            <input type="text" name="oido" required><br><br>
            <label for="html">Vista</label>
            <input type="text" name="vista" required><br><br>
            <label for="html">Tacto</label>
            <input type="text" name="tacto" required><br><br>
            <label for="html">Olfato</label>
            <input type="text" name="olfato" required><br><br>
            <label for="html">Gusto</label>
            <input type="text" name="gusto" required><br><br>
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarCabSent" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar datos médicos de cuello:</h2>

    <section>
    <div id="cuello">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarCuello.php">
            <h3>Cuello</h3><br>            
            <label for="html">Adenopatias</label>
            <input type="text" name="andenop" required><br><br>
            <label for="html">Latidos patológicos</label>
            <input type="text" name="latPat" required><br><br>
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarCuello" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar datos médicos de tórax:</h2>

    <section>
    <div id="torax">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarTorax.php">
            <h3>Tórax</h3><br>            
            <label for="html">Ruidos cardíacos</label>
            <input type="text" name="ruidCard" required><br><br>
            <label for="html">Examen pulmonar</label>
            <input type="text" name="examPulm" required><br><br>            
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarTorax" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar datos médicos de abdomen:</h2>

    <section>
    <div id="abdomen">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarAbdom.php">
            <h3>Abdomen</h3><br>            
            <label for="html">Hígado</label>
            <input type="text" name="higado" required><br><br>
            <label for="html">Intestinos</label>
            <input type="text" name="intest" required><br><br>
            <label for="html">Anexos</label>
            <input type="text" name="anexos" required><br><br>
            <label for="html">Hernias</label>
            <input type="text" name="hernias" required><br><br>
            <label for="html">Genito urinario</label>
            <input type="text" name="genitUr" required><br><br>
            <label for="html">Miembros superiores</label>
            <input type="text" name="miembSup" required><br><br>
            <label for="html">Miembros inferiores</label>
            <input type="text" name="miembInf" required><br><br>
            <label for="html">Columna vertebral</label>
            <input type="text" name="columVert" required><br><br>
            <label for="html">Sistema osteoarticular</label>
            <input type="text" name="sistOstArt" required><br><br>
            <label for="html">Sistema nervioso central</label>
            <input type="text" name="sistNerCent" required><br><br>
            <label for="html">Sistema periférico</label>
            <input type="text" name="sistPer" required><br><br>
            <label for="html">Examenes complementarios</label>
            <input type="text" name="examComp" required><br><br>            
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarAbd" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar Evaluación médica:</h2>

    <section>
    <div id="evalMed">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarEvMed.php">
            <h3>Evaluación médica</h3><br>            
            <label for="html">¿Es apto?</label>
            <input type="number" name="esApto" required><br><br>
            <label for="html">Observaciones</label>
            <input type="textarea" name="observ" required><br><br>            
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarEvMed" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

    <h2 class="subt">Cargar Antecedentes heredofamiliares:</h2>

    <section>
    <div id="antHerFam">
        <div class="form">
           <form method="POST" action="../php/cargas/cargarAntHerfam.php">
            <h3>Antecedentes heredofamiliares</h3><br>            
            <label for="html">Vínculo familiar</label>
            <input type="text" name="vincFam" required><br><br>
            <label for="html">¿Vivo?</label>
            <input type="number" name="vivo" required><br><br>
            <label for="html">¿Muerto?</label>
            <input type="number" name="muerto" required><br><br>
            <label for="html">Causas</label>
            <input type="text" name="causas" required><br><br>
            <label for="html">Observaciones</label>
            <input type="textarea" name="observ" required><br><br>
            <label for="html">Legajo</label>
            <input type="number" name="idLegajoPersonal" required><br><br>   
            <input class="btn btn-primary" id="enviarAsc" type="submit" name="enviar" value="Enviar">
           </form>
        </div>
    </section>

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
