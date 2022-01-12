<?php
/*
 Template Name: Programación
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package am750
 */

get_header();
?>

	<h1 style="display: none"> Programación AM750</h1>
	
	<section class="container" id="programacion">

		<div class="columns">
			<div class="column is-9">

				<!--BANNER -->
				<?php include get_theme_file_path( '/inc/banner-top-inner.php' );?>
				<!--//BANNER-->

				<?php include get_theme_file_path( '/inc/en-vivo.php' );?>
				<h2 class="is-size-3 mt-6 mt-4-mobile">Actualidad</h2>
				<p class="mt-1 mb-5"> Escuchá todos los episodios y columnas completos de tus programas favoritos </p>
				<!-- CAROUSEL ACTUALIDAD -->
					<div class="swiper swiper-programacion">
					  <div class="swiper-wrapper">
						<!-- loop programas -->
						<?php $the_query = new WP_Query( array( 'post_type' => 'programas', 'modo' => 'actualidad', 'posts_per_page' => 8)); ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					    	<div class="swiper-slide">
					    		<a href="<?php the_permalink(); ?>">
					    			<figure class="image is-square-small ">
					    				<?php the_post_thumbnail('medium', array('class' => 'is-rounded')); ?>
					    			</figure>
									<h3 class="is-size-6 mt-2 is-fira has-text-centered has-text-weight-semibold"> <?php the_title(); ?> </h3> 
					    		</a>
					    	</div>

						<?php endwhile; ?>
						<!-- // -->
					  </div>
					  <!-- <div class="swiper-pagination"></div> -->
					  <div class="swiper-button-prev programacion-bt-prev"></div>
					  <div class="swiper-button-next programacion-bt-next"></div>
					</div>
				<!--fin carrousel modo actualidad-->


				<br> <br>
				<h2 class="is-size-3 mt-6 mt-0-mobile visibility"> Modo relax </h2>
				<p class="mb-5"> Escuchá todos los episodios y columnas completos de tus programas favoritos </p>

				<!-- CAROUSEL ACTUALIDAD -->
					<div class="swiper swiper-programacion">
					  <div class="swiper-wrapper">
						<!-- loop programas -->
						<?php 
							$the_query = new WP_Query( array( 'post_type' => 'programas',  'modo' => 'relax', 'posts_per_page' => 8));
						 ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					    	<div class="swiper-slide">

					    		<a href="<?php the_permalink(); ?>">
					    			<figure class="image is-square-small ">
					    				<?php the_post_thumbnail('medium', array('class' => 'is-rounded')); ?>
					    			</figure>
									<h3 class="is-size-6 mt-2 is-fira has-text-centered has-text-weight-semibold"> <?php the_title(); ?> </h3> 
					    		</a>
					    	</div>

						<?php endwhile; ?>
						<!-- // -->
					  </div>
					  <!-- <div class="swiper-pagination"></div> -->
					  <div class="swiper-button-prev programacion-bt-prev"></div>
					  <div class="swiper-button-next programacion-bt-next"></div>
					</div>
				<!--fin carrousel modo actualidad-->





				<div class="seccion-header mt-6 visibility">
					<div class="seccion-nombre">
						<h2 class="is-size-3"> Programación Semanal </h2>
					</div>
					<div class="has-text-right vermas"> </div>
				</div>


				<?php 
					$the_query = array( 'post_type' => 'calendarios', 'post_status' => 'publish', 'posts_per_page' => 90, 'meta_key' => 'hora_inicio',
						'orderby' => 'meta_value', 'order' => 'ASC' );
					$dias=array( "mon"=>"Lunes", "tue"=>"Martes", "wed"=>"Miércoles", "thu"=>"Jueves", "fri"=>"Viernes", "sat"=>"Sábado", "sun"=>"Domingo" );
					date_default_timezone_set('America/Argentina/Buenos_Aires');
					$now_day=strtolower(date("D"));
					$now_hour=strtolower(date("H:i"));
				?>


				<div class="tabs rounded programas_tabs visibility">
				  <ul>
				  <ul>
					<?php foreach ($dias as $key => $value) {
						if($now_day==$key){$active="is-active ";}else{$active="";}
						echo'<li class="'.$active.'" data-dia="'.$key.'"> <a>'.$value.'</a></li>';
					}?>
				  </ul>
				</div>

				<div class="tab-content programas_tabs_content visibility">
					<?php 
						$loop = new WP_Query( $the_query ); 
						foreach ($dias as $key => $value) {
							if($now_day==$key){$active="is-active";}else{$active="";}
							echo'<div class="tab-pane '.$active.'" id="'.$key.'">';

								echo'<div class="columns is-multiline">';

									while ( $loop->have_posts() ) : $loop->the_post(); 
										$post_id = get_the_ID();
										$programa_id = get_field( "programa", $post_id );
										$programa_dias = get_field( "dias_de_la_semana", $post_id );
										$horario_inicio = get_field( "hora_inicio", $post_id );
										$horario_fin = get_field( "hora_fin", $post_id );

										if( in_array($key,$programa_dias) ){
											echo '<div class="column is-4 programa">';
											if($now_day==$key && ($now_hour>=$horario_inicio && $now_hour<=$horario_fin) ){
													echo '<div class="aire">Aire</div>';
												}

												$link = get_the_permalink($programa_id);
													echo '<div class="descripcion">';
														$mypost = get_post( $programa_id );
														echo'<a href="'.$link.'">';
														echo apply_filters('the_content',$mypost->post_content);
														echo '</a>';
													echo '</div>';

												echo '<figure class="image is-16by9"> <a href="'.$link.'">';
													echo get_the_post_thumbnail( $programa_id, 'medium' );
												echo '</a> </figure>';

												echo '<span class="is-celeste has-text-weight-bold"><a href="'.$link.'">'.$horario_inicio.'</a></span>';
												echo '<h3 class="ml-2 is-inline"><a href="'.$link.'">'.get_the_title($programa_id).'</a></h3>';
										echo '</div>';
									}
									
								endwhile;
								wp_reset_postdata(); 

							echo'</div>';
							echo'</div>';
						}?>

					</div>


				<!--ÚLTIMOS RECORTES-->
<!-- 			<div class="seccion-header mt-6">
					<div class="seccion-nombre">
						<h2 class="is-size-3"> Últimos recortes </h2>
					</div>
				</div> -->
				<!--//ÚLTIMOS RECORTES-->

				<!--GRANDES ENTREVISTAS-->
<!-- 			<div class="seccion-header">
					<div class="seccion-nombre">
						<h2 class="is-size-3">Grandes entrevistas</h2>
					</div>

					<div class="has-text-right vermas">
						<span class="is-celeste has-text-weight-bold"> + Ver más </span> </div>
				</div> -->
				<!--//GRANDES ENTREVISTAS-->

				<!--CÓMO PODÉS ESCUCHARNOS-->
				<?php include get_theme_file_path( '/inc/como-escucharnos.php' );?>
				<!--//CÓMO PODÉS ESCUCHARNOS-->


			</div>

			<div class="column">
				<?php // include get_theme_file_path( '/inc/sidebar-750.php' );?>
				<?php get_sidebar();?>
			</div>

		</div>




	</section>




<!--SWIPER // FRONTPAGE // PAGE-PROGRAMACION // SINGLE-PROGRAMAS -->
<?php include get_theme_file_path( '/js/swiper.php' );?>
<!--SWIPER-->



<?php
get_footer();