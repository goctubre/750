<?php 
				$the_query = new WP_Query( array( 'category_name' => 'destacados', 'posts_per_page' => 4 ) );
			?>
			<!-- loop destacado -->
			<?php $count = 0; ?>
		    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		    	<?php $count++; ?>
		    	<?php if ($count == 1) : ?>
			    	<article>
						<button class="button is-750 etiquet has-text-weight-bold mb-2">
							<?php echo get_post_meta( get_the_ID(),  'tema', true ); ?>
						</button>

			    		<a href="<?php the_permalink(); ?>">
			        		<h3 class="is-size-5 has-text-weight-semibold mb-3 is-fira"><?php the_title(); ?></h3>
			       	 	</a>

			    		<figure class="image is-16by9">
			    			<?php the_post_thumbnail('medium_large', array('class' => 'is-bordeado')); ?>
			    		</figure>
			    	</article>

			    	<p class="is-size-5 is-celeste has-text-weight-bold rayita pt-3 pb-5 is-hidden-mobile">Leé también</p>

					<div class="has-text-centered is-hidden-desktop"> 
			    		<a>
							<button id="sabermas" class="button is-750 etiquet has-text-weight-bold ml-2 mt-5 is-hidden-desktop" onclick="masDestacados()"> <img src="<?php echo get_template_directory_uri(); ?>/img/i-prev.svg"/> Quiero saber más</button> 
						</a>
						</div>

				<div id="quierosaber" class="is-hidden-mobile">
			     <?php else : ?>
					<article class="mb-4 pr-0 rayita sabermas">
			    		<a href="<?php the_permalink(); ?>">
			        		<h3 class="is-size-6 has-text-weight-bold is-fira"><?php the_title(); ?></h3>
			       	 	</a>
			    	</article>     	
				<?php endif; ?>
				
			<?php endwhile; ?>
			</div>
		    <!-- end loop destacado -->