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
    if ($column_name == 'hora_inicio') { echo $horario_inicio; } elseif ($column_name == 'hora_fin') { echo $horario_fin; }
}
add_action('manage_posts_custom_column', 'default_columns_content', 10, 2);

/* FILTER POST*/
add_filter('views_edit-post','my_filter');
function my_filter($views){
    $views['actualidad'] = '<a href="edit.php?category_name=actualidad&post_status=publish" class="primary"> <b> Actualidad </b> </a>';
    $views['destacados'] = '<a href="edit.php?category_name=destacados&post_status=publish" class="primary"> <b>Destacados</b> </a>';
    $views['filtros'] = '<a href="edit.php?category_name=Informativo-750&post_status=publish" class="primary"> <b>Informativo</b> </a>';
    $views['catastrofe'] = '<a href="edit.php?category_name=catastrofe&post_status=publish" class="primary"> <b>Catástrofe</b> </a>';
    return $views;
}

/*MANEJO PORTADA */
function my_admin_menu() {
    add_menu_page(
        __( 'Portada page', 'my-textdomain' ),
        __( 'Portada', 'my-textdomain' ),
        'edit_others_posts', 'portada-page', 'my_admin_page_contents', 'dashicons-schedule', 3); //manage_options
}
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_page_contents() { ?>
    <h1> <?php esc_html_e( 'Manejo de portada', 'my-plugin-textdomain' ); ?> </h1>
    <form method="POST" action="options.php">
        <?php
            settings_fields( 'portada-page' );
            do_settings_sections( 'portada-page' );
            submit_button();
        ?>
    </form>
    <?php }

add_action( 'admin_init', 'my_settings_init' );

function my_settings_init() {
add_settings_section('portada_page_setting_section', __( 'Urgente - Ahora - Catástrofe - Switch Modo', 'my-textdomain' ),'my_setting_section_callback_function','portada-page');
add_settings_field( 'breaking_news_field', 'Ahora / Urgente', 'portada_input','portada-page', 'portada_page_setting_section');
add_settings_field('breaking_news_url', 'URL', 'portada_url','portada-page', 'portada_page_setting_section');
add_settings_field('breaking_mode', 'Seleccionar tipo', 'portada_radio', 'portada-page', 'portada_page_setting_section');
add_settings_field('catastrofe', 'Portada catástrofe?', 'portada_catastrofe', 'portada-page', 'portada_page_setting_section');

register_setting( 'portada-page', 'breaking_news_field' );
register_setting( 'portada-page', 'breaking_news_url' );
register_setting( 'portada-page', 'breaking_mode' );
register_setting( 'portada-page', 'catastrofe' );
}

function my_setting_section_callback_function() { echo '<p>Desde acá se puede modificar la portada</p>'; }

function portada_input() { ?>
    <label for="my-input"> <?php //_e( 'Ahora / Urgente' ); ?> </label>
    <input style="width:500px" type="text" id="breaking_news_field" name="breaking_news_field" value="<?php echo get_option( 'breaking_news_field' ); ?>">
    <?php
}

function portada_url() { ?>
    <input style="width:500px" type="text" id="breaking_news_url" name="breaking_news_url" value="<?php echo get_option( 'breaking_news_url' ); ?>">
    <?php
}

function portada_radio() { ?>
    <input type="radio" name="breaking_mode" value="off" <?php checked(off, get_option('breaking_mode'), true); ?>> ✘ <br>
    <input type="radio" name="breaking_mode" value="ahora" <?php checked(ahora, get_option('breaking_mode'), true); ?>> Ahora <br>
    <input type="radio" name="breaking_mode" value="urgente" <?php checked(urgente, get_option('breaking_mode'), true); ?>> Urgente <br>
    <?php
}

function portada_catastrofe() { ?>
    <input type="radio" name="catastrofe" value="off" <?php checked(off, get_option('catastrofe'), true); ?>>  ✘ <br>
    <input type="radio" name="catastrofe" value="una" <?php checked(una, get_option('catastrofe'), true); ?>> Una nota <br>
    <input type="radio" name="catastrofe" value="cuatro" <?php checked(cuatro, get_option('catastrofe'), true); ?>> Cuatro notas <br>
    <?php
}

// Permisos
$role_object = get_role( 'editor' );
$role_object->add_cap( 'manage_privacy_options', true );
$role_object->add_cap( 'manage_options' ); // this needs to be active in order that before cap works
