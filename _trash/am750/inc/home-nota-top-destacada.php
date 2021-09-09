<div id="nota-top">

	<?php $the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'catastrofe', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => 1 ) );	?>

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    		<a href="<?php the_permalink(); ?>">
				
				<h3 class="is-size-2 is-size-3-mobile mt-5 mb-5 is-fira has-text-centered has-text-weight-bold has-text-left-mobile">  <?php the_title(); ?> </h3> 
				<p class="mb-5 has-text-centered has-text-left-mobile"> <?php echo get_post_meta( get_the_ID(),  'bajada', true ); ?> </p>
				
				<?php if( $catastrofe == 'destacadosuperior' ||  $catastrofe == 'destacadosuperiormasnotas' ) { 
				if ( has_post_thumbnail() ) :
					echo picture_image('large', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9 is-inline-block', 'is-bordeado');
				 	endif;
					};
				?>
    		</a>

	<?php endwhile; ?>


	<!--CATÁSTROFE HOME NORMAL - ULTIMAS +3-->
	<?php
		if( $catastrofe == 'destacadosuperiormasnotas' ) {  $the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'catastrofe', 'orderby' => 'menu_order',  'order' => 'ASC', 'posts_per_page' => 3, 'offset' => 1 ) );
	?>

		<div class="columns mt-1">
			<?php if ( $the_query->have_posts() ) : ?>
			 					 
			    <!-- the loop -->
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<article class="mb-4 column">

						<?php if ( has_post_thumbnail() ) : ?>
							<?php echo picture_image('medium', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>
						<?php endif; ?>

						<div class="my-3"> <?php echo categorias_programas();?> </div>

						<a href="<?php the_permalink(); ?>">
							<h3 class="is-size-5 has-text-weight-semibold is-fira">
								<?php the_title(); ?>
							</h3>
						</a>
					</article>

			    <?php endwhile; ?>
			    <!-- end of the loop -->

			    <?php wp_reset_postdata(); ?>

			<?php else : ?>
			    <p><?php //_e( 'Upsss.' ); ?></p>
			<?php endif; ?>
		</div>

		<?php
		}
	?>
	<!--//CATÁSTROFE - ULTIMAS +3-->


	<hr class="dashed">

</div>