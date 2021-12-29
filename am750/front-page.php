<?php
/* Template Name: HOME REFRESH
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */

get_header();
?>

<style>
/* INFORMATIVO 750 - CLS - VITALS*/
@media (min-width:769px) { #informativo750 .swiper-container-mob { height: calc(100vh - 10px);  overflow-y: auto;overflow-x: hidden;}  .swiper-container-mob .swiper-slide {height: unset; width: unset !important; margin-right: 10px;} .swiper-container-mob .swiper-wrapper {position: unset; width: unset;height: unset;display: unset;transition: unset;box-sizing: unset;} .swiper-container-mob .swiper-pagination {display: none;}}
</style>


<!--AUTOREFRESH - paso2021-->
		<div data-autorefresh="front-page-loop.php">
			<?php include get_theme_file_path( 'front-page-loop.php' );	?>
		</div>
<!--//AUTOREFRESH-->


<!--ACCESOS RÁPIDOS-->
<section id="accesos-rapidos" class="is-seccion mt-4 lh-140 mb-6-mobile">
	<div class="container">
		<div class="columns">
			<div class="column">
				<div class="columns is-mobile">
				  <div class="column is-2-desktop is-3-mobile has-text-centered-mobile">
				  	<br>
				  	<a href="#suscribite-newsletter">
						<img src="<?php echo get_template_directory_uri(); ?>/img/accesos-rapidos-mail.svg" width="52" height="48" alt="750 AM" />
					</a>
				  </div>
				  <div class="column">
				  	<a href="#suscribite-newsletter">
					<p class="has-text-weight-bold mb-3">Lo mejor de AM750 en tu mail</p>
					Suscribite para recibir gratis el newsletter de AM750. <b>Todos los sábados, lo mejor de la semana, en un mail</b>.
				    </a>
				  </div>
				</div>		
			</div>

			<div class="column">
				<div class="columns is-mobile">
				  <div class="column is-2-desktop is-3-mobile has-text-centered-mobile">
				  	<br>
				  	<a href="https://api.whatsapp.com/send?phone=5491139224098" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri(); ?>/img/accesos-rapidos-wap.svg" width="52" height="48" alt="750 AM" />
					</a>
				  </div>
				  <div class="column">
				  	<a href="https://api.whatsapp.com/send?phone=5491139224098" target="_blank" rel="noopener noreferrer">
						<p class="has-text-weight-bold mb-3">Escribinos</p>
						Comunicate con los programas por Whatsapp.
					</a>
				  </div>
				</div>
			</div>

			<div class="column">
				<div class="columns is-mobile">
				  <div class="column is-2-desktop is-3-mobile has-text-centered-mobile">
				  	<br>
					<a href="https://750.am/bajate-nuestra-app/"> <img src="<?php echo get_template_directory_uri(); ?>/img/accesos-rapidos-app.svg" width="52" height="48" alt="750 AM" /> </a>
				  </div>
				  <div class="column">
					<a href="https://750.am/bajate-nuestra-app/"> <p class="has-text-weight-bold mb-3">Bajate nuestra app</p>
					Llevá la radio AM750 en tu celular y <b> disfrutá de la mejor experiencia de audio.</b> </a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--// ACCESOS RÁPIDOS-->

<div class="container" id="bloque02">
	<div class="columns">
		<div class="column is-9">
			<!--BANNER -->
			<section id="bannermiddle" class="mb-6 is-bg-grisclarito is-hidden-mobile">
				<div class="ad-slot" id="home_billboard_btf" data-adtype="billboard"></div>
			</section>
			<!--//BANNER-->	


			<!--MODO RELAX-->
			<?php

				include get_theme_file_path( '/inc/home-modo-relax.php' );

			    //$hour = date("G");
			    //if($hour >= 8 && $hour < 22) { include get_theme_file_path( '/inc/home-modo-relax.php' );} 
			    //else { include get_theme_file_path( '/inc/home-modo-noticias.php' );}
			 ?>			
			<!--//MODO RELAX-->


		</div>	<!--/column is-9 -->



		<div class="column is-3">
			<!--BANNER--> 
			<div class="ad-slot sticky is-hidden-mobile" id='Home_HalfPage_RightRail' data-adtype='halfpage'></div> 
			<!--//BANNER-->
		</div>	<!--/column is-3 -->

	</div> <!--/columns -->
</div> <!--/bloque2 -->


<!--BANNER MOBILE-->
<div class="ad-slot mb-6 mb-4-mobile" id="mobile_home_mtf" data-adtype="box_mobile"> </div>
<!-- //BANNER MOBILE-->


<hr class="dashed">


<!--AYUDANOS-->
<section id="ayudanos" class="is-seccion pt-6 pt-0-mobile has-text-centered-mobile">
	<div class="container">
		<div class="columns">
			<div class="column is-6 is-offset-1 pb-0">
				<h2 class="is-size-3ypico mb-0 is-celeste is-fira">Ayudanos a mejorar</h2>
			</div>
		</div>

		<div class="columns">
			<div class="column is-6 is-offset-1">
				Si tenés comentarios, sugerencias o notaste errores en nuestro sitio web, por favor, completá este formulario
			</div>
			<div class="column has-text-right is-2 has-text-centered-mobile">
				<button class="button is-750">
				    <a href="https://forms.gle/w2EnujhErT4rzH3b6" target="_blank" rel="noopener noreferrer"> <span>Participar</span> </a>
				</button>
			</div>
		</div>
	</div>
</section>
<!--//AYUDANOS-->


<script>
  if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("sw.js").then(function (registration) { console.log("success load"); }).catch(function (err) { console.log(err); });
   }

  // QUIERO SABER MÁS == OK
  var quierosaber = document.getElementById("quierosaber");

  document.getElementById("sabermas").addEventListener('click', function () {
    quierosaber.classList.toggle('sabermas');
    var x = document.querySelector("#sabermas");
    if (x.innerHTML === "Cerrar") {
      x.innerHTML = "<img src='https://750.am/wp-content/themes/am750/img/i-prev.svg\' width=\'11px\' height=\'7px\'> Quiero saber más";
      x.classList.remove("cerrate");
    } else {
      x.innerHTML = "Cerrar";
      x.classList.add("cerrate");
    }
  });
  
</script>



<!--SWIPER // FRONTPAGE // PAGE-PROGRAMACION // SINGLE-PROGRAMAS -->
<?php include get_theme_file_path( '/js/swiper.php' );?>
<!--SWIPER-->


<?php
//get_sidebar();
get_footer();