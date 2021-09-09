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
        __( 'Portada', 'my-textdomain' ), 'edit_others_posts', 'portada-page', 'my_admin_page_contents', 'dashicons-schedule', 3); //manage_options
}
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_page_contents() { ?>
    <h1> <?php esc_html_e( 'Manejo de portada', 'my-plugin-textdomain' ); ?> </h1>
    <form method="POST" action="options.php">
        <?php settings_fields( 'portada-page' ); do_settings_sections( 'portada-page' ); submit_button(); ?>
    </form>
    <?php }

add_action( 'admin_init', 'my_settings_init' );

function my_settings_init() {
add_settings_section('portada_page_setting_section', __( 'Catástrofe - Switch Modo', 'my-textdomain' ),'my_setting_section_callback_function','portada-page');
add_settings_field('catastrofe', 'Portadas catástrofe - Elecciones-', 'portada_catastrofe', 'portada-page', 'portada_page_setting_section');
add_settings_field('catastrofemapa_', 'Mapa', 'portada_catastrofe_mapa', 'portada-page', 'portada_page_setting_section');
add_settings_field('elecciones_up', 'Destacado Superior', 'portada_elecciones_up', 'portada-page', 'portada_page_setting_section');

add_settings_field('candidates_url', 'URL Resultados por Candidates', 'portada_candidates_url', 'portada-page', 'portada_page_setting_section');
add_settings_field('candidates_p12_url', 'URL Resultados por Candidates P12', 'portada_candidates_p12_url', 'portada-page', 'portada_page_setting_section');
add_settings_field('mapa_url', 'URL Mapa', 'portada_mapa_url', 'portada-page', 'portada_page_setting_section');

add_settings_field('orden_portada', 'Orden de la portada', 'portada_orden_portada', 'portada-page', 'portada_page_setting_section');


register_setting( 'portada-page', 'catastrofe' );
register_setting( 'portada-page', 'catastrofe_mapa' ); //add
register_setting( 'portada-page', 'elecciones_up' ); //add
register_setting( 'portada-page', 'candidates_url' ); //add
register_setting( 'portada-page', 'candidates_p12_url' ); //add
register_setting( 'portada-page', 'mapa_url' ); //add
register_setting( 'portada-page', 'orden_portada' );

}

function my_setting_section_callback_function() { echo '<p>Desde acá se puede modificar la portada</p>'; }

function portada_catastrofe() { ?>
    <input type="radio" name="catastrofe" value="off" <?php checked(off, get_option('catastrofe'), true); ?>>  Apagado <br>
    <input type="radio" name="catastrofe" value="una" <?php checked(una, get_option('catastrofe'), true); ?>> Una nota <br>
    <input type="radio" name="catastrofe" value="cuatro" <?php checked(cuatro, get_option('catastrofe'), true); ?>> Cuatro notas <br>
    <input type="radio" name="catastrofe" value="mapa" <?php checked(mapa, get_option('catastrofe'), true); ?>> Mapa<br>
    <input type="radio" name="catastrofe" value="destacadosuperior" <?php checked(destacadosuperior, get_option('catastrofe'), true); ?>> Una nota + Home normal<br>
    <input type="radio" name="catastrofe" value="destacadosuperiormasnotas" <?php checked(destacadosuperiormasnotas, get_option('catastrofe'), true); ?>> Cuatro notas + Home normal<br>
    <label style="margin-top: 14px; float: left;"> Las notas tienen que tener categoría #catástrofe</label>

    <?php
}

function portada_catastrofe_mapa() { ?>
    <input type="radio" name="catastrofe_mapa" value="off" <?php checked(off, get_option('catastrofe_mapa'), true); ?>> Apagado <br>
    <input type="radio" name="catastrofe_mapa" value="on" <?php checked(on, get_option('catastrofe_mapa'), true); ?>> Prendido <br>
    <?php
}

function portada_elecciones_up() { ?>
    <input type="radio" name="elecciones_up" value="off" <?php checked(off, get_option('elecciones_up'), true); ?>> Apagado <br>
    <input type="radio" name="elecciones_up" value="widget" <?php checked(widget, get_option('elecciones_up'), true); ?>> Resultados por Candidates <br>
    <input type="radio" name="elecciones_up" value="widgetp12" <?php checked(widgetp12, get_option('elecciones_up'), true); ?>> Resultados por Candidates P12<br>
    <input type="radio" name="elecciones_up" value="servicio" <?php checked(servicio, get_option('elecciones_up'), true); ?>> Notas de servicio <br>

    <?php
}

