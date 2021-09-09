<?php
/*
 Template Name: test_home
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */


?>
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

    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-600.eot" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-600.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-600.woff" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-600.ttf" crossorigin>
    <link rel="preload" as="font" href="<?php echo http2();?>/fonts/inter-v2-latin-600.svg" crossorigin>


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

<body <?php body_class(); ?>>

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
                <form role="search" method="get" id="search" class="search-form is-hidden-touch" action="<?php echo home_url( '/' ); ?>" aria-label="Buscar">
                    <input type="search" class="input" id="search-input" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    <button type="reset" class="search" id="search-btn"></button>
                </form>

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
                        <button id="playnav" class="play_btn button is-bg-violet">
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
                        <li> <img loading="lazy" src="<?php echo http2();?>/img/s-facebook.svg" width="" height="" alt="AM750 Facebook" /> </li>
                    </a>

                    <a href="https://www.instagram.com/radioam750/" target="_blank" rel="noopener noreferrer">
                        <li> <img loading="lazy" src="<?php echo http2();?>/img/s-ig.svg" width="" height="" alt="AM750 Instagram" /></li>
                    </a>

                    <a href="https://twitter.com/AM750" target="_blank" rel="noopener noreferrer"> 
                        <li>  <img loading="lazy" src="<?php echo http2();?>/img/s-twitter.svg" width="" height="" alt="AM750 Twitter" /> </li> 
                    </a>

                    <a href="https://api.whatsapp.com/send?phone=5491139224098" target="_blank" rel="noopener noreferrer">
                        <li> <img loading="lazy" src="<?php echo http2();?>/img/s-wa.svg" width="" height="" alt="Haz clic para compartir en WhatsApp" /> </li> 
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
<!-- CATASTROFE -->
    <?php 
        $catastrofe =  get_option('catastrofe'); 
        if( $catastrofe == 'una' || $catastrofe == 'cuatro' ) { 
            include get_theme_file_path( '/inc/home-modo-catastrofe-loop.php' );
        }
    ?>
<!--//CATASTROFE-->
                <a class="navbar-item play_btn is-hidden-touch" href="javascript:void(0); ">
                        <button id="playnav" class="play_btn button is-bg-violet">
                        <span class="icon">
                            <!-- <img src="<?php echo http2();?>/img/nav-play.svg" class="is-invert" width="" height="" alt="Escuchar radio" / -->
                        </span>
                        <span>AM750 en vivo</span>
                    </button>
                </a>
<div id="bloque01" class="container <?php $catastrofe =  get_option('catastrofe'); if( $catastrofe == 'catastrofe' ) { echo "catastrofe";} ?>">

    <div class="columns">
        
        <div class="column is-9">
            <!--BANNERS -->
            <section id="bannertop" class="is-bg-grisclarito">
                <div class="ad-slot" id="home_billboard_atf" data-adtype="billboard"></div>
                <div class="ad-slot" id="mobile_home_top" data-adtype="mobile_top"></div> <!--300x50-320x50-360x56-->
            </section>
            <!--//BANNERS-->

            <!--ESPECIASLES -->
            <section id="especiales" class="my-4">
                <?php include get_theme_file_path( '/inc/home-especial-vacunas.php' );?>
            </section>
            <!--//ESPECIASLES-->

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



<!--ACCESOS RÁPIDOS-->
<section id="accesos-rapidos" class="is-seccion mt-4 lh-140 mb-6-mobile">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="columns is-mobile">
                  <div class="column is-2-desktop is-3-mobile has-text-centered-mobile">
                    <br>
                    <a href="#suscribite-newsletter">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/accesos-rapidos-mail.svg" width="" height="" alt="750 AM" />
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/accesos-rapidos-wap.svg" width="" height="" alt="750 AM" />
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
                    <a href="https://750.am/bajate-nuestra-app/"> <img src="<?php echo get_template_directory_uri(); ?>/img/accesos-rapidos-app.svg" width="" height="" alt="750 AM" /> </a>
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


        </div>  <!--/column is-9 -->



        <div class="column is-3">
            <!--BANNER--> 
            <div class="ad-slot sticky is-hidden-mobile" id='Home_HalfPage_RightRail' data-adtype='halfpage'></div> 
            <!--//BANNER-->
        </div>  <!--/column is-3 -->

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

<!-- <script type="text/javascript">
    var f = Element.prototype.appendChild;
    Element.prototype.appendChild = function(){
       f.apply(this, arguments);
       //arguments[0].innerHTML="!Intercepted!"; 

        if(arguments[0].src!== undefined){
            if(arguments[0].src.includes("lightning_player")){
                   console.log(arguments[0].src);
                   arguments[0].defer=true;

            }
            if(arguments[0].src.includes("jquery-ui")){
                   console.log(arguments[0].src);
                   arguments[0].defer=true;

            }
        }

    };
</script> -->
    <!--Player-->
    <div class="custom_player_space"> 
        <?php //echo do_shortcode( '[media_player]' );?>
    </div>
    <!--player-->
    
    <!--Player-->
   <!--  <div class="custom_player_space"> 
        <div data-msp data-type='live' data-id='601bf3e463786007e6d3b9b0' data-player='603416a7b108a9485c0be15f'>
            <script type='text/javascript' src='https://player.cdn.mdstrm.com/lightning_player/api.js' defer></script>
        </div>
    </div> -->
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

