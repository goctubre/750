<?php

//https://gist.github.com/badcrocodile/91e002f96c0d038792dd
//https://wordpress.stackexchange.com/questions/311558/meta-query-for-an-acf-checkbox-field-dont-works-correctly

	$date_now = date('H:i:s'); 
	$diadehoy = date('D');
	$the_query  = new WP_Query(
		array(
		'posts_per_page' => 1,
		'numberposts'	=> 1,
		'post_type'	=> 'calendarios',
		'meta_query'	=> array(
		 	'relation'	=> 'AND',
		 	array( 'key' => 'dias_de_la_semana', 'value' => $diadehoy, 'compare' => 'LIKE',),
		 	array( 'key' => 'hora_fin', 'value' => $date_now, 'compare' 	=> '>', ),
		 	array( 'key'     => 'hora_inicio', 'value'   => $date_now, 'compare' => '<=', ),
		 )
	));


	// global $wpdb;
	// echo $wpdb->last_query;
	// echo "<br>";
	// echo $wpdb->last_result;
	// echo "<br>";
	// echo $wpdb->last_error;


?>

<?php if( $the_query->have_posts() ): ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
		$post_id = get_the_ID();
		$programa_id = get_field( "programa", $post_id );
		$programa_dias = get_field( "dias_de_la_semana", $post_id );
		$horario_inicio = get_field( "hora_inicio", $post_id );
		$horario_fin = get_field( "hora_fin", $post_id );?>

		<div class="columns is-revert-mobile" id="en-vivo-bloque">

			<div class="column is-6 pb-0-mobile">
				<a href="<?php the_permalink($programa_id); ?>"> <?php echo get_the_post_thumbnail( $programa_id, 'medium', array( 'class' => 'is-bordeado' ) ); ?> </a> 
			</div>

			<div class="column has-text-centered-mobile">
				<div class="is-small has-text-weight-bold mr-4">Vivo</div>
				<div class="mb-5"> <?php echo $horario_inicio;?> a <?php echo $horario_fin;?> hs </div>

				<h2 class="is-size-4 mb-5 mb-4-mobile"> <?php echo get_the_title($programa_id)?> </h2>
				<!-- p class="mb-4"> <?php //echo the_content($programa_id); ?> </p> -->

				<div class="field is-grouped has-text-centered-mobile is-justify-content-center-mobile is-inline">
					<button class="button is-750 mb-2 play_btn" style="margin-left: -3px;"> 
						<span class="mr-1">Escuchar en vivo</span>
						<span class="icon">
							<!-- <img src="<?php bloginfo('template_url'); ?>/img/nav-play.svg" class="is-invert" alt="Escuchar radio" width="" height=""> -->
						</span>
					</button>
				</div>

				<div class="control is-inline">
					<a href="https://api.whatsapp.com/send?phone=5491139224098" target="_blank">
					<button class="button">
							<span class="mr-1">Mensaje</span>
							<span class="icon">
								<img src="<?php bloginfo('template_url'); ?>/img/t-wa.svg" alt="AM 750 -Mensajes" width="" height="">
							</span>
						</button>
					</a>
				</div>

			</div>

		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>