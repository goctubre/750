<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package am750
 */

?>


	</main> <!-- #main -->


	<footer class="footer is-bg-violet">
	  <div class="container">
	  	<div class="columns mt-5 has-text-centered">
	  		<div class="column">
	  			<img style="display: none" loading="lazy" width="0" height="0" src="<?php echo get_template_directory_uri(); ?>/img/750am-logo-blanco.svg" alt="750 AM" />
	  			<!--hack raro, cambia la url de la primera image -->
	  			<img loading="lazy" width="120" height="27" src="<?php echo get_template_directory_uri(); ?>/img/750am-logo-blanco.svg" alt="750 AM" />
	  		</div>
	  		<div class="column">
	  			<img loading="lazy" style="margin-top: -8px" width="160" height="40" src="<?php echo get_template_directory_uri(); ?>/img/logo-grupo-octubre.svg" alt="Grupo Octubre" />
	  		</div>
	  	</div>

	  	<br>
	  	<h2 class="is-size-5 has-text-weight-bold mt-4 mb-2 has-text-centered-mobile">Lo mejor de AM750 en tu mail </h2>

	  	<!--NEWSLETTER-->
	  	<div class="columns has-text-centered-mobile" id="suscribite-newsletter">
	  		<div class="column">
	  			Suscribite para recibir gratis el newsletter de AM750. Todos los sábados, lo mejor de la semana, en un mail.
	  		</div>
	  		<div class="column">

				<!-- Begin Mailchimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					@media screen and (max-width:768px){ #mc_embed_signup { width: 80%; margin-left: 10%;} #mc_embed_signup input.email {margin-bottom:10px;} }

					@media screen and (min-width:769px){ 
						#mc_embed_signup_scroll {max-width: 78%; margin: 0 auto;} #mc_embed_signup{text-align:right;} #mc-embedded-subscribe {margin-top: 0!important} #mc_embed_signup input.email {margin-bottom: 10px}} 
					#mc_embed_signup input.email { background: none; color: #FFF; font-family: unset; font-size: 1rem; padding-bottom: calc(.5em - 1px);padding-left: calc(.75em - 1px); padding-right: calc(.75em - 1px);
					padding-top: calc(.5em - 1px); border: 1px solid #FFF; border-radius:5px; margin-right: 10px;}
					#mc-embedded-subscribe { background: #009FD4 !important; color: #FFF; border: none !important;
					font-family: 'Inter', sans-serif !important; font-weight: 500;border-radius: 20px !important; 
					padding-left: 1.6rem !important; padding-right: 1.6rem !important; margin-top: 20px}


					/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">

				<form action="https://750.us16.list-manage.com/subscribe/post?u=533d2b93d7b2998584d7dff67&amp;id=eef050d62a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_533d2b93d7b2998584d7dff67_7336ef8e66" tabindex="-1" value=""></div>
				    <input type="submit" value="Suscribirme" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</form>
				</div>

				<!--End mc_embed_signup--> 		
			</div>
	  	</div>
	  	<!--//NEWSLETTER-->

	  	<hr class="dashed mt-6 mb-6">

	  	<div class="columns">
	  		<div class="column">
	  			<h2 class="is-size-5 has-text-weight-bold"> AM750 </h2> <br>
				Venezuela 370, <br>
				Ciudad de Buenos Aires <br>
				Tel: +54 11 5354-6651 <br><br>

				<b>Contacto Comercial </b> <br>
				Tel.: (+54 9 11) 3891-3828 <br>
				Venezuela 356, CP C1095AAH, <br>
				Ciudad de Buenos Aires <br> <br>


				<b> <a href="https://750.am/sitemap.html"> Mapa del sitio </a> </b> <br>

				<ul id="redesbottom" class="redes">
					<i class="fab fa-facebook-f"></i></a>

					<?php //include get_theme_file_path( '/inc/redes.php' );?>

					<a href="https://www.facebook.com/AM750" target="_blank" rel="noopener noreferrer">
						<li> <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/s-facebook.svg" width="24" height="24" alt="AM750 Facebook" /> </li>
					</a>

					<a href="https://www.instagram.com/radioam750/" target="_blank" rel="noopener noreferrer">
						<li> <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/s-ig.svg" width="24" height="24" alt="AM750 Instagram" /></li>
					</a>

					<a href="https://twitter.com/AM750" target="_blank" rel="noopener noreferrer"> 
						<li class="twitter-share">  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/s-twitter.svg" width="24" height="24" alt="AM750 Twitter" /> </li> 
					</a>

					<a href="https://api.whatsapp.com/send?phone=5491139224098" target="_blank" rel="noopener noreferrer">
						<li class="wp-share"> <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/s-wa.svg" width="24" height="24" alt="AM750 WhatsApp" /> </li> 
					</a>
				</ul>
				
			</div>

	  		<div class="column">
	  			<h2 class="is-size-5 has-text-weight-bold">Diarios </h2> <br>
	  			<a href="https://www.pagina12.com.ar/" target="_blank" rel="noopener noreferrer" >Página/12</a><br>
	  			<a href="https://diarioz.com.ar" target="_blank" rel="noopener noreferrer" >Diario Z </a>
	  		</div>

	  		<div class="column">
	  			<h2 class="is-size-5 has-text-weight-bold">Publicaciones </h2> <br>
	  			<a href="https://carasycaretas.org.ar/" target="_blank" rel="noopener noreferrer">Caras y Caretas </a> <br>
	  			<a href="https://elplanetaurbano.com/" target="_blank" rel="noopener noreferrer">El Planeta Urbano </a> <br>
	  			<a href="https://www.editorialoctubre.com.ar/" target="_blank" rel="noopener noreferrer">Editorial Octubre </a> <br>
	  		</div>


	  		<div class="column">
	  			<h2 class="is-size-5 has-text-weight-bold">Radios </h2> <br>
	  			<a href="https://750.am/" target="_blank" rel="noopener noreferrer"> AM750 </a> <br>
	  			<a href="https://fmaspen.com/" target="_blank" rel="noopener noreferrer" >Aspen</a> <br>
	  			<a href="https://mucharadio.com.ar/" target="_blank" rel="noopener noreferrer" >Mucha Radio 94.7</a> <br> 
	  			<a href="https://fmlike.com.ar/" target="_blank" rel="noopener noreferrer" >Like</a> <br>
	  			<a href="https://oktubre.fm/" target="_blank" rel="noopener noreferrer" >Oktubre</a> <br>
	  			<a href="https://malena.fm/" target="_blank" rel="noopener noreferrer" >Malena</a> <br>
	  			<a href="https://fmblackie.com.ar/" target="_blank" rel="noopener noreferrer" > FM Blackie </a> <br>
	  		</div>

	  		<div class="column">
	  			<h2 class="is-size-5 has-text-weight-bold">Contenidos </h2> <br>
	  			<a href="https://ip.digital/" target="_blank" rel="noopener noreferrer" > IP digital </a> <br>
	  			<a href="https://www.elnueve.com.ar/" target="_blank" rel="noopener noreferrer" > Canal 9 </a> <br>
	  			<a href="https://salas.carasycaretas.org.ar/" target="_blank" rel="noopener noreferrer" > Salas Caras y Caretas </a> <br>
	  			<a href="https://octubretv.com/" target="_blank" rel="noopener noreferrer" > Octubre TV </a> <br>
	  			<a href="https://latinoamericapiensa.com/" target="_blank" rel="noopener noreferrer" > Latinoamérica Piensa </a> <br>
	  		</div>

	  	</div>

	  </div>
	</footer><!-- #footer -->
		
</div><!-- #page -->


	<!-- Back to top button -->
	<a id="gototop" class="is-bg-celeste">
		<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/chevron-up.svg" width="" height="" alt="Ir hacia arriba" />
	</a>


	<!--Player-->
	<div class="custom_player_space"> 
		<div data-msp data-type='live' data-id='601bf3e463786007e6d3b9b0' data-player='603416a7b108a9485c0be15f'>
			<script type='text/javascript' src='https://player.cdn.mdstrm.com/lightning_player/api.js' defer></script>
		</div>
	</div>
	<!--player-->


<?php wp_footer(); ?>

	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!--COMSCORE-->
	<script type="text/javascript">
	var _comscore = _comscore || [];
	_comscore.push({ c1: "2", c2: "24322362" });
	  (function() {
		var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
		s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
		el.parentNode.insertBefore(s, el);
	})();
	</script>


</body>
</html>
