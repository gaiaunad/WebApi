<?php
require_once('conectar.php');
for($i=0;$i<30;$i++)
{
  $serie = rand(777,774);
  $temperatura = rand(20,40);
  sleep(1);
  mysqli_query($conexion,"INSERT INTO `datos` (`id`, `fecha`, `serie`, `temperatura`) VALUES (NULL, CURRENT_TIMESTAMP, '$serie', '$temperatura');");
}
  mysqli_close($conexion);

  echo "Datos Ingresados Correctamente";

 ?>
