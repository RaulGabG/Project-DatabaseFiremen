<?php
error_reporting(1);
include("validarSesion.php");
include("conexion.php");

session_start();

$_SESSION['login'] = false;

$id = $_POST['name'];
$password = $_POST['contrasenha'];

//Evaluar Id

$consulta = "SELECT * FROM usuarios WHERE usuario = '$id' ";

$consulta = mysqli_query($conexion, $consulta);

$consulta = mysqli_fetch_array($consulta);

$hash = password_hash($consulta['passw'], PASSWORD_DEFAULT);

if ($consulta)
      {
        if (password_verify($password, $hash)) {
            $_SESSION['login'] = true;
            $_SESSION['name'] = $consulta['usuario'];
            header('Location: ../pages/pagPrinc.php');
        }
        else
         {
            echo "Contraseña incorrecta";
            echo "<br><a href='../index.html'>Intente de nuevo</a></div>";
        }

    }
    
     else
    
    {
            echo "El usuario no exite";
            echo "<br><a href='../index.html'>Intente de nuevo</a></div>";
        
      }
    
mysqli_close($conexion);

?>