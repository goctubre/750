<!--TOP POSITION - paso2021-->
<div class="container portadatop mb-6">

	<?php $elecciones_up =  get_option('elecciones_up'); $notas_up =  get_option('elecciones_up'); $catastrofe =  get_option('catastrofe');?>
	<!-- WIDGET ELECCIONES - paso2021-->
	<?php if( $elecciones_up == 'widget') { include get_theme_file_path( '/-paso-2021/home-especial-elecciones.php' ); }?>
	<!-- // WIDGET ELECCIONES -->

	<!-- WIDGET ELECCIONES - paso2021-->
	<?php if( $elecciones_up == 'widgetp12') { include get_theme_file_path( '/-paso-2021/home-especial-elecciones-p12.php' );} ?>
	<!-- // WIDGET ELECCIONES -->

	<!-- NOTAS DESCATADAS TOP - paso2021-->
	<?php if( $elecciones_up == 'servicio') { include get_theme_file_path( '/-paso-2021/home-notas-top.php' );} ?>
	<!-- // NOTAS DESCATADAS TOP -->

	<!-- CATASTROFE -->
	<?php if( $catastrofe == 'una' || $catastrofe == 'cuatro' ) { include get_theme_file_path( '/inc/home-modo-catastrofe-loop.php' ); } ?>	
	<!--//CATASTROFE-->

	<!-- CATASTROFE MAPA -->
	<?php if( $catastrofe == 'mapa' ) { include get_theme_file_path( '/inc/home-modo-catastrofe-mapa.php' ); } ?>	
	<!--//CATASTROFE MAPA-->

	<!-- DESTACADO SUPERIOR - paso2021-->
	<?php if( $catastrofe == 'destacadosuperior' ||$catastrofe == 'destacadosuperiormasnotas' ) {include get_theme_file_path( '/inc/home-nota-top-destacada.php' ); }?>
	<!-- // NOTAZA  -->

</div>
<!--//TOP POSITION-->

<div id="bloque01" class="container  <?php $catastrofe =  get_option('catastrofe'); if( $catastrofe == 'una' || $catastrofe == 'cuatro'  || $catastrofe == 'mapa' ) { echo "catastrofe";} ?>">

	<div class="columns">
		
		<div class="column is-9">
			<!--BANNERS - UBICACION ORIGINAL-->
			<section id="bannertop" class="is-bg-grisclarito is-hidden-mobile">
				<div class="ad-slot" id="home_billboard_atf" data-adtype="billboard"></div>
				<!--<div class="ad-slot" id="mobile_home_top" data-adtype="mobile_top"></div> 300x50-320x50-360x56-->
			</section>
			<!--//BANNERS-->

			<!--ESPECIALES -->
			<section id="especiales" class="my-4">
				<?php //include get_theme_file_path( '/inc/home-especial-vacunas.php' );?>
			</section>
			<!--//ESPECIALES-->

			<!--SERVICIOS -->
			<!-- <section id="serviciostop" class="is-bg-grisclarito mt-5 mb-5">
				<div class="columns level is-mobile">
					<div class="column">
						<?php include get_theme_file_path( '/inc/dolar.php' );?>
					</div>
					<div class="column has-text-right is-2-mobile">
						<?php //include get_theme_file_path( '/inc/clima.php' );?>
					</div>
				</div>
			</section> -->
			<!--//SERVICIOS -->


			<!--MODO NOTICIAS-->
			<?php 
				include get_theme_file_path( '/inc/home-modo-noticias.php' );
				//$hour = date("G");
			   	//if($hour >= 8 && $hour < 22) { include get_theme_file_path( '/inc/home-modo-noticias.php' );} 
			    //else { include get_theme_file_path( '/inc/home-modo-relax.php' );}
			 ?>
			<!--//MODO NOTICIAS-->

		</div> <!-- #column9 -->

		<!--BANNER -->
		<div class="column is-3 is-hidden-mobile" id="banner01">
			<div class='ad-slot sticky is-bg-grisclarito' id='home_sidebar' data-adtype='sidebar'></div>
		</div>	
		<!--//BANNER -->

	</div> <!--/columns -->

</div> <!--/#BLOQUE01 -->