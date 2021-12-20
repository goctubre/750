			<!--RELAX-->
			<section id="relax" class="is-seccion" data-autorefresh="/inc/home-modo-relax-loop.php">
				<?php include get_theme_file_path( '/inc/home-modo-relax-loop.php' );?>			
			</section>
			<!--//RELAX-->


			<!--CULTURA Y ESPECTÁCULOS-->
			<section id="cultura" class="is-seccion mb-6-mobile">

				<div class="columns">

					<div class="column is-4">
						<!--BANNER-->
						<div class="ad-slot is-hidden-mobile" id='Home_MediumRectangle_Content_2' data-adtype='mediumrectangle'></div>
						<!--//BANNER-->
					</div>

					<div class="column">

						<div class="seccion-header">
							<div class="seccion-nombre">
								<a href="<?php echo get_site_url(); ?>/category/cultura/"> <h2 class="is-size-2" data-scroll data-scroll-direction="horizontal" data-scroll-speed="1"> 
									Cultura y<br>espectáculos  
								</h2> </a>
							</div>
							<div class="has-text-right vermas">
								<a href="<?php echo get_site_url(); ?>/category/cultura/"> <span class="is-celeste is-size-5 has-text-weight-bold"> Ver más </span> </a>
							</div>
						</div>


						<div class="columns" data-autorefresh="/inc/home-modo-relax-cultura-loop.php">
							<?php include get_theme_file_path( '/inc/home-modo-relax-cultura-loop.php' );?>
						</div>
					</div>

					<div class="column is-hidden-desktop has-text-centered mt-6 mt-0-mobile mb-5-mobile">
						<a href="<?php echo get_site_url(); ?>/category/cultura/"> 
							<button class="button is-750 etiquet has-text-weight-bold mr-0-mobile ml-0-mobile mb-4-mobile">Ver más</button> 
						</a>
					</div>
				</div>

				
			</section>
			<!--//CULTURA-->







			<!--OTROS PROGRAMAS-->
			<section id="descubri" class="is-seccion">

				<div class="seccion-header">
					<div class="seccion-nombre">
						<h2 class="is-size-2"> Descubrí otros programas </h2>
					</div>

					<div class="has-text-right vermas">
						<a href="<?php echo get_site_url(); ?>/programacion/"> <span class="is-celeste is-size-5 has-text-weight-bold"> 
						Ver más </span> </a>
					</div>
				</div>
	
				<p> Escuchá todos los episodios y columnas completos de tus programas favoritos</p>

				<!-- CAROUSEL -->
				<div class="tabs rounded swipe_tabs">
					  <ul>
						<li class="is-active"> <a class="no-ajaxy" id="todos">Todos</a> </li>
						<li> <a class="no-ajaxy" id="actualidad">Actualidad</a> </li>
						<li> <a class="no-ajaxy" id="relax">Modo Relax</a> </li>
					</ul>
				</div>

					<div class="swiper swiper-programacion filtromodo">
					  <div class="swiper-wrapper">
						<?php  $the_query = new WP_Query( array( 
							'post_status' => 'publish', 'post_type' => 'programas', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => 38)); 
						?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					    	<div class="swiper-slide <?php $terms = get_the_terms($post->ID , 'modo');  foreach ($terms as $term) { echo strtolower($term->name).' '; } ?>">
					    		<a href="<?php the_permalink(); ?>">

									<?php if ( has_post_thumbnail() ) : ?>
										<?php echo picture_image('medium', 'medium', 'medium', 'medium', 'is-square-small', 'is-rounded');?>
									<?php endif; ?>

									<h3 class="is-size-6 mt-2 is-fira has-text-centered has-text-weight-semibold">  <?php the_title(); ?> </h3> 
					    		</a>
					    	</div>

						<?php endwhile; ?>
					  </div>
					  <div class="swiper-button-prev programacion-bt-prev"></div> <!--parche-->
					  <div class="swiper-button-next programacion-bt-next"></div> <!--parche-->
					</div> 
				<!--// carrousel-->

			</section>
			<!--//OTROS PROGRAMAS-->



			<!--BANNER -->
			<section id="bannermiddle" class="mb-6 is-bg-grisclarito is-hidden-mobile">
				<div class="ad-slot" id="home_billboard_mtf" data-adtype="billboard"></div>
			</section>
			<!--//BANNER-->	

			<!--GRANDES ENTREVISTAS-->
			<section id="entrevistas" class="is-seccion mt-6-mobile mb-6-mobile">

				<div class="seccion-header">
					<div class="seccion-nombre">
						<a href="<?php echo get_site_url(); ?>/category/entrevistas/"> <h2 class="is-size-2">Grandes entrevistas</h2> </a>
					</div>

					<div class="has-text-right vermas">
						<a href="<?php echo get_site_url(); ?>/category/entrevistas/">  
							<span class="is-celeste is-size-5 has-text-weight-bold"> 
								Ver más 
							</span> 
						</a>
					</div>
				</div>

				<!--CAROUSEL ENTREVISTAS-->
				<div class="swiperbox swiperbox-seccion">
					<div class="swiper swiper-secciones">
					  <div class="swiper-wrapper">
						<!-- loop entrevistas -->
						<?php 
							$the_query = new WP_Query( array( 
								'post_status' => 'publish', 
								'category_name' => 'entrevistas', 
								'orderby' => 'menu_order', 
								'order' => 'ASC',
								'posts_per_page' => 8));
						 ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					    	<div class="swiper-slide">
					    		<a href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php echo picture_image('mediumlarge', 'mediumlarge', 'medium', 'medium', 'is-square', 'is-bordeado');?>
									<?php endif; ?>
					    		</a>

								<div class="mt-3"> <?php echo categorias_programas();?> </div>

								<a href="<?php the_permalink(); ?>">
									<h3 class="is-size-5 mt-2 is-fira has-text-weight-semibold"> <?php the_title(); ?> </h3> 
					    		</a>
					    	</div>
						<?php endwhile; ?>
						<!-- // ENTREVISTAS -->
					  </div>
					  
					  <div class="swiper-pagination is-hidden-desktop"></div>

					</div>

					<div class="swiper-button-prev seccion-bt-prev"></div>
					<div class="swiper-button-next seccion-bt-next"></div>
				</div> <!--box-->
				<!--fin carrousel ENTREVISTAS-->


				<div class="is-hidden-desktop has-text-centered mt-4 mb-5-mobile">
					<a href="<?php echo get_site_url(); ?>/category/entrevistas/"> 
						<button class="button is-750 etiquet has-text-weight-bold mr-0-mobile ml-0-mobile mt-4-mobile">Ver más</button> </a>
				</div>
			</section>
			<!--//GRANDES ENTREVISTAS-->





			<!--AUDIOCUENTOS-->
			<section id="audicuentos" class="is-seccion mb-6-mobile">
				<div class="seccion-header">
					<div class="seccion-nombre">
						<a href="<?php echo get_site_url(); ?>/category/audiocuentos/"> <h2 class="is-size-2"> Audiocuentos </h2> </a>
					</div>

					<div class="has-text-right vermas">
						<a href="<?php echo get_site_url(); ?>/category/audiocuentos/"> <span class="is-celeste is-size-5 has-text-weight-bold"> 
						Ver más </span> </a>
					</div>
				</div>

				<!--CAROUSEL AUDIOCUENTOS-->
				<div class="swiperbox swiperbox-seccion">
					<div class="swiper swiper-secciones">
					  <div class="swiper-wrapper">
						<!-- loop audiocuentos -->
						<?php 
						$the_query = new WP_Query( array( 
							'post_status' => 'publish', 
							'category_name' => 'audiocuentos', 
							'orderby' => 'menu_order', 'order' => 'ASC',
							'posts_per_page' => 8));
						 ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					    	<div class="swiper-slide">
					    		<a href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php echo picture_image('mediumlarge', 'mediumlarge', 'medium', 'medium', 'is-square', 'is-bordeado');?>
									<?php endif; ?>
					    		</a>

								<div class="mt-3"> <?php echo categorias_programas();?> </div>

								<a href="<?php the_permalink(); ?>">	
									<h3 class="is-size-5 mt-2 is-fira has-text-weight-semibold"> <?php the_title(); ?> </h3> 
					    		</a>
					    	</div>
						<?php endwhile; ?>
						<!-- // audiocuentos -->
					  </div>

					  <div class="swiper-pagination is-hidden-desktop"></div>


					</div>
					<!-- // audiocuentos -->
					<div class="swiper-button-prev seccion-bt-prev"></div>
					<div class="swiper-button-next seccion-bt-next"></div>
				</div> <!--box-->
				<!--fin carrousel AUDIOCUENTOS-->
				<div class="is-hidden-desktop has-text-centered mt-4  mb-5-mobile">
					<a href="<?php echo get_site_url(); ?>/category/audiocuentos/"> 
						<button class="button is-750 etiquet has-text-weight-bold mr-0-mobile ml-0-mobile mt-4-mobile">Ver más</button> 
					</a>
				</div>
			</section>
			<!--//AUDIOCUENTOS-->






			<!--DEPORTES-->
			<section id="deportes" class="is-seccion mb-6-mobile">

				<div class="seccion-header ml-34">
					<div class="seccion-nombre">
						<a href="<?php echo get_site_url(); ?>/category/deportes/"> <h2 class="is-size-2"> Deportes </h2> </a>
					</div>

					<div class="has-text-right vermas">
						<a href="<?php echo get_site_url(); ?>/category/deportes/"> <span class="is-celeste is-size-5 has-text-weight-bold"> 
						Ver más </span> </a>
					</div>
				</div>


				<div class="columns">

					<div class="column is-hidden-mobile">
						<!--BANNER-->
						<div class="ad-slot" id='Home_MediumRectangle_Content_3' data-adtype='mediumrectangle'></div>
						<!--//BANNER-->
					</div>

					<?php 
						$the_query = new WP_Query( array( 
							'post_status' => 'publish', 
							'category_name' => 'deportes', 
							'orderby' => 'menu_order', 'order' => 'ASC',
							'posts_per_page' => 2 ) );
					?>

					<?php if ( $the_query->have_posts() ) : ?>
					 					 
					    <!-- the loop -->
					    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					    	<div class="column">
					    		<article class="mb-4">
						    		<a href="<?php the_permalink(); ?>">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php echo picture_image('mediumlarge', 'mediumlarge', 'medium', 'medium', 'is-16by9', 'is-bordeado');?>
										<?php endif; ?>
						    		</a>

									<div class="mt-3"> <?php echo categorias_programas();?> </div>

									<a href="<?php the_permalink(); ?>">
										<h3 class="is-size-5 mt-2 is-fira has-text-weight-semibold"> <?php the_title(); ?> </h3> 
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
				</div>
				<div class="is-hidden-desktop has-text-centered mt-4  mb-5-mobile">
					<a href="<?php echo get_site_url(); ?>/category/deportes/"> 
						<button class="button is-750 etiquet has-text-weight-bold mr-0-mobile ml-0-mobile mt-4-mobile">Ver más</button> 
					</a>
				</div>
			</section>
			<!--//DEPORTES-->

			<!--LA VENGANZA SERÁ-->
			<section id="lavenganzasera" class="is-seccion">
				<div class="seccion-header">
					<div class="seccion-nombre">
						<a href="<?php echo get_site_url(); ?>/category/la-venganza-sera-terrible/"> <h2 class="is-size-2"> La venganza será terrible</h2> </a>
					</div>

					<div class="has-text-right vermas">
						<a href="<?php echo get_site_url(); ?>/category/la-venganza-sera-terrible/"> <span class="is-celeste is-size-5 has-text-weight-bold"> Ver más </span> </a>
					</div>
				</div>

				<div class="swiperbox swiperbox-seccion">
					<div class="swiper swiper-secciones">
					  <div class="swiper-wrapper">
						<!-- loop ENTREVISTAS -->
						<?php 
							$the_query = new WP_Query( array( 
								'post_status' => 'publish', 
								'category_name' => 'la-venganza-sera-terrible', 
								'orderby' => 'menu_order', 'order' => 'ASC',
								'posts_per_page' => 8));
						 ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					    	<div class="swiper-slide">

					    		<a href="<?php the_permalink(); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php echo picture_image('mediumlarge', 'mediumlarge', 'medium', 'medium', 'is-square', 'is-bordeado');?>
									<?php endif; ?>
					    		</a>

								<div class="mt-3"> <?php echo categorias_programas();?> </div>

								<a href="<?php the_permalink(); ?>">
									<h3 class="is-size-5 mt-2 is-fira has-text-weight-semibold"> <?php the_title(); ?> </h3> 
					    		</a>
					    	</div>

						<?php endwhile; ?>
						<!-- // ENTREVISTAS -->
					  </div>

					  <div class="swiper-pagination is-hidden-desktop"></div>

					</div>

				  	<div class="swiper-button-prev seccion-bt-prev"></div>
				  	<div class="swiper-button-next seccion-bt-next"></div>
				</div> <!--swiperbox-->

				<div class="is-hidden-desktop has-text-centered mt-4">
					<a href="<?php echo get_site_url(); ?>/category/la-venganza-sera-terrible/"> 
						<button class="button is-750 etiquet has-text-weight-bold mr-0-mobile ml-0-mobile mt-4-mobile">Ver más</button> 
					</a>
				</div>
			</section>
			<!--//LA VENGANZA SERÁ-->