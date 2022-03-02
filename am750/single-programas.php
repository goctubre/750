<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package am750
 */

get_header();
?>

	<div class="container" id="noticia">

		<div class="columns">
			<div class="column is-9">
				<!--BANNER -->
				<?php include get_theme_file_path( '/inc/banner-top-inner.php' );?>
				<!--//BANNER-->

				<div class="columns">

					<div class="column is-11">
						
						<?php while ( have_posts() ) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<?php the_title( '<h1 class="is-size-2 is-size-4-mobile mt-4 mb-2 is-fira has-text-centered">', '</h1>' );?>

								
								<!-- <div class="ad-slot" id="mobile_nota_btf" data-adtype="box_mobile"> </div -->

								<div class="entry-content has-text-centered"> <?php the_content(); ?> </div>
									<?php 
									$dias_spa=array( "mon"=>"lunes", "tue"=>"martes", "wed"=>"miércoles", "thu"=>"jueves", "fri"=>"viernes", "sat"=>"sábado", "sun"=>"domingo",);
										$post_id = get_the_ID();
									    $calendario = get_posts(array( 
									    	'numberposts' => -1, 'post_type' => 'calendarios', 'meta_key' => 'programa', 'meta_value' => $post_id, 'post_status' => 'publish',
										));
										$post_id = $calendario[0]->ID;

										$programa_dias = get_field( "dias_de_la_semana", $post_id );
										$horario_inicio = get_field( "hora_inicio", $post_id );
										$horario_fin = get_field( "hora_fin", $post_id );

										$lun_a_vier = array("mon","tue","wed","thu","fri");
										if(count(array_intersect($lun_a_vier, $programa_dias)) == count($lun_a_vier)){
										    $dias="de lunes a viernes";
										} else {
											$dias=array();
											foreach ($programa_dias as $key => $value) { $dias[]=$dias_spa[$value]; }
											$dias=implode($dias,", ");
										}
									?>

								<div class="has-text-centered mb-4"> <b>Escuchalo  <?php echo $dias;?> de <?php echo $horario_inicio;?> a <?php echo $horario_fin;?> hs </b>  </div>

								<?php echo picture_image('full', 'medium', 'medium', 'medium', 'is-16by9', 'is-bordeado', 'eager', 'high');?>

								<?php 
								// $programa_id=get_the_ID();
								// $autores = get_field( "autores", $programa_id );
								// // $debug = var_export($autores, true);
								// 	$template='<div class="columns mt-5">';
								// 	foreach ($autores as $key => $value) {
								// 		$user_info = get_userdata($value);
								// 	 	$display_name = $user_info->display_name;
								// 	 	$autorimg = get_avatar( $value , '200', $default, $alt, array( 'class' => array( 'is-rounded' ) ) );
								// 	 	//$avatar = get_avatar($value);
								// 		$template.='<div class="column is-3 has-text-centered ">
								// 			<a href="'.esc_url( get_author_posts_url( $value ) ).'">
								// 				<figure class="image is-square-small" >'.$autorimg.'</figure>
								// 				<h5 class="is-size-6 mt-2 is-fira has-text-centered has-text-weight-semibold"> '.$display_name.' </h5> 
								// 			</a>
								// 		</div>';
								// 	}
								// 	$template.='</div>';
								// 	echo $template;
								?>

				    			<!--is-128x128 <figure class="image is-square-small ">
				    				<?php //the_post_thumbnail('medium', array('class' => 'is-rounded')); ?>
				    			</figure> -->


								<footer class="entry-footer">
									<?php am750_entry_footer(); ?>
								</footer><!-- .entry-footer -->

							</article><!-- #post-<?php the_ID(); ?> -->


				<?php 
					$programaactual = get_the_title($programa_id);
					$programaactuallow = strtolower (str_replace(" ", "-", $programaactual));
					function eliminar_acentos($cadena){
						$cadena = str_replace(array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'), $cadena);
				 		$cadena = str_replace(array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),	$cadena ); 
						$cadena = str_replace(array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),	$cadena );
				 		$cadena = str_replace(array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),	$cadena );
				 		$cadena = str_replace(array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),$cadena );
						$cadena = str_replace(array('Ñ', 'ñ', 'Ç', 'ç'),array('N', 'n', 'C', 'c'),$cadena);
						return $cadena; }
						$elprograma = eliminar_acentos($programaactuallow);
					?>


				<!--VOLVER A ESCUCHAR-->	
				<div class="seccion-header mt-6">
					<div class="seccion-nombre"> <h2 class="is-size-3"> Volvé a escuchar </h2> </div>
					<div class="has-text-right vermas">
						<a href="<?php echo get_site_url(); ?>/category/programacion/<?php echo $elprograma?>"> <span class="is-size-5 has-text-weight-bold"> Ver más </span> </a>
					</div>
				</div>

				<?php 
					$the_query = new WP_Query( array( 'category_name' => $elprograma, 'posts_per_page' => 3) );
					if ( $the_query->have_posts() ) : ?>
				 					 
				    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				    	<article class="mb-4 mb-5">
				    		<div class="columns">

								<div class="column is-3 pb-0-mobile">
									<figure class="image is-16by9">
									  <?php the_post_thumbnail('medium', array('class' => 'is-bordeado')); ?>
									</figure>
								</div>

								<div class="column is-7">

									<?php //echo categorias_programas();?>
									<!--  <p class="is-size-6 mt-2 mb-2 is-hidden-mobile"> -->
						    			<?php //echo cantidad_tiempo_entrada();?>	    		
					    			<!--</p> -->

									<?php
										the_title( '<h3 class="is-fira is-size-5"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
											if ( 'post' === get_post_type() ) : ?>
									<?php endif; ?>
								</div>

							</div>
						</article>

				    <?php endwhile; ?>
				    <!-- end of the loop -->

				    <?php wp_reset_postdata(); ?>
				 
				<?php else : ?>
				    <p><?php _e( 'Próximamente.' ); ?></p>
				<?php endif; ?>
				<? endwhile; // End of the loop. ?>
				<!--//VOLVER A ESCUCHAR-->
 

 				<!--DESCUBRI OTROS PROGRAMAS-->
				<div class="seccion-header mt-6">
					<div class="seccion-nombre"> <h2 class="is-size-3"> Descubrí otros programas </h2> </div>

					<div class="has-text-right vermas"> <a href="<?php echo get_site_url(); ?>/programacion/"> <span class="is-size-5 has-text-weight-bold"> Ver más </span> </a> </div>
				</div>

				<p class="mb-5"> Escuchá todos los episodios y columnas completos de tus programas favoritos </p>

				<!-- CAROUSEL -->
				<div class="tabs rounded swipe_tabs">
					  <ul>
						<li class="is-active" data-value="todos"> <a class="no-ajaxy"> Todos </a> </li>
						<li data-value="actualidad"> <a class="no-ajaxy"> Actualidad</a> </li>
						<li data-value="relax"> <a class="no-ajaxy"> Modo Relax</a> </li>					  	
					</ul>
				</div>
				
				<div class="swiper swiper-programacion filtromodo">
				  <div class="swiper-wrapper">
					<?php $the_query = new WP_Query( array( 'post_status' => 'publish', 'post_type' => 'programas', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => 38)); ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				    	<div class="swiper-slide <?php $terms = get_the_terms($post->ID, 'modo'); foreach ($terms as $term) {echo strtolower($term->name).' ';}?>"  data-filter="<?php $terms = get_the_terms($post->ID, 'modo'); foreach ($terms as $term) {echo strtolower($term->name);}?>">
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
				<!--//DESCUBRI OTROS-->


 				<!--LO MEJOR DE LA 750-->
				<div class="seccion-header mt-6">
					<div class="seccion-nombre"> <h2 class="is-size-3"> Lo mejor de la 750</h2> </div>
					<div class="has-text-right vermas"> <a href="<?php echo get_site_url(); ?>/category/relax/"> <span class="is-size-5 has-text-weight-bold"> Ver más </span> </a> </div>
				</div>

				<!-- CARRUOUSEL -->
					<div class="swiper swiper-programacion">
					  <div class="swiper-wrapper">
						<?php $the_query = new WP_Query( array( 'category_name' => 'relax', 'posts_per_page' => 8)); ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					    	<div class="swiper-slide <?php $terms = get_the_terms( $post->ID , 'modo' );  foreach ( $terms as $term ) { echo strtolower($term->name).' '; } ?>">
					    		<a href="<?php the_permalink(); ?>">
					    			<figure class="image is-16by9 mb-5"> <?php the_post_thumbnail('medium'); ?> </figure>
									<h3 class="is-size-6 mt-2 is-fira has-text-weight-semibold"> <?php the_title(); ?> </h3> 
					    		</a>
					    	</div>
						<?php endwhile; ?>
					  </div>
					  <div class="swiper-button-prev programacion-bt-prev"></div>
					  <div class="swiper-button-next programacion-bt-next"></div>
					</div> 
				<!--// carrousel-->
				<!--//LO MEJOR DE LA 750-->

				<!--CÓMO PODÉS ESCUCHARNOS-->
				<?php include get_theme_file_path( '/inc/como-escucharnos.php' );?>
				<!--//CÓMO PODÉS ESCUCHARNOS-->

				<!--BANNER -->
				<section id="banner-middle-nota" class="mb-3">
					<div class="container">
						<div class="columns">
							<div class="column has-text-centered">
								<div class="ad-slot" id="Notas_Leaderboard_BTC" data-adtype="leaderboard"></div>
							</div>
						</div>
					</div>
				</section>
				<!--//BANNER-->

				<hr class="dashed"> 


					</div>
				</div>
			</div>

			<div class="column is-3"> <?php get_sidebar();?> </div>
		</div>

	</div>



<!--SWIPER // FRONTPAGE // PAGE-PROGRAMACION // SINGLE-PROGRAMAS -->
<?php include get_theme_file_path( '/js/swiper.php' );?>
<!--SWIPER-->



<?php
//get_sidebar();
get_footer();