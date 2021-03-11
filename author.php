<?php
/**
 * The template for displaying author pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */

get_header();
?>

	<div class="container" id="archivo">

		<div class="columns">
			<article class="column is-9">

				<!--BANNER -->
				<?php include get_theme_file_path( '/inc/banner-top-inner.php' );?>
				<!--//BANNER-->

				<div class="columns" id="autorflip">

					<div class="column o-2">
						<?php if ( have_posts() ) : ?>

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
								get_template_part( 'template-parts/content', 'archive' );

							endwhile;
							the_posts_navigation();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
					</div>

					<div class="column is-4 o-1">
						<header class="page-header is-bg-grisclaro mb-3">
							<?php
							the_archive_title( '<h3 class="mb-5 is-bg-violet is-size-5 is-fira p-4 has-text-centered has-text-weight-semibold">', '</h3>' );?>
							<a href="<?php echo get_author_posts_url( $post->post_author ); ?>">	
					    		<figure class="image is-128x128 mb-5" style="margin:0 auto">
					    			<?php 
									$autorimg = get_avatar( get_the_author_meta( 'ID' ), '600', $default, $alt, array( 'class' => array( 'is-rounded' ) ) );
					    			echo $autorimg;
					    			?>
								</figure>
							</a>
							<? the_archive_description( '<div class="archive-description p-4 is-size-6 lh-140">', '</div>' );?>
							<ul class="redes is-flex p-3 is-justify-content-center">
								<?php include get_theme_file_path( '/inc/redes.php' );?>
							</ul>

						</header><!-- .page-header -->
					</div>
				</div>
			</article>

			<div class="column is-3">
				<?php include get_theme_file_path( 'sidebar.php' );?>
				<?php get_sidebar();?>
			</div>
		</div>

	</div><!-- //.container -->

<?php
get_footer();
