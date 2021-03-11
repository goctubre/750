<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package am750
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="has-navbar-fixed-top">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- LOCOMOTIVE <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">  -->
	
	<?php wp_head(); ?>

	<!--PRELOAD GOOGLE FONT-->
    <link rel="preload" as="font" href="<?php echo get_template_directory_uri(); ?>/fonts/inter-v2-latin-regular.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo get_template_directory_uri(); ?>/fonts/inter-v2-latin-500.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo get_template_directory_uri(); ?>/fonts/inter-v2-latin-700.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo get_template_directory_uri(); ?>/fonts/fira-sans-v10-latin-600.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo get_template_directory_uri(); ?>/fonts/fira-sans-v10-latin-700.woff2" crossorigin>

	<!--ADZONE-->
	<script async="async" src="https://s-adzone.com/c/14_750amsupertag.js"></script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TD85CXQ');</script>
	<!-- End Google Tag Manager -->


</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TD85CXQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php wp_body_open(); ?>


 <div id="manto" class="hide"> </div>

 <div id="page" class="site" data-scroll-container>

	<header id="masthead" class="site-header mt-2 mb-2">

		<nav class="navbar is-fixed-top" role="navigation">

		  <div id="navbarBasicExample" class="navbar-menu container">
		    <div class="navbar-start">

			 	<a role="button" class="openmenu" aria-expanded="false" data-target="menuprincipal">
				 	<div class="navbar-burger burger">
				      <span aria-hidden="true"></span>
				      <span aria-hidden="true"></span>
				      <span aria-hidden="true"></span>
				    </div> 
				    <div class="navbar-item is-hidden-touch">Menú</div>
			    </a>

		  		<a href="<?php echo get_site_url(); ?>/programacion" class="navbar-item is-hidden-touch">Programación</a>

		    </div>

		    <div class="navbar-brand">
		      <a class="site-branding navbar-item" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		    	  <img src="<?php echo get_template_directory_uri(); ?>/img/750am-logo.svg" width="" height="" alt="AM 750 - Una señal" />
		      </a> <!-- .site-branding -->
		    </div>

		    <div class="navbar-end">

				<!-- SEARCH -->
				<form role="search" method="get" id="search" class="search-form is-hidden-touch" action="<?php echo home_url( '/' ); ?>" aria-label="Buscar">
					<input type="search" class="input" id="search-input" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
					<button type="reset" class="search" id="search-btn"></button>
				</form>

				<!--DARKMODE-->
				<a class="navbar-item switch is-hidden-touch rayita" aria-label="Cambiar a modo oscuro">
					<img src="<?php echo get_template_directory_uri(); ?>/img/i-contrast.svg" width="22px" height="" />
				</a>
				<!--//DARKMODE-->

				<!--WHATSAPP-->
				<a class="navbar-item rayita" id="bt-wa" href="https://api.whatsapp.com/send?phone=5491139224098" target="_blank" aria-label="Enviá un mensaje a la radio">
					<img src="<?php echo get_template_directory_uri(); ?>/img/i-wa-verde.svg" width="24px" height="" alt="AM 750 -Mensajes" class="wz"/>
				</a>
				<!--//WHATSAPP-->

				<!--ESCUCHAR-->
				<a class="navbar-item play_btn is-hidden-touch" href="javascript:void(0); ">
						<button id="playnav" class=" button is-bg-violet">
						<span class="icon">
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/nav-play.svg" class="is-invert" width="" height="" alt="Escuchar radio" / -->
						</span>
						<span>AM750 en vivo</span>
					</button>
				</a>
				<!--//ESCUCHAR-->

		    </div>
		  </div>
		</nav>


	    <div id="menuprincipal">

		<a role="button" class="navbar-burger burger closemenu is-active" aria-expanded="false" data-target="menuprincipal">
	      <span aria-hidden="true"></span>
	      <span aria-hidden="true"></span>
	      <span aria-hidden="true"></span>
	    </a>

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>
			
			<ul id="redes">
				<div class="menu-item mt-3 mb-3 has-text-weight-bold">Seguinos en las redes</div>

					<a href="https://www.facebook.com/AM750" target="_blank" rel="noopener noreferrer">
						<li> <img src="<?php echo get_template_directory_uri(); ?>/img/s-facebook.svg" width="" height="" alt="AM750 Facebook" /> </li>
					</a>

					<a href="https://www.instagram.com/radioam750/" target="_blank" rel="noopener noreferrer">
						<li> <img src="<?php echo get_template_directory_uri(); ?>/img/s-ig.svg" width="" height="" alt="AM750 Instagram" /></li>
					</a>

					<a href="https://twitter.com/AM750" target="_blank" rel="noopener noreferrer"> 
						<li>  <img src="<?php echo get_template_directory_uri(); ?>/img/s-twitter.svg" width="" height="" alt="AM750 Twitter" /> </li> 
					</a>

					<a href="https://api.whatsapp.com/send?phone=5491139224098" target="_blank">
						<li> <img src="<?php echo get_template_directory_uri(); ?>/img/s-wa.svg" width="" height="" alt="Haz clic para compartir en WhatsApp" /> </li> 
					</a>

			</ul>
		</div>

	</header><!-- #masthead -->

	<!--MAIN -cierra en footer -->
	<main id="primary" class="site-main">