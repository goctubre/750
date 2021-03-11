<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package am750
 */

get_header();
?>


	<div class="container" id="busqueda">

		<!--BANNER -->
			<?php include get_theme_file_path( '/inc/banner-top-inner.php' );?>
		<!--//BANNER-->

		<div class="columns">
			<article class="column is-9">

				<h1 class="is-size-2"> Resultado de la búsqueda </h1>

				<div class="columns">


					<div class="column">
						<?php if ( have_posts() ) : ?>

							<h3 class="mt-3 mb-3">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Para %s', 'am750' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h3>


							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								//get_template_part( 'template-parts/content', get_post_type() );
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
				</div>
			</article>

			<div class="column is-3">
				<?php include get_theme_file_path( '/inc/sidebar-750.php' );?>
			</div>
		</div>

	</div><!-- //.container -->

<?php
get_sidebar();
get_footer();
