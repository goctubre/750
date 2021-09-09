<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package am750
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<aside id="secondary" class="widget-area">

	<div class="banner sticky">
    	<div class="ad-slot" id="notas_box" data-adtype="box"> </div>
	</div>

	<div data-autorefresh="/inc/al-aire.php">
		<?php include get_theme_file_path( '/inc/al-aire.php' );?>
	</div>

	<!--MÁS VISTAS-->
	<div data-autorefresh="/inc/mod-mas-vistas.php">
		<?php include get_theme_file_path( '/inc/mod-mas-vistas.php' );?>
	</div>
	<!--//MÁS VISTAS-->

	<div class="banner sticky">
    	<div class="ad-slot" id="notas_sidebar" data-adtype="bigbox"> </div>
	</div>

	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
