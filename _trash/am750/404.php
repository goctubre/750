<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package am750
 */

get_header();
?>

	<div id="404" class="container">

		<section class="error-404 not-found">

			<div class="page-content mt-6 has-text-centered">
				<p class="is-size-5 mb-2"> Error 404 </p>
				<h1 class="is-size-3 mb-4"> Esta página <span class="is-celeste"> no está disponible </span> </h1>
				<a href="/"> <button class="button is-bg-violet mb-6"> Volver a la home </button> </a>

				<figure class="mb-3"> <img src="<?php echo get_template_directory_uri(); ?>/img/404.png" width="" height="" alt="750 AM - Contenido no encontrado" /> </figure>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</div><!-- //.container -->

<?php
get_footer();
