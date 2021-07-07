<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package am750
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function am750_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) { $classes[] = 'hfeed'; }

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) { $classes[] = 'no-sidebar'; }
	return $classes;
}
add_filter( 'body_class', 'am750_body_classes' );

/** Add a pingback url auto-discovery header for single posts, pages, or attachments.*/
function am750_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'am750_pingback_header' );



//LOAD LAST CSS VERSION 
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);   
}

/** get rid of the "Category:", "Tag:", "Author:", "Archives:" and "Other taxonomy name:"*/
function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );


//Cambiar comillas tipográficas por comillas normales
add_filter( 'run_wptexturize', '__return_false' ); 


/* METABOX TEMA*/
add_action( 'admin_menu', 'tema_add_metabox' );
 
function tema_add_metabox() {
    add_meta_box(
        'tema_metabox', // metabox ID
        'Tema', // title
        'tema_metabox_callback', // callback function
        'post', // post type or post types in array
        'normal', // position (normal, side, advanced)
        'high' // priority (default, low, high, core)
    );
}

function tema_metabox_callback( $post ) {
    $tema = get_post_meta( $post->ID, 'tema', true );
    // nonce, actually I think it is not necessary here
    wp_nonce_field( 'somerandomstr', '_temanonce' );
 
    echo '<table class="form-table">
        <tbody>
            <tr>
                <td><input type="text" id="tema" name="tema" value="' . esc_attr( $tema ) . '" class="regular-text"></td>
            </tr>
        </tbody>
    </table>';
}

add_action( 'save_post', 'tema_save_meta', 10, 2 );
 
function tema_save_meta( $post_id, $post ) {
    if ( ! isset( $_POST[ '_temanonce' ] ) || ! wp_verify_nonce( $_POST[ '_temanonce' ], 'somerandomstr' ) ) { return $post_id; }
    $post_type = get_post_type_object( $post->post_type );
 
    if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {return $post_id;}
 
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) { return $post_id; }
 
    if( $post->post_type != 'post' ) { return $post_id; }
 
    if( isset( $_POST[ 'tema' ] ) ) {
        update_post_meta( $post_id, 'tema', sanitize_text_field( $_POST[ 'tema' ] ) );
    } else {
        delete_post_meta( $post_id, 'tema' );
    }
 
    return $post_id;
}


/* METABOX BAJADA*/


add_action( 'admin_menu', 'bajada_add_metabox' );
 
function bajada_add_metabox() {
    add_meta_box(
        'bajada_metabox', // metabox ID
        'Bajada', // title
        'bajada_metabox_callback', // callback function
        'post', // post type or post types in array
        'normal', // position (normal, side, advanced)
        'high' // priority (default, low, high, core)
    );
}

function bajada_metabox_callback( $post ) {
    $bajada = get_post_meta( $post->ID, 'bajada', true );
    // nonce, actually I think it is not necessary here
    wp_nonce_field( 'somerandomstr', '_bajadanonce' );
 
    echo '<table class="form-table">
        <tbody>
            <tr>
                <td><input type="text" id="bajada" name="bajada" value="' . esc_attr( $bajada ) . '" class="large-text"></td>
            </tr>
        </tbody>
    </table>';
}

add_action( 'save_post', 'bajada_save_meta', 10, 2 );
 
function bajada_save_meta( $post_id, $post ) {
    if ( ! isset( $_POST[ '_bajadanonce' ] ) || ! wp_verify_nonce( $_POST[ '_bajadanonce' ], 'somerandomstr' ) ) { return $post_id; }
    $post_type = get_post_type_object( $post->post_type );
    if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {return $post_id;}
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) { return $post_id; }
    if( $post->post_type != 'post' ) { return $post_id; }
    if( isset( $_POST[ 'bajada' ] ) ) {
        update_post_meta( $post_id, 'bajada', sanitize_text_field( $_POST[ 'bajada' ] ) );
    } else {
        delete_post_meta( $post_id, 'bajada' );
    }
    return $post_id;
}




