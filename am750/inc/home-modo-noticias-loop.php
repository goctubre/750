<!--actualidad first- LA ÚLTIMA NOTICIA-->
<?php 
	$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'actualidad', 'orderby' => $orderby, 'order' => $order, 'posts_per_page' => 1));
?>

<?php if ( $the_query->have_posts() ) : ?>
 					 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    	<article id="lanotaprincipal">

    		<div class="etiquetas">

    			<!--democracia 2021-->
				<?php  if ( in_category('democracia-2021') ) { ?>
					<img class='mr-5' src='<?php bloginfo('template_url'); ?>/-paso-2021/democracia-2021.png' width='86' height='36'>
				<? } else {?>
					<button class="button is-750 etiquet has-text-weight-bold noclick">
						<?php echo get_post_meta( get_the_ID(),  'tema', true ); ?>
					</button>
				<? } ?>
				<!--//democracia 2021-->


				<?php echo categorias_programas();?>
			</div>
			
			<h2 class="is-size-3 is-size-4-mobile mt-3 mb-4 is-fira lh-110"> 
				<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
			</h2>

			<?php if ( has_post_thumbnail() ) : ?>
				<?php echo picture_image('mediumlarge', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado', 'eager');?>
			<?php endif; ?>

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
$the_query = new WP_Query( array('post_status' => 'publish', 'category_name' => 'actualidad', 'orderby' => $orderby,'order' => $order,'posts_per_page' => 3, 'offset' => 1 ));
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

						<?php if ( has_post_thumbnail() ) : ?>
							<?php echo picture_image('medium', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>
						<?php endif; ?>

					</div>
					<div class="column"> 
						<div class="is-hidden-desktop"> <?php echo categorias_programas();?> </div>

						<!--democracia 2021-->
						<?php  if ( in_category('democracia-2021') ) { ?>
							<img class='mr-5' src='<?php bloginfo('template_url'); ?>/-paso-2021/democracia-2021.png' width='64' height='27'>
						<? } ?>
						<!--//democracia 2021-->

			    		<p class="is-size-6 mt-2 is-hidden-desktop"> <?php //echo cantidad_tiempo_entrada();?> </p>

			    		<a href="<?php the_permalink(); ?>">
			        		<h2 class="is-size-5 has-text-weight-semibold is-fira">
			        			<?php the_title(); ?>
			        		</h2>
			        	</a>
					</div>	
				</div>

	    	</article>

	     <hr class="dashed is-hidden-desktop">
	     <?php else : ?>
	    	<article class="mb-6">

	    		<!--democracia 2021-->
				<?php  if ( in_category('democracia-2021') ) { ?>
					<img class='mr-5' src='<?php bloginfo('template_url'); ?>/-paso-2021/democracia-2021.png' width='64' height='27'>
				<? } ?>
				<!--//democracia 2021-->
				
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