<div id="notas-top">
	<div class="scrolleable">
		<div class="columns scrolleame">
			<div class="column fija">
				<img class="is-block" src="<?php bloginfo('template_url'); ?>/-paso-2021/democracia-2021.png" width="97" height="41">
				<h3 class="is-size-5 has-text-weight-semibold"> Elecciones legislativas </h3>
				<h3 class="is-size-6">Todo lo que tenés que saber para votar </h3>
			</div>


			<?php 
				$the_query = new WP_Query( array( 
					'post_status' => 'publish', 
					'category_name' => 'elecciones-paso-2021', 
					'orderby' => 'menu_order', 
					'order' => 'ASC',
					'posts_per_page' => 3 ) );
			?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		    	<div class="column fl">
		    		<a href="<?php the_permalink(); ?>">
		    			<div class="columns">
		    				<div class="column">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php echo picture_image('medium', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9 is-inline-block', 'is-bordeado');?>
								<?php endif; ?>
							</div>	

							<div class="column">	
								<h3 class="is-size-6 mt-2 is-fira has-text-weight-semibold">  <?php the_title(); ?> </h3> 
							</div>
					</div>
		    		</a>
		    	</div>

			<?php endwhile; ?>

		</div>
	</div>
</div>