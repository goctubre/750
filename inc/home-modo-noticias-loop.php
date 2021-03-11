<!--actualidad first- LA ÚLTIMA NOTICIA-->
<?php 
	$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'actualidad', 'posts_per_page' => 1) );
?>

<?php if ( $the_query->have_posts() ) : ?>
 					 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    	<article id="lanotaprincipal">

    		<div class="etiquetas">
				<button class="button is-750 etiquet has-text-weight-bold">
					<?php echo get_post_meta( get_the_ID(),  'tema', true ); ?>
				</button>

				<?php echo categorias_programas();?>
			</div>
			
			<h1 class="is-size-3 is-size-4-mobile mt-3 mb-4 is-fira lh-110"> 
				<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
			</h1>

    		<figure class="image is-16by9">
    			<?php the_post_thumbnail('large', array('class' => 'is-bordeado')); ?>
    		</figure>

			<ul class="redes is-flex mt-3">
				<?php include get_theme_file_path( '/inc/redes.php' );?>
			</ul>

    	</article>

    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Upsss.' ); ?></p>
<?php endif; ?>
<!--//LA ÚLTIMA NOTICIA-->


<hr class="dashed">
<!--actualidad - ULTIMAS +3 NOTICIAS-->
<?php 
	$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'actualidad', 'posts_per_page' => 3, 'offset' => 1 ) );
?>

<?php if ( $the_query->have_posts() ) : ?>
 					 
    <!-- the loop -->
    <?php $count = 0; ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    	<?php $count++; ?>
		<?php if ($count == 1) : ?>
	    	<article class="mb-6" id="lanotasegunda">

				<div class="is-hidden-mobile"> <?php echo categorias_programas();?> </div>

	    		<p class="is-size-6 mt-2 mb-2 is-hidden-mobile">
	    			<?php //echo cantidad_tiempo_entrada();?>	    		
    			</p>

				<div class="columns o-1">
					<div class="column"> 
		    		    <figure class="image is-16by9">
		    				<?php the_post_thumbnail('medium_large', array('class' => 'is-bordeado')); ?>
    					</figure>
					</div>
					<div class="column"> 
						<div class="is-hidden-desktop"> <?php echo categorias_programas();?> </div>

			    		<p class="is-size-6 mt-2 is-hidden-desktop">
			    			<?php //echo cantidad_tiempo_entrada();?>	    		
		    			</p>

			    		<a href="<?php the_permalink(); ?>">
			        		<h3 class="is-size-5 has-text-weight-semibold is-fira">
			        			<?php the_title(); ?>
			        		</h3>
			        	</a>
					</div>	
				</div>

	    	</article>

	     <hr class="dashed is-hidden-desktop">
	     <?php else : ?>
	    	<article class="mb-6">

				<?php echo categorias_programas();?>

	    		<p class="is-size-6 mt-2">
	    			<?php //echo cantidad_tiempo_entrada();?>						    		
    			</p>
	    		<a href="<?php the_permalink(); ?>">
	        		<h3 class="is-size-5 has-text-weight-semibold is-fira">
	        			<?php the_title(); ?>
	        		</h3>
	        	</a>

	        	<hr class="dashed is-hidden-desktop">
	    	</article>  	
		<?php endif; ?>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Upsss.' ); ?></p>
<?php endif; ?>