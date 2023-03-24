<?php

error_reporting(1);

include("validarSesion.php");
include("conexion.php");

$idLegajoPersonal = $_POST['idLegajoPersonal'];

$consultaId = "SELECT * FROM legajo_personal WHERE id_legajo_personal = '$idLegajoPersonal' ";

$consultaId = mysqli_query($conexion, $consultaId);

$consultaId = mysqli_fetch_array($consultaId);


if($consultaId) {
        $sql2 = "DELETE FROM domicilio WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
        if (mysqli_query($conexion, $sql2)) {
    
            echo "<br> ¡Se borró el Domiclio!</div>";
    
          }  
          else {
              echo "<br> Error: " . $sql2 . "<br>" . mysqli_error($conexion);
              echo "<br> <a href='../pages/borrarDatos.php'>Volver atrás</a></div>";
          }  
        }
       
if($consultaId) {
        $sql3 = "DELETE FROM ascensos WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
        
        if (mysqli_query($conexion, $sql3)) {                    
            echo "<br> ¡Se borraron los datos de Ascensos!</div>";
}  
else {
      echo "<br> Error: " . $sql3 . "<br>" . mysqli_error($conexion);
      }  
}

if($consultaId) {
    $sql4 = "DELETE FROM cursos_de_jerarquia WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql4)) {                    
        echo "<br> ¡Se borraron los datos de Cursos de Jerarquía!</div>";
}  
else {
  echo "<br> Error: " . $sql4 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql5 = "DELETE FROM altas_ascensos_bajas WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql5)) {                    
        echo "<br> ¡Se borraron los datos de Altas, ascensos y bajas!</div>";
}  
else {
  echo "<br> Error: " . $sql5 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql6 = "DELETE FROM funciones_y_cargos WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql6)) {                    
        echo "<br> ¡Se borraron los datos de Funciones y cargos!</div>";
}  
else {
  echo "<br> Error: " . $sql6 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql7= "DELETE FROM nacio_en WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql7)) {                    
        echo "<br> ¡Se borraron los datos de Nacimiento!</div>";
}  
else {
  echo "<br> Error: " . $sql7 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql8 = "DELETE FROM examen_medico WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql8)) {                    
        echo "<br> ¡Se borraron los datos de Examen médico!</div>";
}  
else {
  echo "<br> Error: " . $sql8 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql9 = "DELETE FROM antecedentes_personales WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql9)) {                    
        echo "<br> ¡Se borraron los datos de Antecedentes personales!</div>";
}  
else {
  echo "<br> Error: " . $sql9 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql10 = "DELETE FROM tension_arterial WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql10)) {                    
        echo "<br> ¡Se borraron los datos de Tensión arterial!</div>";
}  
else {
  echo "<br> Error: " . $sql10 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql11 = "DELETE FROM cabeza_sentidos WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql11)) {                    
        echo "<br> ¡Se borraron los datos de Cabeza y sentidos!</div>";
}  
else {
  echo "<br> Error: " . $sql11 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql12 = "DELETE FROM cuello WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";    
    if (mysqli_query($conexion, $sql12)) {                    
        echo "<br> ¡Se borraron los datos médicos de Cuello!</div>";
}  
else {
  echo "<br> Error: " . $sql12 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql13 = "DELETE FROM torax WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql13)) {                    
        echo "<br> ¡Se borraron los datos médicos de Tórax!</div>";
}  
else {
  echo "<br> Error: " . $sql13 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql14 = "DELETE FROM abdomen WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql14)) {                    
        echo "<br> ¡Se borraron los datos médicos de Abdomen!</div>";
}  
else {
  echo "<br> Error: " . $sql14 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql15 = "DELETE FROM evaluacion WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql15)) {                    
        echo "<br> ¡Se borraron los datos de Evaluación médica!</div>";
}  
else {
  echo "<br> Error: " . $sql15 . "<br>" . mysqli_error($conexion);
  }  
}

if($consultaId) {
    $sql16 = "DELETE FROM antecedentes_heredoFamiliares WHERE legajo_personal_id_legajo_personal = $idLegajoPersonal";
    
    if (mysqli_query($conexion, $sql16)) {                    
        echo "<br> ¡Se borraron los datos de Antecedentes heredofamiliares!</div>";
}  
else {
  echo "<br> Error: " . $sql16 . "<br>" . mysqli_error($conexion);
  }  
}           
            
if($consultaId) {
    $sql1 = "DELETE FROM legajo_personal WHERE id_legajo_personal = $idLegajoPersonal";
            
    if (mysqli_query($conexion, $sql1)) {
            
        echo "<br> ¡Se borraron los Datos personales!</div>";
                              
        echo "<br><br> <a href='../pages/pagPrinc.php'>Página Principal</a></div>";
        echo "<br><br> <a href='cerrarSesion.php'>Cerrar sesión</a></div>";
    }  
     else {
           echo "<br> Error: " . $sql1 . "<br>" . mysqli_error($conexion);
           echo "<br> <a href='../pages/borrarDatos.php'>Volver atrás</a></div>";
        }  
}
else {
     echo "<br> <strong>¡Error: Datos incorrectos o inexitentes!<br>";
     echo "<br><strong><a href='../pages/borrarDatos.php'>Volver atrás</a></strong><br></div>";
}

mysqli_close($conexion);

?>