/* CATEGORÍAS PROGRAMA */
function categorias_programas() {
    $programas = get_the_category( $post->ID );

        $output = '';
        if ( ! empty( $programas ) ) {
            foreach( $programas as $programa ) {
                if ($programa->parent != 0) {
                    $output .= '<a href="' . esc_url( get_category_link( $programa->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'Ver todas las noticias en %s', 'textdomain' ), $programa->name ) ) . '"> <button class="button is-light etiquet">' . esc_html( $programa->name ) . '</button> </a>';
                }

            }
            echo trim( $output );
    }
}

/* X TIEMPO */
function cantidad_tiempo_entrada() {
    $dia_actual= date('Y-m-d H:i:s');
    $timestamp = strtotime($dia_actual);
    $time = $timestamp - (3 * 60 * 60);
    $dia_actual = date("Y-m-d H:i:s", $time);

    $dia_entrada= get_the_time('Y-m-d H:i:s');

    $s_time = strtotime($dia_actual)-strtotime($dia_entrada);
    $d_time = intval($s_time/86400);
    $m_time = intval($s_time/60);

    // echo $s_time.'<br>';
    // echo $d_time.'<br>';
    // echo $m_time.'<br>';

    if ($d_time == 0 ) {
       if ($m_time < 1 ) { 
            $cantidad_tiempo= 'Hace ' .$m_time.' minuto';
       } else if ($m_time > 1 && $m_time < 60) {
            $cantidad_tiempo= 'Hace ' .$m_time.' minutos';
       } else if ($m_time > 60 && $m_time < 120 ) { 
            $cantidad_tiempo= 'Hace '.intval($m_time/60).' hora';
       } else {  $cantidad_tiempo= 'Hace '.intval($m_time/60).' horas';
       }
        
    } else {
       if ($d_time == 1 ) { $cantidad_tiempo= 'Hace '.$d_time.' día';
       } else {  $cantidad_tiempo= 'Hace '.$d_time.' días';
       }
    }
    return $cantidad_tiempo;
}


// MÁS POPULARES.
function pp_getPostViews($postID){
   $count_key = 'post_views_count';
   $count = get_post_meta($postID, $count_key, true);
   if($count==''){
     delete_post_meta($postID, $count_key);
     add_post_meta($postID, $count_key, '0');
     return "0 View";
   }
   return $count.' Vistas';
}
function pp_setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
     $count = 0;
   delete_post_meta($postID, $count_key);
   add_post_meta($postID, $count_key, '0');
  }
 else{
   $count++;
 update_post_meta($postID, $count_key, $count);
 }
}


/* PROGRAMA AL AIRE */
function get_programa_al_aire(){
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $now_day=strtolower(date("D"));
    $now_hour=strtolower(date("H"));

    $programa=array();

    $dias=array(
        "mon"=>"Lunes",
        "tue"=>"Martes",
        "wed"=>"Miércoles",
        "thu"=>"Jueves",
        "fri"=>"Viernes",
        "sat"=>"Sábado",
        "sun"=>"Domingo"
    );

    $the_query = array(
        'post_type' => 'calendarios',
        'post_status' => 'publish',
        'posts_per_page' => 6,
    );

    $loop = new WP_Query( $the_query ); 
    foreach ($dias as $key => $value) {
        while ( $loop->have_posts() ) : $loop->the_post(); 
            $post_id = get_the_ID();
            $programa_dias = get_field( "dias_de_la_semana", $post_id );
            $horario_inicio = get_field( "hora_inicio", $post_id );
            $horario_fin = get_field( "Hora_fin", $post_id );

            if( in_array($key,$programa_dias) ){
                if($now_day==$key && ($now_hour>=$horario_inicio && $now_hour<=$horario_fin) ){
                    $programa['id'] = get_field( "programa", $post_id );
                    $programa['hora_inicio'] = get_field( "hora_inicio", $post_id );
                    $programa['hora_fin'] = get_field( "Hora_fin", $post_id );
                    $programa['link'] = get_the_permalink($programa['id']);
                    $mypost = get_post( $programa['id'] );
                    $programa['the_content'] = apply_filters('the_content',$mypost->post_content);
                    $programa['thumbnail'] = get_the_post_thumbnail( $programa['id'], 'thumbnail' );
                }
            }
            
        endwhile;
    }
    return $programa;
}

