<!--BANNERS  // sigue después de elecciones?-->
<section id="bannertop" class="is-bg-grisclarito is-hidden-mobile">
	<div style="margin:0 auto" class="ad-slot" id="home_billboard_atf" data-adtype="billboard"></div>
	<!-- <div class="ad-slot" id="mobile_home_top" data-adtype="mobile_top"></div> //300x50-320x50-360x56--> 
</section>
<!--//BANNERS-->

<!--BANNERS // original-->
<!-- 
<section id="bannertop" class="is-bg-grisclarito has-text-centered">
	<div style="margin:0 auto" class="ad-slot" id="mobile_home_top" data-adtype="mobile_top"></div>
</section>
 -->
<!--//BANNERS-->

<!-- CATASTROFE - ÚLTIMA NOTICIA-->
<?php $catastrofe =  get_option('catastrofe');  ?>
<?php $mapa_url = get_option( 'mapa_url' );?>


<div id="catastrofe" class="container mt-4 <?php $catastrofe =  get_option('catastrofe');  if( $catastrofe == 'una' || $catastrofe == 'cuatro' || $catastrofe == 'mapa' ) { echo "catastrofe";} ?>">

	<div class="columns">
		<div class="column">

			<?php if ($catastrofe != 'mapa') {
				$the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'catastrofe-uno', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1));

				//orderby' => 'menu_order', 'order' => 'ASC'
				if ( $the_query->have_posts() ) : ?>			 
				    <!-- the loop -->
				    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				    	<article id="lanotaprincipal" class="mb-4"> <!-- mj -->

				    		<div class="etiquetas">
								<button class="button is-750 etiquet has-text-weight-bold noclick">
									<?php echo get_post_meta( get_the_ID(),  'tema', true ); ?>
								</button>
								<?php echo categorias_programas();?>
							</div>
							
							<a href="<?php the_permalink(); ?>"> 
								<h2 class="is-size-2 is-size-3-mobile mt-3 mb-4 is-fira lh-110"> 
									<?php the_title(); ?>
								</h2>

								<p class="mb-4"> <?php echo get_post_meta( get_the_ID(),  'bajada', true ); ?> </p>

								<?php  if( $catastrofe != 'mapa' ) {
									if ( has_post_thumbnail() ) :
										echo picture_image('large', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');
									endif; 
									}
								?>
							</a>
				    	</article>
				    <?php endwhile; ?>
				    <!-- end of the loop -->
				    <?php wp_reset_postdata(); ?>
			<?php else : ?>
			    <p><?php //_e( 'Upsss.' ); ?></p>
			<?php endif; ?>
			<!--// ÚLTIMA NOTICIA CATÁSTROFE-->


			<!--CATÁSTROFE - ULTIMAS +3-->
			<?php if( $catastrofe == 'cuatro' ) {  $the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'catastrofe', 'orderby' => 'date',  'order' => 'DESC', 'posts_per_page' => 3, 
				//'offset' => 1 
				) );
				// 'orderby' => 'menu_order' 'order' => 'ASC'
			?>

			

				<div class="columns mt-1">
					<?php if ( $the_query->have_posts() ) : ?>
					 					 
					    <!-- the loop -->
					    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<article class="mb-4 column">

								<?php if ( has_post_thumbnail() ) : ?>
									<?php echo picture_image('large', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>
								<?php endif; ?>

								<div class="my-3"> <?php echo categorias_programas();?> </div>

								<a href="<?php the_permalink(); ?>">
									<h3 class="is-size-5 has-text-weight-semibold is-fira">
										<?php the_title(); ?>
									</h3>
								</a>
							</article>

					    <?php endwhile; ?>
					    <!-- end of the loop -->

					    <?php wp_reset_postdata(); ?>

					<?php else : ?>
					    <p><?php //_e( 'Upsss.' ); ?></p>
					<?php endif; ?>
				</div> <!--columns-->

				<?php }?>
			<!--//CATASTROFE - ULTIMAS +3-->
		</div> <!--column-->
	</div> <!--columns-->
<?php }?>

</div>