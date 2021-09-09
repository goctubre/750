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
				<div class="columns">
					<div class="column">
						<?php if ( have_posts() ) : ?>

							<h1 class="is-size-2 mb-6"> Resultados de búsqueda para 
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( '%s', 'am750' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', 'search' );
							endwhile;
							//the_posts_navigation();

							echo "<nav class='pagination is-small' role='navigation' aria-label='pagination'>";
						    	pagination_bar();
							echo "</nav>";

						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;

						?>
					</div>
				</div>
			</article>

			<div class="column is-3">
				<?php get_sidebar();?>
			</div>
		</div>

	</div><!-- //.container -->

<?php
//get_sidebar();
get_footer();