// PROGRAMACION
include(get_template_directory() . '/inc/programacion-type.php');





/*METABOX QUE PASO - IMPORTANTE - OPINION*/
// define('WYSIWYG_META_BOX_ID', 'my-editor');
// define('WYSIWYG_EDITOR_ID', 'myeditor'); //Important for CSS that this is different
// define('WYSIWYG_META_KEY', 'extra-content');

// add_action('admin_init', 'wysiwyg_register_meta_box');
// function wysiwyg_register_meta_box(){
//  add_meta_box("metabox_que_paso", __('¿Qué paso?', 'wysiwyg'), 'wysiwyg_render_meta_box_que_paso', 'post');
//  add_meta_box("metabox_importante", __('¿Por qué es importante?', 'wysiwyg'), 'wysiwyg_render_meta_box_importante', 'post');
//  add_meta_box("metabox_opinion", __('Opinión', 'wysiwyg'), 'wysiwyg_render_meta_box_opinion', 'post');
// }

// function wysiwyg_render_meta_box_que_paso(){
//         global $post;
//         $meta_box_id = "metabox_que_paso";
//         $meta_key = "que_paso_meta_key";
        
//         //Add CSS jQuery goodness to make this work like the original WYSIWYG
//         echo "
//                 <style type='text/css'>
//                         #$meta_box_id #edButtonHTML, #$meta_box_id #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
//                         #$meta_box_id #$meta_key{width:100%;}
//                         #$meta_box_id #editorcontainer{background:#fff !important;}
//                         #$meta_box_id #$editor_id_fullscreen{display:none;}
//                 </style>
            
//                 <script type='text/javascript'>
//                         jQuery(function($){
//                                 $('#$meta_box_id #editor-toolbar > a').click(function(){
//                                         $('#$meta_box_id #editor-toolbar > a').removeClass('active');
//                                         $(this).addClass('active');
//                                 });
//                                 if($('#$meta_box_id #edButtonPreview').hasClass('active')){
//                                         $('#$meta_box_id #ed_toolbar').hide();
//                                 }
//                                 $('#$meta_box_id #edButtonPreview').click(function(){
//                                         $('#$meta_box_id #ed_toolbar').hide();
//                                 });
//                                 $('#$meta_box_id #edButtonHTML').click(function(){
//                                         $('#$meta_box_id #ed_toolbar').show();
//                                 });
//                         });
//                 </script>
//         ";
        
//         //Create The Editor
//         $content = get_post_meta($post->ID, $meta_key, true);
//         the_editor($content, $meta_key);
        
//         //Clear The Room!
//         echo "<div style='clear:both; display:block;'></div>";
// }

// add_action('save_post', 'wysiwyg_save_meta_que_paso');
// function wysiwyg_save_meta_que_paso(){
    
//         $meta_key = "que_paso_meta_key";
    
//         if(isset($_REQUEST[$meta_key]))
//             update_post_meta($_REQUEST['post_ID'], $meta_key,$_REQUEST[$meta_key]);
// }


// function wysiwyg_render_meta_box_opinion(){
//         global $post;
//         $meta_box_id = "metabox_opinion";
//         $meta_key = "opinion_meta_key";
        
//         //Add CSS jQuery goodness to make this work like the original WYSIWYG
//         echo "
//                 <style type='text/css'>
//                         #$meta_box_id #edButtonHTML, #$meta_box_id #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
//                         #$meta_box_id #$meta_key{width:100%;}
//                         #$meta_box_id #editorcontainer{background:#fff !important;}
//                         #$meta_box_id #$editor_id_fullscreen{display:none;}
//                 </style>
            
