<div class="columns">

	<div class="column is-3" id="populares">
		<?php include get_theme_file_path( '/inc/s-popular.php' );?>
	</div>

	<div class="column">
		<a href="<?php echo get_site_url(); ?>/category/relax/"> <h2 class="is-size-0 has-text-weight-bold is-fira ls-2" data-scroll-direction="horizontal" data-scroll data-scroll-speed="-1">Modo Relax</h2> </a>

		<!--humor first- HUMOR-->
		<?php $the_query = new WP_Query( array(
			'post_status' => 'publish', 
			'category_name'=>'relax',
			'orderby' => 'menu_order', 
			'order' => 'ASC',
			'posts_per_page'=>1));?>

		<?php if ( $the_query->have_posts() ) : ?>
		 					 
		    <!-- the loop -->
		    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		    	<article>

					<?php if ( has_post_thumbnail() ) : ?>
						<?php echo picture_image('large', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>
					<?php endif; ?>

					 <div class="columns">
					 	<div class="column is-8 go-up">
							<?php echo categorias_programas();?>
							<a href="<?php the_permalink(); ?>"> 
								<h3 class="is-size-4 mt-2 is-fira"> <?php the_title(); ?> </h3> 
							</a>
						</div>
					</div>

		    	</article>

		    <?php endwhile; ?>
		    <!-- end of the loop -->

		    <?php wp_reset_postdata(); ?>
		 
		<?php else : ?>
		    <p><?php _e( 'Upsss.' ); ?></p>
		<?php endif; ?>
		<!--//humor first- HUMOR-->	


		<br> <br class="is-hidden-mobile">  <br class="is-hidden-mobile"> 
		<!--HUMOR-->
		<div class="seccion-header">
			<div class="seccion-nombre">
				<a href="<?php echo get_site_url(); ?>/category/humor/"> <h2 class="is-size-2" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-0.4"> Humor </h2> </a>
			</div>

			<div class="has-text-right vermas">
				<a href="<?php echo get_site_url(); ?>/category/humor/"> 
					<span class="is-celeste is-size-5 has-text-weight-bold"> 
						Ver más 
					</span> 
				</a>
			</div>
		</div>
		<!--//HUMOR-->

		<div class="columns">
			<?php $the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'humor', 
			'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => 2 ) ); ?>

			<?php if ( $the_query->have_posts() ) : ?>		 
			    <!-- the loop -->
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    	<div class="column">
			    		<article class="mb-4">

						<?php if ( has_post_thumbnail() ) : ?>
							<?php echo picture_image('large', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>
						<?php endif; ?>

			    		<div class="mt-3"> <?php echo categorias_programas();?> </div>
			    		
		    			<a href="<?php the_permalink(); ?>">
		        			<h3 class="is-size-5 has-text-weight-semibold mt-2 is-fira mt-3"> 
		        				<?php the_title(); ?>	
		        			</h3>
		        		</a>
			    	</article>
			    	</div>
			    <?php endwhile; ?>
			    <!-- end of the loop -->

			    <?php wp_reset_postdata(); ?>
			 
				<?php else : ?>
					<div class="column">
				    	<p><?php _e( 'Upsss.' ); ?></p>
					</div>
			<?php endif; ?>
		</div>

	</div>

	<div class="column is-hidden-desktop has-text-centered mt-6 mt-1-mobile pt-0-mobile">
		<a href="<?php echo get_site_url(); ?>/category/humor/"> 
			<button class="button is-750 etiquet has-text-weight-bold mr-0-mobile">Ver más</button> </a>
	</div>

</div>