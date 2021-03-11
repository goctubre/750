<!--PRINCIPAL-->
<section id="principal" class="is-seccion">
	<div class="columns">

		<!--STICKY INFORMATIVO-->
		<div class="column is-3" id="informativo750">

			<!--BANNER MOBILE-->
			<div class="ad-slot" id="mobile_home_atf" data-adtype="box_mobile"> </div>
			<!-- //BANNER MOBILE-->
			<div data-autorefresh="/inc/s-informativo-750.php">
				<?php include get_theme_file_path( '/inc/s-informativo-750.php' );?>
			</div>
		</div>
		<!--//INFORMATIVO COLUMN3-->

		<div class="column" id="nota-principal" data-scroll data-scroll-speed="1" data-autorefresh="/inc/home-modo-noticias-loop.php">
    		
    		<!--//ULTIMAS NOTICIAS-->
				<?php include get_theme_file_path( '/inc/home-modo-noticias-loop.php' );?>
    		<!--//ULTIMAS NOTICIAS-->

		</div>


		<!--DESTACADOS-->
		<div class="column is-3" id="destacados"  data-scroll data-scroll-speed="-0.5" data-autorefresh="/inc/home-modo-noticias-destacados-loop.php">
			
    		<!--//DESTACADOS-->
				<?php include get_theme_file_path( '/inc/home-modo-noticias-destacados-loop.php' );?>
    		<!--//DESTACADOS-->
    		
		</div>
	</div>

</section>
<!--PRINCIPAL-->





<!-- MÁS DE ACTUALIDAD-->
<section id="actualidad" class="is-seccion">

	<div class="seccion-header ml-32">
		<div class="seccion-nombre">
			<a href="<?php echo get_site_url(); ?>/category/actualidad/"> <h2 class="is-size-2">Más de actualidad</h2> </a>
		</div>

		<div class="has-text-right vermas">
			<a href="<?php echo get_site_url(); ?>/category/actualidad/"> <span class="is-celeste is-size-5 has-text-weight-bold"> 
			Ver más </span> </a>
		</div>
	</div>


	<div class="columns mt-0">
		<div class="column is-hidden-mobile">
			<!--BANNER-->
			<div class="ad-slot" id='Home_MediumRectangle_Content' data-adtype='mediumrectangle'></div>
		</div>

		<!-- loop MÁS ACTUALIDAD -->
		<?php 
			$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'actualidad', 'posts_per_page' => 3, 'offset' => 3 ));
			$count = 0;
		 ?>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php $count++; ?>

			<?php if ($count == 1) : ?>
		    	<div class="column is-bg-grisclaro p-0 mt-3">
		    		<figure class="image is-16by9 mb-4">
		    			<?php the_post_thumbnail('medium_large', array('class' => 'is-bordeado')); ?>
		    		</figure>
		    		<span class="p-3"> <?php echo categorias_programas();?> </span>
		    		<a href="<?php the_permalink(); ?>">
		        		<h1 class="is-size-5 mt-3 is-fira pr-3 pl-3 pr-3 pb-4"> <?php the_title(); ?></h1>
		       	 	</a>
		    	</div>

				<div class="column is-offset-m1">
				     <?php else : ?>
				     	<?php echo categorias_programas();?>
			    		<a href="<?php the_permalink(); ?>">
			        		<h3 class="is-size-5 has-text-weight-semibold is-fira mt-4 mb-4">
			        			<?php the_title(); ?>
			        		</h3>
			       	 	</a>

					<?php endif; ?>
			<?php endwhile; ?>
		<!-- end MÁS ACTUALIDAD -->
		</div> <!--//column-->
	</div> <!--//columns-->
</section> <!--//section-->
<!--//ACTUALIDAD-->








