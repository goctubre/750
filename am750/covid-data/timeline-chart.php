<?php
$timeline='{"app":"dashboard","requestId":"Q107","timezone":"","panelId":14,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-07-01T17:30:29.792Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"6h","intervalMs":21600000,"targets":[{"data":null,"target":"evolucion_aplicaciones_total_pais","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":629,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1625160604890","value":"1625160604890"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"6h","value":"6h"},"__interval_ms":{"text":"21600000","value":21600000}},"startTime":1625160650950,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$timeline,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: 73d722d882eb4c053e0af0e892680cb4=ba2bcce18ff1a8088d25d07973539530'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;
$array = json_decode($response)[0]->datapoints;


// $options = [
//     'body'        => $timeline,
//     'timeout'     => 9999999,
//     'headers'     => [
//         'Content-Type' => 'application/json',
//     ],'data_format' => 'body'
// ];


// $result = wp_remote_post( $endpoint, $options );


// $array = json_decode($result['body'])[0]->datapoints;

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js?callback=start2" async></script>
<script type="text/javascript">
  function start2(){
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
  }
  

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Fecha', 'Aplicaciones'],

      <?php $removed = array_pop($array);
      foreach ($array as $key => $value) {
      	$seconds = $value[1] / 1000;
        $fecha = date("d-m", $seconds);
        $d = date("d", $seconds);
        $m = date("m", $seconds);
		    $y = date("Y", $seconds);
      	echo '[new Date('.$value[1].'),  '.$value[0].'],';
      }?>
      
    ]);


    var options = {
      lineWidth: 2,
      hAxis: {title: 'Fecha',  titleTextStyle: {color: '#333'},format: 'd/M/Y'},
      colors: ['#009FD4'],
      legend: { position: 'top',alignment: 'center' },
      vAxis: {title: 'Aplicaciones'},
      backgroundColor: { fill:'transparent' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

    var date_formatter = new google.visualization.DateFormat({ 
        pattern: 'd/M/Y'
    }); 
    date_formatter.format(data, 0); 

    chart.draw(data, options);



  }
</script>
<div class="info">
    <h2 class="pt-6 mb-4-mobile has-text-centered ">Cómo evoluciona la aplicación de vacunas día por día</h2>     
    <p class=" has-text-centered">
      El objetivo del plan de vacunación nacional es inmunizar al 52% de la población, es decir a <a href="https://www.argentina.gob.ar/sites/default/files/coronavirus-vacuna-plan-estrategico-vacunacion-covid-19-diciembre-2020.pdf" target="_blank">24 millones</a> de personas. El siguiente gráfico permite seguir su avance día por día.
    </p>
</div>
    <div id="chart_div" class="mt-6" style="width: 100%; height: 300px;"></div>
 
