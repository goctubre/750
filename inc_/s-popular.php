<div class="sticky" data-scroll data-scroll-sticky data-scroll-target="#nota-principal">
	<h2 class="is-size-5 has-text-weight-bold mb-5"> Populares </h3>

		<!--CAROUSEL INFORMATIVO-->
		<div class="swiper-container-mob">

			<div class="swiper-wrapper">

				<?php
					global $post;
					$args = array( 'numberposts' => 3, 'offset'=> 1,  'category_name' =>  'humor, cultura, entrevistas, audicuentos, deportes, la-venganza-sera-terrible');
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) : setup_postdata($post); ?>
						<article class="mb-3 swiper-slide">
							<?php if ( has_post_thumbnail() ) : ?>
								<figure class="image is-16by9 mb-2">
							    <?php the_post_thumbnail('medium', array('class' => 'is-bordeado'));?>
							    </figure>
							<?php endif; ?>

							<a href="<?php the_permalink(); ?>">
					    		<h3 class="is-size-5 has-text-weight-semibold is-fira">
					    			<?php the_title(); ?>
					    		</h3>
					    	</a>

							<hr class="dashed">

						</article>
				<?php endforeach; ?>

			</div>

			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev mob-bt-next"></div>
			<div class="swiper-button-next mob-bt-next"></div>
		</div>
		<!--fin carrousel INFORMATIVO-->



</div>	<!--//STICKY-->