<!--OPINIÓN-->
<section id="opinion" class="is-seccion mb-2">

	<!--BANNER MOBILE-->
	<div class="ad-slot mb-6" id="mobile_home_btf" data-adtype="box_mobile"> </div>
	<!-- //BANNER MOBILE-->

	<div class="seccion-header ml-7">
		<div class="seccion-nombre">
			<a href="<?php echo get_site_url(); ?>/category/opinion/"> <h2 class="is-size-2"> Opinión</h2> </a>
		</div>

		<div class="has-text-right vermas">
			<a href="<?php echo get_site_url(); ?>/category/opinion/"> <span class="is-celeste is-size-5 has-text-weight-bold"> 
			Ver más </span> </a>
		</div>
	</div>

	<div class="columns">
		<div class="column is-5">
			<?php 
				$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'opinion', 'posts_per_page' => 1) );
				?>

				<?php if ( $the_query->have_posts() ) : ?>
			 					 
			    <!-- the loop OPINIÓN -->
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    	<article class="mb-4">
			    		<div class="columns">
			    			<div class="column is-offset-2">
					    		<figure class="image is-16by9 mb-4">
					    			<?php the_post_thumbnail('medium_large', array('class' => 'is-bordeado')); ?>
					    		</figure>
							</div>
						</div>
			    		
			    		<div class="columns">
			    			<div class="opinion">
								<a href="<?php echo get_author_posts_url( $post->post_author ); ?>">	
						    		<figure class="image is-64x64">
						    			<?php 
										$autorimg = get_avatar( get_the_author_meta( 'ID' ), '600', $default, $alt, array( 'class' => array( 'is-rounded' ) ) );
						    			echo $autorimg;
						    			?>
									</figure>
								</a>

								<div class="frase">
									<!-- <a href="<?php echo get_author_posts_url($post->post_author);?>">	
										<p class="is-celeste mb-3 is-size-5"> <?php the_author(); ?></p>
									</a> -->

									<a href="<?php the_permalink(); ?>">
				        				<h3 class="is-size-5 has-text-weight-semibold"> <?php the_title(); ?></h3>
				        			</a>
				        			
			        			</div>
							</div>
			    		</div>
			    <?php endwhile; ?>
			    <!-- end of the loop -->

			    <?php wp_reset_postdata(); ?>
			 
			<?php else : ?>
			    <p><?php _e( 'Upsss.' ); ?></p>
			<?php endif; ?>
		</div>

		<div class="column is-offset-1">
			<?php 
				$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'opinion', 'posts_per_page' => 3, 'offset' => 1 ) );
			?>

			<?php if ( $the_query->have_posts() ) : ?>				 
			    <!-- loop opinión 3 -->
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    	<article class="mb-4">
			    		<div class="opinion">
			    			<a href="<?php echo get_author_posts_url($post->post_author);?>">	
					    		<figure class="image is-64x64">
					    			<?php 
									$autorimg = get_avatar( get_the_author_meta( 'ID' ), '600', $default, $alt, array( 'class' => array( 'is-rounded' ) ) );
					    			echo $autorimg;
					    			?>
								</figure>
							</a>

			   				<div class="frase">
			   					<!-- <a href="<?php echo get_author_posts_url($post->post_author);?>">	
									<p class="is-celeste is-size-6 mb-3 is-size-5"> <?php the_author(); ?></p>
								</a> -->
			        			<a href="<?php the_permalink(); ?>">
			        				<h3 class="is-size-5"><?php the_title(); ?></h3>
			        			</a>
			    			</div> 			
			    		</div>
			    		
			    	</article>
			    <?php endwhile; ?>
			    <!-- end loop opinión -->
			    <?php wp_reset_postdata(); ?>
			 
			<?php else : ?>
			    <p><?php _e( 'Upsss.' ); ?></p>
			<?php endif; ?>
		</div>

		<div class="column is-hidden-desktop has-text-centered mt-6 mt-0-mobile">
			<a href="<?php echo get_site_url(); ?>/category/opinion/"> <button class="button is-750 etiquet has-text-weight-bold">Ver más</button> </a>
		</div>

	</div>
</section>
<!--OPINION