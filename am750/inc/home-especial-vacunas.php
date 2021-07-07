<?php 
$endpoint = 'https://coronavirus.msal.gov.ar/vacunas/d/8wdHBOsMk/seguimiento-vacunacion-covid/api/datasources/proxy/1/query';
$totalDocis='{"app":"dashboard","requestId":"Q103","timezone":"","panelId":10,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-05-10T21:23:42.828Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"12h","intervalMs":43200000,"targets":[{"data":null,"target":"distribucion_total_aplicaciones","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":100,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1620681822389","value":"1620681822389"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"12h","value":"12h"},"__interval_ms":{"text":"43200000","value":43200000}},"cacheTimeout":null,"startTime":1620681822830,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';

$options = [
    'body'        => $totalDocis,
    'timeout'     => 9999999,
    'headers'     => [
        'Content-Type' => 'application/json',
    ],'data_format' => 'body'
];
$result = wp_remote_post( $endpoint, $options );
    // var_dump($result);
$numero = json_decode($result['body'])[0]->datapoints[0][0];
?>
<style type="text/css">
    #especiales .is-hidden-tablet { height: 158px;}
    .darkmode .boton_container {background: #E0E0E0!important; color:#121212; }
    .darkmode .total_docis{background: #444444!important; color:#E0E0E0;}
    .darkmode .vacunacion_argentina{ background: #353535!important; color:#E0E0E0;}
    @media screen and (max-width:769px){ 
        .darkmode .boton_container {
            background: #E0E0E0!important;
            color:#121212;}
        .darkmode .total_docis{
            background: #444444!important;
            color:#E0E0E0; }
        .darkmode .vacunacion_argentina{
            background: #353535!important;
            color:#E0E0E0; }
    }
</style>
<div class="columns m-0 is-hidden-mobile">
    <div class="column p-0 has-text-centered vacunacion_argentina" style="background: #FEFEDC">
        <a href="<?php echo get_site_url(); ?>/vacunas-en-argentina/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/vacuna_dt.png" class="is-pulled-left" width="138" height="75">
            <span class="is-block pt-5 is-size-5"><b>Vacunación en Argentina</b></span>
        </a>
    </div>
    <div class="column ">
        <div class="columns">
            <div class="column  pl-6 pt-3 total_docis" style="background: #FFF3C9">
                <a href="<?php echo get_site_url(); ?>/vacunas-en-argentina/">
                    Dosis distribuidas<br />
                    <?php echo '<b><span>'.number_format($numero, 0, '.', '.').'</span></b>'; ?>
                </a>
            </div>
            <div class="column  is-bg-violet p-5 has-text-centered boton_container">
                <a href="<?php echo get_site_url(); ?>/vacunas-en-argentina/" class="is-size-6 has-text-weight-medium ">Ver especial</a>
            </div>
        </div>
    </div>
    
</div>

<div class="columns is-hidden-tablet">
    <div class="column is-full has-text-centered pt-3 pb-2 is-size-5 vacunacion_argentina" style="background: #FFF3C9">
        <a href="<?php echo get_site_url(); ?>/vacunas-en-argentina/">
            <b>Vacunación en Argentina</b>
        </a>
    </div>
    <div class="column p-0 has-text-centered is-full" style="background: #FEFEDA">
        <div class="columns m-0 is-mobile">
            <div class="column p-0 is-two-fifths">
                <a href="<?php echo get_site_url(); ?>/vacunas-en-argentina/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vacuna_dt.png" class="is-pulled-right">
                </a>
            </div>
            <div class="column m-0 p-0 pt-2 total_docis">
                <div class="is-pulled-left has-text-left pl-4">
                    <a href="<?php echo get_site_url(); ?>/vacunas-en-argentina/">
                        Total dosis recibidas<br />
                        <?php echo '<b><span>'.number_format($numero, 0, '.', '.').'</span></b>'; ?>
                    </a>
                </div>
            </div>
        </div>
    <div class="column  is-full is-bg-violet pt-2 pb-2 has-text-centered boton_container">
        <a href="<?php echo get_site_url(); ?>/vacunas-en-argentina/" class="">Ver especial</a>
    </div>
</div>
