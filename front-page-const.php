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
		      <a class="site-branding navbar-item" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		    	  <img src="<?php echo get_template_directory_uri(); ?>/img/750am-logo.svg" width="" height="" alt="AM 750 - Una señal" />
		      </a> <!-- .site-branding -->
		    </div>

		    <div class="navbar-brand">

		    </div>

		    <div class="navbar-end">

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


	</header><!-- #masthead -->

	<!--MAIN -cierra en footer -->
	<main id="primary" class="site-main">

	<div id="404" class="container">

		<section class="error-404 not-found">

			<div class="page-content mt-6 has-text-centered">
				<p class="is-size-5 mb-2">Estamos actualizándonos  </p>
				<h1 class="is-size-3 mb-4"> En breve <span class="is-celeste"> volveremos a estar disponibles. </span> </h1>
				
				<figure class="mb-3"> <img src="<?php echo get_template_directory_uri(); ?>/img/404.png" width="" height="" alt="750 AM - Contenido no encontrado" /> </figure>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</div><!-- //.container -->

<?php
get_footer();
