<?php

include 'conectar.php';


$Serie = "777";
$Mes = "11";
$Dia = "09";

$Intervalo = 0;

//temperatura_diaria("$Serie","$Intervalo","$Mes","$Dia");

function temperatura_diaria ($Serie,$Intervalo,$Mes,$Dia) {
	include('conectar.php');
	$Ano=date("Y");

	$Resultado=mysqli_query($conexion,"SELECT UNIX_TIMESTAMP(Fecha),
	Temperatura FROM datos WHERE year(`Fecha`) = '$Ano'
	AND month(`Fecha`) = '$Mes' AND day(`Fecha`) = '$Dia' AND `Serie`= '$Serie'");

	while ($Row=mysqli_fetch_array($Resultado))

	{
		echo "[";
		echo $Row[0]*1000;
		echo ",";
		echo $Row[1];
		echo "],";

		for ($x=0;$x<$Intervalo;$x++)
		{
			$Row=mysqli_fetch_array($conexion, $Resultado);
		}
	}

	mysqli_close($conexion);
}


?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<div id="container" style="width: 100%; height: 400px;"></div>

<script type="text/javascript">
  Highcharts.chart('container', {
		chart:{
			type: 'spline',
			zoomType: 'x',
		},
		colors: ['#337ab7', '#cc3c1a'],
    title: {
      text: 'Proyecto Acuaponico UNAD'
    },
    subtitle: {
      text: 'Source: www.iotcorp.epizy.com'
    },
    xAxis: {
      type: 'datetime',
    },
		yAxis: {
      title:{
				text: 'Temperatura',
			}
    },
    series: [{
      name: 'Dispositivo 777',
      data: [<?php  temperatura_diaria("$Serie","$Intervalo","$Mes","$Dia");?>]
    }, {
      name: 'Dispositivo 776',
      data: [<?php  temperatura_diaria("776","$Intervalo","$Mes","$Dia");?>]
    }],

    responsive: {
      rules: [{
        condition: {
          maxWidth: 500
        },
        chartOptions: {
          legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
          }
        }
      }]
    }

  });
</script>