function portada_candidates_url() { ?>
    <input style="width:400px" type="text" id="candidates_url" name="candidates_url" value="<?php echo get_option('candidates_url'); ?>">
    <?php
}

function portada_candidates_p12_url() { ?>
    <input style="width:400px" type="text" id="candidates_p12_url" name="candidates_p12_url" value="<?php echo get_option('candidates_p12_url'); ?>">
    <?php
}

function portada_mapa_url() { ?>
    <input style="width:400px" type="text" id="mapa_url" name="mapa_url" value="<?php echo get_option('mapa_url'); ?>">
    <?php
}

function portada_orden_portada() { ?>
    <input type="radio" name="orden_portada" value="actualidad" <?php checked(actualidad, get_option('orden_portada'), true); ?>> Modo Actualidad - Modo Relax <br>
    <input type="radio" name="orden_portada" value="relax" <?php checked(relax, get_option('orden_portada'), true); ?>> Modo Relax - Modo Actualidad <br>
    <?php
}








/*MANEJO ALERTAS */
function admin_menu_alert() {
    add_menu_page(
        __( 'Alertas page', 'my-textdomain' ),
        __( 'Alertas', 'my-textdomain' ), 'edit_others_posts', 'alertas-page', 'admin_menu_alert_contents', 'dashicons-megaphone', 3); //manage_options
}
add_action( 'admin_menu', 'admin_menu_alert' );

function admin_menu_alert_contents() { ?>
    <h1> <?php esc_html_e( 'Alertas', 'my-plugin-alertas' ); ?> </h1>
    <form method="POST" action="options.php">  <?php settings_fields( 'alertas-page' ); do_settings_sections( 'alertas-page' ); submit_button(); ?>  </form>
    <?php 
}

add_action( 'admin_init', 'alert_settings' );

function alert_settings() {
    add_settings_section('alertas_page_setting_section', __( ': usar comillas inglesas “ ” ', 'my-textdomain' ),'alert_settings_callback_function','alertas-page');
    add_settings_field('breaking_news_field', 'Ahora / Urgente', 'alertas_input','alertas-page', 'alertas_page_setting_section');
    add_settings_field('breaking_news_url', 'URL', 'alertas_url','alertas-page', 'alertas_page_setting_section');
    add_settings_field('breaking_mode', 'Seleccionar tipo', 'alertas_radio', 'alertas-page', 'alertas_page_setting_section');

    register_setting( 'alertas-page', 'breaking_news_field' );
    register_setting( 'alertas-page', 'breaking_news_url' );
    register_setting( 'alertas-page', 'breaking_mode' );
}

function alert_settings_callback_function() { echo '<p>Alertas Ahora / Urgente</p>'; }

function alertas_input() { ?>
    <label for="my-input"> <?php //_e( 'Ahora / Urgente' ); ?> </label>
    <input style="width:500px" type="text" id="breaking_news_field" name="breaking_news_field" value="<?php echo get_option('breaking_news_field'); ?>">
    <?php
}

function alertas_url() { ?>
    <input style="width:500px" type="text" id="breaking_news_url" name="breaking_news_url" value="<?php echo get_option('breaking_news_url'); ?>">
    <?php
}

function alertas_radio() { ?>
    <input type="radio" name="breaking_mode" value="off" <?php checked(off, get_option('breaking_mode'), true); ?>> Apagado <br>
    <input type="radio" name="breaking_mode" value="ahora" <?php checked(ahora, get_option('breaking_mode'), true); ?>> Ahora <br>
    <input type="radio" name="breaking_mode" value="urgente" <?php checked(urgente, get_option('breaking_mode'), true); ?>> Urgente <br>
    <?php
}


// Permisos
$role_object = get_role( 'editor' );
$role_object->add_cap( 'manage_privacy_options', true );
$role_object->add_cap( 'manage_options' ); // this needs to be active in order that before cap works