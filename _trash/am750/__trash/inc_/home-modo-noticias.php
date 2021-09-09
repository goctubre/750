<!--PRINCIPAL-->
<section id="principal" class="is-seccion">
	<div class="columns">

		<!--STICKY INFORMATIVO-->
		<div class="column is-3" id="informativo750">

			<!--BANNER MOBILE-->
			<div class="ad-slot" id="mobile_home_atf" data-adtype="box_mobile"> </div>
			<!-- //BANNER MOBILE-->

			<?php include get_theme_file_path( '/inc/s-informativo-750.php' );?>
		</div>
		<!--//INFORMATIVO COLUMN3-->

		<div class="column" id="nota-principal" data-scroll data-scroll-speed="1">
    		<!--actualidad first- LA ÚLTIMA NOTICIA-->
				<?php 
					$the_query = new WP_Query( array( 'category_name' => 'actualidad', 'posts_per_page' => 1) );
				?>

				<?php if ( $the_query->have_posts() ) : ?>
				 					 
				    <!-- the loop -->
				    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				    	<article id="lanotaprincipal">

				    		<div class="etiquetas">
								<button class="button is-750 etiquet has-text-weight-bold">
									<?php echo get_post_meta( $post->ID,  'tema', true ); ?>
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
					$the_query = new WP_Query( array( 'category_name' => 'actualidad', 'posts_per_page' => 3, 'offset' => 1 ) );
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
    		<!--//ULTIMAS NOTICIAS-->

		</div>


		<!--DESTACADOS-->
		<div class="column is-3" id="destacados"  data-scroll data-scroll-speed="-0.5">
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
							<?php echo get_post_meta( $post->ID,  'tema', true ); ?>
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
			$the_query = new WP_Query( array( 'category_name' => 'actualidad', 'posts_per_page' => 3, 'offset' => 3 ));
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
				$the_query = new WP_Query( array( 'category_name' => 'opinion', 'posts_per_page' => 1) );
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
				$the_query = new WP_Query( array( 'category_name' => 'opinion', 'posts_per_page' => 3, 'offset' => 1 ) );
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