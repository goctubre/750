<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package am750
 */

/* Featured Thumbnail to Admin Post Columns */
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
 
function posts_columns($defaults){
    $defaults['750_post_thumbs'] = __('Thumbs');
    return $defaults;
}
 
function posts_custom_columns($column_name, $id){
    if($column_name === '750_post_thumbs'){ echo the_post_thumbnail( 'thumbnail' ); }
}

/*PROGRAMACION*/
add_filter('manage_posts_columns', 'default_columns_head');
function default_columns_head($defaults) {
    global $current_screen;
    if (in_array($current_screen->post_type, array('calendarios'))) {
        $defaults['hora_inicio'] = 'Hora Inicio';
        $defaults['hora_fin'] = 'Hora Fin';
    }
    return $defaults;
}
function default_columns_content($column_name, $post_ID) {
    $horario_inicio = get_field( "hora_inicio", $post_id );
    $horario_fin = get_field( "hora_fin", $post_id );
    if ($column_name == 'hora_inicio') {
       echo $horario_inicio;
    } elseif ($column_name == 'hora_fin') {
        echo $horario_fin;
    }
}
add_action('manage_posts_custom_column', 'default_columns_content', 10, 2);