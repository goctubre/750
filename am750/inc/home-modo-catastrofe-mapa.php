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

<!--CATÁSTROFE MAPA-->
<div id="catastrofe" class="container mt-4 catastrofe">

	<?php include get_theme_file_path( '-paso-2021/mapa-elecciones.php' );	?>

	<!--TRES NOTAS MÁS-->
	<?php
		 $the_query = new WP_Query( array( 'post_status' => 'publish', 'category_name' => 'catastrofe', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => 3 ) ); ?>

		<div class="columns mt-1">
			<?php if ( $the_query->have_posts() ) : ?>		 
			    <!-- the loop -->
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<article class="mb-6 column">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php echo picture_image('medium', 'mediumlarge', 'mediumlarge', 'small', 'is-16by9', 'is-bordeado');?>
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
		</div>
	<!--//TRES NOTAS MÁS-->

</div>
<!--//CATÁSTROFE MAPA-->