<?php
//error_reporting(1);
include("validarSesion.php");

//declarando variables para la conexión

$servidor = "localhost";
$usuario = "root";
$contrasenha = "";
$BD = "baseProyecto";

// Creando la conexión

$conexion = mysqli_connect($servidor, $usuario, $contrasenha, $BD);

// Verificando la conexión

if (!$conexion) {
    echo "Falló la conexión <br>";
    die("Connection failed: " . mysqli_connect_error());

}
/*
else {
    echo "Conexión exitosa";
}
*/
?>
