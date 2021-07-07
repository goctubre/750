<!-- loop informativo -->
	<?php $the_query = new WP_Query(array( 'category_name' => 'informativo-750', 'posts_per_page' => 12 ));?>

	<?php if ( $the_query->have_posts() ) : ?>			 
	<!-- the loop INFORMATIVO-->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<article class="mb-3 swiper-slide">

			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="image is-16by9">
			    <?php the_post_thumbnail('medium', array('class' => 'is-bordeado'));?>
			    </figure>
			<?php endif; ?>

			<p class="is-size-6 mt-2 mb-1">
				<?php //echo cantidad_tiempo_entrada();?>
			</p>

			<a href="<?php the_permalink(); ?>">
	    		<h3 class="is-size-5 has-text-weight-semibold is-fira">
	    			<?php the_title(); ?>
	    		</h3>
	    	</a>

			<hr class="dashed">

		</article>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<?php wp_reset_postdata(); ?>
	<?php else : ?>
	<p><?php _e( 'Upsss.' ); ?></p>
	<?php endif; ?>
<!-- // informativo -->