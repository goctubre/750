<?php
/**
 * am750 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package am750
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}

if ( ! function_exists( 'am750_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function am750_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on am750, use a find and replace
		 * to change 'am750' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'am750', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'am750' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'am750_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'am750_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function am750_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'am750_content_width', 640 );
}
add_action( 'after_setup_theme', 'am750_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function am750_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'am750' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'am750' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'am750_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function am750_scripts() {
	wp_enqueue_style( 'am750-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'am750-style', 'rtl', 'replace' );

	wp_enqueue_script( 'am750-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'am750-scripts', get_template_directory_uri() . '/js/750.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'am750-floatsidebar', get_template_directory_uri() . '/js/float-sidebar.min.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'am750_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/*** Custom template tags for this theme.*/
require get_template_directory() . '/inc/template-tags.php';

/*** Functions which enhance the theme by hooking into WordPress. */
require get_template_directory() . '/inc/template-functions.php';

/*** Functions Admin which enhance the theme by hooking into WordPress. */
require get_template_directory() . '/inc/template-functions-admin.php';

/*** Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/*** Load Jetpack compatibility file.*/
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*** Extras css.*/
wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/bulma-carousel.min.css',false,'1.1','all');



// CUSTOM POST TYPE NOTICIAS
/*
* Creating a function to create our CPT
// */
 
// function custom_post_type_noticias() {
 
// // Set UI labels for Custom Post Type
//     $labels = array(
//         'name'                => _x( 'Noticias', 'Post Type General Name', 'am750' ),
//         'singular_name'       => _x( 'Noticia', 'Post Type Singular Name', 'am750' ),
//         'menu_name'           => __( 'Noticias', 'am750' ),
//         'parent_item_colon'   => __( 'Parent noticia', 'am750' ),
//         'all_items'           => __( 'Todas las noticias', 'am750' ),
//         'view_item'           => __( 'Ver noticia', 'am750' ),
//         'add_new_item'        => __( 'Agregar nueva noticia', 'am750' ),
//         'add_new'             => __( 'Agregar nueva', 'am750' ),
//         'edit_item'           => __( 'Editar noticia', 'am750' ),
//         'update_item'         => __( 'Actualizar noticia', 'am750' ),
//         'search_items'        => __( 'Buscar noticia', 'am750' ),
//         'not_found'           => __( 'No encontrado', 'am750' ),
//         'not_found_in_trash'  => __( 'No encontrado en papelera', 'am750' ),
//     );
     
// // Set other options for Custom Post Type
     
//     $args = array(
//         'label'               => __( 'noticias', 'am750' ),
//         'description'         => __( 'Noticias noticiosas', 'am750' ),
//         'labels'              => $labels,
//         // Features this CPT supports in Post Editor
//         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//         // You can associate this CPT with a taxonomy or custom taxonomy. 
//         'taxonomies'          => array( 'categorias' ),
//         /* A hierarchical CPT is like Pages and can have
//         * Parent and child items. A non-hierarchical CPT
//         * is like Posts.
//         */ 
//         'hierarchical'        => false,
//         'public'              => true,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'show_in_nav_menus'   => true,
//         'show_in_admin_bar'   => true,
//         'menu_icon'           => 'dashicons-controls-play',
//         'menu_position'       => 5,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => true,
//         'capability_type'     => 'post',
//         'show_in_rest' => true,
 
//     );
     
//     // Registering your Custom Post Type
//     register_post_type( 'noticias', $args );
 
// }
 
// /* Hook into the 'init' action so that the function
// * Containing our post type registration is not 
// * unnecessarily executed. 
// */
  
// add_action( 'init', 'custom_post_type_noticias', 0 );
/* // FIN CUSTOMPOST*/



/**
 * Functions which enhance the theme by hooking into WordPress.
 */
