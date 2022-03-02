<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package am750
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="has-navbar-fixed-top">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="fb:pages" content="133788303319361" />
	
	<!--web-vitals library-->
	<script type="module">
	  import {getCLS, getFID, getLCP} from 'https://unpkg.com/web-vitals?module';
	  getCLS(console.log); getFID(console.log); getLCP(console.log);
	</script>
	<!-- //web-vitals library-->

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/mini-bulma-v05.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mini-bulma-v05.css"></noscript>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">  -->

	<!--PASO 2021-->
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/-paso-2021/elecciones-paso.css?v=<?php echo rand()?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<!--//PASO 2021-->
	
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css?=v<?php echo rand()?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<!-- <noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css"></noscript> -->

	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/am750.min.css?=v<?php echo rand()?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/am750.min.css?=v<?php echo rand()?>"></noscript> 
	<!-- testING >> ?=v<?php //echo rand()?>-->

	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/am750-darkmode.min.css?=v<?php echo rand()?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/am750-darkmode.min.css?=v<?php echo rand()?>"></noscript> 


	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/gravitec.css?=v<?php echo rand()?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gravitec.css?=v<?php echo rand()?>"></noscript> 

	<meta name="theme-color" content="#ffffff">
	<link rel="manifest" href="/manifest.json">



	<!--PRELOAD GOOGLE FONT-->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- optionally increase loading priority -->
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,600;0,700;1,600&family=Inter:wght@400;500;700&display=swap">
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">

	<!-- async CSS -->
	<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,600;0,700;1,600&family=Inter:wght@400;500;700&display=swap">
	<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
	<!-- no-JS fallback -->
	<noscript>
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,600;0,700;1,600&family=Inter:wght@400;500;700&display=swap">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
	</noscript>	
	<!--PRELOAD GOOGLE FONT-->


	<?php wp_head(); ?>

	<!--ADZONE-->
	<!-- <script src="https://s-adzone.com/c/14_750amsupertag.js" defer></script> -->
	<link rel="preload" href="https://s-adzone.com/c/14_750amsupertag.js" as="script" importance="low">
	<script type="text/javascript" src="https://s-adzone.com/c/14_750amsupertag.js" defer importance="low"></script>
	 
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TD85CXQ');</script>
	<!-- End Google Tag Manager -->

	<!-- CLARIFY -->
	<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "42cn5npxd1");
	</script>
	<!-- //CLARIFY -->
	
</head>

<!-- <body id="body" <?php //body_class(); ?>> OFIGINAL--> <!--ajaxify-->
<body id="body"> <!--ajaxify-->
	<div id="donde">  <!--ajaxify-->
		<div id="insidedonde" <?php body_class(); ?>>  <!--ajaxify-->


	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TD85CXQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


	<?php wp_body_open(); ?>

	<h1 id="page-title" style="text-indent:-999em;opacity:0;transform: scale(0); height: 1px;">AM 750 Una señal</h1>
	<div id="manto" class="hide"> </div>

	<?php include get_theme_file_path( '/inc/menu-search-mobile.php' );?>

	 <div id="page" class="site" data-scroll-container>

		<header id="masthead" class="site-header"> <!-- mt-2 mb-2-->

			<nav class="navbar is-fixed-top" role="navigation">

			  <div id="navbarBasicExample" class="navbar-menu container">
			    <div class="navbar-start">

				 	<div role="button" class="openmenu" aria-expanded="false" data-target="menuprincipal"> <!--sacar # / a ajaxify-->
					 	<div class="navbar-burger burger">
					      <span aria-hidden="true"></span>
					      <span aria-hidden="true"></span>
					      <span aria-hidden="true"></span>
					    </div> 
					    <div class="navbar-item is-hidden-touch">Menú</div>
				    </div>

			  		<a href="<?php echo get_site_url(); ?>/programacion" class="navbar-item is-hidden-touch">Programación</a>

			    </div>

			    <div class="navbar-brand">
			      <a class="site-branding navbar-item" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			    	  <img loading="eager" src="<?php echo http2();?>/img/750am-logo-red.svg" width="125" height="28" alt="AM 750 - Una señal" />
		     	 </a> <!-- .site-branding -->
			    </div>

			    <div class="navbar-end">

					<!-- SEARCH -->
					<div id="search" class="is-hidden-touch">
						<div class="nav-search-button" role="button">
							<img id="search-btn" loading="eager" src="<?php echo http2();?>/img/i-lupa.svg" width="22" height="22" alt="buscar"/>

							<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" alt="Buscar">

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
					<div class="navbar-item switch is-hidden-touch rayita" alt="Cambiar a modo oscuro" role="button">
						<img loading="eager" src="<?php echo http2();?>/img/i-contrast.svg" width="22" height="22" />
					</div>
					<!--//DARKMODE-->

					<!--WHATSAPP-->
					<a class="navbar-item rayita" id="bt-wa" href="https://api.whatsapp.com/send?phone=5491139224098" target="_blank" alt="Enviá un mensaje a la radio" role="button" rel="noopener noreferrer">
						<img loading="eager" src="<?php echo http2();?>/img/i-wa-verde.svg" width="24" height="24" alt="AM 750 - Mensajes" class="wz"/>
					</a>
					<!--//WHATSAPP-->

					<!--ESCUCHAR-->
					<a class="navbar-item play_btn is-hidden-touch" href="javascript:void(0); ">
						<button id="playnav" class="button is-bg-black llamarfalsoplayer" aria-label="Escuchar am750 en vivo">
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
				<?php wp_nav_menu(array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' )); ?>

				<ul id="menu-mob" class="is-hidden-tablet"> 
					<li> <div class="switch" aria-label="Activar modo oscuro"> Activar modo oscuro </div>  </li>
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
					<div class="breaking py-2 mb-5 mb-0-mobile <?php echo get_option( 'breaking_mode' ); ?>"> 
						<a href="<?php echo get_option( 'breaking_news_url');?>" target="_blank">
							<h3 class="is-inline"> <?php echo get_option( 'breaking_news_field' ); ?>  </h3>
						</a>
					</div>

				<?php }
			}
		?>
		<!--// BREAKING NEWS-->

		<!--BANNERS ELECCIONES 2021 -->
		<?php
			if ( is_front_page()) { ?>
				<section id="bannertop0" class="is-bg-grisclarito is-hidden-desktop">
					<div class="ad-slot" id="mobile_home_top" data-adtype="mobile_top"></div> <!--300x50-320x50-360x56-->
				</section>
			<?php }
		?>
		<!--//BANNERS-->


		<!--MAIN -cierra en footer -->
		<main id="primary" class="site-main">