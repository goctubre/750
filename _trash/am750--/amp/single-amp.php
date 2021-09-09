<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package am750
 */

?>
			<?php include get_theme_file_path( '/amp/header.php' );?>

	<div class="container" id="noticia">

		<div class="columns">
			<div class="column is-9">

				<!--BANNER -->

				<?php //include get_theme_file_path( '/inc/banner-top-inner.php' );?>
				<!--//BANNER-->
				<div class="columns">
					<div class="column is-1">
						<ul id="redesleft" class="redes sticky">
							<?php //include get_theme_file_path( '/inc/redes.php' );?>
						</ul>
					</div>

					<div class="column is-10-desktop is-10-fullhd"> <!--chequear size fullhd-->
						
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'amp/template-parts/content', get_post_type() );

							// If comments are open or we have at least one comment, load up the comment template.
							//if ( comments_open() || get_comments_number() ) :
							//	comments_template();
							//endif;

						endwhile; // End of the loop.
						?>

						<?php //echo do_shortcode( '[ajax_posts button_label="Más notas..." type="post"]' ); ?>
					</div>
				</div>
			</div>

			<div class="column is-3">
				<?php  include  get_theme_file_path('/amp/sidebar.php');?>
			</div>
		</div>

	</div>
<?php
//get_sidebar();

?>
			<?php include get_theme_file_path( '/amp/footer.php' );?>
