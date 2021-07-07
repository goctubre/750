<?php
/*
 Template Name: COVID-19
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */
// refe https://coronavirus.msal.gov.ar/vacunas/d/8wdHBOsMk/seguimiento-vacunacion-covid/d/8wdHBOsMk/seguimiento-vacunacion-covid?orgId=1&refresh=15m%3F%3F%3F%3F%3F%3Flogin
get_header();

$endpoint = 'https://coronavirus.msal.gov.ar/vacunas/d/8wdHBOsMk/seguimiento-vacunacion-covid/api/datasources/proxy/1/query';


$totalDocis='{"app":"dashboard","requestId":"Q103","timezone":"","panelId":10,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-05-10T21:23:42.828Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"12h","intervalMs":43200000,"targets":[{"data":null,"target":"distribucion_total_aplicaciones","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":100,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1620681822389","value":"1620681822389"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"12h","value":"12h"},"__interval_ms":{"text":"43200000","value":43200000}},"cacheTimeout":null,"startTime":1620681822830,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';

$primeraDocis='{"app":"dashboard","requestId":"Q104","timezone":"","panelId":11,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-05-21T00:53:47.331Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"12h","intervalMs":43200000,"targets":[{"data":null,"target":"aplicaciones_primera_dosis","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":100,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1621558426030","value":"1621558426030"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"12h","value":"12h"},"__interval_ms":{"text":"43200000","value":43200000}},"cacheTimeout":null,"startTime":1621558427333,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';

$segundaDocis='{"app":"dashboard","requestId":"Q105","timezone":"","panelId":12,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-05-10T20:05:22.113Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"12h","intervalMs":43200000,"targets":[{"data":null,"target":"aplicaciones_segunda_dosis","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":100,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1620677121707","value":"1620677121707"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"12h","value":"12h"},"__interval_ms":{"text":"43200000","value":43200000}},"cacheTimeout":null,"startTime":1620677122118,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';
?>

