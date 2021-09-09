<?php
/*
 Template Name: JJOO
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

		<div class="columns mt-6">
			<div class="column is-8 is-offset-2 has-text-centered"> 
				<?php the_title( '<h1 class="is-size-3 mb-3">', '</h1>' ); ?>
				<?php am750_post_thumbnail(); ?>
				<?php the_content();?>
			</div>
		</div>


		<iframe src="https://750.am/datafactory/html/olimpicos2020/es/agenda.html" style="width: 1px; min-width: 100%; *width: 100%; height:900px; overflow:hidden;" scrolling="auto" class="" width="100%" height="1100px"></iframe>

			<!--TE PUEDE INTERESAR--->
			<h2 class="is-size-4 mt-6 mb-5"> Más sobre los juegos olímpicos </h2>

			<div class="columns is-multiline mb-6">
				<?php
					global $post;
					$args = array( 'post_status' => 'publish', 'numberposts' => 4, 'post__not_in' => array(get_the_ID()),
						'category_name' =>  'deportes',  //'orderby' => 'menu_order',
						'orderby' => 'date', 'order' => 'DESC');
					$myposts = get_posts( $args );

					foreach( $myposts as $post ) : setup_postdata($post); ?>
						<article class="mb-3 column is-3 mas-notas" data-url="<?php the_permalink();?>" data-title=" <?php the_title(); ?>">
							<a href="<?php the_permalink();?>" aria-hidden="true" tabindex="-1">
								<figure class="image is-3by2">
									<?php if ( has_post_thumbnail() ) : ?> <?php the_post_thumbnail( 'medium',  array('class' => 'is-bordeado'));?> 
									<?php endif; ?>
								</figure>
							</a>

							<a href="<?php the_permalink();?>">

					    		<h3 class="is-size-5 has-text-weight-semibold is-fira mt-2 mb-2"> <a href="<?php the_permalink();?>">  <?php the_title(); ?> </a> </h3>
					    		<p class="lh-140"> <?php echo wp_trim_words( get_the_content(), 20, '...' );?> </p>
					    		<?PHP /*<a href="<?php the_permalink();?>" aria-hidden="true" tabindex="-1"> <button class="button mt-4">Leer más</button> </a>*/ ?>
					    	</a>
							
						</article>
						
						<hr class="dashed">

				<?php endforeach; ?>
			</div>
			<!-- //TE PUEDE INTERESAR--->

	</section>


<?php
//get_sidebar();
get_footer();
