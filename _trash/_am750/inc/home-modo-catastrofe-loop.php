<!-- CATASTROFE - ÚLTIMA NOTICIA-->
<?php $catastrofe =  get_option('catastrofe');  ?>

<div id="catastrofe" class="container mt-6 <?php $catastrofe =  get_option('catastrofe'); if( $catastrofe == 'una' || $catastrofe == 'cuatro' ) { echo "catastrofe";} ?>">

	<div class="columns">

		<div class="column">
			<?php 
				$the_query = new WP_Query( array( 
				'post_status' => 'publish', 
				'category_name' => 'catastrofe', 
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'posts_per_page' => 1));
			?>

			<?php if ( $the_query->have_posts() ) : ?>			 
			    <!-- the loop -->
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    	<article id="lanotaprincipal" class="mb-4 ml-5">

			    		<div class="etiquetas">
							<button class="button is-750 etiquet has-text-weight-bold noclick">
								<?php echo get_post_meta( get_the_ID(),  'tema', true ); ?>
							</button>

							<?php echo categorias_programas();?>
						</div>
						
						<a href="<?php the_permalink(); ?>"> 
							<h2 class="is-size-2 is-size-3-mobile mt-3 mb-4 is-fira lh-110"> 
								<?php the_title(); ?>
							</h2>

							<p class="mb-4"> <?php echo get_post_meta( get_the_ID(),  'bajada', true ); ?> </p>

							<?php if ( has_post_thumbnail() ) : ?>
								<?php echo picture_image('mediumlarge', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>
							<?php endif; ?>
						</a>
			<!-- 		<ul class="redes is-flex mt-3">
							<?php //include get_theme_file_path( '/inc/redes.php' );?>
						</ul>
			 -->
			    	</article>
			    <?php endwhile; ?>
			    <!-- end of the loop -->

			    <?php wp_reset_postdata(); ?>
			 
			<?php else : ?>
			    <p><?php //_e( 'Upsss.' ); ?></p>
			<?php endif; ?>
			<!--// ÚLTIMA NOTICIA CATÁSTROFE-->

			<!--CATÁSTROFE - ULTIMAS +3-->
			<?php
				if( $catastrofe == 'cuatro' ) { 

					$the_query = new WP_Query( array( 
						'post_status' => 'publish', 
						'category_name' => 'catastrofe', 
						'orderby' => 'menu_order', 
						'order' => 'ASC',
						'posts_per_page' => 3, 
						'offset' => 1 ) );

				?>


				<div class="columns mt-1">
					<?php if ( $the_query->have_posts() ) : ?>
					 					 
					    <!-- the loop -->
					    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<article class="mb-6 column">
								<!-- <p class="is-size-6 mt-2 mb-2 is-hidden-mobile"> <?php //echo cantidad_tiempo_entrada();?> </p> -->

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

		</div>
	</div>
</div>