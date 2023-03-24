<?php
error_reporting(1);
session_start();

$login = $_SESSION['login'];



if (!$login) {
    header('Location: ../index.html');
}
else {
    $name = $_SESSION['name'];
}

?>