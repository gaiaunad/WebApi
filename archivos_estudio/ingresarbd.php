<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$bd = "frigorifico";

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $bd);

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito!" . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;

mysqli_query($conexion,"INSERT INTO `datos` (`id`, `fecha`, `serie`, `temperatura`) VALUES (NULL, CURRENT_TIMESTAMP, '1', '1');");
mysqli_close($conexion);

echo "Datos Ingresados Correctamente";

 ?>