<style type="text/css">
	.docis_pais{
		background:#009FD4;
		color:#fff;
	    padding-top: 20px;
	    padding-bottom: 20px;
	}.darkmode .docis_pais{background: #69B1C9}

	.docis_pais h2{
		font-size: 20px;
	}.darkmode .docis_pais h2{color:#1E1E1E;}
	.docis_pais p{
		font-weight: bold;
		font-size: 30px;
	}.darkmode .docis_pais p{color:#1E1E1E;}
	.docis_stats{
		padding-top: 50px;
		padding-bottom: 50px;
	}
	.docis_stats h3{
		color:#3E2D50;
		font-weight: bold;
		font-size:25px;
	}.darkmode .docis_stats h3{color: #E0E0E0;}
	.docis_stats span{
		color:#009FD4;
		font-weight: bold;
		font-size: 30px;
		display: block;
		line-height: 25px;
		margin-top: 30px;
	}.darkmode .docis_stats span{color: #69B1C9;}
	.preguntas{
		padding-top: 50px;
		padding-bottom: 50px;
	}
	.preguntas h2{
		color:#3E2D50;
		font-weight: bold;
		font-size:45px;
	    margin-bottom: 1.8rem;
	}.darkmode .preguntas h2{color: #E0E0E0;}
	.preguntas h3{
		color:#3E2D50;
		font-weight: bold;
		font-size:20px;
		text-align: left;
		line-height: 25px;
	}.darkmode .preguntas h3{color: #E0E0E0;}
	.preguntas p{
		color:#3E2D50;
		font-size:20px;
		line-height: 1.5;
	}.darkmode .preguntas p{color: #E0E0E0;}
	.preguntas .shadow{
	    box-shadow: 3px 3px 10px 0px #27262657;
	    min-height: 360px;
	}
	.formulario h2{
		font-weight: bold;
		font-size: 40px;
	}.darkmode .formulario h2{
		    color: #353535;
	}
	.formulario textarea{
		border: 0px;
		width: 100%;
		font-size: 18px;
	}
	.formulario .submit{
		color: #fff;
	    background: #3D3F52;
	    border-radius: 26px;
	    padding: 5px 10px 5px 10px;
	    border: 0px;
	    font-size: 16px;
	    font-weight: 500;
	    padding-left: 1em;
	    padding-right: 1em;
	}
	.formulario .bg_gris{
		background: #F1F1F1;
	}
	.docis_stats > div:first-child{
		border-right:1px solid #333;
	}
	.especial{
		background: #009FD4;
	    color: #fff;
	    font-size: 19px;
	    display: block;
	    width: 120px;
	    margin: 0 auto;
	    text-align: center;
	    margin-bottom: 5px;
	}
	@media screen and (max-width:769px){ 
		h1{
			font-size: 1.875rem!important;
		}
		.docis_stats span{ 
			font-size: 1.563rem!important;
		    margin-top: 0px;
		}
		.docis_stats h3{
		    margin-bottom: 30px!important;
		}
		.preguntas h2{
			font-size: 1.875rem!important;
		    margin-top: 20px;
		}
		.preguntas p{
			font-size: 1rem!important;
		}
		.docis_stats p{
		    font-size: 1.875 rem!important;
		}
		.docis_stats > div:first-child{
			border-right:0px solid #333;
			border-bottom:1px solid #333;
		}
		.preguntas{
			padding-left: 0px!important;
			padding-right: 0px!important;
		}
		.formulario h2 {
		    font-weight: bold;
		    font-size: 30px;
		    line-height: 30px;
		}
	}

</style>
	<section  id="covid">
		<div class="container">
			<div class="columns has-text-centered">

				<div class="column ">
					<div class="especial ">ESPECIAL</div>
					<h1 class="is-size-2 is-size-4-mobile mb-4-mobile"><?php the_title()?></h1>
					<p class=" has-text-centered">Lo que necesitás saber sobre la vacunación en Argentina en <b>AM 750</b></p>
					<img src="<?php echo get_template_directory_uri(); ?>/img/covid-header.png" width="" height="" alt="750 AM" style="margin-bottom: -8px;margin-top: 20px;" class="is-hidden-mobile"/>
					<img src="<?php echo get_template_directory_uri(); ?>/img/covid-header-mobile.png" width="" height="" alt="750 AM" style="margin-bottom: -8px;margin-top: 20px;width: 100%;" class="is-hidden-tablet"/>
					<div class="docis_pais is-full">
						<h2>Dosis distribuidas</h2>
						<p >
						<?php
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
						echo '<span>'.number_format($numero, 0, '.', '.').'</span>';
						?>
						</p>
					</div>
				</div>

			</div>
	<!-- <iframe width="100%" height="1500" src="https://coronavirus.msal.gov.ar/vacunas/d/8wdHBOsMk/seguimiento-vacunacion-covid/d/8wdHBOsMk/seguimiento-vacunacion-covid?orgId=1&amp;refresh=15m%3F" frameborder="0"></iframe> -->
			<div class="columns docis_stats pb-0-mobile mb-0-mobile px-5 pt-0 pb-0">

				<div class="column p-5 m-5 pt-0-mobile mt-0-mobile mr-0-mobile ml-0-mobile" >
					<h3 class="is-size-5 mb-4-mobile has-text-centered-mobile">Personas vacunadas en Argentina</h3>
					<div class="columns">
						<div class="column has-text-centered-mobile pt-0  mt-0-mobile">
							<?php
							$options = [
							    'body'        => $primeraDocis,
							    'timeout'     => 9999999,
							    'headers'     => [
							        'Content-Type' => 'application/json',
							    ],'data_format' => 'body'
							];
							$result = wp_remote_post( $endpoint, $options );
							// var_dump($result);
							
							if($result){
								$primeraDocis_numero = json_decode($result['body'])[0]->datapoints[0][0];
							}else{
								$primeraDocis_numero = 0;
							}
							echo '<span>'.number_format($primeraDocis_numero, 0, '.', '.').'</span>';
							?>
							Primera dosis
						</div>
						<div class="column has-text-centered-mobile pt-0 pt-0-mobile mt-0-mobile ">
							<?php
							$options = [
							    'body'        => $segundaDocis,
							    'timeout'     => 9999999,
							    'headers'     => [
							        'Content-Type' => 'application/json',
							    ],'data_format' => 'body'
							];
							$result = wp_remote_post( $endpoint, $options );
							// var_dump($result);
							if($result){
								$segundaDocis_numero = json_decode($result['body'])[0]->datapoints[0][0];
							}else{
								$segundaDocis_numero = 0;
							}
							echo '<span>'.number_format($segundaDocis_numero, 0, '.', '.').'</span>';
							?>
							Segunda dosis
						</div>
					</div>
				</div>

				<div class="column p-5 m-5 pt-0-mobile mt-0-mobile  mr-0-mobile ml-0-mobile">
					<h3 class="is-size-5 mb-4-mobile  has-text-centered-mobile ">Porcentaje de población vacunada</h3>
					<div class="columns ">
						<div class="column  has-text-centered-mobile  mt-0-mobile">
							<?php echo '<span>'.round((($primeraDocis_numero/44940000)*100),1).'%'.'</span>';?>
							Primera dosis
						</div>
						<div class="column  has-text-centered-mobile pt-0-mobile mt-0-mobile">
							<?php echo '<span>'.round((($segundaDocis_numero/44940000)*100),1).'%'.'</span>'; ?>
							Segunda dosis
						</div>
					</div>
				</div>

			</div>
			<div class="container container pl-4 pr-4">
				Fuente: <a href="https://www.argentina.gob.ar/coronavirus/vacuna/aplicadas" target="_blank"><u>Monitor público de vacunación, Ministerio de Salud de la Nación</u></a>
			</div>


			<div class="columns preguntas has-text-centered pt-0-mobile mt-0-mobile p-5  pr-0-mobile pl-0-mobile">
				<div class="column " style="max-width: 840px;margin: 0 auto;">
					<h2 class=" is-size-2">Preguntas y respuestas sobre la vacunación </h2>
					<p class="px-5">En Argentina, y en el mundo, se está desarrollando un plan de vacunación sin precedentes en la historia. La velocidad del desarrollo de las vacunas y la urgencia de inmunizar a las poblaciones para combatir el virus del COVID-19 son desafíos inéditos y generan muchas preguntas. <b>En este contexto es importante evitar la desinformación. Por eso hicimos esta guía de preguntas y respuestas.</b> </p>
				</div>
			</div>

			<div class="columns is-multiline preguntas  p-5 has-text-centered">

				<?php
				/* Start the Loop */
				global $post;
			    $args = array( 
			    	'numberposts' => -1,
			    	'post_status' => 'publish', 
			    	'orderby' => 'menu_order', 
			    	'order' => 'ASC',  
			    	'category_name' => 'especial-vacunas' 
			    );
			    $posts = get_posts( $args );
			    // var_dump($posts);
			    foreach( $posts as $post ): setup_postdata($post); 
				?>
					<div class="column is-4 p-4   card-equal-height ">
						<div class="shadow ">
							<a href="<?php the_permalink(); ?>">
							<?php echo picture_image('full', 'medium', 'medium', 'medium', 'is-16by9', 'is-bordeado');?>
							<h3 class="p-5 card-content"><?php the_title()?></h3>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>


		<div class="columns formulario mb-5 mt-5">
			<div class="column is-one-third p-0 pr-1" style="background: url('<?php echo get_template_directory_uri(); ?>/img/sugerencias_bg_fodo.png') repeat-x">
				<img src="<?php echo get_template_directory_uri(); ?>/img/sugerencias_bg.png" width="" height="" alt="750 AM" />
			</div>
			<div class="column bg_gris p-6">

				<?php
				if(isset($_POST['pregunta'])) {
					$fp = fopen(dirname(__FILE__) . '/covid-data/covid-saber-mas.txt', 'a+');
					fwrite($fp, $_POST['pregunta'].PHP_EOL);
					fclose($fp);
					echo '<h2>Gracias por su participación</h2>';
				}else{ ?>
					<h2>¿Qué más te gustaría saber?</h2>
					<form method="post" action="" class="">
						<textarea name="pregunta" class="mt-5 p-5" placeholder="Ej: Datos sobre..." required="required"></textarea><br />
						<input type="submit" class="submit mt-5 button is-bg-violet" value="Enviar">
					</form>
				<?php }?>
			</div>
			
		</div>


	</section>

<?php
get_footer();