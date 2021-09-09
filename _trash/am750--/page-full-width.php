<?php
/*
 Template Name: Full Width
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */

get_header();
?>

<style>
	h3 { font-size: 1.20rem !important; font-family: 'Fira Sans', sans-serif; font-weight: 600 !important;}
	/*AGREGAR A MINI-BULMA*/
	.columns.is-multiline {
	    flex-wrap: wrap;
	}
</style>

	<section class="container">

	<?php the_content();?>

	</section>


<?php
//get_sidebar();
get_footer();
