<?php 

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_URL, "https://ws.smn.gob.ar/map_items/weather");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);

    $res = json_decode($res, true);

    $ciudad = array_search('Capital Federal', array_column($res, 'name')); 
    $tiempo = $res[$ciudad]['weather']['description'];
    $tiempo = strtolower(str_replace(' ', '_', $tiempo));

    iconitoimg($tiempo);
    echo $res[$ciudad]['weather']['temp']. "°";
    echo '<span class="is-hidden-mobile">  - Capital Federal </span>';

    
    function iconitoimg($tiempo) {

        $path = get_stylesheet_directory_uri();
        $path = str_replace('https:', '', $path ); 

        // DESPEJADO 
        if (strpos($tiempo, 'despejado') !== false) {
            $icono = "despejado";
    
        // NEBLINA - BRUMA
        } else if (strpos($tiempo, 'neblina') !== false || strpos($tiempo, 'bruma') !== false) {
           $icono = "algo_nublado_con_niebla";
    
        //VIENTO
        } else if (strpos($tiempo, 'ventizca') !== false || strpos($tiempo, 'viento') !== false) {
            $icono = "viento";
    
        // NEVADA - HIELO
        } else if (strpos($tiempo, 'nevada') !== false || strpos($tiempo, 'hielo') !== false) {
           $icono = "algo_nublado_con_nevada";
           
        // TORMENTA - RELAMPAGOS
        } else if (strpos($tiempo, 'tormenta') !== false ) {
          $icono = "nublado_con_tormenta";
        
        //TORNADO
        } else if (strpos($tiempo, 'tornado') !== false ) {
           $icono = "nublado_tornado";
    
        //NUBLADO - CUBIERTO
       } else if (strpos($tiempo, 'nublado') !== false || strpos($tiempo, 'cubierto') !== false) {
            // ALGO NUBLADO - PARCIALMENTE
            if (strpos($tiempo,'algo') !== false || strpos($tiempo,'parcialmente') !== false) {
                
                if (strpos($tiempo,'llovizna') !== false) {    
                    //  ALGO NUBLADO - PARCIALMENTE  LLOVIZNA - CHAPARRON - PRECIPITACIÓN
                    $icono = "algo_nublado_con_llovizna";

                } else  if (strpos($tiempo,'lluvia') !== false || strpos($tiempo,'con precipitac') !== false  || strpos($tiempo,'chaparr') !== false ) {
                    //  ALGO NUBLADO - PARCIALMENTE - LLUVIA  - CHAPARRON - PRECIPITACIÓN
                    $icono = "algo_nublado_con_llovizna";
    
                //  ALGO NUBLADO - PARCIALMENTE
                } else {
                    $icono = "algo_nublado";
                }
                
            // NUBLADO - CUBIERTO
            } else {
               if (strpos($tiempo,'llovizna') !== false) {    
                //  ALGO NUBLADO - PARCIALMENTE - LLUVIA -  LLOVIZNA - CHAPARRÓN - PRECIPITACIÓN
                    $icono = "nublado_con_llovizna";
                } elseif (strpos($tiempo,'lluvia') !== false || strpos($tiempo,'con precipitación') !== false || strpos($tiempo,'chaparr') !== false){
                	$icono = "nublado_con_lluvia";
                } else {
                    $icono = "nublado";
                } 
            }
    
    
        //CIELO INVISIBLE
        } else if (strpos($tiempo, 'invisible') !== false) {
            $icono = "clima_niebla";
         } 

      echo "<img width='30' height='30' alt='$tiempo' src='".$path."/img/clima/clima_".$icono.".svg'>";
    }
    
curl_close($ch); 

?>