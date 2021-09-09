<!--PRINCIPAL-->
<section id="principal" class="is-seccion">
	<div class="columns">

		<!--STICKY INFORMATIVO-->
		<div class="column is-3" id="informativo750">

			<!--BANNER MOBILE-->
			<div class="ad-slot mb-6" id="mobile_home_atf" data-adtype="box_mobile"> </div>
			<!-- //BANNER MOBILE-->
			<div data-autorefresh="/inc/s-informativo-750.php" class="sticky">
				<?php include get_theme_file_path( '/inc/s-informativo-750.php' );?>
			</div>
		</div>
		<!--//INFORMATIVO COLUMN3-->

		<div class="column" id="nota-principal" data-scroll data-scroll-speed="1" data-autorefresh="/inc/home-modo-noticias-loop.php">

    		<!--//ULTIMAS NOTICIAS -  CATASTROFE -->
    			<?php 
    				$catastrofe =  get_option('catastrofe'); 
    				if( $catastrofe !== 'catastrofe' ) { 
    					include get_theme_file_path( '/inc/home-modo-noticias-loop.php' );	
    				}
    			?>
    		<!--//ULTIMAS NOTICIAS-->

		</div>


		<!--DESTACADOS-->
		<!-- <div class="column is-3" id="destacados"  data-scroll data-scroll-speed="-0.5" data-autorefresh="/inc/home-modo-noticias-destacados-loop.php"> -->
		<div class="column is-3" id="destacados">	

			<!--PREDESTACADO -->
			<div id="predestacado" class="mb-5">
				<?php 
					$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'destacado-primero', 'posts_per_page' => 1 ));
				    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		    		<!--democracia 2021-->
					<?php  if ( in_category('democracia-2021') ) { ?>
						<img class='mr-5' src='<?php bloginfo('template_url'); ?>/-paso-2021/democracia-2021.png' width='64' height='27'>
					<? } else {?>
						<button class="button is-750 etiquet has-text-weight-bold mb-2 noclick">
							<?php echo get_post_meta( get_the_ID(),  'tema', true ); ?>
						</button>
					<?}?>
					<!--//democracia 2021-->

					<a href="<?php the_permalink(); ?>">
						<h2 class="is-size-5 has-text-weight-semibold mb-3 is-fira"><?php the_title(); ?></h2>
					</a>

				    <?php echo picture_image('medium', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>


				<?php endwhile; ?>
			</div>	
			<!--//PREDESTACADO-->

    		<!--//DESTACADOS-->
    		<div data-scroll data-scroll-speed="-0.5" data-autorefresh="/inc/home-modo-noticias-destacados-loop.php">
				<?php include get_theme_file_path( '/inc/home-modo-noticias-destacados-loop.php' );?>
			</div> 
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
			$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'actualidad', 'posts_per_page' => 3, 'orderby' => 'menu_order', 'order' => 'ASC', 'offset' => 4 ));
			$count = 0;
		 ?>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php $count++; ?>

			<?php if ($count == 1) : ?>
		    	<div class="column is-bg-grisclaro p-0 mt-3">

					<?php if ( has_post_thumbnail() ) : ?>
						<?php echo picture_image('medium', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>
					<?php endif; ?>

					<!--democracia 2021-->
					<?php  if ( in_category('democracia-2021') ) { ?>
					<img class='mt-4 pl-3' src='<?php bloginfo('template_url'); ?>/-paso-2021/democracia-2021.png' width='86' height='36'>
					<? } ?>
					<!--//democracia 2021-->

		    		<p class="p-3 mt-4"> <?php echo categorias_programas();?> </p>
		    		<a href="<?php the_permalink(); ?>">
		        		<h2 class="is-size-5 mt-3 is-fira pr-3 pl-3 pr-3 pb-4"> <?php the_title(); ?></h2>
		       	 	</a>
		    	</div>

				<div class="column is-offset-m1">
				     <?php else : ?>

				     	<!--democracia 2021-->
				        <?php  if ( in_category('democracia-2021') ) { ?>
						  <img class='mr-5' src='<?php bloginfo('template_url'); ?>/-paso-2021/democracia-2021.png' width='64' height='27'>
					    <? } ?>
					    <!--//democracia 2021-->

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
				$the_query = new WP_Query( array( 
					'post_status' => 'publish', 
					'category_name' => 'opinion', 
					'orderby' => 'menu_order', 
					'order' => 'ASC',
					'posts_per_page' => 1) );
				?>

				<?php if ( $the_query->have_posts() ) : ?>
			 					 
			    <!-- the loop OPINIÓN -->
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    	<article class="mb-4">
			    		<div class="columns">
			    			<div class="column is-offset-2 mb-4 mb-0-mobile">

								<?php if ( has_post_thumbnail() ) : ?>
									<?php echo picture_image('mediumlarge', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?> <!--TAMAÑO MEDIUMMEDIUM EN PANTALLA DESKTOP-->
								<?php endif; ?>

							</div>
						</div>
			    		
			    		<div class="columns">
			    			<div class="opinion firstmobile">
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
				$the_query = new WP_Query( array( 
					'post_status' => 'publish', 
					'category_name' => 'opinion', 
					'orderby' => 'menu_order', 
					'order' => 'ASC',
					'posts_per_page' => 3, 
					'offset' => 1 ) );
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