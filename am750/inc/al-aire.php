	<div id="alaire" class="mt-4 mb-4" >
		<h2 class="pt-3 pb-3 is-bg-violet is-size-4 is-fira">Al aire ahora</h2>

		<?php
			//$date_now = date('H:i:s'); 
			$date_now = date('H:i');
			$date_now = strtotime ( '-3 hour' , strtotime ( $date_now ) ) ;
			$date_now = date ( 'H:i' , $date_now );
			$diadehoy = strtolower(date('D'));
			$the_query  = new WP_Query(
				array(
				'posts_per_page' => 1,
				'numberposts'	=> 1,
				'post_type'	=> 'calendarios',
				'meta_query'	=> array(
				 	'relation'	=> 'AND',
				 	array( 'key' => 'dias_de_la_semana', 'value' => $diadehoy, 'compare' => 'LIKE', ),
				 	array( 'key' => 'hora_fin', 'value' => $date_now, 'compare' 	=> '>', ),
				 	array( 'key' => 'hora_inicio', 'value' => $date_now, 'compare' => '<=', ),
				 )
			));
		?>

		<?php if( $the_query->have_posts() ): ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
				$post_id = get_the_ID();
				$programa_id = get_field( "programa", $post_id );
				$programa_dias = get_field( "dias_de_la_semana", $post_id );
				$horario_inicio = get_field( "hora_inicio", $post_id );
				$horario_fin = get_field( "hora_fin", $post_id );?>

				<div class="p-3"> 
					<a href="<?php the_permalink($programa_id); ?>">

						<figure class="image is-16by9"> 
							<?php //echo get_the_post_thumbnail( $programa_id, 'thumbnail', array( 'class' => 'is-bordeado')); ?>
							<?php echo get_the_post_thumbnail( $programa_id,  array(300, 169), array( 'class' => 'is-bordeado')); ?>
						</figure>
					</a>
				</div>
				
				<p class="is-rojo mb-3"><?php echo $horario_inicio;?> a <?php echo $horario_fin;?> hs </p>
				
				<h3 class="is-size-4 is-fira pr-2 pl-2"> 
					<a href="<?php the_permalink($programa_id);?>"> <?php echo get_the_title($programa_id)?> </a> 
				</h3>

				<button class="button is-750 mb-2 play_btn mt-3"> 
					<span class="mr-1">Escuchar</span>
					<span class="icon"> </span>
				</button>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
		
	</div>