//                 <script type='text/javascript'>
//                         jQuery(function($){
//                                 $('#$meta_box_id #editor-toolbar > a').click(function(){
//                                         $('#$meta_box_id #editor-toolbar > a').removeClass('active');
//                                         $(this).addClass('active');
//                                 });
//                                 if($('#$meta_box_id #edButtonPreview').hasClass('active')){
//                                         $('#$meta_box_id #ed_toolbar').hide();
//                                 }
//                                 $('#$meta_box_id #edButtonPreview').click(function(){
//                                         $('#$meta_box_id #ed_toolbar').hide();
//                                 });
//                                 $('#$meta_box_id #edButtonHTML').click(function(){
//                                         $('#$meta_box_id #ed_toolbar').show();
//                                 });
//                         });
//                 </script>
//         ";
        
//         //Create The Editor
//         $content = get_post_meta($post->ID, $meta_key, true);
//         the_editor($content, $meta_key);
        
//         //Clear The Room!
//         echo "<div style='clear:both; display:block;'></div>";
// }

// add_action('save_post', 'wysiwyg_save_meta_opinion');
// function wysiwyg_save_meta_opinion(){
    
//         $meta_key = "opinion_meta_key";
    
//         if(isset($_REQUEST[$meta_key]))
//             update_post_meta($_REQUEST['post_ID'], $meta_key,$_REQUEST[$meta_key]);
// }

// function wysiwyg_render_meta_box_importante(){
//         global $post;
//         $meta_box_id = "metabox_importante";
//         $meta_key = "importante_meta_key";
        
//         //Add CSS jQuery goodness to make this work like the original WYSIWYG
//         echo "
//                 <style type='text/css'>
//                         #$meta_box_id #edButtonHTML, #$meta_box_id #edButtonPreview {background-color: #F1F1F1; border-color: #DFDFDF #DFDFDF #CCC; color: #999;}
//                         #$meta_box_id #$meta_key{width:100%;}
//                         #$meta_box_id #editorcontainer{background:#fff !important;}
//                         #$meta_box_id #$editor_id_fullscreen{display:none;}
//                 </style>
            
//                 <script type='text/javascript'>
//                         jQuery(function($){
//                                 $('#$meta_box_id #editor-toolbar > a').click(function(){
//                                         $('#$meta_box_id #editor-toolbar > a').removeClass('active');
//                                         $(this).addClass('active');
//                                 });
//                                 if($('#$meta_box_id #edButtonPreview').hasClass('active')){
//                                         $('#$meta_box_id #ed_toolbar').hide();
//                                 }
//                                 $('#$meta_box_id #edButtonPreview').click(function(){
//                                         $('#$meta_box_id #ed_toolbar').hide();
//                                 });
//                                 $('#$meta_box_id #edButtonHTML').click(function(){
//                                         $('#$meta_box_id #ed_toolbar').show();
//                                 });
//                         });
//                 </script>
//         ";
        
//         //Create The Editor
//         $content = get_post_meta($post->ID, $meta_key, true);
//         the_editor($content, $meta_key);
        
//         //Clear The Room!
//         echo "<div style='clear:both; display:block;'></div>";
// }

// add_action('save_post', 'wysiwyg_save_meta_importante');
// function wysiwyg_save_meta_importante(){
    
//         $meta_key = "importante_meta_key";
    
//         if(isset($_REQUEST[$meta_key]))
//             update_post_meta($_REQUEST['post_ID'], $meta_key,$_REQUEST[$meta_key]);
// }


//Modifico el jquery version para que ande el zajax - Santi
function modify_jquery_version() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery',get_template_directory_uri() . '/js/jquery.min.js', false, '1.12.4');
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'modify_jquery_version');
//Modifico el jquery version para que ande el zajax