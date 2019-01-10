<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$bd = "plataformaiotunad";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $bd);

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_query($conexion,"SET NAMES 'UTF8'");
//echo "Éxito!" . PHP_EOL;
//echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;

 ?>
