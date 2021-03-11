<?php  $the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'cultura', 'posts_per_page' => 2 ));?>

<?php if ( $the_query->have_posts() ) : ?>			 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    	<div class="column">
    		<article class="mb-4">
				<figure class="image is-16by9 mb-3">
					<?php the_post_thumbnail('large', array('class' => 'is-bordeado')); ?>
				</figure>
	    		<?php echo categorias_programas();?>
	    		<a href="<?php the_permalink(); ?>">
	        		<h3 class="is-size-5 has-text-weight-semibold is-fira mt-2"> <?php the_title(); ?></h3> 
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