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

	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"> 
	<link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css" />

	<link rel="manifest" href="/manifest.json">


	<!--PRELOAD GOOGLE FONT-->
	<link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-regular.woff2" crossorigin>
	<!-- <link rel="preload" as="font" href="//750.am/wp-content/themes/am750/fonts/inter-v2-latin-regular.woff2" crossorigin> 
		SEGUIR-->

    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-500.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-700.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/fira-sans-v10-latin-600.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/fira-sans-v10-latin-700.woff2" crossorigin>




    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-regular.eot" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-regular.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-regular.woff" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-regular.ttf" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-regular.svg" crossorigin>

    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-500.eot" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-500.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-500.woff" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-500.ttf" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-500.svg" crossorigin>

    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-700.eot" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-700.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-700.woff" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-700.ttf" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-700.svg" crossorigin>

	<link rel="preconnect" href="https://fonts.gstatic.com"> <!--chequear si pasar a preload-->
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,600&display=swap" rel="stylesheet"> 
	<!--PRELOAD GOOGLE FONT-->


	<?php wp_head(); ?>


	<!--ADZONE-->
	<script src="https://s-adzone.com/c/14_750amsupertag.js" defer></script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TD85CXQ');</script>
	<!-- End Google Tag Manager -->



</head>

<body id="body"> <!--ajaxify-->

	<div id="donde">  <!--ajaxify-->
		<div id="insidedonde" <?php body_class(); ?>>  <!--ajaxify-->


	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TD85CXQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


	<?php wp_body_open(); ?>

	<h1 id="page-title" style="display:none">AM 750 Una señal</h1>
	<div id="manto" class="hide"> </div>

<?php include get_theme_file_path( '/inc/menu-search-mobile.php' );?>

 <div id="page" class="site" data-scroll-container>

	<header id="masthead" class="site-header mt-2 mb-2">

		<nav class="navbar is-fixed-top" role="navigation">

		  <div id="navbarBasicExample" class="navbar-menu container">
		    <div class="navbar-start">

			 	<a href="#" role="button" class="openmenu" aria-expanded="false" data-target="menuprincipal">
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
		    	  <img loading="lazy" src="<?php echo http2();?>/img/750am-logo.svg" width="125" height="28" alt="AM 750 - Una señal" />
		      </a> <!-- .site-branding -->
		    </div>

		    <div class="navbar-end">
					<!-- SEARCH -->
					<div id="search" class="is-hidden-touch">
						<div class="nav-search-button">
							<img id="search-btn" loading="lazy" src="<?php echo http2();?>/img/i-lupa.svg" width="22px" height="22px" alt="buscar" />

							<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" aria-label="Buscar">

								<div class="field is-grouped">
								  <p class="control is-expanded">
								    <input type="search" class="input" id="search-input" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
									<!-- <button type="reset" class="search" id="search-btn"></button> -->
								  </p>
								  <p class="control">
								    <a class="button is-small search-close">
										<svg aria-labelledby="nav-search-button-close-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 11" width="22px">
											<title id="nav-search-button-close-icon">Cerrar</title>
											<polygon points="0.44 1.22 9.78 10.56 10.56 9.78 1.22 0.44 0.44 1.22"></polygon>
											<polygon points="1.22 10.56 10.56 1.22 9.78 0.44 0.44 9.78 1.22 10.56"></polygon>
										</svg>
								    </a>
								  </p>
							</div>

							</form>
						</div>

					</div>
					<!--//SEARCH-->

				<!--DARKMODE-->
				<a class="navbar-item switch is-hidden-touch rayita" aria-label="Cambiar a modo oscuro">
					<img loading="lazy" src="<?php echo http2();?>/img/i-contrast.svg" width="22px" height="" />
				</a>
				<!--//DARKMODE-->

				<!--WHATSAPP-->
				<a class="navbar-item rayita" id="bt-wa" href="https://api.whatsapp.com/send?phone=5491139224098" target="_blank" aria-label="Enviá un mensaje a la radio" rel="noopener noreferrer">
					<img loading="lazy" src="<?php echo http2();?>/img/i-wa-verde.svg" width="24px" height="24px" alt="AM 750 - Mensajes" class="wz"/>
				</a>
				<!--//WHATSAPP-->

				<!--ESCUCHAR-->
				<a class="navbar-item play_btn is-hidden-touch" href="javascript:void(0); ">
						<button id="playnav" class=" button is-bg-violet">
						<span class="icon">
							<!-- <img src="<?php echo http2();?>/img/nav-play.svg" class="is-invert" width="" height="" alt="Escuchar radio" / -->
						</span>
						<span>AM750 en vivo</span>
					</button>
				</a>
				<!--//ESCUCHAR-->

		    </div>
		  </div>
		</nav>


	    <div id="menuprincipal">

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>

			<ul id="menu-mob" class="is-hidden-tablet"> 
				<li> <a class="switch" aria-label="Activar modo oscuro"> Activar modo oscuro </a>  </li>
				<li id="buscarmobile"> <a> Buscar </a> </li>
			</ul>

			<ul id="redes">
				<div class="menu-item mt-3 mb-3 has-text-weight-bold">Seguinos en las redes</div>

					<a href="https://www.facebook.com/AM750" target="_blank" rel="noopener noreferrer">
						<li> <img loading="lazy" src="<?php echo http2();?>/img/s-facebook.svg" width="24" height="24" alt="AM750 Facebook" /> </li>
					</a>

					<a href="https://www.instagram.com/radioam750/" target="_blank" rel="noopener noreferrer">
						<li> <img loading="lazy" src="<?php echo http2();?>/img/s-ig.svg" width="24" height="24" alt="AM750 Instagram" /></li>
					</a>

					<a href="https://twitter.com/AM750" target="_blank" rel="noopener noreferrer"> 
						<li>  <img loading="lazy" src="<?php echo http2();?>/img/s-twitter.svg" width="24" height="24" alt="AM750 Twitter" /> </li> 
					</a>

					<a href="https://api.whatsapp.com/send?phone=5491139224098" target="_blank" rel="noopener noreferrer">
						<li> <img loading="lazy" src="<?php echo http2();?>/img/s-wa.svg" width="24" height="24" alt="Haz clic para compartir en WhatsApp" /> </li> 
					</a>

			</ul>
		</div>

	</header><!-- #masthead -->

	<!--BREAKING NEWS  -->

	<?php
		if ( is_front_page()) {

			$breaking = get_option( 'breaking_mode' );
			if($breaking != "off") { ?>
				<div class="breaking mb-4 py-2 <?php echo get_option( 'breaking_mode' ); ?>"> 
					<a href="<?php echo get_option( 'breaking_news_url');?>" target="_blank">
						<h3 class="is-inline"> <?php echo get_option( 'breaking_news_field' ); ?>  </h3>
					</a>
				</div>

			<?php }
		}
	?>
	<!--// BREAKING NEWS-->

	<!--MAIN -cierra en footer -->
	<main id="primary" class="site-main">