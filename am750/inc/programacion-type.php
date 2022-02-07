<?php
// datapicker hour incident
//plugins/acf/includes/api/api-helpers.php
//remplazar date_i18n por wp_date


/* CUSTOM POST TYPE PROGRAMACION*/
function custom_post_type_calendario() {
    $labels = array(
        'name' => esc_attr__("Programación","am750"),
        'singular_name' => esc_attr__("Programación","am750"),
        'add_new' => esc_attr__("Añadir nuevo","am750"),
        'add_new_item' => esc_attr__("Añadir nuevo calendario","am750"),
        'edit_item' => esc_attr__("Editar calendario","am750"),
        'new_item' => esc_attr__("Nuevo calendario","am750"),
        'all_items' => esc_attr__("Todos los calendarios","am750"),
        'view_item' => esc_attr__("Ver calendario","am750"),
        'search_items' => esc_attr__("Buscar calendario","am750"),
        'not_found' => esc_attr__("No se encontró calendario","am750"),
        'not_found_in_trash' => esc_attr__("No se encontró calendario en papelera","am750"),
        'menu_name' => esc_attr__("Programación","am750")
    );
          
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 8,
        'page-attributes' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_menu' => true,
        'menu_icon' =>   'dashicons-clipboard',
        'supports' => array('title')
 
    );
    //date_default_timezone_set('America/Argentina/Buenos_Aires');
     
    register_post_type( 'calendarios', $args );
 
}
  
add_action( 'init', 'custom_post_type_calendario', 0 );





/* CUSTOM POST TYPE PROGRAMAS*/
function create_posttype() {
 
    $labels = array(
        'name' => __( 'Programas' ),
        'singular_name' => __( 'Programa' )
    );
          
    $args = array(
        'label'               => __( 'Programas', '750am' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'modo' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'can_export'          => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'programas'),
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    register_post_type( 'programas', $args );
 

    register_taxonomy( 'modo', array('programas'), array(
        'hierarchical' => true, 
        'label' => 'Modo', 
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'singular_label' => 'Modo', 
        'rewrite' => array( 'slug' => 'modos', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'modo', 'programas' ); // Better be safe than sorry

}

add_action( 'init', 'create_posttype', 0 );