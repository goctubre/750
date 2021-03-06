
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

		<div class="column" id="nota-principal" data-autorefresh="/inc/home-modo-noticias-loop.php">
    		<!--//ULTIMAS NOTICIAS -  CATASTROFE -->
    			<?php 
    				$catastrofe =  get_option('catastrofe'); 
    				if( $catastrofe !== 'catastrofe' ) { include get_theme_file_path( '/inc/home-modo-noticias-loop.php' ); }
    			?>
    		<!--//ULTIMAS NOTICIAS-->
		</div>


		<!--DESTACADOS-->
		<div class="column is-3" id="destacados">

			<!--LIVE -->
			<?php 
				$live_blog_posting =  get_option('live_blog_posting');  
				if( $live_blog_posting == 'on') { include get_theme_file_path( '/inc/home-live.php' );}
			?>
			<!-- // LIVE--> 

			<!--PREDESTACADO -->
			<div id="predestacado" class="mb-5">
				<?php 
					$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'destacado-primero', 'posts_per_page' => 1 ));
				    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		    		<!--democracia 2021-->
					<?php  if ( in_category('democracia-2021') ) { ?>
						<img class='mr-5' src='<?php bloginfo('template_url'); ?>/-paso-2021/democracia-2021.png' width='64' height='27'>
					<? } else {?>
						<div class="etiquet has-text-weight-bold mb-2 noclick">
							<?php echo get_post_meta( get_the_ID(),  'tema', true ); ?>
						</div>
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
    		<div data-autorefresh="/inc/home-modo-noticias-destacados-loop.php">
				<?php include get_theme_file_path( '/inc/home-modo-noticias-destacados-loop.php' );?>
			</div> 
    		<!--//DESTACADOS-->
    		
		</div>
	</div>

</section>
<!--PRINCIPAL-->




<!-- MAPA - PASO 2021 -->
<section id="mapasection" class="mb-6-mobile">
	<?php
		$catastrofe_mapa =  get_option('catastrofe_mapa');  
		if( $catastrofe_mapa == 'on' &&  $catastrofe !== 'mapa') { ?>
		<div data-autorefresh="-paso-2021/mapa-elecciones.php">
			<?php include get_theme_file_path( '-paso-2021/mapa-elecciones.php' );?>
		</div>	
		<?}
	?>

</section>
<!--//MAPA - PASO 2021-->


<!--comoqueda CONGRESO NACIONAL - ELECCIONES 2021-->
<?php
	$widget_bancas =  get_option('widget_bancas');  
	if( $widget_bancas == 'bancason') { ?>
		 <iframe src="https://especiales.gonoticias.com/2021/elecciones/generales/resultados/widget_bancas/index.html" id="GObancas" scrolling="No" height="300" width="100%" style="border: none; margin-bottom: 30px;"> </iframe>
	<?}; ?>

 <!--//comoqueda-->


<!-- M??S DE ACTUALIDAD-->
<section id="actualidad" class="is-seccion">

	<div class="seccion-header ml-32">
		<div class="seccion-nombre" id="masactualidad"> <h2 class="is-size-2">M??s de actualidad</h2> </div>

		<div class="has-text-right vermas">
			<a href="<?php echo get_site_url(); ?>/category/actualidad/" aria-describedby="masactualidad"> 
				<span class="is-size-5 has-text-weight-bold"> Ver m??s </span> 
			</a>
		</div>
	</div>


	<div class="columns mt-0">
		<div class="column is-hidden-mobile">
			<!--BANNER-->
			<div class="ad-slot" id='Home_MediumRectangle_Content' data-adtype='mediumrectangle'></div>
		</div>

		<!-- loop M??S ACTUALIDAD -->
		<?php 
			$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'actualidad', 'posts_per_page' => 3, 'orderby' => $orderby, 'order' => $order, 'offset' => 4 ));
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
		<!-- end M??S ACTUALIDAD -->
		</div> <!--//column-->
	</div> <!--//columns-->
</section> <!--//section-->
<!--//ACTUALIDAD-->



<!--OPINI??N-->
<section id="opinion" class="is-seccion mb-2">

	<!--BANNER MOBILE-->
	<div class="ad-slot mb-6" id="mobile_home_btf" data-adtype="box_mobile"> </div>
	<!-- //BANNER MOBILE-->

	<div class="seccion-header ml-7">
		<div class="seccion-nombre">
			<h2 class="is-size-2" id="masopinion"> Opini??n</h2>
		</div>

		<div class="has-text-right vermas">
			<a href="<?php echo get_site_url(); ?>/category/opinion/" aria-describedby="masopinion"> <span class="is-size-5 has-text-weight-bold"> 
			Ver m??s </span> </a>
		</div>
	</div>

	<div class="columns">
		<div class="column is-5">
			<?php 
				$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'opinion', 'orderby' => $orderby, 'order' => $order, 'posts_per_page' => 1) );
			?>

				<?php if ( $the_query->have_posts() ) : ?>
			 					 
			    <!-- the loop OPINI??N -->
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    	<article class="mb-4">
			    		<div class="columns">
			    			<div class="column is-offset-2 mb-4 mb-0-mobile">

								<?php if ( has_post_thumbnail() ) : ?>
									<?php echo picture_image('mediumlarge', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?> <!--TAMA??O MEDIUMMEDIUM EN PANTALLA DESKTOP-->
								<?php endif; ?>

							</div>
						</div>
			    		
			    		<div class="columns firstmobile">
			    			<div class="opinion">
								<a href="<?php echo get_author_posts_url( $post->post_author ); ?>">	
						    		<figure class="image is-64x64">
						    			<?php 
										$autorimg = get_avatar( get_the_author_meta( 'ID' ), '600', 'retro', '', array( 'class' => array( 'is-rounded' ) ) );
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
$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'opinion', 'orderby' => $orderby, 'order' => $order, 'posts_per_page' => 3, 'offset' => 1));
			?>

			<?php if ( $the_query->have_posts() ) : ?>				 
			    <!-- loop opini??n 3 -->
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    	<article class="mb-4">
			    		<div class="opinion">
			    			<a href="<?php echo get_author_posts_url($post->post_author);?>">	
					    		<figure class="image is-64x64">
					    			<?php 
									$autorimg = get_avatar( get_the_author_meta( 'ID' ), '600', 'retro', '', array( 'class' => array( 'is-rounded' ) ) );
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
			    <!-- end loop opini??n -->
			    <?php wp_reset_postdata(); ?>
			 
			<?php else : ?>
			    <p><?php _e( 'Upsss.' ); ?></p>
			<?php endif; ?>
		</div>

		<div class="column is-hidden-desktop has-text-centered mt-6 mt-0-mobile">
			<a href="<?php echo get_site_url(); ?>/category/opinion/"> <button class="button is-grisoscuro has-text-weight-bold" aria-describedby="masopinion">Ver m??s</button> </a>
		</div>

	</div>
</section>
<!--OPINION