<?php

require_once('conectar.php');

$serie = $_POST['serie'];
$temperatura = $_POST['temperatura'];

mysqli_query($conexion,"INSERT INTO `datos` (`id`, `fecha`, `serie`, `temperatura`) VALUES (NULL, CURRENT_TIMESTAMP, 'serie', 'temperatura');");
mysqli_close($conexion);

echo "Datos Ingresados Correctamente";

 ?>
