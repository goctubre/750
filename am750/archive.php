<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */

get_header();
?>

	<div class="container" id="archivo">
		<!--BANNER -->
			<?php include get_theme_file_path( '/inc/banner-top-inner.php' );?>
		<!--//BANNER-->
		<div class="columns">
			<article class="column is-9">
				<div class="columns">
					<div class="column">
						<?php if ( have_posts() ) : ?>

							<header class="page-header">

								<!--PASO 2021-->
								<?php  if ( in_category('democracia-2021') ) { ?>
									<img class='mr-5 mb-5' src='<?php bloginfo('template_url'); ?>/-paso-2021/democracia-2021.png' width='140' height='59'>
								<? } else {
									the_archive_title( '<h1 class="is-size-4 mb-5 mt-4">', '</h1>' );
									the_archive_description( '<div class="archive-description">', '</div>' );
									}?>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', 'archive' );
							endwhile;

							//the_posts_navigation();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
							$last_category = get_the_category("", "single");
							echo "<nav class='pagination is-small' role='navigation' aria-label='pagination'>";
						    	pagination_bar();
							echo "</nav>";
							//echo do_shortcode( '[ajax_posts button_label="Más noticias..." type="archive" category="'.end($last_category)->slug.'"]' );
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
get_footer();