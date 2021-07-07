<?php  $the_query = new WP_Query( array( 
	'post_status' => 'publish', 
	'category_name' => 'cultura', 
	'orderby' => 'menu_order', 
	'order' => 'ASC',
	'posts_per_page' => 2 ));
?>

<?php if ( $the_query->have_posts() ) : ?>			 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    	<div class="column">
    		<article class="mb-4">

				<?php if ( has_post_thumbnail() ) : ?>
					<?php echo picture_image('medium', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>
				<?php endif; ?>

				<div class="mt-3"> <?php echo categorias_programas();?> </div>
				
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